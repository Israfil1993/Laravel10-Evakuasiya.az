
<section id="Third">
    <div class="container">
        <h2>@lang('messages.our services')</h2>
        <div class="section-third">
            <div class="row">
                @foreach($services as $service)
                <div class="col-lg-4 col-md-4 {{ $service->id }}">

                    <a href="{{ route('frontend.services', ['lang' => app()->getLocale() , $service->id]) }}">
                        <div class="xidmet_l xidmet"><i class="{{ $service->icon }}"></i><span>{{ $service->title }}</span></div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
