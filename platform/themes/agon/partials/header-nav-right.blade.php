<div class="header-nav-right">
    @if(is_plugin_active('blog') || (is_plugin_active('ecommerce') && theme_option('enabled_products_search_on_header', true)))
        <div class="me-3 d-inline-block box-search-top">
            <span class="font-lg icon-list search-post" data-bs-toggle="modal" data-bs-target="#search-autocomplete-modal">
                <svg fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                </svg>
            </span>
        </div>
    @endif

    @if ($actionText = theme_option('action_button_text'))
        <div class="action-header d-none d-md-block d-lg-block">
            <a class="btn btn-default hover-up icon-arrow-right text-nowrap" href="{{ theme_option('action_button_url') }}">{{ $actionText }}</a>
        </div>
    @endif
</div>
