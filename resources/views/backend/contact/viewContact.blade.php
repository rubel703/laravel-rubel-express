@extends('backend.master')

@section('view-all-contact')
    <h1 class="text-center text-primary pt-4 ">View All Contact: {{ $contact->count() }}</h1>
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
                            <th scope="col">ID</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Message</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($contact as $contacts)
                            <tr>
                                <th scope="row">{{ $contacts->id }}</th>
                                {{-- <td>{{ $loop->iteration }}</td> --}}
                                <td>{{ $contacts->fname }}</td>
                                <td>{{ $contacts->lname }}</td>
                                <td>{{ $contacts->email }}</td>
                                <td>{{ $contacts->message }}</td>
                                <td>
                                    <a
                                        href="{{ route('delete-message', $contacts->id) }}"class="text-white btn btn-danger bt-sm">Delete</a>
                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
