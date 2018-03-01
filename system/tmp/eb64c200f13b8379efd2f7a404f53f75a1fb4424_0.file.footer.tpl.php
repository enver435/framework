<?php /* Smarty version 3.1.27, created on 2018-02-05 21:37:24
         compiled from "C:\xampp\htdocs\framework\app\view\admin\static\footer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:135535a78c084089ad2_67305187%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eb64c200f13b8379efd2f7a404f53f75a1fb4424' => 
    array (
      0 => 'C:\\xampp\\htdocs\\framework\\app\\view\\admin\\static\\footer.tpl',
      1 => 1517848308,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '135535a78c084089ad2_67305187',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a78c0840e6a96_89241417',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a78c0840e6a96_89241417')) {
function content_5a78c0840e6a96_89241417 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'C:\\xampp\\htdocs\\framework\\system\\plugin\\smarty\\plugins\\modifier.date_format.php';

$_smarty_tpl->properties['nocache_hash'] = '135535a78c084089ad2_67305187';
if ($_SESSION['login']) {?>
	<footer class="footer text-center"> <?php echo smarty_modifier_date_format(time(),"%Y");?>
 &copy; </footer>
<?php }?>

<!-- Site Admin Scripts -->
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo publicUrl('js/jquery.min.js');?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo publicUrl('js/bootstrap.min.js');?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo publicUrl('js/sidebar-nav.min.js');?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo publicUrl('js/jquery.slimscroll.js');?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo publicUrl('js/waves.js');?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo publicUrl('js/custom.js');?>
"><?php echo '</script'; ?>
><?php }
}
?>