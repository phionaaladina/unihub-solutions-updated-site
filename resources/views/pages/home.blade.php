@extends('layouts.app')

@section('title', 'Home')
@section('description', 'UniHub Solutions Uganda — software, ICT equipment, installation and training in Kampala. We build it. We supply it. We keep it running.')

@php
    $arrow = '<svg viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><path fill-rule="evenodd" d="M3 10a.75.75 0 0 1 .75-.75h10.638L10.23 5.29a.75.75 0 1 1 1.04-1.08l5.5 5.25a.75.75 0 0 1 0 1.08l-5.5 5.25a.75.75 0 1 1-1.04-1.08l4.158-3.96H3.75A.75.75 0 0 1 3 10Z" clip-rule="evenodd"/></svg>';
    $external = '<svg viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><path fill-rule="evenodd" d="M5.22 14.78a.75.75 0 0 0 1.06 0l7.22-7.22v5.69a.75.75 0 0 0 1.5 0v-7.5a.75.75 0 0 0-.75-.75h-7.5a.75.75 0 0 0 0 1.5h5.69l-7.22 7.22a.75.75 0 0 0 0 1.06Z" clip-rule="evenodd"/></svg>';
@endphp

@section('content')

{{-- ============ HERO ============ --}}
<section id="top" data-section class="relative isolate overflow-hidden bg-white">
    {{-- Photo as background, washed with a white overlay --}}
    <img src="{{ asset('images/web/hero-bg.jpg') }}" alt="" aria-hidden="true" fetchpriority="high"
         class="absolute inset-0 -z-20 h-full w-full object-cover object-[72%_center]">
    <div class="absolute inset-0 -z-10 bg-white/85 lg:bg-transparent lg:bg-gradient-to-r lg:from-white lg:from-30% lg:via-white/85 lg:via-55% lg:to-white/25" aria-hidden="true"></div>
    <div class="absolute inset-x-0 bottom-0 -z-10 h-20 bg-gradient-to-t from-white" aria-hidden="true"></div>

    <div class="container-x flex min-h-[calc(100svh-5rem)] items-center py-20 lg:min-h-[640px]">
        <div class="max-w-3xl">
            <h1 class="rise text-[clamp(3.1rem,8.4vw,6.75rem)] font-semibold leading-[0.95] tracking-[-0.045em] text-ink">
                Digital access<br>
                <span class="relative inline-block text-primary">
                    for all
                    <svg class="draw-line absolute -bottom-[0.12em] left-0 h-[0.28em] w-full text-secondary" viewBox="0 0 300 24" fill="none" preserveAspectRatio="none" aria-hidden="true">
                        <path d="M4 17C70 6 170 3 296 11" stroke="currentColor" stroke-width="7" stroke-linecap="round"/>
                    </svg>
                </span><span class="text-secondary">.</span>
            </h1>

            <p class="rise rise-1 mt-10 flex flex-wrap items-center gap-x-3 gap-y-1 text-xl font-semibold text-ink sm:text-2xl">
                <span>We build it</span><span class="text-secondary" aria-hidden="true">/</span>
                <span>We supply it</span><span class="text-secondary" aria-hidden="true">/</span>
                <span>We keep it running</span>
            </p>

            <div class="rise rise-2 mt-10 flex flex-wrap gap-3">
                <a href="#contact" data-topic="Book a consultation" class="btn btn-primary !px-7 !py-4">Book a consultation {!! $arrow !!}</a>
                <a href="#services" class="btn btn-ghost !px-7 !py-4">Our services</a>
            </div>
        </div>
    </div>
</section>

