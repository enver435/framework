<?php /* Smarty version 3.1.27, created on 2018-02-05 21:29:27
         compiled from "C:\xampp\htdocs\framework\v4\app\view\static\footer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:98455a78bea78ac8d3_10053057%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b82759f9aef4de013edc26b193729a9c21767f00' => 
    array (
      0 => 'C:\\xampp\\htdocs\\framework\\v4\\app\\view\\static\\footer.tpl',
      1 => 1517862521,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '98455a78bea78ac8d3_10053057',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a78bea78c90c4_28757273',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a78bea78c90c4_28757273')) {
function content_5a78bea78c90c4_28757273 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '98455a78bea78ac8d3_10053057';
?>
<!-- Site Scripts -->
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo publicUrl('scripts/jquery-2.2.4.min.js');?>
"><?php echo '</script'; ?>
>	
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo publicUrl('scripts/bootstrap.min.js');?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo publicUrl('scripts/main.js');?>
"><?php echo '</script'; ?>
><?php }
}
?>