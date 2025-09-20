@extends('frontend.layouts.app')


@section('content')
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
                        <a class="btn btn-outline-light btn-lg" href="#facts"><i class="fa-solid fa-file-lines me-2"></i>
                            View Fact Sheet</a>
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
                            <a class="btn btn-outline-success btn-sm" href="{{ route('public.plan.show', $item->id) }}"><i
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
                                data-bs-target="#collapseOne">{{ $item->question }}</button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
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
@endsection