{{-- ============ SERVICES ============ --}}
<section id="services" data-section class="section bg-white">
    <div class="container-x">
        <div class="mx-auto max-w-2xl text-center" data-animate>
            <p class="eyebrow">What we do</p>
            <h2 class="h2 mt-5">One partner for<br class="hidden sm:block"> all things tech.</h2>
        </div>

        @include('partials.service-grid')

        <div class="mt-20 flex flex-col items-center justify-center gap-4 border-t border-line pt-10 text-center sm:flex-row sm:gap-6" data-animate>
            <p class="text-sm font-semibold uppercase tracking-[0.18em] text-text-muted">Built for</p>
            <ul class="flex flex-wrap justify-center gap-2">
                @foreach (['Businesses', 'Schools', 'Organisations', 'Individuals'] as $who)
                    <li class="rounded-full border border-line bg-paper px-4 py-1.5 text-sm font-medium text-ink">{{ $who }}</li>
                @endforeach
            </ul>
        </div>
    </div>
</section>

{{-- ============ ABOUT ============ --}}
<section id="about" data-section class="relative overflow-hidden bg-ink text-white">
    <div class="grid-texture pointer-events-none absolute inset-0" aria-hidden="true"></div>
    <div class="container-x section relative">
        <div class="grid items-end gap-10 lg:grid-cols-12">
            <div class="lg:col-span-7" data-animate>
                <p class="eyebrow eyebrow-light">About UniHub</p>
                <h2 class="mt-5 text-[clamp(2.2rem,4.6vw,3.75rem)] font-semibold leading-[1.04]">We listen first.<br><span class="text-secondary">Then we build.</span></h2>
            </div>
            <p class="text-lg leading-relaxed text-white/70 lg:col-span-4 lg:col-start-9" data-animate data-animate-delay="1">
                A Kampala team covering the full journey — advice, software, equipment, installation and training.
            </p>
        </div>

        <div class="mt-16 grid gap-px overflow-hidden rounded-3xl bg-white/10 md:grid-cols-3">
            @foreach ([
                ['Integrity', 'Honest advice. Clear expectations.'],
                ['Practicality', 'Real solutions for real budgets.'],
                ['Reliability', 'Delivered with care. Supported for the long run.'],
            ] as $i => [$title, $text])
                <div class="bg-ink/95 p-8 sm:p-9" data-animate data-animate-delay="{{ $i + 1 }}">
                    <span class="text-sm font-semibold tabular-nums text-secondary">0{{ $i + 1 }}</span>
                    <h3 class="mt-8 text-2xl font-semibold">{{ $title }}</h3>
                    <p class="mt-2 text-white/65">{{ $text }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>

@include('partials.process')

{{-- ============ SOLUTIONS ============ --}}
<section id="solutions" data-section class="section bg-white">
    <div class="container-x grid items-center gap-14 lg:grid-cols-12">
        <div class="lg:col-span-5" data-animate>
            <p class="eyebrow">Our product</p>
            <h2 class="mt-5 text-[clamp(2.4rem,4.6vw,3.75rem)] font-semibold leading-[1.02] text-ink">Less chaos.<br><span class="text-secondary-dark">More clarity.</span></h2>
            <p class="mt-6 text-lg text-text-muted">My Digital Diary — your money, health, goals and plans in one app.</p>

            <ul class="mt-8 flex flex-wrap gap-2">
                @foreach (['Finance', 'Wellbeing', 'Planning', 'Reminders'] as $feature)
                    <li class="rounded-full border border-line bg-paper px-4 py-1.5 text-sm font-medium text-ink">{{ $feature }}</li>
                @endforeach
            </ul>

            <a href="https://www.my-digital-diary.com" target="_blank" rel="noopener noreferrer" class="btn btn-accent mt-10">
                Try My Digital Diary {!! $external !!}
                <span class="sr-only">(opens in a new tab)</span>
            </a>
        </div>

        <div class="lg:col-span-7" data-animate data-animate-delay="2">
            <div class="overflow-hidden rounded-[2rem] border border-line">
                <img src="{{ asset('images/web/digital-diary.jpg') }}" alt="A woman using the My Digital Diary app"
                     width="1400" height="933" loading="lazy" class="w-full object-cover">
            </div>
        </div>
    </div>
</section>

{{-- ============ PRODUCTS ============ --}}
<section id="products" data-section class="section border-t border-line bg-paper">
    <div class="container-x">
        <div class="flex flex-col gap-6 sm:flex-row sm:items-end sm:justify-between" data-animate>
            <div>
                <p class="eyebrow">Products</p>
                <h2 class="h2 mt-5">Genuine gear.<br><span class="text-primary">Installed right.</span></h2>
            </div>
            <a href="#contact" data-topic="ICT products / quote" class="btn btn-ghost shrink-0">Request a quote {!! $arrow !!}</a>
        </div>

        <div class="mt-14 grid gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3">
            @foreach ([
                ['computers.jpg', 'Computers & Laptops', 'For work, school and home.'],
                ['networking.jpg', 'Networking', 'Fast, stable connectivity.'],
                ['printer.jpg', 'Printers & Accessories', 'Print, scan, keep going.'],
                ['spare-parts.jpg', 'Replacement Parts', 'Repair it. Extend its life.'],
                ['software-licences.jpg', 'Software Licences', 'Genuine and fully licensed.'],
                ['power-backup.jpg', 'Power & Backup', 'Keep working through outages.'],
            ] as $i => [$image, $title, $text])
                <article class="group" data-animate data-animate-delay="{{ ($i % 3) + 1 }}">
                    <div class="overflow-hidden rounded-3xl bg-white">
                        <img src="{{ asset('images/web/' . $image) }}" alt="{{ $title }}" width="900" height="600" loading="lazy"
                             class="aspect-[16/11] w-full object-cover transition duration-700 ease-out group-hover:scale-[1.03]">
                    </div>
                    <h3 class="mt-5 text-lg font-semibold text-ink">{{ $title }}</h3>
                    <p class="mt-1 text-text-muted">{{ $text }}</p>
                </article>
            @endforeach
        </div>
    </div>
</section>

{{-- ============ FAQ (chat style) ============ --}}
<section id="faq" data-section class="section bg-white">
    <div class="container-x">
        <div class="mx-auto max-w-2xl text-center" data-animate>
            <p class="eyebrow">FAQ</p>
            <h2 class="h2 mt-5">You asked.<br class="hidden sm:block"> <span class="text-primary">We answered.</span></h2>
        </div>

        <div class="mx-auto mt-16 grid max-w-6xl gap-x-10 gap-y-8 md:grid-cols-2">
            @foreach ([
                ['Not sure what I need. Can you help?', 'Yes! Book a consultation — we’ll listen, then recommend what fits.'],
                ['Is your equipment genuine?', 'Always. Genuine hardware and licences, installed by us.'],
                ['Do you support after delivery?', 'Yes. Maintenance, fixes and training are part of the job.'],
                ['Do you work with schools?', 'Yes — schools, businesses, organisations and individuals.'],
                ['How do I get a quote?', 'Message us below, email info@unihubug.org or call +256 784 675 790.'],
                ['Where are you?', 'Kanjokya House, Kanjokya Street, Kampala. Mon–Fri, 8am–6pm.'],
            ] as $i => [$q, $a])
                <div class="space-y-3" data-animate data-animate-delay="{{ ($i % 2) + 1 }}">
                    {{-- Question --}}
                    <div class="flex justify-end">
                        <p class="max-w-[85%] rounded-3xl rounded-br-md bg-primary px-5 py-3.5 font-medium text-white shadow-[0_12px_24px_-16px_rgba(29,43,114,0.6)]">{{ $q }}</p>
                    </div>
                    {{-- Answer --}}
                    <div class="flex items-end gap-3">
                        <img src="{{ asset('images/brand/unihub-mark.png') }}" alt="UniHub" class="size-9 shrink-0 rounded-full bg-white p-1 ring-1 ring-line">
                        <p class="max-w-[85%] rounded-3xl rounded-bl-md border border-line bg-paper px-5 py-3.5 text-ink">{{ $a }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ============ CONTACT ============ --}}
