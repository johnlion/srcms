<?php /* Smarty version Smarty-3.1.18, created on 2015-10-20 17:01:34
         compiled from "application/views/admin/sys_group_permission_edit.html" */ ?>
<?php /*%%SmartyHeaderCode:443495260562602ee9bf2d4-34968088%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '020d1abb4d75103218f0691b0a7c5b6112a78fc1' => 
    array (
      0 => 'application/views/admin/sys_group_permission_edit.html',
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
  ),
  'nocache_hash' => '443495260562602ee9bf2d4-34968088',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_562602eec66451_99902341',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_562602eec66451_99902341')) {function content_562602eec66451_99902341($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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

















    

<style>
.ace-thumbnails li{
    border: 0;
    margin-top: 5px;
    margin-left: 10px;
    margin-right: 10px;
    margin-bottom: 5px;
}
    .widget-box{
        background: #fcfcfc;
        border: 1px solid #bebebe;
    }
    .lbl {
        font-size: 15px;
    }

</style>


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


            
<li><a href="/<?php echo @constant('ADMIN_THEME');?>
/sys_user_group">用户组管理</a></li>
<li class="active">权限配置</li>

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
                



    <?php  $_smarty_tpl->tpl_vars['module'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['module']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['permission']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['module']->key => $_smarty_tpl->tpl_vars['module']->value) {
$_smarty_tpl->tpl_vars['module']->_loop = true;
?>

    <div class="col-sm-12 widget-box transparent" style="opacity: 1; z-index: 0;border: 1px solid #f4f4f4">
        <div class="widget-header">
            <h5 style="padding: 5px"><?php echo $_smarty_tpl->tpl_vars['module']->value['module_name'];?>
</h5>

            <div class="widget-toolbar no-border">


                <a href="#" data-action="collapse">
                    <i class="icon-chevron-up"></i>
                </a>

            </div>
        </div>

        <div class="widget-body" style="padding-bottom: 20px">
            <div class="widget-main padding-6 no-padding-left no-padding-right">
                <ul class="ace-thumbnails">

                    <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['module']->value['page']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>

                    <li>



                        <div class="widget-box widget-color-blue" style="min-width: 180px">
                            <div class="widget-header">
                                <h5><label style="padding: 0;margin: 0">
                                    <input name="form-field-checkbox" class="ace ace-checkbox-2" type="checkbox"
                                           onchange="changePermission(this)" parent_id="" id="<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
"
                                           value="<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['value']->value['p']!=0) {?>checked<?php }?> >
                                    <span class="lbl"> <?php echo $_smarty_tpl->tpl_vars['value']->value['module_name'];?>
</span>
                                </label></h5>

                            </div>

                            <div class="widget-body">
                                <?php if (!empty($_smarty_tpl->tpl_vars['value']->value['action'])) {?>
                                <div class="widget-main">
                                    <ul class="list-unstyled spaced2" module="<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
">

                                        <?php  $_smarty_tpl->tpl_vars['action'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['action']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['value']->value['action']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['action']->key => $_smarty_tpl->tpl_vars['action']->value) {
$_smarty_tpl->tpl_vars['action']->_loop = true;
?>
                                        <li>
                                            <label style="padding: 0;margin: 0">
                                                <input name="form-field-checkbox" class="ace ace-checkbox-2" type="checkbox"
                                                       onchange="changePermission(this)" parent_id="<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
"
                                                       value="<?php echo $_smarty_tpl->tpl_vars['action']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['action']->value['p']!=0) {?>checked<?php }?> >
                                                <span class="lbl"> <?php echo $_smarty_tpl->tpl_vars['action']->value['module_name'];?>
</span>
                                            </label>
                                        </li>
                                        <?php } ?>

                                    </ul>

                                </div>

                                <?php }?>
                            </div>

                        </div>
                    </li>

                    <?php } ?>

                </ul>
            </div>
        </div>
    </div>
    <?php } ?>


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
function changePermission(cb){
    if(cb.checked){
        var parent_id =$(cb).attr('parent_id');
        if(parent_id!=""){
            if(!document.getElementById(parent_id).checked){
                document.getElementById(parent_id).checked = true;
                changePermission(document.getElementById(parent_id));
            }
        }
    }else{
        var parent_id =$(cb).attr('parent_id');
        var id = cb.id;
        if(parent_id==""){
            $("input[parent_id='"+id+"']").each(function(){
                console.log(this);
                if(this.checked){
                    this.checked = false;
                    changePermission(this);
                }
            });
        }
    }


    $.get("/admin/sys_group_permission/change/?group_id=<?php echo $_GET['sys_group_id'];?>
&module_id="+cb.value+"&flag="+(cb.checked?1:0),function(r){
        if(r==1000){

        }else{
            alert("修改失败");
        }
    });
}
</script>


</body>
</html>
<?php }} ?>
