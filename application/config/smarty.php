<?php
if (!defined('BASEPATH')) {
	exit('No direct script access allowed');
}

$config['theme'] = 'default';

$config['template_dir'] = APPPATH . 'views/' . ADMIN_THEME;

$config['compile_dir']         = FCPATH . 'templates_c';
$config['cache_dir']           = FCPATH . 'cache';
$config['config_dir']          = FCPATH . 'configs';
$config['template_ext']        = '.html';
$config['allow_php_templates'] = true;
$config['force_compile']       = true;
$config['caching']             = false;
$config['lefttime']            = 60;
$config['left_delimiter']      = '{%';
$config['right_delimiter']     = '%}';

?>