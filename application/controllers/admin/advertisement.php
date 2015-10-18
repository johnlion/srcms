<?php if (!defined('BASEPATH')) {
	exit('No direct script access allowed');
}

/**
 * User: Chandlerxue
 * Date: 14-3-28
 * Time: 下午12:14
 * file:
 */

/**
 * [class Advertisement]
 * [dependence node]
 */
class Advertisement extends Base_Controller {

	public function index($nidtype = 'advertisement', $nid = '') {

		if (isPost()) {extract($_POST);}
		if (isGet()) {extract($_GET);}
		/* -----------------------------------------------------
		 * Talbe Field
		 * -----------------------------------------------------
		 */
		$param['data'] = array(
			'nidtype' => $nidtype,
			'nid'     => $nid,
		);
		/* -----------------------------------------------------
		 * Page Param
		 * -----------------------------------------------------
		 */
		$param['page']      = isset($page) ? $page : 1;
		$param['page_size'] = 3; //每页显示条数
		$param['show_page'] = 5; //页面banner能显示页数
		$param['uri']       = 'advertisement?page=';

		$datalist = $this->cinode->select($param);
		$this->put("list", $datalist['data']);
		$this->put("pagerbar", $datalist['pagebanner']);

		debug($datalist['data'], DEBUGPATH, 'advertisement data');

		$this->render('advertisement_list.html');
	}

	public function edit() {
		$this->render('advertisement_edit.html');

	}

	public function add() {
		//$this->render('advertisement_edit.html');
		$this->render('advertisement_edit.html');
	}

}
