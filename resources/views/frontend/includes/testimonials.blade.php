<section class="testimonials">
    <div class="container">
        <h3 style="color: #242F9B; padding-top:40px;">@lang('messages.customer reviews')</h3>
        <div class="row">
            <div class="col-sm-12">
                <div id="customers-testimonials" class="owl-carousel">

                    @foreach($customerTestimonial as $testimonial)
                    <div class="item">
                        <div class="shadow-effect">
                            <img class="img-circle"
                                 src="{{ url('uploads/testimonials/'.$testimonial->image) }}"
                                 alt="">
                            <p> {!! $testimonial->feedback !!}
                            </p>
                        </div>
                        <div class="testimonial-name">{{ $testimonial->fullname }}
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</section>
