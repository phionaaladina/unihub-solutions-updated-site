{{-- Closing call to action, shared by every page. Optional: $ctaEyebrow, $ctaTitle --}}
<section class="bg-white py-20 sm:py-24">
    <div class="container-x">
        <div class="relative overflow-hidden rounded-[2rem] bg-ink px-7 py-16 text-center text-white sm:px-14 sm:py-24" data-animate>
            <div class="grid-texture pointer-events-none absolute inset-0" aria-hidden="true"></div>
            <div class="pointer-events-none absolute -right-32 -top-32 size-96 rounded-full bg-secondary/20 blur-3xl" aria-hidden="true"></div>
            <div class="pointer-events-none absolute -bottom-40 -left-24 size-96 rounded-full bg-primary-light/30 blur-3xl" aria-hidden="true"></div>

            <div class="relative mx-auto max-w-3xl">
                <p class="eyebrow eyebrow-light justify-center">{{ $ctaEyebrow ?? 'Let’s talk' }}</p>
                <h2 class="mt-6 text-[clamp(2.25rem,5vw,4rem)] font-semibold leading-[1.04]">
                    {!! $ctaTitle ?? 'Got an idea?<br><span class="text-secondary">Let’s build it.</span>' !!}
                </h2>
                <div class="mt-10 flex flex-wrap justify-center gap-3">
                    <a href="/contact?topic=consultation#book" class="btn btn-accent">
                        Book a consultation
                        <svg viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><path fill-rule="evenodd" d="M3 10a.75.75 0 0 1 .75-.75h10.638L10.23 5.29a.75.75 0 1 1 1.04-1.08l5.5 5.25a.75.75 0 0 1 0 1.08l-5.5 5.25a.75.75 0 1 1-1.04-1.08l4.158-3.96H3.75A.75.75 0 0 1 3 10Z" clip-rule="evenodd"/></svg>
                    </a>
                    <a href="tel:+256784675790" class="btn btn-ghost-light">Call +256 784 675 790</a>
                </div>
            </div>
        </div>
    </div>
</section>
