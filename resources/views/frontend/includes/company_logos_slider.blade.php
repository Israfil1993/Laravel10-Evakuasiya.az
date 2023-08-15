<section id="Second">
    <div class="container">
        <div class="second-section">
            <div class="owl-carousel owl-theme carousel_sirket">
                @foreach($logosliders as $logoslider)
                <div class="item item_in"><img src="{{ url($logoslider->image) }}" alt=""></div>
                @endforeach

            </div>
        </div>
    </div>
</section>
