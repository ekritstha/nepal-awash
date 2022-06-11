<?php

use Illuminate\Support\Str;

return [
    'dateformat' => 'd/m/Y',
    'jsdateformat' => 'dd/mm/yy',
    'pages' => [
        Str::slug('home'),
        Str::slug('about'),
        Str::slug('blog'),
        Str::slug('property'),
        Str::slug('contact'),
        Str::slug('whyus'),
        Str::slug('Terms & Conditions'),
        Str::slug('Privacy Policy')
    ],
    'menu' => [
        ['name' => 'Component', 'slug' => 'component', 'icon' => 'fa-tools'],
        // ['name' => 'Slider', 'slug' => 'slider', 'icon' => 'fa-image'],
        // ['name' => 'Gallery', 'slug' => 'gallery', 'icon' => 'fa-image'],
        ['name' => 'Testimonial', 'slug' => 'testimonial', 'icon' => 'fa-thumbs-up'],
        // ['name' => 'Teams', 'slug' => 'teams', 'icon' => 'fa-users'],
        // ['name' => 'Features', 'slug' => 'features', 'icon' => 'fa-key'],
        ['name' => 'City', 'slug' => 'city', 'icon' => 'fas fa-map-marked'],
        // ['name' => 'Side', 'slug' => 'side', 'icon' => 'fas fa-location-arrow'],
        // ['name' => 'Sub Location', 'slug' => 'sub-location', 'icon' => 'fas fa-map-marker-alt'],
        // ['name' => 'Faq', 'slug' => 'faqs', 'icon' => 'fa-question-circle '],
        ['name' => 'Blog', 'slug' => 'blog', 'icon' => 'fa-newspaper'],
        ['name' => 'Property', 'slug' => 'property', 'icon' => 'fa-building'],
        ['name' => 'Why Us', 'slug' => 'why-us', 'icon' => 'fa-question-circle '],
        // ['name' => 'Category', 'slug' => 'category', 'icon' => 'fa-question-circle '],
        // ['name' => 'Property Type', 'slug' => 'property-type', 'icon' => 'fa-question-circle '],
        ['name' => 'Meta Tag', 'slug' => 'meta-tag', 'icon' => 'fa-universal-access']
    ],
    'add-exclude' => ['Component'],
    'list-exclude' => []
];
