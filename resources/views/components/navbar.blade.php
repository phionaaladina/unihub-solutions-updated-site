@php
    // One-page site: each item scrolls to a section on the home page.
    $navLinks = [
        'services' => 'Services',
        'about' => 'About',
        'solutions' => 'Solutions',
        'products' => 'Products',
        'faq' => 'FAQ',
        'contact' => 'Contact',
    ];
@endphp

<header id="site-nav" class="sticky top-0 z-50 border-b border-line/70 bg-white/85 backdrop-blur-xl transition-shadow duration-300">
    <nav class="container-x flex h-20 items-center justify-between" aria-label="Main navigation">
        <a href="/#top" class="shrink-0" aria-label="UniHub Solutions Uganda — back to top">
            <img src="{{ asset('images/brand/unihub-logo.png') }}" alt="UniHub Solutions Uganda" width="570" height="200" class="h-11 w-auto sm:h-[52px]">
        </a>

        <div class="hidden items-center gap-1 lg:flex">
            @foreach ($navLinks as $id => $label)
                <a href="/#{{ $id }}" data-nav="{{ $id }}" class="nav-link relative rounded-full px-3.5 py-2 text-[0.95rem] font-medium text-text-muted transition hover:text-ink">{{ $label }}</a>
            @endforeach
        </div>

        <div class="hidden items-center gap-5 lg:flex">
            <a href="tel:+256784675790" class="hidden items-center gap-2 text-[0.95rem] font-semibold text-ink transition hover:text-primary xl:inline-flex">
                <svg class="size-4 text-secondary-dark" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z"/></svg>
                +256 784 675 790
            </a>
            <a href="/#contact" data-topic="Book a consultation" class="btn btn-accent !py-2.5">
                <svg viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" class="!translate-x-0"><path fill-rule="evenodd" d="M5.75 2a.75.75 0 0 1 .75.75V4h7V2.75a.75.75 0 0 1 1.5 0V4h.25A2.75 2.75 0 0 1 18 6.75v8.5A2.75 2.75 0 0 1 15.25 18H4.75A2.75 2.75 0 0 1 2 15.25v-8.5A2.75 2.75 0 0 1 4.75 4H5V2.75A.75.75 0 0 1 5.75 2Zm-1 5.5c-.69 0-1.25.56-1.25 1.25v6.5c0 .69.56 1.25 1.25 1.25h10.5c.69 0 1.25-.56 1.25-1.25v-6.5c0-.69-.56-1.25-1.25-1.25H4.75Z" clip-rule="evenodd"/></svg>
                Book a consultation
            </a>
        </div>

        <button id="mobile-menu-button" type="button"
                class="-mr-2 flex size-11 items-center justify-center rounded-full text-ink transition hover:bg-paper lg:hidden"
                aria-expanded="false" aria-controls="mobile-menu" aria-label="Toggle navigation menu">
            <span class="menu-icon" aria-hidden="true"><span></span><span></span><span></span></span>
        </button>
    </nav>

    <div id="mobile-menu" class="hidden border-t border-line bg-white lg:hidden">
        <div class="container-x flex flex-col py-4">
            @foreach ($navLinks as $id => $label)
                <a href="/#{{ $id }}" data-nav="{{ $id }}" class="nav-link-mobile flex items-center justify-between border-b border-line py-3.5 text-lg font-medium text-text-muted">
                    {{ $label }}
                    <span class="nav-dot size-1.5 rounded-full bg-secondary opacity-0 transition" aria-hidden="true"></span>
                </a>
            @endforeach
            <a href="/#contact" data-topic="Book a consultation" class="btn btn-accent mt-5">Book a consultation</a>
            <a href="tel:+256784675790" class="btn btn-ghost mt-3">Call +256 784 675 790</a>
        </div>
    </div>
</header>
