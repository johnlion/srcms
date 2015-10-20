<?php

/**
 * User: Chandlerxue
 * Date: 14-3-28
 * Time: 下午12:14
 */

/**
 * [debug 实时调试]
 * @param  [type] $str  [description] 字符串
 * @param  [type] $path [description] 路径
 * @param  [type] $desc debug描述
 * @return [type]       [description]
 * [使用方法] debug('qqqqq', DEBUGPATH, 'this is a test');
 */
function debug($str = '', $path = '', $desc = '') {

	//写入开始
	ob_start();
	echo "\n";
	echo "\n";
	echo "\n";
	echo "\n";
	echo '#######' . $desc . ' start ' . '######';
	echo "\n";
	print_r($str);
	echo "\n";
	echo '#######' . $desc . ' end ' . '######';
	$ob = ob_get_contents();
	echo "\n\n\n";
	ob_end_clean();
	file_put_contents($path . "debug.txt", $ob, FILE_APPEND);
	//写入结束
	//
	return '';
}

/**
 * 是否是GET提交的
 */
function isGet() {
	return $_SERVER['REQUEST_METHOD'] == 'GET' ? true : false;
}

/**
 * 是否是POST提交
 * @return int
 */
function isPost() {
	$GLOBALS['verify'] = "";
	return ($_SERVER['REQUEST_METHOD'] == 'POST' && checkurlHash($GLOBALS['verify']) && (empty($_SERVER['HTTP_REFERER']) || preg_replace("~https?:\/\/([^\:\/]+).*~i", "\\1", $_SERVER['HTTP_REFERER']) == preg_replace("~([^\:]+).*~", "\\1", $_SERVER['HTTP_HOST']))) ? 1 : 0;
}

/**
 * [cprint 打印调试信息并输出调试信息到debug文件]
 * @param  [type] $data        [description]
 * @param  [type] $description [description]
 * @return [type]              [description]
 */
function cprint($data, $description, $exit = 0) {
	echo '<pre>';

	echo "### {$description} start ####";
	echo '<br/>';
	echo '<div style="color:red;">';
	print_r($data);
	echo '</div>';
	echo '<br/>';
	echo "### {$description} end ####";
	echo '<br/><br/><br/>';

	echo '</pre>';

	if ($exit == 0) {
		exit();
	}
	debug($data, DEBUGPATH, $description);

}

/**
 * [debug_err_msg 开发模式错误bug调式]
 * @param  [type] $data        [description]
 * @param  [type] $description [description]
 * @return [type]              [description]
 */
function debug_err_msg($data, $description) {

	if (ENVIRONMENT == 'development') {
		echo '<pre>';

		echo "### {$description} start ####";
		echo '<br/>';
		echo '<div style="color:red;">';
		print_r($data);
		echo '</div>';
		echo '<br/>';
		echo "### {$description} end ####";
		echo '<br/><br/><br/>';

		echo '</pre>';

		debug($data, DEBUGPATH, $description);exit();
	}
}

/**
 * @author Luffy <mail@aoxiang.me>
 * @Desc:显示语言包对应值
 * 使用方法
 * [example]
 * $this->load->helper("common");
 * t('chandler 是一个笨蛋');
 */
function t($param = "") {
	return $param;
}

/**
 * [theme_taxo_elements 输出可拖拽分类]
 * @param  [type] $param    [description]
 * @param  string $elements [description]
 * @return [type]           [description]
 */
function theme_taxo_elements($param) {
	$html = '';
	$html .= '<div class="dd col-sm-12" id="nestable">' . "\n";
	$html .= theme_taxo_elements_recicle($param);
	$html .= '</div>' . "\n";
	echo $html;

}

/**
 * [theme_taxo_elements_recicle 迭代返回每个taxo元素的html代码]
 * @param  [type] $param [description]
 * @return [type]        [description]
 */
function theme_taxo_elements_recicle($param) {
	$n   = 0;
	$end = count($param);

	foreach ($param as $key => $value) {
		$html = isset($html) ? $html : '';
		if ($n == 0) {
			$html .= '    <ol class="dd-list">' . "\n";
		}

		$html .= '        <li class="dd-item" data-id="' . $value['tid'] . '">' . "\n";
		$html .= '            <div class="dd-handle">' . $value['ttitle'];

		$html .= '<div class="pull-right action-buttons">';

		$html .= '	<a class="red" href="/' . ADMIN_THEME . '/taxo/add/?tid=' . $value['tid'] . '" >';
		$html .= '		<i class="ace-icon fa fa-plus bigger-130"></i>';
		$html .= '	</a>';

		$html .= '	<a class="blue" href="/' . ADMIN_THEME . '/taxo/edit/?tid=' . $value['tid'] . '" >';
		$html .= '		<i class="ace-icon fa fa-pencil bigger-130"></i>';
		$html .= '	</a>';

		$html .= '	<a class="red" href="javascript:void(0);" onclick="updateStatus(' . $value['tid'] . ',this);">';
		if ($value['ishide'] == 0) {
			$html .= '		<i class="ace-icon fa fa-check green bigger-130"></i>';
		} else {
			$html .= '		<i class="ace-icon fa fa-check bigger-130"></i>';
		}
		$html .= '	</a>';

		$html .= '</div>';

		$html .= '			  </div>' . "\n";

		if (isset($value['child']) && count($value['child']) > 0) {

			$html .= theme_taxo_elements_recicle($value['child']);
		}

		$html .= '        </li>' . "\n";

		$n++;
		if ($n >= $end) {
			$html .= '    </ol>' . "\n";
		}

	}

	return $html;

}

/**
 * [theme_msgbox 前台输出提示信息 ]
 * @param  string $content [description]
 * @param  string $class   [alert alert-info|alert-warning]
 * @return [type]          [description]
 *
 * [使用方法]
 * theme_msgbox('编辑成功', 'alert alert-info');
 * theme_msgbox('编辑失败', 'alert alert-warning')
 */
function theme_msgbox($content = '', $class = "") {
	$html = '';
	$html .= '<div class="alert ' . $class . '">';
	$html .= '  <button class="close" data-dismiss="alert">';
	$html .= '    <i class="ace-icon fa fa-times"></i>';
	$html .= '  </button>';
	$html .= $content;
	$html .= '</div>';
	return $html;
}
