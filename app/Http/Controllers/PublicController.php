<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Announcement;

class PublicController extends Controller
{
    
    public function home() {
        
        $announcements = Announcement::take(6)->orderBy('created_at', 'desc')->get();

        return view('welcome', compact('announcements'));
    }
}
