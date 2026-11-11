<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class PageController extends Controller
{
    public function contacts(): View
    {
        return view('pages.contacts');
    }

    public function privacy(): View
    {
        return view('pages.privacy');
    }

    public function consent(): View
    {
        return view('pages.consent');
    }

    public function payment(): View
    {
        return view('pages.payment');
    }
}
