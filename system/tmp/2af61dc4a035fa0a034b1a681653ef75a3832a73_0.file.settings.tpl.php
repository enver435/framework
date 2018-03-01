<?php /* Smarty version 3.1.27, created on 2018-02-05 21:37:26
         compiled from "C:\xampp\htdocs\framework\app\view\admin\settings.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:317035a78c08639afc9_55892600%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2af61dc4a035fa0a034b1a681653ef75a3832a73' => 
    array (
      0 => 'C:\\xampp\\htdocs\\framework\\app\\view\\admin\\settings.tpl',
      1 => 1513606943,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '317035a78c08639afc9_55892600',
  'variables' => 
  array (
    'return' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a78c086449b47_64879384',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a78c086449b47_64879384')) {
function content_5a78c086449b47_64879384 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '317035a78c08639afc9_55892600';
?>
<div class="preloader">
    <div class="cssload-speeding-wheel"></div>
</div>
<div id="wrapper">
    <?php echo $_smarty_tpl->getSubTemplate ("admin/static/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row bg-title">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title">Admin Parametrləri </h4> </div>
                    <ol class="breadcrumb">
                        <li><a href="#">Admin Panel</a></li>
                        <li class="active">Admin Parametrləri</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <?php if (issetPost('update')) {?>
                        <?php if ($_smarty_tpl->tpl_vars['return']->value['messageType'] == 'success') {?>
                            <div class="alert alert-success"><?php echo $_smarty_tpl->tpl_vars['return']->value['message'];?>
</div>
                        <?php } elseif ($_smarty_tpl->tpl_vars['return']->value['messageType'] == 'error') {?>
                            <div class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['return']->value['message'];?>
</div>
                        <?php }?>
                    <?php }?>
                    <div class="white-box">
                        <div class="col-md-6 col-md-offset-3">
                            <form action="" method="POST">
                                <div class="form-group">
                                    <label>İstifadəçi adı: </label>
                                    <input type="text" name="user" value="<?php echo $_smarty_tpl->tpl_vars['return']->value['getLoginInfo']['user'];?>
" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Şifrə: </label>
                                    <input type="password" name="pass" class="form-control">
                                </div>
                                <button type="submit" name="update" class="btn btn-primary pull-right">Yadda saxla</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php echo $_smarty_tpl->getSubTemplate ("admin/static/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

    </div>
</div><?php }
}
?>