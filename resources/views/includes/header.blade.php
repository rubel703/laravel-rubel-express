 <!-- Navbar Start -->
 <div class="container-fluid sticky-top">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light p-0">
            <a href="{{route('home')}}" class="navbar-brand">
                <h2 class="text-white">rubel-express</h2>
            </a>
            <button type="button" class="navbar-toggler ms-auto me-0" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
           <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto">
                <a href="{{route('home')}}" class="nav-item nav-link active"style="color: black">Home</a>
                <a href="{{route('about')}}" class="nav-item nav-link">About</a>
                <a href="{{route('product')}}" class="nav-item nav-link">Products</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu bg-light mt-2">
                        <a href="{{route('feature')}}" class="dropdown-item">Features</a>
                        <a href="{{route('how-to-use')}}" class="dropdown-item">How To Use</a>
                        <a href="{{route('testimonial')}}" class="dropdown-item">Testimonial</a>
                        <a href="{{route('blog')}}" class="dropdown-item">Blog Articles</a>
                        <a href="{{route('404-page')}}" class="dropdown-item">404 Page</a>
                    </div>
                </div>
                <a href="{{route('contact')}}" class="nav-item nav-link">Contact</a>
            </div>
            <a href="" class="btn btn-dark py-2 px-4 d-none d-lg-inline-block">Shop Now</a>
        </div>
        </nav>
    </div>
</div>
<!-- Navbar End -->