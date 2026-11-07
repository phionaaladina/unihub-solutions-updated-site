{{-- "How we work" — four steps, shared by Home, About and Services --}}
<section class="section border-y border-line bg-paper">
    <div class="container-x">
        <div class="mx-auto max-w-2xl text-center" data-animate>
            <p class="eyebrow">How we work</p>
            <h2 class="h2 mt-5">Four steps.<br class="hidden sm:block"> Zero guesswork.</h2>
        </div>

        <ol class="mt-16 grid gap-px overflow-hidden rounded-3xl border border-line bg-line sm:grid-cols-2 lg:grid-cols-4">
            @foreach ([
                ['Listen', 'We learn how you work.'],
                ['Plan', 'Honest advice. Clear costs.'],
                ['Deliver', 'Built and installed with care.'],
                ['Support', 'We stay after go-live.'],
            ] as $i => [$title, $text])
                <li class="bg-white p-8 sm:p-9" data-animate data-animate-delay="{{ $i + 1 }}">
                    <span class="text-[2.75rem] font-semibold leading-none tracking-tight text-line">0{{ $i + 1 }}</span>
                    <h3 class="mt-8 text-xl font-semibold text-ink">{{ $title }}</h3>
                    <p class="mt-2 text-text-muted">{{ $text }}</p>
                </li>
            @endforeach
        </ol>
    </div>
</section>
