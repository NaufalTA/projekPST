<div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary">
    <div class="offcanvas-md offcanvas-start bg-body-tertiary" tabindex="-1" id="sidebarMenu"
        aria-labelledby="sidebarMenuLabel" style="height: 50rem;">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="sidebarMenuLabel">Company name</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu"
                aria-label="Close"></button>
        </div>
        <div class="offcanvas-body d-md-flex flex-column p-0 py-4 overflow-y-auto">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2 {{ request()->is('companyDashboard') ? 'active' : '' }}" aria-current="page" href="/companyDashboard">
                        <i class='bx bx-home'></i>
                        Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2 {{ request()->is('companyDashboard/users*') ? 'active' : '' }}" href="/companyDashboard/users">
                        <i class='bx bx-user'></i>
                        Users
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2 {{ request()->is('companyDashboard/articles*') ? 'active' : '' }}" href="/companyDashboard/articles">
                        <i class='bx bx-news'></i>
                        Articles
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2 {{ request()->is('companyDashboard/galleries*') ? 'active' : '' }}" href="/companyDashboard/galleries">
                        <i class='bx bx-image-alt'></i>
                        Galleries
                    </a>
                </li>
            </ul>

            <hr class="my-3">

            <ul class="nav flex-column mb-auto">
                <li class="nav-item">
                    <a class="dropdown-toggle nav-link d-flex align-items-center" type="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <div class="d-flex align-items-center gap-2">
                            <div class="rounded-circle bg-white" style="width: 2rem; height: 2rem;">
                                @if (Auth::user()->image)
                                    <img src="{{ asset('storage/profil/' . Auth::user()->image) }}" alt=""
                                        class="img-fluid rounded-circle"
                                        style="object-fit: cover; object-position: center; width: 100%; height: 100%;">
                                @else
                                    <img src="{{ asset('storage/default/defaultProfil.png') }}" alt=""
                                        class="img-fluid border border-white rounded-circle bg-white"
                                        style="object-fit: cover; object-position: center; width: 100%; height: 100%;">
                                @endif
                            </div>
                            {{ auth()->user()->username }}
                        </div>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/profil/{{ auth()->user()->username }}"><i
                                    class='bx bx-user'></i> Profil</a></li>
                        <li><a class="dropdown-item" href="/"><i class='bx bxs-dashboard'></i>
                                Main Page</a></li>
                        <li><a class="dropdown-item" href="/logout"><i class='bx bx-log-out'></i> Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
