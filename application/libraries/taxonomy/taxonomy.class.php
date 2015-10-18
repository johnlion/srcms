<?php
/**
 *
 *
 *
 *
 *[example]
 *	$result=$db->query(……);//这里查询得到结果集，注意结果集为数组
 *	$tree= new Tree($result);
 *	$arr=$tree->leaf(0);
 *	$nav=$tree->navi(15);
 *	$smarty->assign(‘arr’,$arr);
 *	$smarty->assign(‘nav’,$nav);
 *	$smarty->display(‘test.html’);
 */
class Taxonomy {
	private $result;
	private $tmp;
	private $arr;
	private $already = array();

	public $CI;
	public $dbprefix;

	/**
	 * 构造函数
	 *
	 * @param array $result 树型数据表结果集
	 * @param array $fields 树型数据表字段，array(分类id,父id)
	 * @param integer $root 顶级分类的父id
	 */
	public function __construct($result = array(), $fields = array('tid', 'parentid'), $root = 0) {

		$this->CI = &get_instance();
		$this->CI->load->database();
		//$this->CI->load->library('CiToPinyin');
		$this->CI->load->library('CiPage');
		$this->CI->load->helper('Common');
		$this->dbprefix = $this->CI->db->dbprefix;
		$this->fields   = $fields;
		$this->root     = $root;
		if (count($this->select())) {
			$this->result = $this->select();
		} else {

			return array();
		}

		$this->handler();
	}

	/**
	 * 树型数据表结果集处理
	 */
	private function handler() {

		foreach ($this->result as $node) {
			$tmp[$node[$this->fields[1]]][] = $node;
		}
		krsort($tmp);
		for ($i = count($tmp); $i > 0; $i--) {
			foreach ($tmp as $k => $v) {
				if (!in_array($k, $this->already)) {
					if (!$this->tmp) {
						$this->tmp       = array($k, $v);
						$this->already[] = $k;
						continue;
					} else {
						foreach ($v as $key => $value) {
							if ($value[$this->fields[0]] == $this->tmp[0]) {
								$tmp[$k][$key]['child'] = $this->tmp[1];
								$this->tmp              = array($k, $tmp[$k]);
							}
						}
					}
				}
			}
			$this->tmp = null;
		}
		$this->tmp = $tmp;
	}
	/**
	 * 反向递归
	 */
	private function recur_n($arr, $id) {
		foreach ($arr as $v) {
			if ($v[$this->fields[0]] == $id) {
				$this->arr[] = $v;
				if ($v[$this->fields[1]] != $this->root) {
					$this->recur_n($arr, $v[$this->fields[1]]);
				}

			}
		}
	}
	/**
	 * 正向递归
	 */
	private function recur_p($arr) {
		foreach ($arr as $v) {
			$this->arr[] = $v[$this->fields[0]];
			if ($v['child']) {
				$this->recur_p($v['child']);
			}

		}
	}
	/**
	 * 菜单 多维数组
	 *
	 * @param integer $id 分类id
	 * @return array 返回分支，默认返回整个树
	 */
	public function leaf($id = null) {

		$id = ($id == null) ? $this->root : $id;
		if (isset($this->tmp[$id])) {
			return $this->tmp[$id];
		} else {
			return '';
		}

	}
	/**
	 * 导航 一维数组
	 *
	 * @param integer $id 分类id
	 * @return array 返回单线分类直到顶级分类
	 */
	public function navi($id) {
		$this->arr = null;
		$this->recur_n($this->result, $id);
		krsort($this->arr);
		return $this->arr;
	}
	/**
	 * 散落 一维数组
	 *
	 * @param integer $id 分类id
	 * @return array 返回leaf下所有分类id
	 */
	public function leafid($id) {
		$this->arr   = null;
		$this->arr[] = $id;
		$this->recur_p($this->leaf($id));
		return $this->arr;
	}

	/**
	 * [install description]
	 * @param  array  $param [description]
	 * @return [type]        [description]
	 */
	public function install($param = array()) {

	}

	/**
	 * [uninstall description]
	 * @param  array  $param [description]
	 * @return [type]        [description]
	 */
	public function uninstall($param = array()) {

	}

	function insert($param = array()) {
		$data = array(
			'data'    => array(),
			'status'  => 0,
			'message' => t('add_failed'),
		);

		if (!empty($param)) {
			$param['data']['addtime'] = time();
			$this->CI->db->insert('taxonomy', $param['data']);

			if ($this->CI->db->last_query()) {
				$data = array(
					'data'    => array(),
					'status'  => 1,
					'message' => t('add_success'),
				);
			}
		}
		return $data;

	}

	function update($param = array()) {
		$data = array(
			'data'    => array(),
			'status'  => 0,
			'message' => t('update_failed'),
		);

		if (!empty($param)) {
			$this->CI->db->where(array('tid' => $param['data']['tid']));
			unset($param['data']['tid']);
			$this->CI->db->update('taxonomy', $param['data']);

			if ($this->CI->db->last_query()) {
				$data = array(
					'data'    => array(),
					'status'  => 1,
					'message' => t('update_success'),
				);
			}
		}
		return $data;
	}

