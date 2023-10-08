@extends('backend.master')

@section('addProduct-page')
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4 ">
            <h1 class="text-center">Add Product</h1>
            <hr class="text-primary  ">
            {{-- <span class="text-success text-center ">{{session()->get('notification')}}</span> --}}
            {{-- <span class="text-success text-center ">{{Session::get('notification')}}</span> --}}
            <div class="col-8 offset-2 ">
                @if (Session::get('notification'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ Session::get('notification') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <form method="POST" action="{{ route('pushProduct') }}" enctype="multipart/form-data">
                    @csrf {{-- security purpose --}}
                    <div class="mb-3">
                        <label for="title" class="form-label">Title*</label>
                        <input type="text" class="form-control" name="title" id="title" aria-describedby="">
                        @error('title')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <input type="text" class="form-control" name="description" id="description" aria-describedby="">
                        @error('description')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Price*</label>
                        <input type="number" class="form-control"name="price" id="price" aria-describedby="">
                        @error('price')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                    </div>
                    <div class="mb-3">
                        <label for="img" class="form-label">Image</label>
                        <input type="file" class="form-control" name="image" id="img" aria-describedby="">
                        @error('image')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                    </div>
                    <div class="mb-3">
                        <label for="rating" class="form-label">Rating</label>
                        <input type="number" class="form-control" name="rating" id="rating" aria-describedby="">
                        @error('rating')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Add Product</button>
                </form>

            </div>
        </div>
    </div>
@endsection
