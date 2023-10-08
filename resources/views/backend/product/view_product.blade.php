@extends('backend.master')

@section('view-product-page')
    <h1 class="text-center text-success pt-4 ">View All Product: {{ $products->count() }}</h1>
    @if (Session::get('notification'))
        <div class="col-8 offset-2 ">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ Session::get('notification') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    @endif
    <hr>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col" class="text-danger" >ID</th>
                            <th class="text-info" >No.</th>
                            <th scope="col" class="text-info">Title</th>
                            <th scope="col" class="text-info">Price</th>
                            <th scope="col" class="text-info">Description</th>
                            <th scope="col" class="px-4 text-info">Image</th>
                            <th scope="col" class="text-info" >Rating</th>
                            <th scope="col" class="px-5 text-primary" >Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <th scope="row">{{ $product->id }}</th>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $product->title }}</td>
                                <td>{{ $product->price }}TK</td>
                                <td>{{ $product->description }}</td>
                                {{-- <td>{{ $product->image }}</td> --}}
                                <td><img src="{{asset('/')}}{{$product->image}}" alt=""height="90px"width="60px"></td>
                                <td>{{ $product->rating }}</td>
                                <td>
                                    <a href="{{ route('edit', $product->id) }}"class="text-white btn btn-success btn-md mb-1  ">Edit</a>
                                    <a href="{{ route('destroy', $product->id) }}"class="text-white btn btn-danger bt-sm ">Delete</a>
                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
