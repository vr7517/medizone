<div class="topbar py-2 dark-background">
    <div class="container">
        <div class="row align-items-center text-center text-md-start">

            <!-- Contact Info -->
            <div class="col-12 col-md-6 mb-2 mb-md-0">
                <div
                    class="d-flex flex-column flex-md-row justify-content-center justify-content-md-start align-items-center gap-2">

                    <div>
                        <i class="bi bi-envelope me-1 text-white"></i>
                        <a href="mailto:medizonehospitaljbp@gmail.com" class="text-white text-decoration-none small">
                            medizonehospitaljbp@gmail.com
                        </a>
                    </div>

                    <div>
                        <i class="bi bi-phone me-1 text-white"></i>
                        <span class="text-white small">761-761-7080</span>
                    </div>

                </div>
            </div>

            <!-- Social Links -->
            <div class="col-12 col-md-6">
                <div class="d-flex justify-content-center justify-content-md-end gap-3">
                    {{-- <a href="#!" class="text-white"><i class="bi bi-twitter-x"></i></a> --}}
                    <a href="https://www.facebook.com/profile.php?id=100090797076745" class="text-white"><i class="bi bi-facebook"></i></a>
                    <a href="https://www.instagram.com/medizonehospitaljbp/?hl=en" class="text-white"><i class="bi bi-instagram"></i></a>
                    <a href="https://wa.me/917617617080" class="text-white"><i class="bi bi-whatsapp"></i></a>
                </div>
            </div>

        </div>
    </div>
</div>



<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm branding">
   <div class="container-fluid px-3">

        <a class="navbar-brand d-flex align-items-center gap-2 fw-bold" href="{{ route('home') }}">

            <img src="{{ asset('assets/img/logo.jpeg') }}" alt="Medizone Logo"
                style="height: 40px; width: auto; object-fit: contain;">

            <span class="fs-4">
                <span class="text-primary">MEDI</span>ZONE
            </span>

        </a>

        <!-- Mobile Action Buttons -->
       <div class="d-flex align-items-center d-lg-none gap-2 flex-nowrap">

            <a href="https://wa.me/917617617080" class="btn btn-success btn-sm rounded-pill">
                <i class="bi bi-whatsapp"></i>
            </a>

            <a href="tel:7617617080" class="btn btn-primary btn-sm rounded-pill">
                <i class="bi bi-telephone"></i>
            </a>

            <!-- Toggle -->
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarContent">
                <span class="navbar-toggler-icon"></span>
            </button>

        </div>
        <!-- Navbar Links -->
     <div class="collapse navbar-collapse bg-white p-3 p-lg-0 mt-3 mt-lg-0 " id="navbarContent">

            <ul class="navbar-nav ms-auto text-center text-lg-start">

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('home') ? 'active fw-bold text-primary' : '' }}"
                        href="{{ route('home') }}">
                        Home
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('about') ? 'active fw-bold text-primary' : '' }}"
                        href="{{ route('about') }}">
                        About
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('doctors') ? 'active fw-bold text-primary' : '' }}"
                        href="{{ route('doctors') }}">
                        Doctors
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('specilities') ? 'active fw-bold text-primary' : '' }}"
                        href="{{ route('specilities') }}">
                        Specialities
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('services') ? 'active fw-bold text-primary' : '' }}"
                        href="{{ route('services') }}">
                        Services
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('facilities') ? 'active fw-bold text-primary' : '' }}"
                        href="{{ route('facilities') }}">
                        Facilities
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('contact') ? 'active fw-bold text-primary' : '' }}"
                        href="{{ route('contact') }}">
                        Contact
                    </a>
                </li>

            </ul>
        </div>

    </div>
</nav>
