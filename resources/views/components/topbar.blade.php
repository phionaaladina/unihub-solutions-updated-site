<div class="bg-primary-dark py-2 overflow-hidden">
    <div class="marquee-track">
        @php
            $marqueeIcons = [
                'check'  => ['M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z'],
                'phone'  => ['M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z'],
                'mail'   => ['M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75'],
                'pin'    => ['M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z', 'M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z'],
                'star'   => ['M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z'],
            ];
        @endphp

        @for ($i = 0; $i < 2; $i++)
            <div class="flex items-center shrink-0">

                {{-- ── Services cluster ── --}}
                <span class="topbar-cluster">
                    <span class="topbar-cluster">
                        <span class="topbar-pill topbar-pill--service"><svg class="topbar-icon" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">@foreach($marqueeIcons['check'] as $d)<path stroke-linecap="round" stroke-linejoin="round" d="{{ $d }}"/>@endforeach</svg>Software Development</span>
                        <span class="topbar-pill topbar-pill--service"><svg class="topbar-icon" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">@foreach($marqueeIcons['check'] as $d)<path stroke-linecap="round" stroke-linejoin="round" d="{{ $d }}"/>@endforeach</svg>IT Consultancy</span>
                        <span class="topbar-pill topbar-pill--service"><svg class="topbar-icon" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">@foreach($marqueeIcons['check'] as $d)<path stroke-linecap="round" stroke-linejoin="round" d="{{ $d }}"/>@endforeach</svg>Software Installation</span>
                        <span class="topbar-pill topbar-pill--service"><svg class="topbar-icon" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">@foreach($marqueeIcons['check'] as $d)<path stroke-linecap="round" stroke-linejoin="round" d="{{ $d }}"/>@endforeach</svg>Genuine Equipment</span>
                        <span class="topbar-pill topbar-pill--service"><svg class="topbar-icon" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">@foreach($marqueeIcons['check'] as $d)<path stroke-linecap="round" stroke-linejoin="round" d="{{ $d }}"/>@endforeach</svg>Expert Support</span>
                        <span class="topbar-pill topbar-pill--service"><svg class="topbar-icon" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">@foreach($marqueeIcons['check'] as $d)<path stroke-linecap="round" stroke-linejoin="round" d="{{ $d }}"/>@endforeach</svg>Training &amp; Support</span>
                    </span>
                </span>

                <span class="topbar-dot"></span>

                {{-- ── Location cluster ── --}}
                <span class="topbar-cluster">
                    <span class="topbar-pill topbar-pill--accent"><svg class="topbar-icon" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">@foreach($marqueeIcons['pin'] as $d)<path stroke-linecap="round" stroke-linejoin="round" d="{{ $d }}"/>@endforeach</svg>Plot 90 Kanjokya House, Kanjokya Street</span>
                    <span class="topbar-pill"><svg class="topbar-icon" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">@foreach($marqueeIcons['phone'] as $d)<path stroke-linecap="round" stroke-linejoin="round" d="{{ $d }}"/>@endforeach</svg>+256 784 675 790</span>
                    <span class="topbar-pill"><svg class="topbar-icon" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">@foreach($marqueeIcons['phone'] as $d)<path stroke-linecap="round" stroke-linejoin="round" d="{{ $d }}"/>@endforeach</svg>+256 704 145 972</span>
                    <span class="topbar-pill"><svg class="topbar-icon" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">@foreach($marqueeIcons['mail'] as $d)<path stroke-linecap="round" stroke-linejoin="round" d="{{ $d }}"/>@endforeach</svg>info@unihubug.org</span>
                </span>

                <span class="topbar-dot"></span>

                {{-- ── Values cluster ── --}}
                <span class="topbar-cluster">
                    <span class="topbar-pill"><svg class="topbar-icon" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">@foreach($marqueeIcons['star'] as $d)<path stroke-linecap="round" stroke-linejoin="round" d="{{ $d }}"/>@endforeach</svg>Genuine Equipment &amp; Licenses</span>
                    <span class="topbar-pill"><svg class="topbar-icon" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">@foreach($marqueeIcons['star'] as $d)<path stroke-linecap="round" stroke-linejoin="round" d="{{ $d }}"/>@endforeach</svg>Honest, Transparent Pricing</span>
                    <span class="topbar-pill"><svg class="topbar-icon" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">@foreach($marqueeIcons['star'] as $d)<path stroke-linecap="round" stroke-linejoin="round" d="{{ $d }}"/>@endforeach</svg>End-to-End Delivery</span>
                    <span class="topbar-pill"><svg class="topbar-icon" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">@foreach($marqueeIcons['star'] as $d)<path stroke-linecap="round" stroke-linejoin="round" d="{{ $d }}"/>@endforeach</svg>Practical, Business-First Approach</span>
                </span>

                <span class="topbar-dot"></span>

            </div>
        @endfor
    </div>
</div>

<style>
/* Cluster: holds pills tightly together with minimal gap */
.topbar-cluster {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    flex-shrink: 0;
}

/* Floating pill */
.topbar-pill {
    display: inline-flex;
    align-items: center;
    gap: 5px;
    background: rgba(255, 255, 255, 0.07);
    border: 1px solid rgba(255, 255, 255, 0.1);
    color: #fff;
    font-size: 0.75rem;
    font-weight: 500;
    padding: 3px 11px;
    border-radius: 9999px;
    white-space: nowrap;
    transition: background 0.2s ease;
}

.topbar-pill:hover {
    background: rgba(255, 255, 255, 0.15);
}

/* Accent variant for location */
.topbar-pill--accent {
    background: rgba(246, 129, 67, 0.18);
    border-color: rgba(246, 129, 67, 0.3);
}

/* Pill icon */
.topbar-icon {
    width: 13px;
    height: 13px;
    color: var(--color-secondary, #f68143);
    flex-shrink: 0;
}

/* Glowing dot separator between clusters */
.topbar-dot {
    display: inline-block;
    width: 5px;
    height: 5px;
    border-radius: 50%;
    background: var(--color-secondary, #f68143);
    box-shadow: 0 0 6px 2px rgba(246, 129, 67, 0.5);
    flex-shrink: 0;
    margin: 0 20px;
}
</style>
