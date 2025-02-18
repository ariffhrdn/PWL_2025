<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return 'Selamat Datang';
    }

    public function about() {
        return '2341760192 / Muhammad Arif Fahrudin';
    }

    public function articles($ID) {
        return 'Halaman Artikel dengan ID-'.$ID;
    }
}