	/**
	 * [update_stauts 更新字段  ishidden ]
	 * @param  array  $param [description]
	 * @return [type]        [description]
	 */
	function update_stauts($param = array()) {
		$data = array(
			'data'    => array(),
			'status'  => 0,
			'message' => t('update_failed'),
		);

		//debug($this->CI->db->last_query(), DEBUGPATH, 'news datalist');

		if (!empty($param)) {
			$query = $this->CI->db->query("select ishide from taxonomy where tid={$param['data']['tid']}  limit 1");

			if ($query->num_rows() > 0) {
				$row = $query->row();

				switch ($row->ishide) {
				case 1:
					$param['data']['ishide'] = 0;
					break;
				case 0:
					$param['data']['ishide'] = 1;
				}

			} else {
				$data = array(
					'data'    => array(),
					'status'  => 0,
					'message' => t('update_failed'),
				);
			}

			/******************************************
			 * 通过tid,取得一组分类信息数据
			 ******************************************/
			$_tid_arr = $this->update_stauts_sql($param['data']['tid']);

			/******************************************
			 * 返回分类更新联动sql
			 ******************************************/
			$sub_sql = $this->update_status_sql_assets($_tid_arr, $param['data']['ishide']);

			/******************************************
			 * 直行sql
			 ******************************************/
			$this->CI->db->where(array('tid' => $param['data']['tid']));
			unset($param['data']['tid']);

			$this->CI->db->trans_start();
			$this->CI->db->update('taxonomy', $param['data']);

			if ($sub_sql != '') {
				$this->CI->db->query($sub_sql);
			}
			$this->CI->db->trans_complete();

			if ($this->CI->db->trans_status() === FALSE) {
				// 生成一条错误信息... 或者使用 log_message() 函数来记录你的错误信息

				$data = array(
					'data'    => array(),
					'status'  => 0,
					'message' => t('update_failed'),
				);

			} else {
				$data = array(
					'data'    => array(),
					'status'  => 1,
					'message' => t('update_success'),
				);
			}
		}
		return $data;
	}

	/**
	 * [update_stauts_sql 通过tid,取得一组分类信息数据；如果不存在，返回空数组]
	 * @param  integer $tid [description]
	 * @return [type]       [description]
	 */
	function update_stauts_sql($tid = 0) {
		/******************************************
		 * 通过tid,取得一组分类信息数据
		 ******************************************/
		$data = $this->tree($tid);

		if (empty($data)) {

			return array();
		}
		/******************************************
		 * 通过分类信息数据,取得一组分类信息数据
		 ******************************************/
		$data = $this->update_tid_assets($data);
		return $data;
	}

	/**
	 * [update_status_sql_assets 返回分类更新联动sql,如果不存在，返回空字符串]
	 * @param  [type] $data   [description]
	 * @param  [type] $ishide [description]
	 * @return [type]         [description]
	 */
	function update_status_sql_assets($data, $ishide) {

		if (empty($data)) {
			return '';
		}
		$in   = substr($data, 0, strlen($data) - 1);
		$data = explode(',', $in);

		$_sql = " UPDATE taxonomy ";
		$_sql .= " SET ishide = CASE tid";

		foreach ($data as $key => $value) {
			$_sql .= " WHEN {$value} THEN {$ishide} \n";

			if (isset($value['children'])) {
				$_sql = $this->sort_step_cicycle($value['children'], $_sql, $value);
			}

			# code...
			//cprint($value, "Cicycle {$key}");
		}

		$_sql .= " END ";
		$_sql .= "WHERE tid IN ( {$in} )";
		return $_sql;
	}

	/**
	 * [update_tid_assets 通过遍历返回一组多级分类的tid的数据结果集,失败返回一个空数组]
	 * @param  [type] $data [description]
	 * @return [type]       [description]
	 */
	function update_tid_assets($data) {

		if (trim(count($data)) > 0) {
			foreach ($data as $key => $value) {
				if (!isset($_data)) {
					$_data = $value['tid'] . ',';
				} else {
					$_data .= $value['tid'] . ',';
				}

				if (isset($value['child'])) {
					$_data .= $this->update_tid_assets($value['child']);
				}
			}
		} else {
			$_data = array();
		}
		return $_data;
	}

	function delete($param = array()) {
		$data = array(
			'data'    => array(),
			'status'  => 0,
			'message' => t('delete_failed'),
		);

		$this->CI->db->trans_start();

		if ($param['data']['tid'] > 20) {
			$this->CI->db->where(array('parentid' => $param['data']['tid']));
			$this->CI->db->delete('taxonomy');
		}
		$this->CI->db->where('tid', $param['data']['tid']);
		$this->CI->db->delete('taxonomy');
		$this->CI->db->trans_complete();

		if ($this->CI->db->trans_status() === True) {
			$data = array(
				'data'    => array(),
				'status'  => 1,
				'message' => t('delete_success'),
			);
			// generate an error... or use the log_message() function to log your error
		}

		return $data;
	}

