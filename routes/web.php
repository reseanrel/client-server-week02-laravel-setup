<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', [
        'student' => [
            'name' => 'Anrel del Rio',
            'number' => '0124-0558',
            'course' => 'Information Tech',
            'section' => 'BSIT 3B',
            'subject' => 'Client/Server Technologies',
            'initials' => 'AR',
        ],
        'currentDate' => now()->format('l, F j, Y'),
    ]);
});
