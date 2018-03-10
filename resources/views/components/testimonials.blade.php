<div class="owl-carousel content-slider">
    @foreach($testimonials as $testimonial)    
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="testimonial text-center">
                        <div class="testimonial-stars">
                            @for ($i=0; $i < 5; $i++)
                                @if ($i < $testimonial->stars)
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                @else
                                    <i class="fa fa-star-o" aria-hidden="true"></i> 
                                @endif
                            @endfor
                        </div>
                        <div class="separator"></div>
                        <div class="testimonial-body">
                            <blockquote>
                                <p>{{ words($testimonial->content, 30) }}</p>
                            </blockquote>
                            <div class="testimonial-reviewer">{{ $testimonial->author }}</div>
                            <div class="testimonial-channel">- via Facebook reviews</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>