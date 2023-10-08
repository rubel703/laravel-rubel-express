<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-light navbar-light">
        <a href="{{route('dashboard')}}" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>rubel-express</h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img class="rounded-circle" src="{{ asset('assets/backend-assets/img/my img.png') }}" alt=""
                    style="width: 40px; height: 40px;">
                <div
                    class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1">
                </div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0">Hossan Rubel</h6>
                <span>Admin</span>
            </div>
        </div>
        <div class="navbar-nav w-100">
            <a href="{{ route('dashboard') }}" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
            <a href="{{ route('widgets') }}" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Widgets</a>
            <a href="{{ route('addProduct') }}" class="nav-link "><i class="far fa-file-alt me-2"></i>Add Products</a>
            <a href="{{ route('viewProducts') }}" class="nav-link "><i class="far fa-file-alt me-2"></i>View Products</a>
            <a href="{{ route('view-contact') }}" class="nav-link "><i class="far fa-file-alt me-2"></i>View Contact</a>
        </div>
</div>
</nav>
</div>
