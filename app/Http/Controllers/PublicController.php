<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Announcement;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class PublicController extends Controller
{
    
    public function home() {
        
        $announcements = Announcement::take(6)->orderBy('created_at', 'desc')->get();

        return view('welcome', compact('announcements'));
    }

    public function profile(){
        $announcements = Announcement::where('user_id', Auth::id())->orderBy('created_at', 'DESC')->get();
        return view('user.profile', compact('announcements'));
    }

    public function categoryShow(Category $category){
        return view ('category.show', compact('category'));
    }
}
