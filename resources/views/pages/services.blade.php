@extends('layouts.app')

@section('title', 'Services')
@section('description', 'Software development, IT consultancy, ICT equipment, installation and training from UniHub Solutions Uganda.')

@section('content')

@include('partials.page-header', [
    'eyebrow' => 'Services',
    'title' => 'Everything tech.<br><span class="text-primary">Sorted.</span>',
    'lead' => 'Advice, software, equipment and support — under one roof.',
])

{{-- Quick index --}}
<div class="sticky top-20 z-30 border-b border-line bg-white/90 backdrop-blur-xl">
    <nav class="container-x flex gap-1 overflow-x-auto py-3 [scrollbar-width:none]" aria-label="Services">
        @foreach (config('site.services') as $service)
            <a href="#{{ $service['id'] }}" class="shrink-0 rounded-full px-4 py-2 text-sm font-medium text-text-muted transition hover:bg-paper hover:text-ink">{{ $service['title'] }}</a>
        @endforeach
    </nav>
</div>

<section class="bg-white py-6 sm:py-10">
    <div class="container-x">
        @foreach (config('site.services') as $i => $service)
            <article id="{{ $service['id'] }}" class="grid scroll-mt-40 gap-6 border-b border-line py-12 last:border-b-0 sm:py-16 lg:grid-cols-12 lg:items-center" data-animate>
                <div class="lg:col-span-5">
                    <span class="text-sm font-semibold tabular-nums text-secondary-dark">0{{ $i + 1 }}</span>
                    <h2 class="mt-3 text-[clamp(1.75rem,3vw,2.4rem)] font-semibold leading-tight text-ink">{{ $service['title'] }}</h2>
                    <p class="mt-3 text-lg text-text-muted">{{ $service['summary'] }}</p>
                </div>
                <ul class="flex flex-wrap gap-2 lg:col-span-6 lg:col-start-7">
                    @foreach ($service['items'] as $item)
                        <li class="rounded-full border border-line bg-paper px-4 py-2 text-sm font-medium text-ink">{{ $item }}</li>
                    @endforeach
                </ul>
            </article>
        @endforeach
    </div>
</section>

@include('partials.process')

@include('partials.cta', ['ctaEyebrow' => 'Not sure where to start?', 'ctaTitle' => 'Tell us the problem.<br><span class="text-secondary">We’ll handle the rest.</span>'])

@endsection
