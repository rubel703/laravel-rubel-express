@extends('frontend.master')

@section('product-page')
    <!-- Product Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="text-primary mb-3"><span class="fw-light text-dark">Our Natural</span> Hair Products</h1>
                <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis aliquet, erat non malesuada consequat, nibh erat tempus risus.</p>
            </div>
            <div class="row g-4">
                @foreach ($products as $single_product)
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                    <div class="product-item text-center border h-100 p-4">
                        <a href="{{route('details', $single_product->id)}}"><img class="img-fluid mb-4" src="{{asset('/')}}{{$single_product->image}}" alt=""></a>
                        <div class="mb-2">
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small>{{$single_product->rating}}</small>
                        </div>
                        <a href="{{route('details', $single_product->id)}}" class="h6 d-inline-block mb-2">{{$single_product->title}}</a>
                        <h6 class="text-warning mb-3">{{$single_product->description}}</h6>
                        <h5 class="text-primary mb-3">{{$single_product->price}}TK</h5>
                        <a href="" class="btn btn-outline-primary px-3">Add To Cart</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
<!-- Product End -->
@endsection