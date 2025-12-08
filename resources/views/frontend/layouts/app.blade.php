<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Pahar Theke — Investment</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">

    <style>
        :root {
            --green-dark: #0b6b3a;
            --green: #1fa26a;
            --muted-bg: #f6f7f8;
            --accent: #6f2d9f;
        }

        body {
            font-family: Inter, system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial;
            color: #222;
            background: #fff
        }

        /* NAV */
        .navbar-brand {
            font-weight: 700;
            color: var(--green-dark);
        }

        /* HERO */
        .hero {
            background: linear-gradient(180deg, rgba(8, 64, 36, 0.9) 0%, rgba(9, 90, 49, 0.85) 60%), url('assets/hero-bg.jpg') center/cover no-repeat;
            color: #fff;
            padding: 64px 0;
        }

        .hero h1 {
            font-weight: 800;
            letter-spacing: -0.5px;
        }

        .hero .lead-list {
            list-style: none;
            padding: 0;
            margin: 1rem 0 0;
            color: #d7efe3;
        }

        .hero .lead-list li {
            margin: .5rem 0;
            display: flex;
            gap: .6rem;
            align-items: flex-start;
        }

        .hero .lead-list .fa-check-circle {
            color: #d7efe3;
            opacity: .95;
            margin-top: 3px
        }

        .hero .btn-cta {
            background: linear-gradient(90deg, var(--green), #0b6b3a);
            color: #fff;
            border: none;
        }

        /* TRACTION */
        .section-title {
            font-weight: 700;
            color: var(--accent);
            text-align: center;
            margin-bottom: 1.5rem;
            font-size: 1.6rem;
        }

        .stat-card {
            background: var(--muted-bg);
            border-radius: 12px;
            padding: 18px;
            text-align: center;
        }

        .stat-circle {
            width: 64px;
            height: 64px;
            border-radius: 50%;
            background: var(--green-dark);
            color: #fff;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            margin-bottom: .6rem;
        }

        .stat-value {
            font-weight: 700;
            color: #1b2b3a;
        }

        .stat-label {
            font-size: .85rem;
            color: #5c6b7a
        }

        /* PLANS */
        .list-group-item.investment {
            background: #fff;
            border: 1px solid #e9ecef;
            border-radius: 8px;
            margin-bottom: 12px;
        }

        .investment .plan-title {
            font-weight: 700;
            letter-spacing: 0.2px;
        }

        .investment .plan-desc {
            color: #6b7280;
            font-size: .95rem;
        }

        .btn-outline-custom {
            border-color: rgba(11, 107, 58, 0.12);
            color: var(--green-dark);
            background: transparent;
        }

        /* FACT SHEET */
        .fact-chip {
            background: #fff;
            border-radius: 10px;
            border: 1px solid #e9ecef;
            padding: 18px;
            text-align: center;
        }

        /* FAQ */
        .faq .accordion-button:not(.collapsed) {
            background: var(--green-dark);
            color: #fff;
        }

        /* FOOTER */
        footer {
            background: #f7f8f9;
            padding: 40px 0;
            margin-top: 36px;
        }

        @media(min-width:992px) {
            .hero {
                padding: 110px 0;
            }
        }
    </style>
</head>

<body>

    <!-- NAV -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom">
        <div class="container">
            <a class="navbar-brand" href="{{route('home')}}">Pahar<span style="color:var(--green)">Theke</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMain">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navMain">
                <ul class="navbar-nav ms-auto align-items-lg-center">
                    <li class="nav-item"><a class="nav-link" href="{{route('home')}}">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#plans">Investment Plans</a></li>
                    <li class="nav-item"><a class="nav-link" href="#facts">Fact Sheet</a></li>
                    <li class="nav-item"><a class="nav-link" href="#faq">FAQ</a></li>
                    <li class="nav-item ms-3"><a class="btn btn-outline-success btn-sm" href="#contact"><i
                                class="fa-brands fa-whatsapp"></i> WhatsApp</a></li>
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')


    @php
        $settings = \App\Models\GeneralSetting::first();
        //dd($settings);

    @endphp

    <!-- CONTACT / FOOTER -->
    <footer id="contact">
        <div class="container">
            <div class="row py-4 gy-4">
                <!-- Column 1: Brand & Contact -->
                <div class="col-md-4">
                    <h5 class="mb-2" style="color:var(--green-dark);font-weight:700;">{{$settings->site_name}}</span></h5>
                    <p class="text-muted mb-2">{{$settings->details}}</p>
                    <p class="mb-1"><i class="fa-solid fa-phone me-2 text-success"></i> <a href="tel:09612000255" class="text-decoration-none text-dark">{{$settings->phone}}</a></p>
                    <p class="mb-0"><i class="fa-solid fa-envelope me-2 text-success"></i> <a href="mailto:investment@khaasfood.com" class="text-decoration-none text-dark">{{$settings->email}}</a></p>
                </div>
                <!-- Column 2: Office & Links -->
                <div class="col-md-4">
                    <h6 class="mb-2" style="color:var(--accent);font-weight:600;">Head Office</h6>
                    <p class="small text-muted mb-3">{{$settings->address}}</p>
                    <div>
                        <a href="#plans" class="text-decoration-none me-3 text-success">Investment Plans</a>
                        <a href="#facts" class="text-decoration-none me-3 text-success">Fact Sheet</a>
                        <a href="#faq" class="text-decoration-none text-success">FAQ</a>
                    </div>
                </div>
                <!-- Column 3: App & Copyright -->
                <div class="col-md-4 text-md-end">
                    {{-- <a class="btn btn-success mb-3" href="#"><i class="fa-brands fa-google-play me-2"></i>Get App</a> --}}
                    <div class="mt-2 small text-muted">&copy; {{ date('Y') }} PaharTheke. All rights reserved.</div>
                    <div class="mt-2">
                        <a href="#" class="text-success me-2"><i class="fa-brands fa-facebook fa-lg"></i></a>
                        <a href="#" class="text-success me-2"><i class="fa-brands fa-linkedin fa-lg"></i></a>
                        <a href="#" class="text-success"><i class="fa-brands fa-whatsapp fa-lg"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    @stack('scripts')
</body>

</html>
