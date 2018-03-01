<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse slimscrollsidebar">
        <ul class="nav" id="side-menu">
            <li>
                <a href="{siteUrl()}" class="waves-effect {if getUrl(0) == 'admin' AND !getUrl(1)}active{/if}"><i class="fa fa-dashboard fa-fw" aria-hidden="true"></i><span class="hide-menu">Ana Səhifə</span></a>
            </li>
            <!--<li {if getUrl(1) == 'admin'}class="in active"{/if}>
                <a href="javascript:void(0);" class="waves-effect {if getUrl(0) == 'admin'}active{/if}"><i class="fa fa-eye fa-fw" aria-hidden="true"></i><span class="hide-menu">Menu Adı</span></a>
                <ul>
                    <li>
                        <a href="{SITE_URL}/{SITE_ADMIN}/menulink" class="waves-effect {if getUrl(0) == 'admin'}active{/if}"><i class="fa fa-eye fa-fw" aria-hidden="true"></i><span class="hide-menu">Menu Adı</span></a>
                    </li>
                    <li>
                        <a href="{SITE_URL}/{SITE_ADMIN}/menulink" class="waves-effect {if getUrl(0) == 'admin'}active{/if}"><i class="fa fa-eye fa-fw" aria-hidden="true"></i><span class="hide-menu">Menu Adı</span></a>
                    </li>
                </ul>
            </li>-->
            <li>
                <a href="{SITE_URL}/{SITE_ADMIN}/settings" class="waves-effect {if getUrl(1) == 'settings'}active{/if}"><i class="fa fa-cog fa-fw" aria-hidden="true"></i><span class="hide-menu">Admin Parametrləri</span></a>
            </li>
            <li>
                <a href="{SITE_URL}/{SITE_ADMIN}/exit" class="waves-effect"><i class="fa fa-sign-out fa-fw" aria-hidden="true"></i><span class="hide-menu">Çıxış</span></a>
            </li>
        </ul>
    </div>
</div>
