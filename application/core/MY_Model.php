<?php if (!defined('BASEPATH')) {
	exit('No direct script access allowed');
}

/**
 * User: Chandlerxue
 * Date: 14-3-28
 * Time: 下午12:14
 */

class MY_Model extends CI_Model {

	public $_table;

	public function __construct() {
		$this->load->database();
	}

	/**
	 * 分页获取列表
	 * @param int $offset
	 * @param array $where
	 * @param array $like
	 * @param array $order_by
	 * @param array $cols
	 * @param array $join
	 * @param int $page_size
	 * @return mixed
	 */
	public function getListByPage($offset = 0, $where = array(), $like = array(), $order_by = array(), $cols = array('*'), $join = array(), $page_size = PAGE_SIZE) {
		//var_dump($like);

		$this->db->from($this->_table);
		foreach ($join as $_item) {

			$this->db->join($_item['table'], $_item['on'], $_item['d']);

		}
		$this->db->where($where);
		if (isset($like)) {

			$this->db->like($like);
		}
		$pager['total'] = $this->db->count_all_results();

		$this->db->select($cols)->from($this->_table);
		foreach ($join as $_item) {

			$this->db->join($_item['table'], $_item['on'], $_item['d']);

		}
		$this->db->where($where);
		if (isset($like)) {
			$this->db->like($like);
		}

		foreach ($order_by as $_col => $_value) {
			$this->db->order_by($_col, $_value);
		}
		$this->db->limit($page_size, !isset($offset) ? 0 : $offset);
		$pager['list'] = $this->db->get()->result_array();

		return $pager;
	}

	public function getCount($where = array(), $like = array()) {
		$this->db->from($this->_table);
		$this->db->where($where);
		if (isset($like)) {

			$this->db->like($like);
		}
		return $this->db->count_all_results();
	}

	/**
	 * 获取列表
	 * @param array $where
	 * @param array $cols
	 * @return mixed
	 */
	public function getList($where = array(), $cols = array('*'), $order_by = array()) {
		$this->db
			->select($cols)->from($this->_table);
		foreach ($order_by as $_col => $_value) {
			$this->db->order_by($_col, $_value);
		}
		return $this->db
			->where($where)->get()->result_array();
	}

	/**
	 * 获取一条
	 * @param $id
	 * @param array $cols
	 * @param string $pk
	 * @return mixed
	 */
	public function getEntityByID($id, $cols = array('*'), $pk = 'id') {
		return $this->getEntity(array($pk => $id), $cols);
	}

	public function getEntity($where = array(), $cols = array('*')) {

		return $this->db
			->select($cols)->from($this->_table)
			->where($where)->get()->row_array();

	}

	public function addEntity($data) {
		return $this->db->insert($this->_table, $data);
	}

	public function deleteEntityByID($id, $pk = 'id') {
		return $this->deleteEntity(array($pk => $id));
	}

	public function deleteEntity($where) {
		if (count($where) == 0) {
			return false;
		}
		return $this->db->delete($this->_table, $where);
	}

	public function updateEntityByID($data, $id, $pk = 'id') {
		return $this->updateEntity($data, array($pk => $id));
	}

	public function updateEntity($data, $where) {

		if (count($where) == 0) {
			return false;
		}

		$this->db->where($where);
		return $this->db->update($this->_table, $data);
	}

	public function getMaxColValue($col_name, $where = array()) {
		$_row = $this->db->select_max($col_name)->where($where)->get($this->_table)->row_array();
		if (isset($_row)) {
			return $_row[$col_name];
		}
		return 0;
	}

	/**记录日志
	 * @param $_user
	 * @param $_event
	 * @param $_ip
	 * @param int $_log_type
	 * @return mixed
	 */
//    public function log($_user,$_event,$_ip,$_log_type=0){
	//        $data = array('log_content'=>$_event,'user_id'=>$_user,'log_ip'=>$_ip);
	//        $data['log_date'] = date('Y-m-d H:i:s');
	//        $data['log_type'] = $_log_type;
	//        return $this->db->insert("site_log",$data);
	//    }

}