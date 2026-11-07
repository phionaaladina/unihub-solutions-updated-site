{{-- Slim footer: contact details live in the #contact section just above --}}
<footer class="border-t border-white/10 bg-ink text-white">
    <div class="container-x flex flex-col gap-8 py-12 lg:flex-row lg:items-center lg:justify-between">
        <a href="/#top" class="flex items-center gap-5" aria-label="UniHub Solutions Uganda — back to top">
            <img src="{{ asset('images/brand/unihub-logo-light.png') }}" alt="UniHub Solutions Uganda" width="570" height="200" class="h-12 w-auto">
            <span class="hidden border-l border-white/15 pl-5 text-sm text-white/60 sm:block">Digital Access for All.</span>
        </a>

        <nav aria-label="Footer">
            <ul class="flex flex-wrap gap-x-7 gap-y-3 text-[0.95rem] text-white/70">
                @foreach (['services' => 'Services', 'about' => 'About', 'solutions' => 'Solutions', 'products' => 'Products', 'faq' => 'FAQ', 'contact' => 'Contact'] as $id => $label)
                    <li><a href="/#{{ $id }}" class="transition hover:text-white">{{ $label }}</a></li>
                @endforeach
            </ul>
        </nav>
    </div>

    <div class="border-t border-white/10">
        <div class="container-x flex flex-col gap-2 py-6 text-sm text-white/45 sm:flex-row sm:items-center sm:justify-between">
            <p>&copy; {{ date('Y') }} UniHub Solutions Uganda. All rights reserved.</p>
            <a href="#top" class="inline-flex items-center gap-2 transition hover:text-white">
                Back to top
                <svg class="size-4" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><path fill-rule="evenodd" d="M10 17a.75.75 0 0 1-.75-.75V5.612L5.29 9.77a.75.75 0 0 1-1.08-1.04l5.25-5.5a.75.75 0 0 1 1.08 0l5.25 5.5a.75.75 0 1 1-1.08 1.04l-3.96-4.158V16.25A.75.75 0 0 1 10 17Z" clip-rule="evenodd"/></svg>
            </a>
        </div>
    </div>
</footer>
