<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('/')}}style.css">
    {{-- icons bootstrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="d-flex">
        <div class="d-flex flex-column flex-shrink-0 min-vh-100 p-3 bg-danger-subtle" style="width: 280px;">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                <img src="{{ 'images/logo_rhscout.png'}}" width="40" alt="logo-perusahaan">
                </img>

                <span class="ms-2 fs-4 fw-bold fst-italic">RhScout<span class="span">Tech</span>.</span>
            </a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
                <li>
                    <a href="/dashboard" class="nav-link text-dark">
                        <svg class="bi pe-none me-2" width="2" height="2">
                            <i class="bi bi-speedometer2"></i>
                        </svg>
                        Dashboard
                    </a>
                </li>
                <li>
                    <a href="/admin" class="nav-link text-dark">
                        <svg class="bi pe-none me-2" width="2" height="2">
                            <i class="bi bi-people-fill"></i>
                        </svg>
                        Admin
                    </a>
                </li>
                <li>
                    <a href="/order" class="nav-link text-dark">
                        <svg class="bi pe-none me-2" width="2" height="2">
                            <i class="bi bi-table"></i>
                        </svg>
                        Orders
                    </a>
                </li>
                <li>
                    <a href="/product" class="nav-link text-dark">
                        <svg class="bi pe-none me-2" width="2" height="2">
                            <i class="bi bi-grid"></i>
                        </svg>
                        Products
                    </a>
                </li>
                <li>
                    <a href="/customer" class="nav-link text-dark">
                        <svg class="bi pe-none me-2" width="2" height="2">
                            <i class="bi bi-person-circle"></i>
                        </svg>
                        Customers
                    </a>
                </li>
            </ul>
            <hr>
            <div class="dropdown">
                <a href="#" class="d-flex align-items-center text-dark text-decoration-none dropdown-toggle"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="{{ 'images/profile.jpg '}}" alt="" width="32" height="32"
                        class="rounded-circle me-2">
                    <strong>Rudi Hartono, S.Kom,</strong>
                </a>
                <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                    <li><a class="dropdown-item" href="#">New project...</a></li>
                    <li><a class="dropdown-item" href="#">Settings</a></li>
                    <li><a class="dropdown-item" href="#">Profile</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">Sign out</a></li>
                </ul>
            </div>
        </div>
        <div class="container p-3">
            @yield('content')
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
