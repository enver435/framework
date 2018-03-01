<div class="preloader">
    <div class="cssload-speeding-wheel"></div>
</div>
<div id="wrapper">
    {include file="admin/static/sidebar.tpl"}
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
                    {if issetPost('update')}
                        {if $return.messageType == 'success'}
                            <div class="alert alert-success">{$return.message}</div>
                        {elseif $return.messageType == 'error'}
                            <div class="alert alert-danger">{$return.message}</div>
                        {/if}
                    {/if}
                    <div class="white-box">
                        <div class="col-md-6 col-md-offset-3">
                            <form action="" method="POST">
                                <div class="form-group">
                                    <label>İstifadəçi adı: </label>
                                    <input type="text" name="user" value="{$return.getLoginInfo.user}" class="form-control">
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
        {include file="admin/static/footer.tpl"}
    </div>
</div>