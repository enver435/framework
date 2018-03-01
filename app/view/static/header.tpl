<!DOCTYPE html>
<html lang="{$smarty.session.lang}" prefix="og: http://ogp.me/ns#">
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, shrink-to-fit=no, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
	<meta name="description" content="{if $global.headerDesc != null}{$global.headerDesc}{else}{DESC}{/if}" />
    <meta name="keywords" content="{KEYS}" />
    <meta name="author" content="{AUTHOR}" />
	
	<!-- Twitter META Tags -->
    <meta name="twitter:card" content="summary" /> 
    <meta name="twitter:title" content="{if $global.headerTitle != null}{$global.headerTitle}{else}{SITE_NAME}{/if}" />
    <meta name="twitter:url" content="{$global.actualUrl}" />
	<meta name="twitter:description" content="{if $global.headerDesc != null}{$global.headerDesc}{else}{DESC}{/if}" />
	{if $global.headerImage != null}
		{if $global.headerImage|is_array}
			{foreach $global.headerImage as $image}
				<meta property="twitter:image" content="{$image}" />
			{/foreach}
		{else}
			<meta property="twitter:image" content="{$global.headerImage}" />
		{/if}
	{/if}

	<!-- Facebook Open Graph META Tags -->
	<meta property="og:type" content="website" />
	<meta property="og:title" content="{if $global.headerTitle != null}{$global.headerTitle}{else}{SITE_NAME}{/if}" />
	<meta property="og:site_name" content="{SITE_NAME}" />
	<meta property="og:url" content="{$global.actualUrl}" />
	<meta property="og:description" content="{if $global.headerDesc != null}{$global.headerDesc}{else}{DESC}{/if}" />
	{if $global.headerImage != null}
		{if $global.headerImage|is_array}
			{foreach $global.headerImage as $image}
				<meta property="og:image" content="{$image}" />
			{/foreach}
		{else}
			<meta property="og:image" content="{$global.headerImage}" />
		{/if}
	{/if}

	<title>{if $global.headerTitle != null}{$global.headerTitle}{else}{SITE_NAME}{/if}</title>
	
	<!-- Favicon -->
	<link rel="shortcut icon" href="{publicUrl('images/favicon.ico')}" type="image/x-icon">
	<link rel="icon" href="{publicUrl('images/favicon.ico')}" type="image/x-icon">
	<!-- Site Styles -->
	<link rel="stylesheet" href="{publicUrl('styles/bootstrap.min.css')}" />
	<link rel="stylesheet" href="{publicUrl('styles/style.css')}" />
	<link rel="stylesheet" href="{publicUrl('styles/responsive.css')}">
	<!-- Site Settings -->
	{literal}
		<script type="text/javascript">
			var siteUrl  = '{/literal}{SITE_URL}{literal}';
			var ajaxUrl  = '{/literal}{SITE_URL}/request{literal}';
			var ajaxLock = false;
		</script>
	{/literal}
	<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
</html>