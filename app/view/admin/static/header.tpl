<!DOCTYPE html>
<html lang="{$smarty.session.lang}">
<head>
	<meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="description" content="{if $global.headerDesc != null}{$global.headerDesc}{else}{DESC}{/if}">
    <meta name="author" content="{AUTHOR}">
	<title>{if $global.headerTitle != null}{$global.headerTitle}{else}{SITE_NAME}{/if} | Admin Panel</title>
    
    <!-- Favicon -->
    <link rel="shortcut icon" href="{publicUrl('../images/favicon.ico')}" type="image/x-icon">
    <link rel="icon" href="{publicUrl('../images/favicon.ico')}" type="image/x-icon">
    <!-- Site Admin Styles -->
	<link href="{publicUrl('css/bootstrap.min.css')}" rel="stylesheet">
    <link href="{publicUrl('css/sidebar-nav.min.css')}" rel="stylesheet">
    <link href="{publicUrl('css/animate.css')}" rel="stylesheet">
    <link href="{publicUrl('css/style.css')}" rel="stylesheet">
    <link href="{publicUrl('css/responsive.css')}" rel="stylesheet">
    <link href="{publicUrl('css/colors/default.css')}" id="theme" rel="stylesheet">
    
    {literal}
        <style type="text/css">
            .navbar-header {background: {/literal}{$global.adminSetting.headerBackground}{literal};}
            .top-left-part a {color: {/literal}{$global.adminSetting.color}{literal};}
            .cssload-speeding-wheel {border: 2px solid {/literal}{$global.adminSetting.preloaderColor}{literal};}
            .sidebar {background: {/literal}{$global.adminSetting.sidebarColor}{literal};}
            #side-menu li a {color: {/literal}{$global.adminSetting.color}{literal};}
            #side-menu>li>a.active {border-left: 3px solid {/literal}{$global.adminSetting.color}{literal};color: {/literal}{$global.adminSetting.color}{literal};}
            #side-menu>li>a.active i {color: {/literal}{$global.adminSetting.color}{literal};}
            .form-control:focus {border-color: {/literal}{$global.adminSetting.borderColor}{literal};}
            .btn-primary, .btn-primary.disabled {background: {/literal}{$global.adminSetting.buttonBackground}{literal};border: 1px solid {/literal}{$global.adminSetting.buttonBackground}{literal};}
            .btn-primary {color: {/literal}{$global.adminSetting.buttonColor}{literal};outline: none;}
            .btn-primary.active.focus, .btn-primary.active:focus, .btn-primary.active:hover, .btn-primary.focus, .btn-primary.focus:active, .btn-primary:active:focus, .btn-primary:active:hover, .btn-primary:focus, .open>.dropdown-toggle.btn-primary.focus, .open>.dropdown-toggle.btn-primary:focus, .open>.dropdown-toggle.btn-primary:hover {background-color: {/literal}{$global.adminSetting.buttonHoverBackground}{literal};border: 1px solid {/literal}{$global.adminSetting.buttonHoverBackground}{literal};outline: none;}
            .btn-primary.active, .btn-primary:active, .open>.dropdown-toggle.btn-primary {background-color: {/literal}{$global.adminSetting.buttonHoverBackground}{literal};border: 1px solid {/literal}{$global.adminSetting.buttonHoverBackground}{literal};outline: none;}
            .btn-primary.disabled.focus, .btn-primary.disabled:focus, .btn-primary.disabled:hover, .btn-primary.focus, .btn-primary:focus, .btn-primary:hover {background-color: {/literal}{$global.adminSetting.buttonHoverBackground}{literal};border: 1px solid {/literal}{$global.adminSetting.buttonHoverBackground}{literal};outline: none;}
            .bg-title .breadcrumb .active {color: {/literal}{$global.adminSetting.breadcrumbColor}{literal};}
            .alert-success {background: {/literal}{$global.adminSetting.alertSuccess}{literal};border-color: {/literal}{$global.adminSetting.alertSuccess}{literal};}
            .alert-danger {background: {/literal}{$global.adminSetting.alertDanger}{literal};border-color: {/literal}{$global.adminSetting.alertDanger}{literal};}
            .pagination>.active>a, .pagination>.active>a:focus, .pagination>.active>a:hover, .pagination>.active>span, .pagination>.active>span:focus, .pagination>.active>span:hover {background: {/literal}{$global.adminSetting.pagination}{literal};border-color: {/literal}{$global.adminSetting.pagination}{literal};cursor: pointer;}
            .pagination>li>a:focus, .pagination>li>a:hover, .pagination>li>span:focus, .pagination>li>span:hover {background: {/literal}{$global.adminSetting.pagination}{literal};cursor: pointer;}
            .content-wrapper #side-menu ul, .content-wrapper .sidebar #side-menu>li:hover, .content-wrapper .sidebar .nav-second-level>li>a {background: {/literal}{$global.adminSetting.sidebarColor}{literal};}
        </style>
    {/literal}
</head>
<body>
{if $smarty.session.login}
    <nav class="navbar navbar-default navbar-static-top m-b-0">
        <div class="navbar-header"> <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="fa fa-bars"></i></a>
            <div class="top-left-part" style="text-align: center;">
                <a class="logo" href="{siteUrl()}">
                    <b class="full">{SITE_NAME|upper}</b>

                    {assign var=short value=" "|explode:SITE_NAME}
                    <b class="short">{foreach $short as $firstCharacter}{$firstCharacter|substr:0:1}{/foreach}</b>
                </a>
            </div>
        </div>
    </nav>
{/if}
</body>
</html>