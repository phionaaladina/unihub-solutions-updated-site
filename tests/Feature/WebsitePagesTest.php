<?php

namespace Tests\Feature;

use Tests\TestCase;

class WebsitePagesTest extends TestCase
{
    public function test_main_pages_and_legacy_solutions_url_are_available(): void
    {
        foreach (['/', '/about', '/services', '/products', '/contact', '/solutions'] as $url) {
            $this->get($url)->assertOk();
        }
    }

    public function test_homepage_has_the_requested_sections_without_unverified_counters(): void
    {
        $this->get('/')
            ->assertOk()
            ->assertSee('Digital Access for All.')
            ->assertSee('What We Do')
            ->assertSee('My Digital Diary')
            ->assertSee('ICT Equipment &amp; Products', false)
            ->assertDontSee('0+')
            ->assertDontSee('0%')
            ->assertDontSee('0/7')
            ->assertDontSee('Solutions</a>', false);
    }

    public function test_services_are_presented_without_numbered_counters(): void
    {
        $this->get('/services')
            ->assertOk()
            ->assertSee('Software Development')
            ->assertSee('IT Consultancy')
            ->assertSee('Hardware &amp; Equipment', false)
            ->assertSee('Software Installation &amp; Maintenance', false)
            ->assertSee('Training &amp; Support', false)
            ->assertSee('How We Work')
            ->assertDontSee('01 / 05');
    }
}
