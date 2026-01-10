@php
    if (! isset($formActionUrl) && ! isset($formAjaxUrl)) {
        $formActionUrl = null;
        $formAjaxUrl = null;

        if (is_plugin_active('blog')) {
            $formActionUrl = route('public.search');
            $formAjaxUrl = route('public.ajax.search');
        }

        if (is_plugin_active('ecommerce') && theme_option('enabled_products_search_on_header', true)) {
            $formActionUrl = route('public.products');
            $formAjaxUrl = route('public.ajax.search-products');
        }
    }
@endphp

@if ($formActionUrl && $formAjaxUrl)
    <div class="box-notify-me">
        <form action="{{ $formActionUrl }}" class="form-autocomplete-search">
            <div class="inner-notify-me">
                <input class="form-control autocomplete-search" name="q" type="text" required placeholder="{{ __('Search...') }}" data-ajax-url="{{ $formAjaxUrl }}" autocomplete="off">
                <button class="btn btn-default hover-up icon-arrow-right text-nowrap" type="submit">
                    {{ __('Search') }}
                </button>
            </div>
            <div class="mt-2 text-sm search-message text-danger"></div>
        </form>
        <div class="search-results"></div>
    </div>
@endif

