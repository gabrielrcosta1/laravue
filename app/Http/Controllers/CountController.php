<?php

namespace App\Http\Controllers;

use App\Models\Count;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CountController extends Controller
{
    public function index()
    {
        $count = Count::firstOrFail();
        return Inertia::render('Users', [
            'title' => 'ola mundo',
            'values' => $count->value
        ]);
    }

    public function increment()
    {
        $count = Count::firstOrFail();
        $count->value += 1;
        $count->save();
    }
}
