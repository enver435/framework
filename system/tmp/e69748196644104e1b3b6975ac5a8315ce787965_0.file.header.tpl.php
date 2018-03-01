<?php /* Smarty version 3.1.27, created on 2018-02-05 21:37:23
         compiled from "C:\xampp\htdocs\framework\app\view\admin\static\header.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:138345a78c0835eb071_78218468%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e69748196644104e1b3b6975ac5a8315ce787965' => 
    array (
      0 => 'C:\\xampp\\htdocs\\framework\\app\\view\\admin\\static\\header.tpl',
      1 => 1517854289,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '138345a78c0835eb071_78218468',
  'variables' => 
  array (
    'global' => 0,
    'short' => 0,
    'firstCharacter' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a78c083b33385_31430907',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a78c083b33385_31430907')) {
function content_5a78c083b33385_31430907 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '138345a78c0835eb071_78218468';
?>
<!DOCTYPE html>
<html lang="<?php echo $_SESSION['lang'];?>
">
<head>
	<meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="description" content="<?php if ($_smarty_tpl->tpl_vars['global']->value['headerDesc'] != null) {
echo $_smarty_tpl->tpl_vars['global']->value['headerDesc'];
} else {
echo DESC;
}?>">
    <meta name="author" content="<?php echo AUTHOR;?>
">
	<title><?php if ($_smarty_tpl->tpl_vars['global']->value['headerTitle'] != null) {
echo $_smarty_tpl->tpl_vars['global']->value['headerTitle'];
} else {
echo SITE_NAME;
}?> | Admin Panel</title>
    
    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo publicUrl('../images/favicon.ico');?>
" type="image/x-icon">
    <link rel="icon" href="<?php echo publicUrl('../images/favicon.ico');?>
" type="image/x-icon">
    <!-- Site Admin Styles -->
	<link href="<?php echo publicUrl('css/bootstrap.min.css');?>
" rel="stylesheet">
    <link href="<?php echo publicUrl('css/sidebar-nav.min.css');?>
" rel="stylesheet">
    <link href="<?php echo publicUrl('css/animate.css');?>
" rel="stylesheet">
    <link href="<?php echo publicUrl('css/style.css');?>
" rel="stylesheet">
    <link href="<?php echo publicUrl('css/responsive.css');?>
" rel="stylesheet">
    <link href="<?php echo publicUrl('css/colors/default.css');?>
" id="theme" rel="stylesheet">
    
    
        <style type="text/css">
            .navbar-header {background: <?php echo $_smarty_tpl->tpl_vars['global']->value['adminSetting']['headerBackground'];?>
;}
            .top-left-part a {color: <?php echo $_smarty_tpl->tpl_vars['global']->value['adminSetting']['color'];?>
;}
            .cssload-speeding-wheel {border: 2px solid <?php echo $_smarty_tpl->tpl_vars['global']->value['adminSetting']['preloaderColor'];?>
;}
            .sidebar {background: <?php echo $_smarty_tpl->tpl_vars['global']->value['adminSetting']['sidebarColor'];?>
;}
            #side-menu li a {color: <?php echo $_smarty_tpl->tpl_vars['global']->value['adminSetting']['color'];?>
;}
            #side-menu>li>a.active {border-left: 3px solid <?php echo $_smarty_tpl->tpl_vars['global']->value['adminSetting']['color'];?>
;color: <?php echo $_smarty_tpl->tpl_vars['global']->value['adminSetting']['color'];?>
;}
            #side-menu>li>a.active i {color: <?php echo $_smarty_tpl->tpl_vars['global']->value['adminSetting']['color'];?>
;}
            .form-control:focus {border-color: <?php echo $_smarty_tpl->tpl_vars['global']->value['adminSetting']['borderColor'];?>
;}
            .btn-primary, .btn-primary.disabled {background: <?php echo $_smarty_tpl->tpl_vars['global']->value['adminSetting']['buttonBackground'];?>
;border: 1px solid <?php echo $_smarty_tpl->tpl_vars['global']->value['adminSetting']['buttonBackground'];?>
;}
            .btn-primary {color: <?php echo $_smarty_tpl->tpl_vars['global']->value['adminSetting']['buttonColor'];?>
;outline: none;}
            .btn-primary.active.focus, .btn-primary.active:focus, .btn-primary.active:hover, .btn-primary.focus, .btn-primary.focus:active, .btn-primary:active:focus, .btn-primary:active:hover, .btn-primary:focus, .open>.dropdown-toggle.btn-primary.focus, .open>.dropdown-toggle.btn-primary:focus, .open>.dropdown-toggle.btn-primary:hover {background-color: <?php echo $_smarty_tpl->tpl_vars['global']->value['adminSetting']['buttonHoverBackground'];?>
;border: 1px solid <?php echo $_smarty_tpl->tpl_vars['global']->value['adminSetting']['buttonHoverBackground'];?>
;outline: none;}
            .btn-primary.active, .btn-primary:active, .open>.dropdown-toggle.btn-primary {background-color: <?php echo $_smarty_tpl->tpl_vars['global']->value['adminSetting']['buttonHoverBackground'];?>
;border: 1px solid <?php echo $_smarty_tpl->tpl_vars['global']->value['adminSetting']['buttonHoverBackground'];?>
;outline: none;}
            .btn-primary.disabled.focus, .btn-primary.disabled:focus, .btn-primary.disabled:hover, .btn-primary.focus, .btn-primary:focus, .btn-primary:hover {background-color: <?php echo $_smarty_tpl->tpl_vars['global']->value['adminSetting']['buttonHoverBackground'];?>
;border: 1px solid <?php echo $_smarty_tpl->tpl_vars['global']->value['adminSetting']['buttonHoverBackground'];?>
;outline: none;}
            .bg-title .breadcrumb .active {color: <?php echo $_smarty_tpl->tpl_vars['global']->value['adminSetting']['breadcrumbColor'];?>
;}
            .alert-success {background: <?php echo $_smarty_tpl->tpl_vars['global']->value['adminSetting']['alertSuccess'];?>
;border-color: <?php echo $_smarty_tpl->tpl_vars['global']->value['adminSetting']['alertSuccess'];?>
;}
            .alert-danger {background: <?php echo $_smarty_tpl->tpl_vars['global']->value['adminSetting']['alertDanger'];?>
;border-color: <?php echo $_smarty_tpl->tpl_vars['global']->value['adminSetting']['alertDanger'];?>
;}
        </style>
    
</head>
<body>
<?php if ($_SESSION['login']) {?>
    <nav class="navbar navbar-default navbar-static-top m-b-0">
        <div class="navbar-header"> <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="fa fa-bars"></i></a>
            <div class="top-left-part" style="text-align: center;">
                <a class="logo" href="<?php echo siteUrl();?>
">
                    <b class="full"><?php echo mb_strtoupper(SITE_NAME, 'UTF-8');?>
</b>

                    <?php if (isset($_smarty_tpl->tpl_vars['short'])) {$_smarty_tpl->tpl_vars['short'] = clone $_smarty_tpl->tpl_vars['short'];
$_smarty_tpl->tpl_vars['short']->value = explode(" ",SITE_NAME); $_smarty_tpl->tpl_vars['short']->nocache = null; $_smarty_tpl->tpl_vars['short']->scope = 0;
} else $_smarty_tpl->tpl_vars['short'] = new Smarty_Variable(explode(" ",SITE_NAME), null, 0);?>
                    <b class="short"><?php
$_from = $_smarty_tpl->tpl_vars['short']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['firstCharacter'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['firstCharacter']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['firstCharacter']->value) {
$_smarty_tpl->tpl_vars['firstCharacter']->_loop = true;
$foreach_firstCharacter_Sav = $_smarty_tpl->tpl_vars['firstCharacter'];
echo substr($_smarty_tpl->tpl_vars['firstCharacter']->value,0,1);
$_smarty_tpl->tpl_vars['firstCharacter'] = $foreach_firstCharacter_Sav;
}
?></b>
                </a>
            </div>
        </div>
    </nav>
<?php }?>
</body>
</html><?php }
}
?>