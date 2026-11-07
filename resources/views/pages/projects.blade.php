@extends('layouts.app')

@section('title', 'Our Work')
@section('description', 'The kind of work UniHub Solutions Uganda delivers — software, IT infrastructure, equipment rollouts and staff training.')

@section('content')

@include('partials.page-header', [
    'eyebrow' => 'Our work',
    'title' => 'Work we <span class="text-primary">love doing.</span>',
    'lead' => 'Software, infrastructure and training — done properly.',
    'crumb' => 'Our work',
])

<section class="section bg-white">
    <div class="container-x">
        <div class="grid gap-5 sm:grid-cols-2 lg:grid-cols-3">
            @foreach ([
                ['Software', 'Business Management Systems', 'Inventory, sales and operations — built around you.'],
                ['Web & Mobile', 'Websites & Mobile Apps', 'Designed for real usability, not just looks.'],
                ['Consultancy', 'IT Infrastructure Planning', 'Modernise without overspending.'],
                ['Installation', 'Network & Systems Setup', 'Offices, servers and software — end to end.'],
                ['Supply', 'Institutional ICT Rollouts', 'Bulk computers for schools and organisations.'],
                ['Training', 'Staff ICT Training', 'Teams that are confident from day one.'],
            ] as $i => [$tag, $title, $text])
                <article class="group flex flex-col rounded-3xl border border-line bg-white p-8 transition duration-300 hover:-translate-y-1 hover:border-primary/25 hover:shadow-[0_30px_60px_-30px_rgba(14,21,56,0.25)] sm:p-9"
                         data-animate data-animate-delay="{{ ($i % 3) + 1 }}">
                    <div class="flex items-center justify-between">
                        <span class="rounded-full bg-paper px-3 py-1 text-xs font-semibold text-primary">{{ $tag }}</span>
                        <span class="text-sm font-semibold tabular-nums text-secondary-dark">0{{ $i + 1 }}</span>
                    </div>
                    <h2 class="mt-12 text-xl font-semibold text-ink">{{ $title }}</h2>
                    <p class="mt-2 text-text-muted">{{ $text }}</p>
                </article>
            @endforeach
        </div>

        <p class="mt-14 text-center text-text-muted" data-animate>
            Case studies available on request.
            <a href="/contact" class="font-semibold text-primary underline decoration-line underline-offset-4 transition hover:decoration-primary">Ask us</a>
        </p>
    </div>
</section>

@include('partials.cta', ['ctaEyebrow' => 'Your project next?', 'ctaTitle' => 'Let’s bring it<br><span class="text-secondary">to life.</span>'])

@endsection
