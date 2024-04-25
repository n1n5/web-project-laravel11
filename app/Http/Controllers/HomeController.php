<?php

namespace App\Http\Controllers;

use App\Models\Scp;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $scps = Scp::orderBy('item', 'ASC');

        if (request()->has('search')) {
            $scps = $scps->where('item', 'like', '%' . request()->get('search', '') . '%');
        }

        return view('home', ['scps' => $scps->paginate(6)]);
    }

    public function show(Scp $scp)
    {
        return view('scps.show', compact('scp'));
    }
}
