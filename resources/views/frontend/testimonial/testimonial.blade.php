@extends('frontend.master')

@section('testimonial-page')
    <!-- Testimonial Start -->
<div class="container-fluid testimonial bg-primary my-5 py-5">
    <div class="container text-white py-5">
        <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 600px;">
            <h1 class="text-white mb-3">Our Customer Said <span class="fw-light text-dark">About Our Natural Shampoo</span></h1>
            <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis aliquet, erat non malesuada consequat, nibh erat tempus risus.</p>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="owl-carousel testimonial-carousel wow fadeIn" data-wow-delay="0.1s">
                    <div class="testimonial-item text-center" data-dot="1">
                        <img class="img-fluid border p-2" src="{{asset('assets/frontend-assets/img/testimonial-1.jpg')}}" alt="">
                        <h5 class="fw-light lh-base text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis aliquet, erat non malesuada consequat, nibh erat tempus risus, vitae porttitor purus nisl vitae purus. Praesent tristique odio ut rutrum pellentesque. Fusce eget molestie est, at rutrum est. Nullam scelerisque libero nunc, vitae ullamcorper elit volutpat ut.</h5>
                        <h5 class="mb-1">Client Name</h5>
                        <h6 class="fw-light text-white fst-italic mb-0">Profession</h6>
                    </div>
                    <div class="testimonial-item text-center" data-dot="2">
                        <img class="img-fluid border p-2" src="{{asset('assets/frontend-assets/img/testimonial-2.jpg')}}" alt="">
                        <h5 class="fw-light lh-base text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis aliquet, erat non malesuada consequat, nibh erat tempus risus, vitae porttitor purus nisl vitae purus. Praesent tristique odio ut rutrum pellentesque. Fusce eget molestie est, at rutrum est. Nullam scelerisque libero nunc, vitae ullamcorper elit volutpat ut.</h5>
                        <h5 class="mb-1">Client Name</h5>
                        <h6 class="fw-light text-white fst-italic mb-0">Profession</h6>
                    </div>
                    <div class="testimonial-item text-center" data-dot="3">
                        <img class="img-fluid border p-2" src="{{asset('assets/frontend-assets/img/testimonial-3.jpg')}}" alt="">
                        <h5 class="fw-light lh-base text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis aliquet, erat non malesuada consequat, nibh erat tempus risus, vitae porttitor purus nisl vitae purus. Praesent tristique odio ut rutrum pellentesque. Fusce eget molestie est, at rutrum est. Nullam scelerisque libero nunc, vitae ullamcorper elit volutpat ut.</h5>
                        <h5 class="mb-1">Client Name</h5>
                        <h6 class="fw-light text-white fst-italic mb-0">Profession</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->
@endsection