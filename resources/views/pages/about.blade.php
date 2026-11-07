@extends('layouts.app')

@section('title', 'About Us')
@section('description', 'UniHub Solutions Uganda — a Kampala technology partner making technology simple, reliable and within reach.')

@section('content')

@include('partials.page-header', [
    'eyebrow' => 'About UniHub',
    'title' => 'Digital access <span class="text-primary">for all.</span>',
    'lead' => 'We make technology simple, reliable and within reach.',
    'crumb' => 'About',
])

{{-- Story --}}
<section class="section bg-white">
    <div class="container-x grid items-center gap-14 lg:grid-cols-12">
        <div class="lg:col-span-5" data-animate>
            <div class="overflow-hidden rounded-[2rem] bg-paper">
                <img src="{{ asset('images/web/software-development.jpg') }}" alt="A member of the UniHub team at work" width="1200" height="675" loading="lazy"
                     class="aspect-[4/5] w-full object-cover object-[65%_center]">
            </div>
        </div>
        <div class="lg:col-span-6 lg:col-start-7" data-animate data-animate-delay="1">
            <p class="eyebrow">Who we are</p>
            <h2 class="h2 mt-5">We listen first.<br><span class="text-primary">Then we build.</span></h2>
            <p class="mt-7 text-lg leading-relaxed text-text-muted">A Kampala team covering the full journey — advice, software, equipment, installation and training. Clear communication, careful delivery, and support long after go-live.</p>

            <dl class="mt-10 grid grid-cols-2 gap-8 border-t border-line pt-8">
                <div>
                    <dt class="text-sm text-text-muted">Based in</dt>
                    <dd class="mt-1 text-xl font-semibold text-ink">Kampala, Uganda</dd>
                </div>
                <div>
                    <dt class="text-sm text-text-muted">We cover</dt>
                    <dd class="mt-1 text-xl font-semibold text-ink">5 service areas</dd>
                </div>
            </dl>
        </div>
    </div>
</section>

{{-- Values --}}
<section class="relative overflow-hidden bg-ink text-white">
    <div class="grid-texture pointer-events-none absolute inset-0" aria-hidden="true"></div>
    <div class="container-x section relative">
        <div class="mx-auto max-w-2xl text-center" data-animate>
            <p class="eyebrow eyebrow-light justify-center">Our values</p>
            <h2 class="mt-5 text-[clamp(1.9rem,3.6vw,2.9rem)] font-semibold leading-[1.1]">What we stand for.</h2>
        </div>

        <div class="mt-14 grid gap-px overflow-hidden rounded-3xl bg-white/10 md:grid-cols-3">
            @foreach ([
                ['Integrity', 'Honest advice. Clear expectations.'],
                ['Practicality', 'Real solutions for real budgets.'],
                ['Reliability', 'Delivered with care. Supported for the long run.'],
            ] as $i => [$title, $text])
                <div class="bg-ink p-9 sm:p-10" data-animate data-animate-delay="{{ $i + 1 }}">
                    <span class="text-sm font-semibold tabular-nums text-secondary">0{{ $i + 1 }}</span>
                    <h3 class="mt-10 text-2xl font-semibold">{{ $title }}</h3>
                    <p class="mt-2 text-white/65">{{ $text }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>

@include('partials.process')

@include('partials.cta')

@endsection
