<?php

/** * * 后台权限拦截钩子 * @link http://www.php-chongqing.com * @author bing.peng
所有函数如果返回值为1,则为失败
 *  */
class Auth {
	private $CI;
	public function __construct() {
		$this->CI = &get_instance();
	}
	/**     * 权限认证     */
	public function runauth() {

		if ($this->runauth_situation_1() == '') {
			return '';
		}

		if ($this->runauth_situation_2() == '') {
			return '';
		}

		if ($this->runauth_situation_3() == '') {
			return '';
		}

	}

	/**
	 * [runauth_situation_1 [登录后台][第一种情况] 路由在  ADMIN_THEME  , 返回值 空或1]
	 * @return [type] [description]
	 */
	public function runauth_situation_1() {
		$this->CI->load->helper('url');
		if (preg_match("/" . ADMIN_THEME . "\/main\/login.*/i", uri_string())) {
			return '';
		} else {
			return 1;
		}

	}

	/**
	 * [runauth_situation_2 [登录后台][第二种情况] 路由在   \/main\/login 且session不存在或为空值；返回值 空或1]
	 * @return [type] [description]
	 */
	public function runauth_situation_2() {
		$this->CI->load->helper('url');
		if (preg_match("/" . ADMIN_THEME . ".*/i", uri_string())) {

			// 需要进行权限检查的URL
			$this->CI->load->library('session');

			if (!$this->CI->session->userdata('admin')) {

				header("Location: /" . ADMIN_THEME . "/main/login");exit();
			} else {
				return 1;
			}
		} else {
			return 1;
		}
	}

	/**
	 * [runauth_situation_3 [登录后台][第三种情况] 路由在   \/main\/login 且session已存在或用户已登录，验证哪个模块已授权，允许用户进行访问]
	 * @return [type] [description]
	 */
	public function runauth_situation_3() {
		/***********************************
		 * 第一步 获取用户组的权限模块列表；成功，返回数组；失败，返回1
		 *
		 ************************************/
		$_userdata   = $this->CI->session->userdata('admin');
		$_permission = $this->getgrantmodel($_userdata['sys_group_id']);
		unset($_userdata);

		$this->CI->load->helper('url');
		// echo uri_string();
		// exit();
		if (in_array('/' . uri_string(), $_permission)) {

		} else {
			/*没有权限*/
			header("Location: /" . ADMIN_THEME . "/main/nopermission");exit();
		}

	}

	public function getgrantmodel($sys_group_id = '') {
		if ($sys_group_id == '') {
			return 1;
		}

		$this->CI->load->model('sys_module_model');

		$_permission = $this->CI->sys_module_model->getPermissionAll($sys_group_id);

		/*系统公开权限*/
		$_permission[] = '/' . ADMIN_THEME . '/main/logout';
		$_permission[] = '/' . ADMIN_THEME . '/main/nopermission';

		if (!empty($_permission)) {
			$_permission[] = '/' . ADMIN_THEME . '/main';
			$_permission[] = '/' . ADMIN_THEME . '/main/left';
			$_permission[] = '/' . ADMIN_THEME . '/main/welcome';

		}

		//cprint($_permission, 'debug');
		if (empty($_permission)) {
			return '';
		} else {
			return $_permission;
		}

	}

	public function filter() {

	}

}