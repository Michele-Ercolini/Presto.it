<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Announcement;

class PublicController extends Controller
{
    
    public function home() {
        
        $announcements = Announcement::take(6)->get()->sortByDesc('created_at');

        return view('welcome', compact('announcements'));
    }
}
