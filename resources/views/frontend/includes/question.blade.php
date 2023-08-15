<section id="Question">
    <div class="container">
        <h3>@lang('messages.frequently asked questions')</h3>
        <div class="row">
            <div class="col-lg-12">

                <div class="tabs">
                    @foreach($faqs as  $faq)
                    <div class="tab">
                        <input type="checkbox" id="{{ $faq->id }}">
                        <label class="tab-label" for="{{ $faq->id }}"> {{ $faq->title }}</label>
                        <div class="tab-contentt">
                            {!! $faq->description  !!}

                        </div>
                    </div>
                    @endforeach

                </div>

            </div>

        </div>

    </div>
</section>