	/**
	 * [select description]
	 * @param  array  $param [description]
	 *                $param['tid']  分类tid
	 *                $param['tidname'] 分类名称
	 *
	 * @return [type]        [description]
	 */
	function select($param = array()) {
		/* ----------------------------------------------
		 * 返回数据集 $data 初始化
		 * $param['data']记录总录
		 * $param['status']处理状态 0失败或未处理，1成功
		 * $param['message']处理消息
		 * ----------------------------------------------
		 */
		$data = array(
			'data'    => array(),
			'status'  => 0,
			'message' => t('search_failed'),
		);

		$query = $this->CI->db->get('taxonomy');
		if ($this->CI->db->affected_rows()) {
			$data = array(
				'data'    => $query->result_array(),
				'status'  => 1,
				'message' => t('search_success'),
			);
		}

		return $data['data'];

	}

	function create($param = array()) {

	}

	function getlist($limit = 10, $offset = 0) {

	}

	/**
	 * [getone 取得一条记录]
	 * @param  array  $param [description]
	 *         $param['tid'];分类tid
	 * @return [type]        [description]
	 */
	function getone($param = array()) {
		$data = array(
			'data'    => array(),
			'status'  => 0,
			'message' => t('search_failed'),
		);
		extract($param);
		$tid = isset($data['tid']) ? $data['tid'] : '';

		$this->CI->db->where(array('tid' => $tid));

		$query = $this->CI->db->get('taxonomy');

		if ($this->CI->db->affected_rows()) {
			$_data = $query->result_array();

			$data = array(
				'data'    => $_data[0],
				'status'  => 1,
				'message' => t('search_success'),
			);
		}

		return $data;
	}

	/**
	 * [tree 选定分类]
	 * @param  integer $tid [description]
	 * @return [type]       [description]
	 *
	 *
	 * [使用方法]
	 * $this->load->library('CiTaxonomy');
	 * $this->citaxonomy->tree('tid'); #访问tid
	 */
	function tree($tid = 0) {

		$datalist = $this->leaf($tid);
		return $datalist;

	}

	/**
	 * [sort 排序批量处理]
	 * @param  [type] $data [description]
	 * @return [type]       [description]
	 */
	function sort($data) {

		/**************************************************************
		 * step1
		 * sql 数组初始化
		 *
		 **************************************************************/
		$_sql['_data'] = isset($_sql['_data']) ? $_sql['_data'] : "
		UPDATE taxonomy
		SET parentid = CASE tid \n";
		$_sql['_end'] = isset($_sql['_end']) ? $_sql['_end'] : '';

		/**************************************************************
		 * step2
		 * 循环生成 sql 更新语句数组
		 *
		 **************************************************************/
		$_sql = $this->sort_step_cicycle($data, $_sql);

		/**************************************************************
		 * step3
		 * 拼装 sql 语句
		 *
		 **************************************************************/
		$_sql = $this->sort_step_assets($_sql);

		/**************************************************************
		 * step4
		 * 数据更新执行 sql 语句
		 *
		 **************************************************************/

		$this->CI->db->query($_sql);

		/**************************************************************
		 * step4
		 * 返回数据查询状态
		 *
		 **************************************************************/

		if ($this->CI->db->affected_rows()) {
			$data = array(
				'data'    => '',
				'status'  => 1,
				'message' => t('update_success'),
			);
		} else {
			$data = array(
				'data'    => '',
				'status'  => 0,
				'message' => t('update_failed'),
			);
		}

		return $data;

	}

	function sort_step_cicycle($data, $_sql, $parentid = 0) {
		/**************************************************************
		 * step2
		 * 循环生成 _sql 更新语句
		 *
		 **************************************************************/
		foreach ($data as $key => $value) {
			$_sql['_data'] .= " WHEN {$value['id']} THEN {$parentid} \n";
			$_sql['_end'] .= empty($_sql['_end']) ? "{$value['id']}" : ",{$value['id']}";

			if (isset($value['children'])) {
				$_sql = $this->sort_step_cicycle($value['children'], $_sql, $value['id']);
			}

			# code...
			//cprint($value, "Cicycle {$key}");
		}

		return $_sql;

	}

	/**
	 * [sort_step_assets 并装sql,并返回sql]
	 * @param  [type] $_sql [description]
	 * @return [type]       [description]
	 */
	function sort_step_assets($_sql) {
		if (!empty($_sql['_end'])) {
			$_sql = " {$_sql['_data']} END WHERE  tid in ( {$_sql['_end']} )";
		} else {
			$_sql = '';
		}
		return $_sql;
	}

}