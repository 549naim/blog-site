{{-- <div class="row align-items-center bg-light px-lg-5">
    <div class="col-12 col-md-8">
        <div class="d-flex justify-content-between">
            <div class="bg-primary text-white text-center py-2" style="width: 100px;">Tranding</div>
            <div class="owl-carousel owl-carousel-1 tranding-carousel position-relative d-inline-flex align-items-center ml-3"
                style="width: calc(100% - 100px); padding-left: 90px;">
                <div class="text-truncate"><a class="text-secondary" href="">Labore sit justo amet eos sed, et
                        sanctus dolor diam eos</a></div>
                <div class="text-truncate"><a class="text-secondary" href="">Gubergren elitr amet eirmod et lorem
                        diam elitr, ut est erat Gubergren elitr amet eirmod et lorem diam elitr, ut est erat</a></div>
            </div>
        </div>
    </div>
    <div class="col-md-4 text-right d-none d-md-block">
        @php
            $date = date('Y-m-d');
            $day = date('l', strtotime($date));
            $month = date('F', strtotime($date));
            $day = date('d', strtotime($date));
            $year = date('Y', strtotime($date));
        @endphp
        <p class="m-0">{{ $day }}, {{ $month }}, {{ $year }}</p>
    </div>
</div> --}}
<div class="row align-items-center py-2 px-lg-5">
    <div class="col-lg-4">
        <a href="" class="navbar-brand d-none d-lg-block">
            <h1 class="m-0 display-5 text-uppercase"><span class="text-primary">Coinpredict</span>Hub</h1>
        </a>
    </div>
    <div class="col-lg-8 text-center text-lg-right">
        <img class="img-fluid" src="{{ asset('front/img/ads-700x70.jpg') }}" alt="">
    </div>
</div>

<!-- Topbar End -->


<!-- Navbar Start -->
<div class="container-fluid p-0 mb-3">
    <nav class="navbar navbar-expand-lg bg-light navbar-light py-2 py-lg-0 px-lg-5">
        <a href="" class="navbar-brand d-block d-lg-none">
            <h1 class="m-0 display-5 text-uppercase"><span class="text-primary">>Coin predict</span>Hub</h1>
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between px-0 px-lg-3" id="navbarCollapse">
            <div class="navbar-nav mr-auto py-0">
                <a href="index.html" class="nav-item nav-link active">Home</a>
                {{-- <a href="category.html" class="nav-item nav-link">Categories</a> --}}
                {{-- <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Categories</a>
                    <div class="dropdown-menu rounded-0 m-0">
                        <a href="#" class="dropdown-item">Menu item 1</a>
                       
                    </div>
                </div> --}}
                {{-- <a href="contact.html" class="nav-item nav-link">Contact</a> --}}
            </div>
            <div class="input-group ml-auto" style="width: 100%; max-width: 300px;">
                <input type="text" class="form-control" placeholder="Keyword">
                <div class="input-group-append">
                    <button class="input-group-text text-secondary"><i class="fa fa-search"></i></button>
                </div>
            </div>
        </div>
    </nav>
</div>
<!-- Navbar End -->