<?php
/**
 * User: Chandlerxue
 * Date: 14-3-26
 * Time: 上午11:10
 */

class Sys_module_model extends MY_Model {

	public function __construct() {
		parent::__construct();
		$this->_table = 'sys_module';
	}

	public function getMenu($group_id) {

		$_modules = $this->db->select('*')
			->from($this->_table)
			->where('module_type', 'module')->order_by('module_order', 'asc')
			->get()->result_array();

		for ($i = 0; $i < count($_modules); $i++) {

			$_modules[$i]['page'] = $this->db->select(array($this->_table . '.*'))
				->from($this->_table)
				->join('sys_group_permission', 'sys_group_permission.sys_module_id = ' . $this->_table . '.id and user_group_id=\'' . $group_id . '\'', 'inner')
				->where(array('module_hidden' => 0, 'module_type' => 'page', 'module_parent_id' => $_modules[$i]['id']))
				->order_by('module_order', 'asc')
				->get()->result_array();
		}

		return $_modules;
	}

	public function getPermission($group_id) {

		$_modules = $this->db->select('*')
			->from($this->_table)
			->where('module_type', 'module')->order_by('module_order', 'asc')
			->get()->result_array();

		for ($i = 0; $i < count($_modules); $i++) {

			$page = $this->db->select(array($this->_table . '.*', 'ifnull(sys_group_permission.id,0) p'))
				->from($this->_table)
				->join('sys_group_permission', 'sys_group_permission.sys_module_id = ' . $this->_table . '.id and user_group_id=\'' . $group_id . '\'', 'left')
				->where(array('module_type' => 'page', 'module_parent_id' => $_modules[$i]['id']))
				->order_by('module_order', 'asc')
				->get()->result_array();
			for ($j = 0; $j < count($page); $j++) {

				$action = $this->db->select(array($this->_table . '.*', 'ifnull(sys_group_permission.id,0) p'))
					->from($this->_table)
					->join('sys_group_permission', 'sys_group_permission.sys_module_id = ' . $this->_table . '.id and user_group_id=\'' . $group_id . '\'', 'left')
					->where(array('module_type' => 'action', 'module_parent_id' => $page[$j]['id']))
					->order_by('module_order', 'asc')
					->get()->result_array();

				$page[$j]['action'] = $action;

			}

			$_modules[$i]['page'] = $page;
		}

		return $_modules;
	}

	public function getPermissionAll($group_id = '') {
		if ($group_id == '') {return '';}

		$sql = "
			select
				b.id,
				b.module_icon,
				b.module_name,
				b.module_parent_id,
				b.module_type,
				b.module_resource,
				a.sys_module_id


			from  sys_group_permission as a
			inner join sys_module as b on b.id = a.sys_module_id
			where a.user_group_id = '{$group_id}'
		";

		$_result = $this->db->query($sql);
		$_result = $this->getPermission_data($_result);
		$_result = $this->getPermission_data_uri($_result);

		if (empty($_result)) {
			debug_err_msg(__FUNCTION__, '权限uri数据不存在');
			return '';
		} else {

			return $_result;
		}
	}

	/**
	 * [getPermissionAll_data 权限数据存在，返回数组；如果没有数据，返回空]
	 * @param  [type] $_result [description]
	 * @return [type]          [description]
	 */
	private function getPermission_data($_result = array()) {
		if ($this->db->affected_rows()) {
			$_result = $_result->result_array();
			return $_result;

		} else {
			debug_err_msg(__FUNCTION__, '权限数据不存在');
			return '';
		}

	}

	/**
	 * [getPermission_data_uri 取得已授权限uri数组；数据存在，返回数组；否则，返回空值]
	 * @param  array  $_result [description]
	 * @return [type]          [description]
	 */
	private function getPermission_data_uri($_result = array()) {
		if (empty($_result)) {
			ebug_err_msg(__FUNCTION__, '权限数据不存在');
			return '';
		}

		$_data = array();

		foreach ($_result as $key => $value) {
			# code...
			if ($value['module_resource'] != '') {
				$_data[] = $value['module_resource'];
			}
		}
		return $_data;
	}

}