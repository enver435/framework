{if $smarty.session.login}
	<footer class="footer text-center"> {$smarty.now|date_format:"%Y"} &copy; </footer>
{/if}

<!-- Site Admin Scripts -->
<script type="text/javascript" src="{publicUrl('js/jquery.min.js')}"></script>
<script type="text/javascript" src="{publicUrl('js/bootstrap.min.js')}"></script>
<script type="text/javascript" src="{publicUrl('js/sidebar-nav.min.js')}"></script>
<script type="text/javascript" src="{publicUrl('js/jquery.slimscroll.js')}"></script>
<script type="text/javascript" src="{publicUrl('js/waves.js')}"></script>
<script type="text/javascript" src="{publicUrl('js/custom.js')}"></script>