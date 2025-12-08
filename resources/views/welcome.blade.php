@extends('frontend.layouts.app')


@section('content')
    <!-- HERO -->
    <header>
        <section class="relative h-screen w-full overflow-hidden">

            <!-- Background Video -->
            <video class="absolute inset-0 w-full h-full object-cover" autoplay muted loop playsinline>
                <source src="{{ asset('video.mp4') }}" type="video/mp4" />
            </video>

            <!-- Blur + Dark Overlay -->
            <div class="absolute inset-0 bg-black/40 backdrop-blur-md"></div>

            <!-- Content On Top -->
            <div class="relative z-10 flex items-center justify-center h-full">
                <h1 class="text-white text-5xl font-bold">
                    Pahar Theke Investment
                </h1>
            </div>

        </section>

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
    {{-- <section id="facts" class="py-5">
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
    </section> --}}

    <!-- FAQ -->
    <section id="faq" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-4">FAQ</h2>
            <div class="accordion faq" id="faqAccordion">

                @forelse ($faqs as $item)
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse{{ $item->id }}">{{ $item->question }}</button>
                        </h2>
                        <div id="collapse{{ $item->id }}" class="accordion-collapse collapse show"
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
@endsection

@push('scripts')
    <script>
        const video = document.getElementById('bgVideo');
        const btn = document.getElementById('toggleBtn');
        const icon = document.getElementById('icon');
        const btnText = document.getElementById('btnText');

        // start muted autoplay if allowed
        // button toggles muted playback
        btn.addEventListener('click', () => {
            if (video.paused) {
                video.play().catch(() => {
                    /* autoplay may be blocked if not user-initiated */
                });
                btn.setAttribute('aria-pressed', 'true');
                btnText.textContent = 'Pause';
                // change icon to pause
                icon.innerHTML = '<path d="M6 5h4v14H6zM14 5h4v14h-4z"/>';
            } else {
                video.pause();
                btn.setAttribute('aria-pressed', 'false');
                btnText.textContent = 'Play';
                icon.innerHTML = '<path d="M8 5v14l11-7z"/>';
            }
        });
    </script>
@endpush
