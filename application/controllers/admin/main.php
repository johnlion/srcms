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
			$this->load->model("sys_module_model");
			$_admin = $this->sys_module_model->getEntity(array("username" => $_username));
			if (!empty($_admin)) {
				if (get_password($_password, $_admin['id']) == $_admin['password']) {
					if ($_admin['flag_valid'] == 1) {
						if ($_admin['flag_valid'] == 1) {
							$this->session->set_userdata(array("admin" => $_admin));
							header("Location: /");
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
		$this->display('login.html');
	}

	public function logout() {
		$_user = $this->session->userdata['admin'];
		if (!empty($_user)) {

			$this->session->unset_userdata('admin');
		}

		header("Location: /admin/main/login");

	}

}
