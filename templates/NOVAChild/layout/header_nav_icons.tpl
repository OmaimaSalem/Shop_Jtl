{block name='layout-header-nav-icons'}
    {block name='layout-header-nav-icons-include-header-nav-search'}
    {/block}
    
    {block name='layout-header-nav-icons-include-cart-dropdown-label'}
        {include file='basket/cart_dropdown_label.tpl'}
    {/block}

    {block name='layout-header-nav-icons-include-header-shop-nav-account'}
        {include file='layout/header_shop_nav_account.tpl'}
    {/block}

    {if !($isMobile)}
        {block name='layout-header-nav-icons-include-header-shop-nav-compare'}
        {/block}
        {block name='layout-header-nav-icons-include-header-shop-nav-wish'}
        {/block}
    {/if}
{/block}
