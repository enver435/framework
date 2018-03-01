<?php /* Smarty version 3.1.27, created on 2018-02-05 21:37:23
         compiled from "C:\xampp\htdocs\framework\app\view\admin\static\sidebar.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:175605a78c083f0c960_59064059%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '011cd51b22c8360fd0d9801c8aadab0d50aba870' => 
    array (
      0 => 'C:\\xampp\\htdocs\\framework\\app\\view\\admin\\static\\sidebar.tpl',
      1 => 1517851501,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '175605a78c083f0c960_59064059',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a78c084015454_00038142',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a78c084015454_00038142')) {
function content_5a78c084015454_00038142 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '175605a78c083f0c960_59064059';
?>
<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse slimscrollsidebar">
        <ul class="nav" id="side-menu">
            <li>
                <a href="<?php echo siteUrl();?>
" class="waves-effect <?php if (getUrl(0) == 'admin' && !getUrl(1)) {?>active<?php }?>"><i class="fa fa-dashboard fa-fw" aria-hidden="true"></i><span class="hide-menu">Ana Səhifə</span></a>
            </li>
            <!--<li <?php if (getUrl(1) == 'admin') {?>class="in active"<?php }?>>
                <a href="javascript:void(0);" class="waves-effect <?php if (getUrl(0) == 'admin') {?>active<?php }?>"><i class="fa fa-eye fa-fw" aria-hidden="true"></i><span class="hide-menu">Menu Adı</span></a>
                <ul>
                    <li>
                        <a href="<?php echo SITE_URL;?>
/<?php echo SITE_ADMIN;?>
/menulink" class="waves-effect <?php if (getUrl(0) == 'admin') {?>active<?php }?>"><i class="fa fa-eye fa-fw" aria-hidden="true"></i><span class="hide-menu">Menu Adı</span></a>
                    </li>
                    <li>
                        <a href="<?php echo SITE_URL;?>
/<?php echo SITE_ADMIN;?>
/menulink" class="waves-effect <?php if (getUrl(0) == 'admin') {?>active<?php }?>"><i class="fa fa-eye fa-fw" aria-hidden="true"></i><span class="hide-menu">Menu Adı</span></a>
                    </li>
                </ul>
            </li>-->
            <li>
                <a href="<?php echo SITE_URL;?>
/<?php echo SITE_ADMIN;?>
/settings" class="waves-effect <?php if (getUrl(1) == 'settings') {?>active<?php }?>"><i class="fa fa-cog fa-fw" aria-hidden="true"></i><span class="hide-menu">Admin Parametrləri</span></a>
            </li>
            <li>
                <a href="<?php echo SITE_URL;?>
/<?php echo SITE_ADMIN;?>
/exit" class="waves-effect"><i class="fa fa-sign-out fa-fw" aria-hidden="true"></i><span class="hide-menu">Çıxış</span></a>
            </li>
        </ul>
    </div>
</div>
<?php }
}
?>