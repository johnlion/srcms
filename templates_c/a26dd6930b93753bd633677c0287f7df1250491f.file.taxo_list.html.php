<?php /* Smarty version Smarty-3.1.18, created on 2015-10-18 16:16:49
         compiled from "application/views/admin/taxo_list.html" */ ?>
<?php /*%%SmartyHeaderCode:105882191056235571354c92-43932578%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a26dd6930b93753bd633677c0287f7df1250491f' => 
    array (
      0 => 'application/views/admin/taxo_list.html',
      1 => 1445154487,
      2 => 'file',
    ),
    '6936d4693e583dc0405e92035acaa500586c5a09' => 
    array (
      0 => 'application/views/admin/base_content.html',
      1 => 1444703926,
      2 => 'file',
    ),
    '876edf79e9c9c5b13d06cad0ee5a6bbe2762dc8e' => 
    array (
      0 => 'application/views/admin/base.html',
      1 => 1445046913,
      2 => 'file',
    ),
    '2ec1863126e136f6c010ce65e21b3c5dff64ed3b' => 
    array (
      0 => 'application/views/admin/inc_gritter.html',
      1 => 1400052900,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '105882191056235571354c92-43932578',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_562355715153f0_30970964',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_562355715153f0_30970964')) {function content_562355715153f0_30970964($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
                <a href="/admin/main/welcome">主页</a>
            </li>


            
<li class="active">分类管理</li>

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
            <a href="/admin/taxo/add" class="btn btn-success btn-sm"> <i class="ace-icon fa fa-plus bigger-110"></i>
                新建
            </a>
        </div>


        <div class="col-xs-1" style="min-width: 80px">


            <a id="sort_save" href="javascript:saveSort()" class="btn  btn-sm disabled">
                <i class="ace-icon fa fa-save bigger-110"></i>保存排序
            </a>
        </div>
    </div>

</div>

<div id="sortable1" class="col-sm-12" >
<?php if (count($_smarty_tpl->tpl_vars['list']->value)>0) {?>
<?php echo theme_taxo_elements($_smarty_tpl->tpl_vars['list']->value);?>

<?php } else { ?>
<?php /*  Call merged included template "inc_gritter.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("inc_gritter.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '105882191056235571354c92-43932578');
content_562355714850e2_03130890($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "inc_gritter.html" */?>
<?php }?>
</div>

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


<script src="<?php echo @constant('RES_PATH');?>
/assets/js/jquery.nestable.js"></script>
<script>


    function updateStatus(tid,cb){

        $.get("/admin/taxo/status/?tid="+tid+"&status="+(cb.checked?1:0),function(r){
            if(r=='<?php echo @constant('STATUS_SUCCESS');?>
'){


                if ( $(cb).find('i').attr('class') == 'ace-icon fa fa-check green bigger-130' ){
                
                    location.reload();
                    //$(cb).find('i').attr('class','ace-icon fa fa-check bigger-130'); 
                }else{
                      location.reload();
                    //$(cb).find('i').attr('class','ace-icon fa fa-check green bigger-130'); 
                }
                //console.log( $(cb).find('i').attr('class') );
            }else{

                alert('失败');
                 console.log($(cb).find('i').attr('class') );
                if(cb.checked){
                   
                    //cb.checked = false;
                }else{

                    //cb.checked = true;
                }
            }
        });

    }   


    function deleteEntity( tid,cb ){
       $.get("/admin/taxo/deleteEntity/?tid="+tid+"&status="+(cb.checked?1:0),function(r){
            if(r=='<?php echo @constant('STATUS_SUCCESS');?>
'){


                if ( $(cb).find('i').attr('class') == 'ace-icon fa fa-check green bigger-130' ){
                
                    //$(cb).find('i').attr('class','ace-icon fa fa-check bigger-130'); 
                }else{
                    
                    //$(cb).find('i').attr('class','ace-icon fa fa-check green bigger-130'); 
                }
                //console.log( $(cb).find('i').attr('class') );
            }else{

                alert('失败');
               
          
            }
        });

    }

    function saveSort() {

        data = $('.dd').nestable('serialize');

        netstabledata =$('.dd').nestable('serialize');
        var str = JSON.stringify(netstabledata);  
        str = base64encode( str );
    



        $.post("/admin/taxo/sort", {data:str}, function (r) {

            if (r == '<?php echo @constant('STATUS_SUCCESS');?>
') {

                $("#sort_save").removeClass('btn-warning');
                $("#sort_save").addClass('disabled');
            }else{
                alert("操作失败");
            }
        });
    }






    $(function(){

       
        //drag
    
        $('.dd').on('change', function(e){
            $("#sort_save").removeClass('disabled');
            $("#sort_save").addClass('btn-warning');
        });        
        $('.dd').nestable();

        $('.dd-handle a').on('mousedown', function(e){

            e.stopPropagation();
        });
                
   
        
    }); 




</script>


</body>
</html>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.18, created on 2015-10-18 16:16:49
         compiled from "application/views/admin/inc_gritter.html" */ ?>
<?php if ($_valid && !is_callable('content_562355714850e2_03130890')) {function content_562355714850e2_03130890($_smarty_tpl) {?><script>

    $(function () {
        $.gritter.add({
            title: '提示',
            text: '没有查到相关记录',
            class_name: 'gritter-warning gritter-center',
            time : 2500
        });
    });
</script><?php }} ?>
