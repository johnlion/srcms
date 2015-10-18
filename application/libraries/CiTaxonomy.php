<?php
/*
 *@Modulename=CiRole
 *@Desc=CiRole Module
 *@Author=Chandler
 *@ModifyTime=20150806
 *@Version=1.0
 *@Platform=XMFTHL1.0
 *@Dependence=Module1,Module2
 */

require_once 'taxonomy/taxonomy.class.php';

/**
 *
 */
class CiTaxonomy extends Taxonomy {

	public function __construct() {
		parent::__construct();

	}

}