<?php /* Smarty version 3.1.27, created on 2018-02-17 15:26:03
         compiled from "C:\xampp\htdocs\framework\app\view\static\header.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:301835a883b7b0d36c6_80205704%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5d3a9198bd8850130b59eec5ad6cb99c3a371592' => 
    array (
      0 => 'C:\\xampp\\htdocs\\framework\\app\\view\\static\\header.tpl',
      1 => 1518877558,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '301835a883b7b0d36c6_80205704',
  'variables' => 
  array (
    'global' => 0,
    'image' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a883b7b157331_52159141',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a883b7b157331_52159141')) {
function content_5a883b7b157331_52159141 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '301835a883b7b0d36c6_80205704';
?>
<!DOCTYPE html>
<html lang="<?php echo $_SESSION['lang'];?>
" prefix="og: http://ogp.me/ns#">
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, shrink-to-fit=no, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
	<meta name="description" content="<?php if ($_smarty_tpl->tpl_vars['global']->value['headerDesc'] != null) {
echo $_smarty_tpl->tpl_vars['global']->value['headerDesc'];
} else {
echo DESC;
}?>" />
    <meta name="keywords" content="<?php echo KEYS;?>
" />
    <meta name="author" content="<?php echo AUTHOR;?>
" />
	
	<!-- Twitter META Tags -->
    <meta name="twitter:card" content="summary" /> 
    <meta name="twitter:title" content="<?php if ($_smarty_tpl->tpl_vars['global']->value['headerTitle'] != null) {
echo $_smarty_tpl->tpl_vars['global']->value['headerTitle'];
} else {
echo SITE_NAME;
}?>" />
    <meta name="twitter:url" content="<?php echo $_smarty_tpl->tpl_vars['global']->value['actualUrl'];?>
" />
	<meta name="twitter:description" content="<?php if ($_smarty_tpl->tpl_vars['global']->value['headerDesc'] != null) {
echo $_smarty_tpl->tpl_vars['global']->value['headerDesc'];
} else {
echo DESC;
}?>" />
	<?php if ($_smarty_tpl->tpl_vars['global']->value['headerImage'] != null) {?>
		<?php if (is_array($_smarty_tpl->tpl_vars['global']->value['headerImage'])) {?>
			<?php
$_from = $_smarty_tpl->tpl_vars['global']->value['headerImage'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['image'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['image']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->_loop = true;
$foreach_image_Sav = $_smarty_tpl->tpl_vars['image'];
?>
				<meta property="twitter:image" content="<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
" />
			<?php
$_smarty_tpl->tpl_vars['image'] = $foreach_image_Sav;
}
?>
		<?php } else { ?>
			<meta property="twitter:image" content="<?php echo $_smarty_tpl->tpl_vars['global']->value['headerImage'];?>
" />
		<?php }?>
	<?php }?>

	<!-- Facebook Open Graph META Tags -->
	<meta property="og:type" content="website" />
	<meta property="og:title" content="<?php if ($_smarty_tpl->tpl_vars['global']->value['headerTitle'] != null) {
echo $_smarty_tpl->tpl_vars['global']->value['headerTitle'];
} else {
echo SITE_NAME;
}?>" />
	<meta property="og:site_name" content="<?php echo SITE_NAME;?>
" />
	<meta property="og:url" content="<?php echo $_smarty_tpl->tpl_vars['global']->value['actualUrl'];?>
" />
	<meta property="og:description" content="<?php if ($_smarty_tpl->tpl_vars['global']->value['headerDesc'] != null) {
echo $_smarty_tpl->tpl_vars['global']->value['headerDesc'];
} else {
echo DESC;
}?>" />
	<?php if ($_smarty_tpl->tpl_vars['global']->value['headerImage'] != null) {?>
		<?php if (is_array($_smarty_tpl->tpl_vars['global']->value['headerImage'])) {?>
			<?php
$_from = $_smarty_tpl->tpl_vars['global']->value['headerImage'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['image'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['image']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->_loop = true;
$foreach_image_Sav = $_smarty_tpl->tpl_vars['image'];
?>
				<meta property="og:image" content="<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
" />
			<?php
$_smarty_tpl->tpl_vars['image'] = $foreach_image_Sav;
}
?>
		<?php } else { ?>
			<meta property="og:image" content="<?php echo $_smarty_tpl->tpl_vars['global']->value['headerImage'];?>
" />
		<?php }?>
	<?php }?>

	<title><?php if ($_smarty_tpl->tpl_vars['global']->value['headerTitle'] != null) {
echo $_smarty_tpl->tpl_vars['global']->value['headerTitle'];
} else {
echo SITE_NAME;
}?></title>
	
	<!-- Favicon -->
	<link rel="shortcut icon" href="<?php echo publicUrl('images/favicon.ico');?>
" type="image/x-icon">
	<link rel="icon" href="<?php echo publicUrl('images/favicon.ico');?>
" type="image/x-icon">
	<!-- Site Styles -->
	<link rel="stylesheet" href="<?php echo publicUrl('styles/bootstrap.min.css');?>
" />
	<link rel="stylesheet" href="<?php echo publicUrl('styles/style.css');?>
" />
	<link rel="stylesheet" href="<?php echo publicUrl('styles/responsive.css');?>
">
	<!-- Site Settings -->
	
		<?php echo '<script'; ?>
 type="text/javascript">
			var siteUrl  = '<?php echo SITE_URL;?>
';
			var ajaxUrl  = '<?php echo SITE_URL;?>
/request';
			var ajaxLock = false;
		<?php echo '</script'; ?>
>
	
	<!--[if lt IE 9]>
        <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
    <![endif]-->
</head>
</html><?php }
}
?>