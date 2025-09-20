<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Khaas Food — Investment</title>

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
            <a class="navbar-brand" href="#">Pahar<span style="color:var(--green)">Theke</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMain">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navMain">
                <ul class="navbar-nav ms-auto align-items-lg-center">
                    <li class="nav-item"><a class="nav-link" href="#">Dashboard</a></li>
                    <li class="nav-item"><a class="nav-link" href="#plans">Investment Plans</a></li>
                    <li class="nav-item"><a class="nav-link" href="#facts">Fact Sheet</a></li>
                    <li class="nav-item"><a class="nav-link" href="#faq">FAQ</a></li>
                    <li class="nav-item ms-3"><a class="btn btn-outline-success btn-sm" href="#contact"><i
                                class="fa-brands fa-whatsapp"></i> WhatsApp</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- HERO -->
    <header class="hero">
        <div class="container">
            <div class="row gy-4 align-items-center">
                <div class="col-lg-7 text-center text-lg-start">
                    <h1 class="display-5">Why Invest in Pahar Theke?</h1>
                    <p class="lead text-white-50">Ethical, Shariah-compliant investment opportunities across sustainable
                        agri-processing, retail and distribution — trusted by consumers and producers alike.</p>

                    <ul class="lead-list">
                        <li><i class="fa-solid fa-check-circle"></i> Halal Investment — Ethical, Shariah-compliant
                            opportunities</li>
                        <li><i class="fa-solid fa-check-circle"></i> Safe Food Market Leader — Strong consumer trust &
                            demand</li>
                        <li><i class="fa-solid fa-check-circle"></i> High Growth Potential — Up to 25% ROI on selected
                            investments</li>
                        <li><i class="fa-solid fa-check-circle"></i> Sustainable & Zero-Emission Agro Processing Hub —
                            The future of food production</li>
                    </ul>

                    <div class="mt-4">
                        <a class="btn btn-cta btn-lg me-2" href="#plans"><i
                                class="fa-solid fa-hand-holding-dollar me-2"></i> Express Interest to Invest</a>
                        <a class="btn btn-outline-light btn-lg" href="#facts"><i
                                class="fa-solid fa-file-lines me-2"></i> View Fact Sheet</a>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title mb-3">Quick Highlights</h5>
                            <div class="row">
                                <div class="col-6">
                                    <small class="text-muted">Avg Basket</small>
                                    <div class="h5">BDT 1150</div>
                                </div>
                                <div class="col-6">
                                    <small class="text-muted">Orders / Day</small>
                                    <div class="h5">600+</div>
                                </div>
                                <div class="col-6 mt-3">
                                    <small class="text-muted">Unique Customers</small>
                                    <div class="h5">200k+</div>
                                </div>
                                <div class="col-6 mt-3">
                                    <small class="text-muted">Outlets</small>
                                    <div class="h5">18</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- row -->
        </div>
    </header>

    <!-- TRACTION -->
    <section class="py-5">
        <div class="container">
            <div class="section-title">Traction</div>

            <div class="row g-4 justify-content-center">

                @forelse ($tractions as $item)
                    <div class="col-6 col-md-3">
                        <div class="stat-card">
                            <div class="stat-circle"><i class="fa-solid fa-cart-shopping"></i></div>
                            <div class="stat-value">{{ $item->title }}</div>
                            <div class="stat-label">{{ $item->subtitle }}</div>
                        </div>
                    </div>
                @empty
                    <p class="text-center">No Traction</p>
                @endforelse





            </div>
        </div>
    </section>

    <!-- PLANS -->
    <section id="plans" class="py-4 bg-light">
        <div class="container">
            <h2 class="text-center mb-4" style="color:#3b2b5a;">Choose Your Investment Plan</h2>

            @forelse ($plans as $item)
                <div class="list-group">


                    <div
                        class="list-group-item investment d-flex flex-column flex-md-row justify-content-between align-items-start">
                        <div>
                            <div class="plan-title">{{ $item->title }}</div>
                            <div class="plan-desc mt-1">{{ $item->subtitle }}</div>
                        </div>
                        <div class="mt-3 mt-md-0">
                            <a class="btn btn-outline-success btn-sm" href="#"><i
                                    class="fa-solid fa-circle-info me-2"></i> View Details</a>
                        </div>
                    </div>

                </div>
            @empty
                <p class="text-center">No Plan Found</p>
            @endforelse



            <div class="text-center mt-4">
                <a class="btn btn-cta btn-lg" href="#contact"><i class="fa-solid fa-envelope me-2"></i>Express
                    Interest to Invest</a>
            </div>
        </div>
    </section>

    <!-- FACT SHEET -->
    <section id="facts" class="py-5">
        <div class="container">
            <h2 class="text-center mb-4">Fact Sheet Regarding Investment</h2>
            <div class="row g-3">
                <div class="col-6 col-md-4">
                    <div class="fact-chip">
                        <i class="fa-solid fa-money-bill-transfer fa-2x text-success"></i>
                        <h5 class="mt-2">BDT 153.8 Million</h5>
                        <small class="text-muted">Investments Raised Over The Years</small>
                    </div>
                </div>

                <div class="col-6 col-md-4">
                    <div class="fact-chip">
                        <i class="fa-solid fa-wallet fa-2x text-success"></i>
                        <h5 class="mt-2">BDT 20.6 Million</h5>
                        <small class="text-muted">Profit Distributed Over The Years</small>
                    </div>
                </div>

                <div class="col-6 col-md-4">
                    <div class="fact-chip">
                        <i class="fa-solid fa-people-group fa-2x text-success"></i>
                        <h5 class="mt-2">2000+ Farmers</h5>
                        <small class="text-muted">Benefited From Our Projects</small>
                    </div>
                </div>

                <div class="col-6 col-md-4">
                    <div class="fact-chip">
                        <i class="fa-solid fa-cubes-stacked fa-2x text-success"></i>
                        <h5 class="mt-2">3618 Metric Tons</h5>
                        <small class="text-muted">Agri-produce Purchased</small>
                    </div>
                </div>

                <div class="col-6 col-md-4">
                    <div class="fact-chip">
                        <i class="fa-solid fa-hand-holding-dollar fa-2x text-success"></i>
                        <h5 class="mt-2">BDT 122 Million</h5>
                        <small class="text-muted">Investment Repaid To Our Investors</small>
                    </div>
                </div>

                <div class="col-6 col-md-4">
                    <div class="fact-chip">
                        <i class="fa-solid fa-chart-line fa-2x text-success"></i>
                        <h5 class="mt-2">3-5x Growth</h5>
                        <small class="text-muted">Farmers Income</small>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section id="faq" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-4">FAQ</h2>
            <div class="accordion faq" id="faqAccordion">

                @forelse ($faqs as $item)
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne">{{$item->question}}</button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show"
                            data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Khaas Food combines a Shariah-compliant model, proven market demand, diversified
                                projects
                                and a track record of returns — backed by transparent reporting.
                            </div>
                        </div>
                    </div>
                @empty
                    <p class="text-center">No FAQ Found</p>
                @endforelse




            </div>
        </div>
    </section>

    <!-- CONTACT / FOOTER -->
    <footer id="contact">
        <div class="container">
            <div class="row py-4 gy-4">
                <!-- Column 1: Brand & Contact -->
                <div class="col-md-4">
                    <h5 class="mb-2" style="color:var(--green-dark);font-weight:700;">Pahar<span style="color:var(--green)">Theke</span></h5>
                    <p class="text-muted mb-2">Ethical, Shariah-compliant agri-tech investments for a sustainable future.</p>
                    <p class="mb-1"><i class="fa-solid fa-phone me-2 text-success"></i> <a href="tel:09612000255" class="text-decoration-none text-dark">09612000255</a></p>
                    <p class="mb-0"><i class="fa-solid fa-envelope me-2 text-success"></i> <a href="mailto:investment@khaasfood.com" class="text-decoration-none text-dark">investment@khaasfood.com</a></p>
                </div>
                <!-- Column 2: Office & Links -->
                <div class="col-md-4">
                    <h6 class="mb-2" style="color:var(--accent);font-weight:600;">Head Office</h6>
                    <p class="small text-muted mb-3">Floor - 8, 15/1/2, Biswas Shawpnil, Jiggata, Dhaka-1209</p>
                    <div>
                        <a href="#plans" class="text-decoration-none me-3 text-success">Investment Plans</a>
                        <a href="#facts" class="text-decoration-none me-3 text-success">Fact Sheet</a>
                        <a href="#faq" class="text-decoration-none text-success">FAQ</a>
                    </div>
                </div>
                <!-- Column 3: App & Copyright -->
                <div class="col-md-4 text-md-end">
                    <a class="btn btn-success mb-3" href="#"><i class="fa-brands fa-google-play me-2"></i>Get App</a>
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
</body>

</html>
