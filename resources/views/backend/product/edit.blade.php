@extends('backend.master')

@section('edit-page')
<div class="container-fluid pt-4 px-4">
    <div class="row g-4 ">
        <h1 class="text-center">Edit Product</h1>
        {{-- <span class="text-success text-center ">{{session()->get('notification')}}</span> --}}
        {{-- <span class="text-success text-center ">{{Session::get('notification')}}</span> --}}
        <div class="col-8 offset-2 ">
            @if (Session::get('notification'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ Session::get('notification') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <form method="POST" action="{{ route('update',$products->id) }}" enctype="multipart/form-data">
                @csrf {{-- security purpose --}}
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" name="title" id="title" value="{{$products->title}}" aria-describedby="">
                    @error('title')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <input type="text" class="form-control" name="description" id="description" value="{{$products->description}}" aria-describedby="">
                    @error('description')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="number" class="form-control"name="price" id="price"value="{{$products->price}}" aria-describedby="">
                    @error('price')
                    <span class="text-danger">{{$message}}</span>
                @enderror
                </div>
                <div class="mb-3">
                    <div class="form-label"><img src="{{asset('/')}}{{$products->image}}" alt=""height="90px"width="60px"></div>
                    <label for="img" class="form-label">Image</label>
                    <input type="file" class="form-control" name="image" id="img" value="{{$products->image}}" aria-describedby="">
                    @error('image')
                    <span class="text-danger">{{$message}}</span>
                @enderror
                </div>
                <div class="mb-3">
                    <label for="rating" class="form-label">Rating</label>
                    <input type="number" class="form-control" name="rating" id="rating" value="{{$products->rating}}" aria-describedby="">
                    @error('rating')
                    <span class="text-danger">{{$message}}</span>
                @enderror
                </div>

                <button type="submit" class="btn btn-primary">Update Product</button>
            </form>

        </div>
    </div>
</div>
@endsection