<?php if (!defined('BASEPATH')) {
	exit('No direct script access allowed');
}

/**
 * User: Chandlerxue
 * Date: 14-3-28
 * Time: 下午12:14
 */

class Main extends Base_Controller {

	public function index() {
		$this->render('frame.html');
	}

	public function head() {

		$this->render('head.html');
	}

	public function left() {
		$this->load->model('sys_module_model');

		$this->put("menu", $this->sys_module_model->getMenu('3sbsuljdlov8'));

		$this->render('left.html');
	}

	public function welcome() {
		$this->render('welcome.html');
	}

	public function error403() {
		$this->render('error_403.html');
	}

	public function login() {
		if (IS_POST) {

			$_username = $this->input->post("username");
			$_password = $this->input->post("password");

			$this->load->model("sys_user_model");

			//print_r($_username);exit();
			$_admin = $this->sys_user_model->getEntity(array("username" => $_username));

			if (!empty($_admin)) {

				if (get_password($_password, $_admin['id']) == $_admin['password']) {
					if ($_admin['flag_valid'] == 1) {
						if ($_admin['flag_valid'] == 1) {
							$this->session->set_userdata(array("admin" => $_admin));

							header("Location: /" . ADMIN_THEME . "/main");
							return;
						} else {
							$this->put("result", "账号已停用");
						}
					} else {
						$this->put("result", "账号已经停用");
					}

				} else {
					$this->put("result", "账号或密码错误");

				}
			} else {
				$this->put("result", "账号或密码错误");

			}
		}
		$this->render('login.html');
	}

	public function logout() {

		$_user = $this->session->userdata['admin'];

		if (!empty($_user)) {

			$this->session->unset_userdata('admin');
			$this->session->sess_destroy();
			$this->session->set_userdata(array("admin" => ''));
		}

		header("Location: /" . ADMIN_THEME . "/main/login");

	}

	public function nopermission() {
		$this->put("msgbox", theme_msgbox('没有权限', 'alert alert-warning'));
		$this->render('nopermission.html');
	}

}
