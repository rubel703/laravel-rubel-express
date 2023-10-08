@extends('frontend.master')

@section('contact-page')
    <div class="container-fluid pt-4 px=4">
        <div class="row g-4 ">
            <h1 class="text-center">Enter Your Information</h1>
            <div class="col-8 offset-2 ">
            @if (Session::get('notification2'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{Session::get('notification2')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            @endif
                <form method="POST" action="{{ route('msg') }}" onsubmit="return submitForm(this);">
                    @csrf {{-- security purpose --}}
                    <div class="mb-3">
                        <label for="name" class="form-label">First Name</label>
                        <input type="text" class="form-control" name="fname" id="name" aria-describedby=""
                            required>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Last Name</label>
                        <input type="text" class="form-control" name="lname" id="name" aria-describedby=""
                            required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" id="email" aria-describedby=""
                            required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">message</label>
                        <input type="text" class="form-control"name="message" id="message" aria-describedby="">
                    </div>

                    <button type="submit" class="btn btn-primary">Send Message</button>
                </form>
            </div>
            </div>
        </div>
    </div>
@endsection




{{-- <script>
    function submitForm(form) {
        swal({
                title: 'Are you sure??',
                text: 'This form will be submitted',
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((isOkay) => {
                if (isOkay) {
                    form.sumbit();
                }
            });
        return false;
    }
</script> --}}
