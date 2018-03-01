<?php /* Smarty version 3.1.27, created on 2018-02-05 21:32:12
         compiled from "C:\xampp\htdocs\framework\app\view\static\footer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:48235a78bf4c13de40_94221708%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e7c175a43ee66189aa943de8b1115d9f63e88623' => 
    array (
      0 => 'C:\\xampp\\htdocs\\framework\\app\\view\\static\\footer.tpl',
      1 => 1517862521,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '48235a78bf4c13de40_94221708',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a78bf4c142867_20400913',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a78bf4c142867_20400913')) {
function content_5a78bf4c142867_20400913 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '48235a78bf4c13de40_94221708';
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