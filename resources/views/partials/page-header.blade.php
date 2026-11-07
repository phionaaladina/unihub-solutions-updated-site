{{-- Usage: @include('partials.page-header', ['eyebrow' => '...', 'title' => '...', 'lead' => '...', 'crumb' => '...']) --}}
<section class="relative overflow-hidden border-b border-line bg-paper">
    <img src="{{ asset('images/brand/unihub-mark.png') }}" alt="" aria-hidden="true"
         class="pointer-events-none absolute -right-24 top-1/2 hidden w-[420px] -translate-y-1/2 opacity-[0.06] grayscale lg:block">

    <div class="container-x relative py-16 sm:py-24">
        <nav aria-label="Breadcrumb" class="rise text-sm text-text-muted">
            <a href="/" class="transition hover:text-ink">Home</a>
            <span class="mx-2 text-line" aria-hidden="true">/</span>
            <span class="text-ink">{{ $crumb ?? $eyebrow }}</span>
        </nav>

        <p class="eyebrow rise rise-1 mt-10">{{ $eyebrow }}</p>
        <h1 class="display rise rise-2 mt-5 max-w-4xl text-ink">{!! $title !!}</h1>
        @isset($lead)
            <p class="lead rise rise-3 mt-6 max-w-2xl">{{ $lead }}</p>
        @endisset
    </div>
</section>
