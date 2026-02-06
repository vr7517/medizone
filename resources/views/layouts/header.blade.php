<div class="topbar py-2 dark-background">
    <div class="container">
        <div class="row align-items-center text-center text-md-start">

            <!-- Contact Info -->
            <div class="col-12 col-md-6 mb-2 mb-md-0">
                <div class="d-flex flex-column flex-md-row justify-content-center justify-content-md-start align-items-center gap-2">
                    
                    <div>
                        <i class="bi bi-envelope me-1"></i>
                        <a href="mailto:medizonehospitaljbp@gmail.com" class="text-white text-decoration-none">
                            medizonehospitaljbp@gmail.com
                        </a>
                    </div>

                    <div>
                        <i class="bi bi-phone me-1"></i>
                        <span class="text-black">761-761-7080</span>
                    </div>

                </div>
            </div>

            <!-- Social Links -->
            <div class="col-12 col-md-6">
                <div class="d-flex justify-content-center justify-content-md-end gap-3">
                    <a href="#!" class="text-white"><i class="bi bi-twitter-x"></i></a>
                    <a href="#!" class="text-white"><i class="bi bi-facebook"></i></a>
                    <a href="#!" class="text-white"><i class="bi bi-instagram"></i></a>
                    <a href="#!" class="text-white"><i class="bi bi-linkedin"></i></a>
                </div>
            </div>

        </div>
    </div>
</div>


<div class="branding d-flex align-items-cente">

    <div class="container position-relative d-flex align-items-center justify-content-between">
        <a href="index.html" class="logo d-flex align-items-center">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            {{-- <img src="assets/img/logo.png" alt="">  --}}
            <h1 class="sitename"> <span class="text-primary">Medi</span>zone</h1>
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li>
                    <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">
                        Home
                    </a>
                </li>

                <li>
                    <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">
                        About
                    </a>
                </li>
                
                <li>
                    <a href="{{ route('doctors') }}"
                        class="{{ request()->routeIs('doctors') ? 'active' : '' }}">
                        Doctors
                    </a>
                </li>

                <li>
                    <a href="{{ route('specilities') }}"
                        class="{{ request()->routeIs('specilities') ? 'active' : '' }}">
                        Specilities
                    </a>
                </li>

                <li>
                    <a href="{{ route('services') }}" class="{{ request()->routeIs('services') ? 'active' : '' }}">
                        Services
                    </a>
                </li>
                 <li>
                    <a href="{{ route('facilities') }}" class="{{ request()->routeIs('facilities') ? 'active' : '' }}">
                        Facilities
                    </a>
                </li>

                <li>
                    <a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">
                        Contact
                    </a>
                </li>
            </ul>


            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

    </div>

</div>
