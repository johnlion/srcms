<?php /* Smarty version Smarty-3.1.18, created on 2015-10-20 14:44:30
         compiled from "application/views/admin/taxo_edit.html" */ ?>
<?php /*%%SmartyHeaderCode:19803476915625e2ce0287b6-16015929%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4a3780b6d9267566bf22d1e7496faeebe0e01aee' => 
    array (
      0 => 'application/views/admin/taxo_edit.html',
      1 => 1445241884,
      2 => 'file',
    ),
    '6936d4693e583dc0405e92035acaa500586c5a09' => 
    array (
      0 => 'application/views/admin/base_content.html',
      1 => 1445241884,
      2 => 'file',
    ),
    '876edf79e9c9c5b13d06cad0ee5a6bbe2762dc8e' => 
    array (
      0 => 'application/views/admin/base.html',
      1 => 1445322852,
      2 => 'file',
    ),
    'a620d37a01f499dc8ef79f2f19a4998155b93b2b' => 
    array (
      0 => 'application/views/admin/inc_form_result.html',
      1 => 1398328410,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19803476915625e2ce0287b6-16015929',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5625e2ce3d49d9_44745741',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5625e2ce3d49d9_44745741')) {function content_5625e2ce3d49d9_44745741($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <title>后台管理系统</title>

    <meta name="description" content="<?php echo @constant('ADMIN_APP_KEYWORD');?>
" />
     <meta name="author" content="<?php echo @constant('ADMIN_APP_AUTHOR');?>
" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

    <!-- bootstrap & fontawesome -->
    <link rel="stylesheet" href="<?php echo @constant('RES_PATH');?>
/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo @constant('RES_PATH');?>
/assets/font-awesome/css/font-awesome.min.css" />

    <!-- page specific plugin styles -->






    <!--<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" />-->

    <link rel="stylesheet" href="<?php echo @constant('RES_PATH');?>
/assets/css/jquery-ui.css" />

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
/assets/js/ace-extra.js"></script>

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
                <a href="/<?php echo @constant('ADMIN_THEME');?>
/main/welcome">主页</a>
            </li>


            
<li>
  <a href="/<?php echo @constant('ADMIN_THEME');?>
/taxo">分类管理</a>
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
                
<script src="<?php echo @constant('RES_PATH');?>
/assets/ckeditor/ckeditor.js"></script>
<h3 class="lighter block green">编辑分类信息</h3>

<?php echo $_smarty_tpl->tpl_vars['msgbox']->value;?>


<form class="form-horizontal" id="validation-form" method="post" role="form">
  <?php /*  Call merged included template "inc_form_result.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("inc_form_result.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '19803476915625e2ce0287b6-16015929');
content_5625e2ce2bb048_44881355($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "inc_form_result.html" */?>
  <div class="form-group">
    <label class="control-label col-xs-12 col-sm-1 no-padding-right" for="ttitle">分类名称:</label>

    <div class="col-xs-12 col-sm-8">
      <div class="clearfix">
        <input type="text" name="ttitle" id="ttitle" class="col-xs-12 col-sm-8"
                        value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['entity']->value['ttitle'])===null||$tmp==='' ? '' : $tmp);?>
" />
      </div>
    </div>
  </div>

  <div class="space-2"></div>

  <div class="form-group">
    <label class="control-label col-xs-12 col-sm-1 no-padding-right" for="machinename">别名:</label>

    <div class="col-xs-12 col-sm-8">
      <div class="clearfix">
        <input type="text" name="machinename" id="machinename" class="col-xs-12 col-sm-8"
                        value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['entity']->value['machinename'])===null||$tmp==='' ? '' : $tmp);?>
" />
      </div>
    </div>
  </div>

  <div class="space-2"></div>

  <div class="form-group">
    <label class="control-label col-xs-12 col-sm-1 no-padding-right" for="taxotpl">分类模板:</label>

    <div class="col-xs-12 col-sm-8">
      <div class="clearfix">
        <input type="text" name="taxotpl" id="taxotpl" class="col-xs-12 col-sm-8"
                        value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['entity']->value['taxotpl'])===null||$tmp==='' ? '' : $tmp);?>
" />
      </div>
    </div>
  </div>

  <div class="space-2"></div>

  <div class="form-group">
    <label class="control-label col-xs-12 col-sm-1 no-padding-right" for="contenttpl">内容模板:</label>

    <div class="col-xs-12 col-sm-8">
      <div class="clearfix">
        <input type="text" name="contenttpl" id="contenttpl" class="col-xs-12 col-sm-8"
                        value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['entity']->value['contenttpl'])===null||$tmp==='' ? '' : $tmp);?>
" />
      </div>
    </div>
  </div>

  <div class="space-2"></div>

 <!--
  <div class="form-group">
    <label class="control-label col-xs-12 col-sm-1 no-padding-right" for="contenttpl">权重:</label>

    <div class="col-xs-12 col-sm-1">
      <div class="clearfix">
          <input id="spinner" name="value" type="text"  value="<?php echo $_smarty_tpl->tpl_vars['entity']->value['sortid'];?>
