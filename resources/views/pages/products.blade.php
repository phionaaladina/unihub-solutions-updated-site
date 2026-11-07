@extends('layouts.app')

@section('title', 'Products')
@section('description', 'Genuine computers, networking equipment, printers, software licences, power backup and replacement parts from UniHub Solutions Uganda.')

@section('content')

@include('partials.page-header', [
    'eyebrow' => 'Products',
    'title' => 'Genuine gear.<br><span class="text-primary">Installed right.</span>',
    'lead' => 'Everything your office, school or home needs to stay connected.',
])

<section class="section bg-white">
    <div class="container-x">
        <div class="grid gap-x-6 gap-y-12 sm:grid-cols-2 lg:grid-cols-3">
            @foreach ([
                ['computers.jpg', 'Computers & Laptops', 'For work, school and home.'],
                ['networking.jpg', 'Networking', 'Fast, stable connectivity.'],
                ['printer.jpg', 'Printers & Accessories', 'Print, scan, keep going.'],
                ['spare-parts.jpg', 'Replacement Parts', 'Repair it. Extend its life.'],
                ['software-licences.jpg', 'Software Licences', 'Genuine and fully licensed.'],
                ['power-backup.jpg', 'Power & Backup', 'Keep working through outages.'],
            ] as $i => [$image, $title, $text])
                <article class="group" data-animate data-animate-delay="{{ ($i % 3) + 1 }}">
                    <div class="overflow-hidden rounded-3xl bg-paper">
                        <img src="{{ asset('images/web/' . $image) }}" alt="{{ $title }}" width="900" height="600" loading="lazy"
                             class="aspect-[4/3] w-full object-cover transition duration-700 ease-out group-hover:scale-[1.03]">
                    </div>
                    <h2 class="mt-5 text-xl font-semibold text-ink">{{ $title }}</h2>
                    <p class="mt-1 text-text-muted">{{ $text }}</p>
                </article>
            @endforeach
        </div>

        <div class="mt-20 flex flex-col gap-6 rounded-3xl border border-line bg-paper p-8 sm:flex-row sm:items-center sm:justify-between sm:p-10" data-animate>
            <h2 class="text-2xl font-semibold text-ink">Need a quote? <span class="text-text-muted">We’ll recommend the right fit.</span></h2>
            <a href="/contact" class="btn btn-primary shrink-0">
                Request a quote
                <svg viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><path fill-rule="evenodd" d="M3 10a.75.75 0 0 1 .75-.75h10.638L10.23 5.29a.75.75 0 1 1 1.04-1.08l5.5 5.25a.75.75 0 0 1 0 1.08l-5.5 5.25a.75.75 0 1 1-1.04-1.08l4.158-3.96H3.75A.75.75 0 0 1 3 10Z" clip-rule="evenodd"/></svg>
            </a>
        </div>
    </div>
</section>

@include('partials.cta')

@endsection
