<?php /* Smarty version Smarty-3.1.18, created on 2015-10-12 11:45:53
         compiled from "application/views/vedio_edit.html" */ ?>
<?php /*%%SmartyHeaderCode:490500898561b2cf12d05a2-97068602%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '59685aeea243495f62bb52a8eab808cb692d4681' => 
    array (
      0 => 'application/views/vedio_edit.html',
      1 => 1444617967,
      2 => 'file',
    ),
    '614eaa753400c6c1d2f3dbb42bfd183d8d7a854f' => 
    array (
      0 => 'application/views/base_content.html',
      1 => 1400227910,
      2 => 'file',
    ),
    '9983591074296b35844f91ae042cd15f8192823d' => 
    array (
      0 => 'application/views/base.html',
      1 => 1400395326,
      2 => 'file',
    ),
    'da897c8015b5485b545e3646394617514390af41' => 
    array (
      0 => 'application/views/inc_form_result.html',
      1 => 1398328410,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '490500898561b2cf12d05a2-97068602',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_561b2cf14ed2a1_08876224',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561b2cf14ed2a1_08876224')) {function content_561b2cf14ed2a1_08876224($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include '/vagrant/www/ntf/application/libraries/Smarty/plugins/function.html_options.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <title>后台管理系统</title>

    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

    <!-- bootstrap & fontawesome -->
    <link rel="stylesheet" href="<?php echo @constant('RES_PATH');?>
/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo @constant('RES_PATH');?>
/assets/font-awesome/css/font-awesome.min.css" />

    <!-- page specific plugin styles -->

    <!--<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" />-->

    <link rel="stylesheet" href="<?php echo @constant('RES_PATH');?>
/assets/css/jquery-ui.custom.min.css" />

    <!-- ace styles -->
    <link rel="stylesheet" href="<?php echo @constant('RES_PATH');?>
/assets/css/ace.min.css" />

    <!--[if lte IE 9]>
    <link rel="stylesheet" href="<?php echo @constant('RES_PATH');?>
/assets/css/ace-part2.min.css" />
    <![endif]-->
    <link rel="stylesheet" href="<?php echo @constant('RES_PATH');?>
/assets/css/ace-skins.min.css" />
    <link rel="stylesheet" href="<?php echo @constant('RES_PATH');?>
/assets/css/ace-rtl.min.css" />

    <!--[if lte IE 9]>
    <link rel="stylesheet" href="<?php echo @constant('RES_PATH');?>
/assets/css/ace-ie.min.css" />
    <![endif]-->
    <link rel="stylesheet" href="<?php echo @constant('RES_PATH');?>
/assets/css/admin.css" />
    <!-- inline styles related to this page -->

    <!-- ace settings handler -->
    <script src="<?php echo @constant('RES_PATH');?>
/assets/js/ace-extra.min.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

    <!--[if lte IE 8]>
    <script src="<?php echo @constant('RES_PATH');?>
/assets/js/html5shiv.js"></script>
    <script src="<?php echo @constant('RES_PATH');?>
/assets/js/respond.min.js"></script>
    <![endif]-->

















    

    

</head>

<body class="no-skin">




<div class="main-content">
    <div class="breadcrumbs" id="breadcrumbs">


        <ul class="breadcrumb">
            <li>
                <i class="ace-icon fa fa-home home-icon"></i>
                <a href="index.php?c=main&m=welcome">主页</a>
            </li>


            
<li>
  <a href="index.php?c=news">视频管理</a>
</li>
<li class="active">编辑</li>

        </ul><!-- /.breadcrumb -->

        <div class="nav-search" id="nav-search">
            <button class="btn btn-light btn-xs btn-app re" onclick="self.location.reload()">
                <i class="ace-icon fa fa-refresh bigger-120"></i>
            </button>
        </div><!-- /.nav-search -->
    </div>

    <div class="page-content">

        <div class="row">
            <div class="col-xs-12">
                <!-- PAGE CONTENT BEGINS -->
                
    <link rel="stylesheet" href="<?php echo @constant('RES_PATH');?>
/assets/css/jquery-ui.custom.css" />
    <link rel="stylesheet" href="<?php echo @constant('RES_PATH');?>
/assets/css/chosen.css" />
    <link rel="stylesheet" href="<?php echo @constant('RES_PATH');?>
/assets/css/datepicker.css" />
    <link rel="stylesheet" href="<?php echo @constant('RES_PATH');?>
/assets/css/bootstrap-timepicker.css" />
    <link rel="stylesheet" href="<?php echo @constant('RES_PATH');?>
/assets/css/daterangepicker.css" />
    <link rel="stylesheet" href="<?php echo @constant('RES_PATH');?>
/assets/css/bootstrap-datetimepicker.css" />
    <link rel="stylesheet" href="<?php echo @constant('RES_PATH');?>
/assets/css/colorpicker.css" />
<link rel="stylesheet" href="<?php echo @constant('RES_PATH');?>
/assets/css/bootstrap-datepicker3.min.css" />


<script src="<?php echo @constant('RES_PATH');?>
/assets/ckeditor/ckeditor.js"></script>




<h3 class="lighter block green">编辑视频信息</h3>

<form class="form-horizontal" id="validation-form" method="post" role="form">
  <?php /*  Call merged included template "inc_form_result.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("inc_form_result.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '490500898561b2cf12d05a2-97068602');
content_561b2cf13fd979_43010124($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "inc_form_result.html" */?>
  <div class="form-group">
    <label class="control-label col-xs-12 col-sm-1 no-padding-right" for="title">视频:</label>

    <div class="col-xs-12 col-sm-9">
      <div class="clearfix">
        <input type="text" name="title" id="title" class="col-xs-12 col-sm-9"
                        value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['entity']->value['title'])===null||$tmp==='' ? '' : $tmp);?>
