<?php if (!defined('BASEPATH')) {
	exit('No direct script access allowed');
}

/**
 * User: Chandlerxue
 * Date: 14-3-28
 * Time: 下午12:14
 */

class Base_Controller extends CI_Controller {

	public $_url_rewrite = FALSE;

	public function __construct() {
		parent::__construct();
		$this->load->library('cismarty');
		$this->load->helper('stringutil');

		$this->load->library('pagination');
		$this->pagination->use_page_numbers = false;

		$this->_config['per_page'] = PAGE_SIZE;

		$this->page_offset = $this->input->get($this->pagination->query_string_segment);

	}

	/**
	 * 检查用户是否登录
	 */
	protected function checkUser() {
		$_c = $this->input->get("c");
		$_m = $this->input->get("m");
		//校验排除登录登出
		if ($_c == "main" && ($_m == "login" || $_m == "logout" || $_m == "error403")) {
			return;
		}

		$_user = $this->session->userdata['admin'];
		if (empty($_user)) {
			header("Location: /" . ADMIN_THEME . "/main/login");
			exit;
		}

	}

	public function put($key, $value) {
		$this->cismarty->assign($key, $value);
	}

	public function debug($value = TRUE) {
		$this->output->enable_profiler($value);
	}

	public function url_rewrite($html) {
		$html = $this->cismarty->fetch($html);
		print rewrite($html);
	}

	/**
	 * Smarty 载入模板方法
	 * @author Yin Lei
	 * @param string $html
	 */
	public function render($html, $data = null) {

		if (!empty($data)) {
			foreach ($data as $key => $value) {
				$this->put($key, $value);
			}

		}

		if (!$this->_url_rewrite) {

			$this->cismarty->display($html);
		} else {
			$this->url_rewrite($html);
		}
	}

	/**
	 * @param $_page
	 * @param $_total
	 * @return mixed  分页条
	 */
	public function getPageBar($_page, $_total) {
		$this->_config['total_rows'] = $_total;
		$this->pagination->setBaseURL($_page);
		$this->pagination->initialize($this->_config);
		return $this->pagination->create_links();
	}

	public function handleResult($_result, $_description = '') {
		if ($_result) {
			$this->put('do_result', '操作成功!');
		} else {
			$this->put('do_result', '操作失败!' . $_description);
			$this->put('error', true);
		}
	}

	/**结息request
	 * @param $param_name_array
	 * @return array
	 */
	public function parseData($param_name_array) {
		$_data = array();
		foreach ($param_name_array as $param_name) {
			$_data[$param_name] = $this->input->post($param_name);
		}
		return $_data;

	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */