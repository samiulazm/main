<section class="section-box">
    <div class="container mb-20 mt-140">
        <div class="bdrd-58 box-gray-100 icon-wave"
            style="
                @if ($bgColor = $shortcode->bg_color)
                    background-color: {{ $bgColor }};
                @endif
            "
        >
            @if ($image = $shortcode->image)
                <span class="icon-wave-before" style="background: url({{ RvMedia::getImageUrl($image) }})"></span>
            @endif

            <div class="row">
                <div class="col-lg-12 mb-60">
                    @if ($highlight = $shortcode->highlight)
                        <span class="text-body-capitalized text-uppercase">{!! BaseHelper::clean($highlight) !!}</span>
                    @endif

                    @if ($title = $shortcode->title)
                        <h2 class="text-heading-3 color-gray-900 mt-10">{!! BaseHelper::clean($title) !!}</h2>
                    @endif

                    @if ($subtitle = $shortcode->subtitle)
                        <p class="text-body-text color-gray-600 mt-20">{!! BaseHelper::clean($subtitle) !!}</p>
                    @endif
                </div>
                <div class="col-lg-4 mb-40">
                    @if ($name = $shortcode->name)
                        <h4 class="text-heading-6 color-gray-900 icon-home mb-10 mt-10">{!! BaseHelper::clean($name) !!}</h4>
                    @endif

                    @if ($address = $shortcode->address)
                        <p class="text-body-text color-gray-600">{!! BaseHelper::clean($address) !!}</p>
                    @endif

                    @if ($phone = $shortcode->phone)
                        <p class="text-body-text color-gray-600" dir="ltr"><a href="tel:{{ $phone }}">{!! BaseHelper::clean($phone) !!}</a></p>
                    @endif

                    @if ($email = $shortcode->email)
                        <p class="text-body-text color-gray-600"><a href="mailto:{{ $email }}">{!! BaseHelper::clean($email) !!}</a></p>
                    @endif
                </div>
                <div class="col-lg-8">
                    {!! $form
                        ->setFormInputClass('')
                        ->renderForm()
                    !!}
                </div>
            </div>
        </div>
    </div>
</section>