" />
      </div>
    </div>
  </div>

  <div class="space-2"></div>

  <div class="form-group">
    <label class="control-label col-xs-12 col-sm-1 no-padding-right" for="sys_group_id">视频分类:</label>

    <div class="col-xs-12 col-sm-9">
      <div class="clearfix">
        <select name="sys_group_id" id="sys_group_id" class="col-xs-12 col-sm-6">
          <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['group_list']->value,'selected'=>$_smarty_tpl->tpl_vars['entity']->value['sys_group_id']),$_smarty_tpl);?>

        </select>
      </div>
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-xs-12 col-sm-1 no-padding-right" for="flag_valid">剧集:</label>

    <div class="col-xs-12 col-sm-9">
      <div class="clearfix">
        <label>
          <input name="flag_valid" id="flag_valid" class="ace ace-switch ace-switch-6" type="checkbox"
                           <?php if ((($tmp = @$_smarty_tpl->tpl_vars['entity']->value['flag_valid'])===null||$tmp==='' ? '' : $tmp)==1) {?>checked<?php }?>  value="1"/>
          <span class="lbl"></span>
        </label>
      </div>
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-xs-12 col-sm-1 no-padding-right" for="title">集数:</label>

    <div class="col-xs-12 col-sm-9">
      <div class="clearfix">
        <input type="text" name="title" id="title" class="col-xs-12 col-sm-2"
                        value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['entity']->value['title'])===null||$tmp==='' ? '' : $tmp);?>
" />
      </div>
    </div>
  </div>
  <div class="space-2"></div>
  <div class="form-group">
    <label class="control-label col-xs-12 col-sm-1 no-padding-right" for="title">上映时间:</label>

    <div class="col-xs-12 col-sm-9">
      <div class="clearfix">

        <div class="input-group">
          <input class="form-control date-picker" id="id-date-picker-1" type="text" data-date-format="dd-mm-yyyy">
          <span class="input-group-addon"> <i class="fa fa-calendar bigger-110"></i>
          </span>
        </div>
      </div>
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-xs-12 col-sm-1 no-padding-right" for="flag_valid">浏览启用:</label>

    <div class="col-xs-12 col-sm-9">
      <div class="clearfix">
        <label>
          <input name="flag_valid" id="flag_valid" class="ace ace-switch ace-switch-6" type="checkbox"
                           <?php if ((($tmp = @$_smarty_tpl->tpl_vars['entity']->value['flag_valid'])===null||$tmp==='' ? '' : $tmp)==1) {?>checked<?php }?>  value="1"/>
          <span class="lbl"></span>
        </label>
      </div>
    </div>
  </div>

  <div class="space-2"></div>

  <div class="form-group">
    <label class="control-label col-xs-12 col-sm-1 no-padding-right" for="content">内容:</label>

    <div class="col-xs-12 col-sm-9">
      <div class="clearfix">
        <textarea class="col-xs-12 col-sm-6" name="content" id="content" style="height: 300px; "></textarea>
        <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'content' );
            </script>
      </div>
    </div>
  </div>

  <div class="space-2"></div>

  <div class="clearfix form-actions">
    <div class="col-md-offset-3 col-md-9">
      <button class="btn btn-info" type="submit"> <i class="ace-icon fa fa-check bigger-110"></i>
        提交
      </button>
      &nbsp; &nbsp; &nbsp;
      <a class="btn" href="index.php?c=sys_user">
        <i class="ace-icon fa fa-undo bigger-110"></i>
        返回
      </a>
    </div>
  </div>
</form>

                <!-- PAGE CONTENT ENDS -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.page-content -->
</div>


<!-- basic scripts -->

<!--[if !IE]> -->
<script src="<?php echo @constant('RES_PATH');?>
/assets/js/jquery.2.1.0.min.js"></script>
<!-- <![endif]-->

<!--[if IE]>
<script src="<?php echo @constant('RES_PATH');?>
/assets/js/jquery.1.11.min.js"></script>
<![endif]-->

