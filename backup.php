<?php

if (config('app.env') === 'local') {

    return [
        'text' => env('APP_NAME', 'Laravel'),
        'color' => env('LAZY_LOGO_COLOR', ['#3b22aa', '#9f20ff']), // Use an array for a gradient: ['#f94f57', '#c471ed', '#12c2e9']
        'font_family' => 'Inter UI,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Oxygen,Ubuntu,Cantarell,Fira Sans,Droid Sans,Helvetica Neue',
        'font_size' => '20px',
        'font_weight' => '500',
        'font_shift' => '1',

    ];

} else {

    return [
//        'text'        => env('APP_NAME', 'Laravel'),
        'text' => '⚠️ Production',
        'color' => env('LAZY_LOGO_COLOR', '#ff4d4c'), // Use an array for a gradient: ['#f94f57', '#c471ed', '#12c2e9']
        'font_family' => 'Inter UI,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Oxygen,Ubuntu,Cantarell,Fira Sans,Droid Sans,Helvetica Neue',
        'font_size' => '30px',
        'font_weight' => '500',
        'font_shift' => '1',

    ];
}
