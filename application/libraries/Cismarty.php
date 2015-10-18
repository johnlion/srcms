<?php
if (!defined('BASEPATH')) {
	exit('No direct script asscess allowed');
}

require_once APPPATH . '/libraries/Smarty/Smarty.class.php';

class Cismarty extends Smarty {

	protected $ci;

	public function __construct() {
		parent::__construct();

		$this->ci = &get_instance();

		$this->ci->load->config('smarty'); //加载smarty的配置文件
		//获取相关的配置项
		$this->template_dir = $this->ci->config->item('template_dir');
		$this->compile_dir  = $this->ci->config->item('compile_dir');
		$this->cache_dir    = $this->ci->config->item('cache_dir');
		$this->config_dir   = $this->ci->config->item('config_dir');
//		$this->template_ext   = $this->ci->config->item('template_ext');
		$this->caching             = $this->ci->config->item('caching');
		$this->force_compile       = $this->ci->config->item('force_compile');
		$this->cache_lifetime      = $this->ci->config->item('lefttime');
		$this->left_delimiter      = $this->ci->config->item('left_delimiter');
		$this->right_delimiter     = $this->ci->config->item('right_delimiter');
		$this->allow_php_templates = $this->ci->config->item('allow_php_templates');

	}
}

?>