" />
      </div>
    </div>
  </div>

  <div class="space-2"></div>
  -->




  <div class="form-group">
    <label class="control-label col-xs-12 col-sm-1 no-padding-right" for="keyword">关键字:</label>

    <div class="col-xs-12 col-sm-8">
      <div class="clearfix">
        <input type="text" name="keyword" id="keyword" class="col-xs-12 col-sm-8"
                        value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['entity']->value['keyword'])===null||$tmp==='' ? '' : $tmp);?>
" />
      </div>
    </div>
  </div>

  <div class="space-2"></div>

  <div class="form-group">
    <label class="control-label col-xs-12 col-sm-1 no-padding-right" for="description">描述:</label>

    <div class="col-xs-12 col-sm-8">
      <div class="clearfix">
        <input type="text" name="description" id="description" class="col-xs-12 col-sm-8"
                        value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['entity']->value['description'])===null||$tmp==='' ? '' : $tmp);?>
" />
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
      <a class="btn" href="/<?php echo @constant('ADMIN_THEME');?>
/sys_user">
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
/assets/js/ace/elements.spinner.js"></script>
<script src="<?php echo @constant('RES_PATH');?>
/assets/js/ace.min.js"></script>
<script src="<?php echo @constant('RES_PATH');?>
/assets/js/jquery.ui.touch-punch.js"></script>

<!--self scripts -->
<script src="<?php echo @constant('RES_PATH');?>
/assets/js/base64.js"></script>


<script>
      $(function(){

          jQuery.validator.addMethod("ttitle", function (value, element) {
              return this.optional(element) || /^[_a-zA-Z0-9\u4E00-\uFA29\uE7C7-\uE7F3]+$/.test(value);
          }, "账号只能包含中文、数字，字母，下划线");


          jQuery.validator.addMethod("machinename", function (value, element) {
              return this.optional(element) || /^[_a-zA-Z0-9\u4E00-\uFA29\uE7C7-\uE7F3]+$/.test(value);
          }, "账号只能包含中文、数字，字母，下划线");
          $('#validation-form').validate({
              errorElement: 'div',
              errorClass: 'help-block',
              focusInvalid: false,
              rules: {
     
    
                  ttitle: {
                      required: true,
                      minlength: 2,
                      maxlength: 50,
                      ttitle: 'required'
                  }
                  ,

                  machinename: {
                      required: false,
                      minlength: 0,
                      maxlength: 15
                  },

                  description: {
                      required: false,
                      minlength: 0,
                      maxlength: 200
                  },
                  keyword: {
                      required: false,
                      minlength: 0,
                      maxlength: 200
                  }
              },

              messages: {
                  ttitle: {
                      required: "请输入分类信息名称",
                      minlength: "分类信息名称需要2-15个字符",
                      maxlength: "分类信息名称需要2-15个字符"
                  },
                  machinename: {
                      required: "请输入别名",
                      minlength: "别名需要2-15个字符",
                      maxlength: "别名需要2-15个字符"
                  },
                  description: {
                      required: "请输入描述",
                      minlength: "描述需要0-200个字符",
                      maxlength: "描述需要0-200个字符"
                  },
                  keyword: {
                      required: "请输入关键字",
                      minlength: "关键字需要0-200个字符",
                      maxlength: "关键字需要0-200个字符"
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


      //selectmenu
         $( "#number" ).css('width', '200px')
        .selectmenu({ position: { my : "left bottom", at: "left top" } })

      
        //datapicker
        $( "#datepicker" ).datepicker({
          showOtherMonths: true,
          selectOtherMonths: false,
          //isRTL:true,
      
          
          /*
          changeMonth: true,
          changeYear: true,
          
          showButtonPanel: true,
          beforeShow: function() {
            //change button colors
            var datepicker = $(this).datepicker( "widget" );
            setTimeout(function(){
              var buttons = datepicker.find('.ui-datepicker-buttonpane')
              .find('button');
              buttons.eq(0).addClass('btn btn-xs');
              buttons.eq(1).addClass('btn btn-xs btn-success');
              buttons.wrapInner('<span class="bigger-110" />');
            }, 0);
          }
          */
        });

        //spinner
        var spinner = $( "#spinner" ).spinner({
          create: function( event, ui ) {
            //add custom classes and icons
            $(this)
            .next().addClass('btn btn-success').html('<i class="ace-icon fa fa-plus"></i>')
            .next().addClass('btn btn-danger').html('<i class="ace-icon fa fa-minus"></i>')
            
            //larger buttons on touch devices
            if('touchstart' in document.documentElement) 
              $(this).closest('.ui-spinner').addClass('ui-spinner-touch');
          }
        });

        //selectmenu
         $( "#number" ).css('width', '200px')
        .selectmenu({ position: { my : "left bottom", at: "left top" } })


      });
</script>


</body>
</html>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.18, created on 2015-10-20 14:44:30
         compiled from "application/views/admin/inc_form_result.html" */ ?>
<?php if ($_valid && !is_callable('content_5625e2ce2bb048_44881355')) {function content_5625e2ce2bb048_44881355($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?>
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
