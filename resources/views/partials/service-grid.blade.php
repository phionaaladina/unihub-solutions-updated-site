{{-- Icon grid of offerings (home page). Icons are custom duotone SVGs in brand navy + orange. --}}
@php
    $offerings = [
        [
            'title' => 'Websites & Web Apps',
            'text' => 'Fast, modern and easy to manage.',
            'topic' => 'Software Development',
            'icon' => '<rect x="3" y="4" width="18" height="15" rx="2"/><path d="M3 8.5h18"/><g class="text-secondary"><path d="M7 15.5l3-3 2.5 2 4-4.5"/><circle cx="6" cy="6.25" r=".6" fill="currentColor" stroke="none"/><circle cx="8" cy="6.25" r=".6" fill="currentColor" stroke="none"/></g>',
        ],
        [
            'title' => 'Mobile Apps',
            'text' => 'Android & iOS apps people enjoy using.',
            'topic' => 'Software Development',
            'icon' => '<rect x="6.5" y="2.5" width="11" height="19" rx="2.5"/><path d="M10.75 18.5h2.5"/><g class="text-secondary"><rect x="9" y="6" width="6" height="7" rx="1" fill="currentColor" fill-opacity=".18"/><path d="M10.5 9.5h3M10.5 11h2"/></g>',
        ],
        [
            'title' => 'Business Systems',
            'text' => 'Inventory, sales and invoicing — your way.',
            'topic' => 'Software Development',
            'icon' => '<ellipse cx="12" cy="6" rx="7" ry="2.5"/><path d="M5 6v6c0 1.38 3.13 2.5 7 2.5s7-1.12 7-2.5V6"/><path d="M5 12v6c0 1.38 3.13 2.5 7 2.5s7-1.12 7-2.5v-6"/><g class="text-secondary" fill="currentColor" stroke="none"><circle cx="15.5" cy="10.75" r="1"/><circle cx="15.5" cy="16.75" r="1"/></g>',
        ],
        [
            'title' => 'IT Consultancy',
            'text' => 'Smart advice. No overspending.',
            'topic' => 'IT Consultancy',
            'icon' => '<path d="M9 18h6M10 21h4"/><path d="M15.1 14c.18-.98.65-1.74 1.4-2.5A4.65 4.65 0 0 0 18 8 6 6 0 0 0 6 8c0 1 .23 2.23 1.5 3.5.73.73 1.2 1.5 1.4 2.5"/><g class="text-secondary"><path d="M12 5.5v2.5l1.5 1.5"/></g>',
        ],
        [
            'title' => 'Equipment & Licences',
            'text' => 'Genuine gear, installed right.',
            'topic' => 'Hardware & Equipment',
            'icon' => '<rect x="2.5" y="4" width="19" height="12.5" rx="1.75"/><path d="M12 16.5V20M8.5 20h7"/><g class="text-secondary"><rect x="5.5" y="7" width="6" height="6.5" rx="1" fill="currentColor" fill-opacity=".18"/><path d="M14 8.5h4M14 11h3"/></g>',
        ],
        [
            'title' => 'Training & Support',
            'text' => 'Confident teams. Fast help.',
            'topic' => 'Training & Support',
            'icon' => '<rect x="3" y="3.5" width="18" height="11.5" rx="1.5"/><path d="M9 15l-2 6M15 15l2 6M12 15v2"/><g class="text-secondary"><path d="M7 12V9.5M10 12V7.5M13 12v-2"/><path d="M15.5 8h2.5M15.5 10.5h2"/></g>',
        ],
    ];
@endphp

<div class="mt-16 grid gap-x-8 gap-y-14 sm:grid-cols-2 lg:grid-cols-3">
    @foreach ($offerings as $i => $item)
        <a href="#contact" data-topic="{{ $item['topic'] }}" class="group flex flex-col items-center text-center" data-animate data-animate-delay="{{ ($i % 3) + 1 }}">
            <span class="relative flex size-36 items-center justify-center rounded-full bg-paper outline outline-1 outline-line transition duration-500 ease-out group-hover:-translate-y-1.5 group-hover:outline-secondary/60 group-hover:shadow-[0_24px_40px_-24px_rgba(14,21,56,0.35)]">
                <span class="flex size-[6.75rem] items-center justify-center rounded-full bg-white shadow-sm ring-1 ring-line/70 transition duration-500 group-hover:ring-secondary/30">
                    <svg class="size-16 text-primary" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">{!! $item['icon'] !!}</svg>
                </span>
            </span>
            <h3 class="mt-7 text-xl font-semibold text-ink transition group-hover:text-primary">{{ $item['title'] }}</h3>
            <p class="mt-2 text-text-muted">{{ $item['text'] }}</p>
        </a>
    @endforeach
</div>
