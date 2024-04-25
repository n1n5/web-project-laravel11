<?php

namespace App\Http\Controllers;

use App\Models\Story;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $stories = Story::orderBy('created_at', 'DESC');

        return view('dashboard', ['stories' => $stories->paginate(5)]);
    }
}
