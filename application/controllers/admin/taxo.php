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
 * [class Taxo]
 * [dependence Taxonomy]
 */
class Taxo extends Base_Controller {

	public function index($nidtype = 'taxonomy', $nid = '') {

		if (isPost()) {extract($_POST);}
		if (isGet()) {extract($_GET);}
		$datalist['data'] = $this->citaxonomy->leaf(0);
		$this->put("list", $datalist['data']);

		$this->render('taxo_list.html');
	}

	public function edit() {

		$_id = $this->input->get('tid');
		$this->put("msgbox", '');

		if (IS_POST) {

			if (!empty($_id) && is_numeric($_id)) {
				$_data['data']        = $_POST;
				$_data['data']['tid'] = $_id;

				$_result = $this->citaxonomy->update($_data);

				if ($_result['status'] == 1) {
					$this->put("msgbox", theme_msgbox('编辑成功', 'alert alert-info'));
				} else {
					$this->put("msgbox", theme_msgbox('编辑失败', 'alert alert-warning'));
				}
			}
		}

		$_data['data']['tid'] = $_id;
		$entity               = $this->citaxonomy->getone($_data);
		//cprint($entity, 'edit data');
		$this->put("entity", $entity['data']);
		$this->render('taxo_edit.html');

	}

	public function add() {
		$this->put("msgbox", '');
		$_id = $this->input->get('tid');

		if (IS_POST) {
			$_data['data'] = $_POST;
			if (isset($_id) && is_numeric($_id)) {
				$_data['data']['parentid'] = $_id;
			} else {
				$_data['data']['parentid'] = 0;
			}

			$_result = $this->citaxonomy->insert($_data);
			if ($_result['status'] == 1) {
				$this->put("msgbox", theme_msgbox('添加成功', 'alert alert-info'));
			} else {
				$this->put("msgbox", theme_msgbox('添加失败，请稍后再试！', 'alert alert-warning'));
			}
		}

		$entity = array(
			'tid'         => '',
			'ttitle'      => '',
			'icon'        => '',
			'parentid'    => '',
			'taxotpl'     => '',
			'sortid'      => '',
			'ishide'      => '',
			'isdelete'    => '',
			'addtime'     => '',
			'topid'       => '',
			'roomids'     => '',
			'machinename' => '',
			'taxonomyimg' => '',
			'links'       => '',
			'link_silder' => '',
			'description' => '',
			'keyword'     => '',
			'contenttpl'  => '',

		);
		$this->put("entity", $entity);
		$this->render('taxo_edit.html');
	}

	/**
	 * [status 状态更新]
	 * @return [type] [description]
	 */
	public function status() {
		$_id     = $this->input->get('tid');
		$_status = $this->input->get('status');

		$_data['data']['tid']    = $_id;
		$_data['data']['ishide'] = $_status;

		$_result = $this->citaxonomy->update_stauts($_data);

		echo $_result['status'] == 1 ? STATUS_SUCCESS : STATUS_ERROR;exit();
	}

	/**
	 * [sort 排序]
	 * @return [type] [description]
	 */
	public function sort() {
		$_arr_tid = $this->input->post('data') ?: "W3siaWQiOjEsImNoaWxkcmVuIjpbeyJpZCI6NH0seyJpZCI6NX1dfSx7ImlkIjoyLCJjaGlsZHJlbiI6W3siaWQiOjYsImNoaWxkcmVuIjpbeyJpZCI6MTV9LHsiaWQiOjE2fV19LHsiaWQiOjd9LHsiaWQiOjh9LHsiaWQiOjl9XX0seyJpZCI6MywiY2hpbGRyZW4iOlt7ImlkIjoxMH0seyJpZCI6MTF9LHsiaWQiOjEyLCJjaGlsZHJlbiI6W3siaWQiOjEzfSx7ImlkIjoxNH1dfV19LHsiaWQiOjE3fV0=";
		$_arr_tid = base64_decode($_arr_tid);
		$_arr_tid = !empty($_arr_tid) ? json_decode($_arr_tid, true) : array();
		$_result  = $this->citaxonomy->sort($_arr_tid);

		echo $_result['status'] == 1 ? STATUS_SUCCESS : STATUS_ERROR;exit();

	}

	public function deleteEntity() {
		$_tid = $this->input->get('data');
		echo $_tid;
	}

}
