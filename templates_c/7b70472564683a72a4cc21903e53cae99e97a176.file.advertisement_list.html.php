<?php /* Smarty version Smarty-3.1.18, created on 2015-10-20 17:00:48
         compiled from "application/views/admin/advertisement_list.html" */ ?>
<?php /*%%SmartyHeaderCode:643984206562602c00b52b4-70006108%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7b70472564683a72a4cc21903e53cae99e97a176' => 
    array (
      0 => 'application/views/admin/advertisement_list.html',
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
    '2ec1863126e136f6c010ce65e21b3c5dff64ed3b' => 
    array (
      0 => 'application/views/admin/inc_gritter.html',
      1 => 1400052900,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '643984206562602c00b52b4-70006108',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_562602c02b5863_57171950',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_562602c02b5863_57171950')) {function content_562602c02b5863_57171950($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/vagrant/www/ntf/application/libraries/Smarty/plugins/modifier.date_format.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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


            
<li class="active">广告管理</li>

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
                
<div class="page-header">

    <div class="row">
        <div class="col-xs-1"  style="min-width: 80px">
            <a href="/<?php echo @constant('ADMIN_THEME');?>
/vedio/add" class="btn btn-success btn-sm"> <i class="ace-icon fa fa-plus bigger-110"></i>
                新建
            </a>
        </div>

    </div>

</div>

<table id="sample-table-2" class="table table-striped table-bordered table-hover">
    <thead>
        <tr>

            <th>视频名称</th>
            <th style="width: 190px">更新时间</th>
            <th style="width: 90px">操作</th>
        </tr>
    </thead>

    <tbody>
        <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
        <tr>

            
            <td><?php echo $_smarty_tpl->tpl_vars['value']->value['title'];?>
</td>
            <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['value']->value['modifytime'],"%Y-%m-%d %H:%M:%S");?>
</td>
            <td>
                <div class="action-buttons">

                    <a class="green" href="/<?php echo @constant('ADMIN_THEME');?>
/vedio/edit&nid=<?php echo $_smarty_tpl->tpl_vars['value']->value['nid'];?>
"> <i class="ace-icon fa fa-pencil bigger-130"></i>
                    </a>

                    <div class="inline position-relative">

                        <a href="#" class="red dropdown-toggle" data-toggle="dropdown" data-position="auto">
                            <i class="ace-icon fa fa-trash-o icon-only bigger-130"></i>
                        </a>

                        <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                            <li>
                                <a href="javascript:void(0)" onclick="deleteEntity('<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
',this)"
                           class="tooltip-error" data-rel="tooltip" title="" data-original-title="Delete">
                                    <span class="red">
                                        <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>

                </div>
            </td>
        </tr>
        <?php }
if (!$_smarty_tpl->tpl_vars['value']->_loop) {
?>
<?php /*  Call merged included template "inc_gritter.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("inc_gritter.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '643984206562602c00b52b4-70006108');
content_562602c0204067_92852362($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "inc_gritter.html" */?>
<?php } ?>
    </tbody>
</table>
<?php echo $_smarty_tpl->tpl_vars['pagerbar']->value;?>


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
    function deleteEntity(id,btn){


            $.get("/admin/sys_user_group/delete&id="+id,function(r){
                if(r=='<?php echo @constant('STATUS_SUCCESS');?>
'){
                    tr_row = btn.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode
                    list_table=tr_row.parentNode;
                    list_table.removeChild(tr_row);
                }else{
                    alert("删除失败");
                }
            });

    }
</script>


</body>
</html>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.18, created on 2015-10-20 17:00:48
         compiled from "application/views/admin/inc_gritter.html" */ ?>
<?php if ($_valid && !is_callable('content_562602c0204067_92852362')) {function content_562602c0204067_92852362($_smarty_tpl) {?><script>

    $(function () {
        $.gritter.add({
            title: '提示',
            text: '没有查到相关记录',
            class_name: 'gritter-warning gritter-center',
            time : 2500
        });
    });
</script><?php }} ?>