<!--[if !IE]> -->
<script type="text/javascript">
    window.jQuery || document.write("<script src='<?php echo @constant('RES_PATH');?>
/assets/js/jquery.min.js'>"+"<"+"/script>");
</script>

<!-- <![endif]-->

<!--[if IE]>
<script type="text/javascript">
    window.jQuery || document.write("<script src='<?php echo @constant('RES_PATH');?>
/assets/js/jquery1x.min.js'>"+"<"+"/script>");
</script>
<![endif]-->
<script type="text/javascript">
    if('ontouchstart' in document.documentElement) document.write("<script src='<?php echo @constant('RES_PATH');?>
/assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
</script>

<script src="<?php echo @constant('RES_PATH');?>
/assets/js/jquery-ui.custom.min.js"></script>

<script src="<?php echo @constant('RES_PATH');?>
/assets/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo @constant('RES_PATH');?>
/assets/js/jqGrid/jquery.jqGrid.min.js"></script>
<!-- page specific plugin scripts -->
<script src="<?php echo @constant('RES_PATH');?>
/assets/js/jquery.validate.min.js"></script>
<!--<script src="<?php echo @constant('RES_PATH');?>
/assets/js/jquery.nestable.min.js"></script>-->
<!-- ace scripts -->
<script src="<?php echo @constant('RES_PATH');?>
/assets/js/ace-elements.min.js"></script>
<script src="<?php echo @constant('RES_PATH');?>
/assets/js/ace.min.js"></script>

<script src="//netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>




<script src="<?php echo @constant('RES_PATH');?>
/assets/js/jquery.ui.touch-punch.min.js"></script>
<script src="<?php echo @constant('RES_PATH');?>
/assets/js/date-time/bootstrap-datepicker.min.js"></script>
<script src="<?php echo @constant('RES_PATH');?>
/assets/js/date-time/bootstrap-timepicker.min.js"></script>
<script src="<?php echo @constant('RES_PATH');?>
/assets/js/date-time/moment.min.js"></script>


<script>
      $(function(){




          jQuery.validator.addMethod("title", function (value, element) {
              return this.optional(element) || /^[_a-zA-Z0-9\u4E00-\uFA29\uE7C7-\uE7F3]+$/.test(value);
          }, "账号只能包含中文、数字，字母，下划线");
          $('#validation-form').validate({
              errorElement: 'div',
              errorClass: 'help-block',
              focusInvalid: false,
              rules: {
                  email: {
                      required: true,
                      email:true
                  },
                  password: {
                  <?php if ($_REQUEST['m']=='add') {?>required: true,<?php }?>
                      minlength: 6,
                      maxlength: 15
                  },

                  title: {
                      required: true,
                      minlength: 3,
                      maxlength: 50,
                      title: 'required'
                  }
                  ,

                  truename: {
                      required: true,
                      minlength: 2,
                      maxlength: 15
                  }
              },

              messages: {
                  email: {
                      required: "请输入邮箱",
                      email: "请输入正确邮箱格式"
                  },
                  password: {
                      required: "请输入密码",
                      minlength: "密码需要6-12个字符",
                      maxlength: "密码需要6-15个字符"
                  },
                  title: {
                      required: "请输入账号",
                      minlength: "账号需要3-15个字符",
                      maxlength: "账号需要3-15个字符"
                  },
                  truename: {
                      required: "请输入姓名",
                      minlength: "姓名需要2-15个字符",
                      maxlength: "姓名需要2-15个字符"
                  }
              },



              highlight: function (e) {
                  $(e).closest('.form-group').removeClass('has-info').addClass('has-error');
              },

              success: function (e) {
                  $(e).closest('.form-group').removeClass('has-error');//.addClass('has-info');
                  $(e).remove();
              },

              errorPlacement: function (error, element) {
                  if(element.is(':checkbox') || element.is(':radio')) {
                      var controls = element.closest('div[class*="col-"]');
                      if(controls.find(':checkbox,:radio').length > 1) controls.append(error);
                      else error.insertAfter(element.nextAll('.lbl:eq(0)').eq(0));
                  }
                  else if(element.is('.select2')) {
                      error.insertAfter(element.siblings('[class*="select2-container"]:eq(0)'));
                  }
                  else if(element.is('.chosen-select')) {
                      error.insertAfter(element.siblings('[class*="chosen-container"]:eq(0)'));
                  }
                  else error.insertAfter(element.parent());
              }


          });
      });
</script>


</body>
</html>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.18, created on 2015-10-12 11:45:53
         compiled from "application/views/inc_form_result.html" */ ?>
<?php if ($_valid && !is_callable('content_561b2cf13fd979_43010124')) {function content_561b2cf13fd979_43010124($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?>
<div class="alert alert-danger">
    <strong>
        <i class="icon-remove"></i>
        <?php echo (($tmp = @$_smarty_tpl->tpl_vars['do_result']->value)===null||$tmp==='' ? '' : $tmp);?>

    </strong>
</div>
<?php } elseif (isset($_smarty_tpl->tpl_vars['do_result']->value)) {?>
<div class="alert alert-block alert-success">
    <strong>
        <i class="icon-ok"></i>
        <?php echo (($tmp = @$_smarty_tpl->tpl_vars['do_result']->value)===null||$tmp==='' ? '' : $tmp);?>

    </strong>
</div>
<?php }?>


<?php }} ?>
