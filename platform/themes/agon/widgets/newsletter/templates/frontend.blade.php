@if (is_plugin_active('newsletter'))
    <div class="sidebar sidebar-gray">
        <div class="widget-title none-bd">
            <h3 class="text-heading-5 color-gray-900">{!! BaseHelper::clean($config['title']) !!}</h3>
        </div>
        <div class="widget-content">
            <p class="text-body-text color-gray-500">{!! BaseHelper::clean($config['subtitle']) !!}</p>
            {!! $form->renderForm() !!}
        </div>
    </div>
@endif
