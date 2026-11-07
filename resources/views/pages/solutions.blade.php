@extends('layouts.app')

@section('title', 'Solutions')
@section('description', 'My Digital Diary and other digital solutions from UniHub Solutions Uganda.')

@section('content')

@include('partials.page-header', [
    'eyebrow' => 'Solutions',
    'title' => 'Smart tools for<br><span class="text-primary">everyday life.</span>',
    'lead' => 'Our own products — built to make life and work simpler.',
])

{{-- Featured: My Digital Diary --}}
<section id="my-digital-diary" class="section scroll-mt-24 bg-white">
    <div class="container-x">
        <div class="grid gap-14 lg:grid-cols-12 lg:items-center">
            <div class="lg:col-span-5" data-animate>
                <p class="eyebrow">My Digital Diary</p>
                <h2 class="h2 mt-5">Less chaos.<br><span class="text-secondary-dark">More clarity.</span></h2>
                <p class="mt-6 text-lg text-text-muted">Money, health, goals and reminders — all in one app.</p>

                <a href="https://www.my-digital-diary.com" target="_blank" rel="noopener noreferrer" class="btn btn-primary mt-9">
                    Try My Digital Diary
                    <svg viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><path fill-rule="evenodd" d="M5.22 14.78a.75.75 0 0 0 1.06 0l7.22-7.22v5.69a.75.75 0 0 0 1.5 0v-7.5a.75.75 0 0 0-.75-.75h-7.5a.75.75 0 0 0 0 1.5h5.69l-7.22 7.22a.75.75 0 0 0 0 1.06Z" clip-rule="evenodd"/></svg>
                    <span class="sr-only">(opens in a new tab)</span>
                </a>
            </div>

            <div class="lg:col-span-7" data-animate data-animate-delay="2">
                <div class="overflow-hidden rounded-[2rem] border border-line bg-paper">
                    <img src="{{ asset('images/web/digital-diary-app.jpg') }}" alt="My Digital Diary app showing finance, work, health, personal life and productivity features"
                         width="1400" height="933" loading="lazy" class="w-full">
                </div>
            </div>
        </div>

        <div class="mt-20 grid gap-px overflow-hidden rounded-3xl border border-line bg-line sm:grid-cols-2 lg:grid-cols-4">
            @foreach ([
                ['Finance', 'Budgets, savings, goals.'],
                ['Wellbeing', 'Meals, exercise, sleep.'],
                ['Planning', 'Days, goals, projects.'],
                ['Reminders', 'Never miss what matters.'],
            ] as $i => [$title, $text])
                <div class="bg-white p-8" data-animate data-animate-delay="{{ $i + 1 }}">
                    <span class="text-sm font-semibold tabular-nums text-secondary-dark">0{{ $i + 1 }}</span>
                    <h3 class="mt-6 text-lg font-semibold text-ink">{{ $title }}</h3>
                    <p class="mt-1 text-text-muted">{{ $text }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>

<section class="border-y border-line bg-paper py-14 sm:py-16">
    <div class="container-x flex flex-col gap-6 sm:flex-row sm:items-center sm:justify-between" data-animate>
        <h2 class="text-2xl font-semibold text-ink">More solutions on the way. <span class="text-text-muted">Got an idea?</span></h2>
        <a href="/contact" class="btn btn-ghost shrink-0">Share it with us</a>
    </div>
</section>

@include('partials.cta')

@endsection
