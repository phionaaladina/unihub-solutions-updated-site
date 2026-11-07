{{-- Frequently asked questions — answers use only facts already published on the site --}}
<section class="section border-t border-line bg-white">
    <div class="container-x grid gap-12 lg:grid-cols-12">
        <div class="lg:col-span-4" data-animate>
            <p class="eyebrow">FAQ</p>
            <h2 class="h2 mt-5">Quick answers.</h2>
        </div>

        <div class="divide-y divide-line border-y border-line lg:col-span-7 lg:col-start-6" data-animate data-animate-delay="1">
            @foreach ([
                ['Not sure what I need. Can you help?', 'Yes — book a consultation. We’ll listen, then recommend what fits.'],
                ['Is your equipment genuine?', 'Yes. Genuine hardware and licences, installed and configured by us.'],
                ['Do you support after delivery?', 'Always. Maintenance, troubleshooting and training are part of the job.'],
                ['Do you work with schools?', 'Yes — schools, institutions, businesses, organisations and individuals.'],
                ['How do I get a quote?', 'Use the form, email info@unihubug.org or call +256 784 675 790.'],
                ['Where are you?', 'Plot 90 Kanjokya House, Kanjokya Street, Kampala. Mon–Fri, 8am–6pm.'],
            ] as [$q, $a])
                <details class="group py-5 [&_summary::-webkit-details-marker]:hidden">
                    <summary class="flex cursor-pointer list-none items-center justify-between gap-6 text-lg font-semibold text-ink">
                        {{ $q }}
                        <span class="flex size-7 shrink-0 items-center justify-center rounded-full border border-line text-text-muted transition duration-300 group-open:rotate-45 group-open:border-secondary group-open:text-secondary-dark" aria-hidden="true">
                            <svg class="size-3.5" viewBox="0 0 20 20" fill="currentColor"><path d="M10.75 4.75a.75.75 0 0 0-1.5 0v4.5h-4.5a.75.75 0 0 0 0 1.5h4.5v4.5a.75.75 0 0 0 1.5 0v-4.5h4.5a.75.75 0 0 0 0-1.5h-4.5v-4.5Z"/></svg>
                        </span>
                    </summary>
                    <p class="mt-2 text-text-muted">{{ $a }}</p>
                </details>
            @endforeach
        </div>
    </div>
</section>
