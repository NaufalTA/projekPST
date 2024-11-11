    <nav class="navbar navbar-expand-lg py-3 px-3" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">DesainLogo.id</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" aria-current="page"
                            href="{{ '/' }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('about') ? 'active' : '' }}"
                            href="{{ '/about' }}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('contact') ? 'active' : '' }}"
                            href="{{ '/contact' }}">Contact</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle {{ request()->is('article','galleries','service') ? 'active' : '' }}" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Service
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item {{ request()->is('service') ? 'active' : '' }}"
                                    href="/service">Service</a></li>
                            <li>
                                <hr class="dropdown-divider m-1">
                            </li>
                            <li><a class="dropdown-item {{ request()->is('galleries') ? 'active' : '' }}"
                                    href="/galleries">Galleries</a></li>
                            <li><a class="dropdown-item {{ request()->is('article') ? 'active' : '' }}"
                                    href="/article">Article</a></li>
                        </ul>
                    </li>
                </ul>
                @if (auth()->check())
                    <div class="gap-3 navbar-darkmode-icon">
                        <div class="dropdown me-3">
                            <a class="dropdown-toggle text-decoration-none text-white d-flex align-items-center" type="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <div class="d-flex align-items-center">
                                    <div class="rounded-circle" style="width: 2.5rem; height: 2.5rem;">
                                    @if (Auth::user()->image)
                                    <img src="{{ asset('storage/profil/'.Auth::user()->image) }}" alt="" class="img-fluid border border-white rounded-circle" style="object-fit: cover; object-position: center; width: 100%; height: 100%;">
                                    @else
                                    <img src="{{ asset('storage/default/defaultProfil.png') }}" alt="" class="img-fluid border border-white rounded-circle bg-white" style="object-fit: cover; object-position: center; width: 100%; height: 100%;">
                                    @endif
                                    </div>
                                    <h6 class="m-0 ps-2">{{ auth()->user()->username }}</h6>
                                </div>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/profil/{{ Auth::user()->username }}"><i class='bx bx-user'></i> Profil</a></li>
                                @if (Auth::user()->role == 'admin' | Auth::user()->role == 'owner')
                                <li><a class="dropdown-item" href="/companyDashboard"><i class='bx bxs-dashboard'></i>
                                    Dashboard</a></li>
                                @endif
                                <li><a class="dropdown-item" href="/logout"><i class='bx bx-log-out'></i> Logout</a>
                                </li>
                            </ul>
                        </div>
                        <div class="text-white" id="themeToggle">
                            <i class='bx bx-sun' id="themeIcon" style="cursor: pointer;"></i>
                        </div>
                    </div>
                @else
                    <div class="gap-3 navbar-darkmode-icon">
                        <a href="/login" class="btn btn-outline-light me-3 px-3 py-2">Login</a>
                        <div class="text-white" id="themeToggle">
                            <i class='bx bx-sun' id="themeIcon"></i>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </nav>
