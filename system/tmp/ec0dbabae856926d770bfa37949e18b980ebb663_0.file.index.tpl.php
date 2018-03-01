<?php /* Smarty version 3.1.27, created on 2018-02-05 21:37:23
         compiled from "C:\xampp\htdocs\framework\app\view\admin\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:159955a78c083d99b64_33281423%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ec0dbabae856926d770bfa37949e18b980ebb663' => 
    array (
      0 => 'C:\\xampp\\htdocs\\framework\\app\\view\\admin\\index.tpl',
      1 => 1513606741,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '159955a78c083d99b64_33281423',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a78c083e8ebd4_38262855',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a78c083e8ebd4_38262855')) {
function content_5a78c083e8ebd4_38262855 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '159955a78c083d99b64_33281423';
if (!$_SESSION['login']) {?>
    <div class="container">
        <form class="form-signin" method="POST">
            <h2 class="form-signin-heading text-center">Admin Panel</h2>
            <div class="form-group">
                <label for="inputEmail" class="sr-only">İstifadəçi adı</label>
                <input type="text" name="user" id="inputEmail" class="form-control" placeholder="İstifadəçi adı" required="" autofocus="">
            </div>
            <div class="form-group">
                <label for="inputPassword" class="sr-only">Şifrə</label>
                <input type="password" name="pass" id="inputPassword" class="form-control" placeholder="Şifrə" required="">
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit" name="login">Giriş et</button>
        </form>
    </div>
    <style type="text/css">
        html, body {
            background-color: #eee;
        }
        body {
          padding-top: 40px;
          padding-bottom: 40px;
        }

        .form-signin {
          max-width: 330px;
          padding: 15px;
          margin: 0 auto;
        }
        .form-signin .form-signin-heading,
        .form-signin .checkbox {
          margin-bottom: 10px;
        }
        .form-signin .checkbox {
          font-weight: normal;
        }
        .form-signin .form-control {
          position: relative;
          height: auto;
          -webkit-box-sizing: border-box;
             -moz-box-sizing: border-box;
                  box-sizing: border-box;
          padding: 10px;
          font-size: 16px;
        }
        .form-signin .form-control:focus {
          z-index: 2;
        }
        .form-signin input[type="email"] {
          margin-bottom: -1px;
          border-bottom-right-radius: 0;
          border-bottom-left-radius: 0;
        }
        .form-signin input[type="password"] {
          margin-bottom: 10px;
          border-top-left-radius: 0;
          border-top-right-radius: 0;
        }
    </style>
<?php } else { ?>
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
                        <h4 class="page-title">Ana Səhifə </h4> </div>
                        <ol class="breadcrumb">
                            <li><a href="#">Admin Panel</a></li>
                            <li class="active">Ana Səhifə</li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="white-box">
                            <h5 style="font-weight: 500;">Admin panelinə xoş gəldiniz. Sitenizi burada idarə edə bilərsiniz.</h5> 
                        </div>
                    </div>
                </div>
            </div>
            <?php echo $_smarty_tpl->getSubTemplate ("admin/static/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

        </div>
    </div>
<?php }
}
}
?>