<section id="contact" data-section class="relative overflow-hidden bg-ink text-white">
    <div class="grid-texture pointer-events-none absolute inset-0" aria-hidden="true"></div>
    <div class="pointer-events-none absolute -right-32 -top-32 size-96 rounded-full bg-secondary/20 blur-3xl" aria-hidden="true"></div>

    <div class="container-x section relative grid gap-14 lg:grid-cols-12">
        <div class="lg:col-span-5" data-animate>
            <p class="eyebrow eyebrow-light">Contact</p>
            <h2 class="mt-5 text-[clamp(2.4rem,4.6vw,3.75rem)] font-semibold leading-[1.02]">Got an idea?<br><span class="text-secondary">Let’s build it.</span></h2>

            <dl class="mt-12 grid gap-8 sm:grid-cols-2">
                <div>
                    <dt class="text-sm text-white/50">Call</dt>
                    <dd class="mt-1.5 font-medium">
                        <a href="tel:+256784675790" class="block hover:text-secondary-light">+256 784 675 790</a>
                        <a href="tel:+256704145972" class="block hover:text-secondary-light">+256 704 145 972</a>
                    </dd>
                </div>
                <div>
                    <dt class="text-sm text-white/50">Email</dt>
                    <dd class="mt-1.5 font-medium"><a href="mailto:info@unihubug.org" class="hover:text-secondary-light">info@unihubug.org</a></dd>
                </div>
                <div>
                    <dt class="text-sm text-white/50">Visit</dt>
                    <dd class="mt-1.5 font-medium">
                        <a href="https://www.google.com/maps/search/?api=1&query=Kanjokya+House+Kanjokya+Street+Kampala" target="_blank" rel="noopener noreferrer" class="hover:text-secondary-light">Plot 90 Kanjokya House<br>Kanjokya Street, Kampala<span class="sr-only"> (opens Google Maps in a new tab)</span></a>
                    </dd>
                </div>
                <div>
                    <dt class="text-sm text-white/50">Hours</dt>
                    <dd class="mt-1.5 font-medium">Mon – Fri<br>8:00am – 6:00pm</dd>
                </div>
            </dl>
        </div>

        <div class="lg:col-span-6 lg:col-start-7" data-animate data-animate-delay="1">
            <div class="rounded-[2rem] bg-white p-7 text-text sm:p-10">
                <h3 class="text-2xl font-semibold text-ink">Book a consultation</h3>
                <p class="mt-2 text-text-muted">Or just send a message — a few details is all we need.</p>

                <form action="mailto:info@unihubug.org" method="post" enctype="text/plain" class="mt-8 space-y-5">
                    <div class="grid gap-5 sm:grid-cols-2">
                        <div>
                            <label for="name" class="label">Name</label>
                            <input type="text" id="name" name="Name" required autocomplete="name" class="field" placeholder="Your full name">
                        </div>
                        <div>
                            <label for="email" class="label">Email</label>
                            <input type="email" id="email" name="Email" required autocomplete="email" class="field" placeholder="you@company.com">
                        </div>
                    </div>
                    <div>
                        <label for="topic" class="label">What can we help with?</label>
                        <select id="topic" name="Topic" class="field">
                            <option>Book a consultation</option>
                            @foreach (config('site.services') as $service)
                                <option>{{ $service['title'] }}</option>
                            @endforeach
                            <option>ICT products / quote</option>
                            <option>My Digital Diary</option>
                            <option>Something else</option>
                        </select>
                    </div>
                    <div>
                        <label for="message" class="label">Message</label>
                        <textarea id="message" name="Message" rows="4" required class="field resize-y" placeholder="Tell us what you need — and when suits you"></textarea>
                    </div>
                    <div class="flex flex-col gap-4 pt-2 sm:flex-row sm:items-center sm:justify-between">
                        <button type="submit" class="btn btn-primary">Send {!! $arrow !!}</button>
                        <p class="text-sm text-text-muted">Opens your email app to send.</p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection
