<?php if (!defined('BASEPATH')) {
	exit('No direct script access allowed');
}

/*
 *@Modulename=CiModule
 *@Desc=Module
 *@Author=Chandler
 *@ModifyTime=20150806
 *@Version=1.0
 *@Platform=XMFTHL1.0
 *@Dependence=Module1,Module2
 */

require_once 'page/page.class.php';

/**
 *
 */
class CiPage extends Page {

	public function __construct() {
		parent::__construct();

	}

}