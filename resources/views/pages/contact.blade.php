@extends('layouts.app')

@section('title', 'Contact Us')
@section('description', 'Contact UniHub Solutions Uganda about technology services, ICT products and support. Plot 90 Kanjokya House, Kanjokya Street, Kampala.')

@section('content')

@include('partials.page-header', [
    'eyebrow' => 'Contact',
    'title' => 'Let’s talk <span class="text-primary">technology.</span>',
    'lead' => 'Tell us what you need. We’ll find the smartest way there.',
])

<section class="section bg-white">
    <div class="container-x grid gap-14 lg:grid-cols-12">

        {{-- Details --}}
        <div class="lg:col-span-5" data-animate>
            <h2 class="text-2xl font-semibold text-ink">Call. Email. Visit.</h2>

            <dl class="mt-8 divide-y divide-line border-y border-line">
                @foreach ([
                    ['Phone', '<a href="tel:+256784675790" class="block hover:text-primary">+256 784 675 790</a><a href="tel:+256704145972" class="block hover:text-primary">+256 704 145 972</a>', 'M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z'],
                    ['Email', '<a href="mailto:info@unihubug.org" class="hover:text-primary">info@unihubug.org</a>', 'M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75'],
                    ['Office', 'Plot 90 Kanjokya House<br>Kanjokya Street, Kampala', 'M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z'],
                    ['Hours', 'Monday – Friday<br>8:00am – 6:00pm', 'M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z'],
                ] as [$label, $value, $icon])
                    <div class="flex gap-5 py-6">
                        <span class="flex size-11 shrink-0 items-center justify-center rounded-full bg-paper text-primary">
                            <svg class="size-5" fill="none" viewBox="0 0 24 24" stroke-width="1.6" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="{{ $icon }}"/></svg>
                        </span>
                        <div>
                            <dt class="text-sm text-text-muted">{{ $label }}</dt>
                            <dd class="mt-1 text-lg font-medium leading-snug text-ink">{!! $value !!}</dd>
                        </div>
                    </div>
                @endforeach
            </dl>

            <a href="https://www.google.com/maps/search/?api=1&query=Kanjokya+House+Kanjokya+Street+Kampala" target="_blank" rel="noopener noreferrer" class="link-arrow mt-8">
                Open in Google Maps
                <svg viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><path fill-rule="evenodd" d="M5.22 14.78a.75.75 0 0 0 1.06 0l7.22-7.22v5.69a.75.75 0 0 0 1.5 0v-7.5a.75.75 0 0 0-.75-.75h-7.5a.75.75 0 0 0 0 1.5h5.69l-7.22 7.22a.75.75 0 0 0 0 1.06Z" clip-rule="evenodd"/></svg>
                <span class="sr-only">(opens in a new tab)</span>
            </a>
        </div>

        {{-- Form --}}
        @php $booking = request('topic') === 'consultation'; @endphp
        <div id="book" class="scroll-mt-28 lg:col-span-6 lg:col-start-7" data-animate data-animate-delay="1">
            <div class="rounded-[2rem] border bg-paper p-7 sm:p-10 {{ $booking ? 'border-secondary/50 ring-4 ring-secondary/10' : 'border-line' }}">
                @if ($booking)
                    <h2 class="text-2xl font-semibold text-ink">Book a consultation</h2>
                    <p class="mt-2 text-text-muted">Share your needs and a time that suits you.</p>
                @else
                    <h2 class="text-2xl font-semibold text-ink">Send us a message</h2>
                    <p class="mt-2 text-text-muted">A few details is all we need.</p>
                @endif

                <form action="mailto:info@unihubug.org" method="post" enctype="text/plain" class="mt-8 space-y-5">
                    <div class="grid gap-5 sm:grid-cols-2">
                        <div>
                            <label for="name" class="label">Name</label>
                            <input type="text" id="name" name="Name" required autocomplete="name" class="field" placeholder="Your full name">
                        </div>
                        <div>
                            <label for="email" class="label">Email</label>
                            <input type="email" id="email" name="Email" required autocomplete="email" class="field" placeholder="you@company.com">
                        </div>
                    </div>
                    <div>
                        <label for="topic" class="label">What can we help with?</label>
                        <select id="topic" name="Topic" class="field">
                            @foreach (config('site.services') as $service)
                                <option>{{ $service['title'] }}</option>
                            @endforeach
                            <option @selected($booking)>Book a consultation</option>
                            <option>ICT products / quote</option>
                            <option>My Digital Diary</option>
                            <option>Something else</option>
                        </select>
                    </div>
                    <div>
                        <label for="message" class="label">Message</label>
                        <textarea id="message" name="Message" rows="5" required class="field resize-y" placeholder="Tell us a little about what you need"></textarea>
                    </div>
                    <div class="flex flex-col gap-4 pt-2 sm:flex-row sm:items-center sm:justify-between">
                        <button type="submit" class="btn btn-primary">
                            Send message
                            <svg viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><path fill-rule="evenodd" d="M3 10a.75.75 0 0 1 .75-.75h10.638L10.23 5.29a.75.75 0 1 1 1.04-1.08l5.5 5.25a.75.75 0 0 1 0 1.08l-5.5 5.25a.75.75 0 1 1-1.04-1.08l4.158-3.96H3.75A.75.75 0 0 1 3 10Z" clip-rule="evenodd"/></svg>
                        </button>
                        <p class="text-sm text-text-muted">Opens your email app to send.</p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@include('partials.faq')

@endsection
