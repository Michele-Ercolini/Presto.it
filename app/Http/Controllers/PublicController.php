<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Announcement;
use App\Models\Category;

class PublicController extends Controller
{
    
    public function home() {
        
        $announcements = Announcement::take(6)->orderBy('created_at', 'desc')->get();

        return view('welcome', compact('announcements'));
    }

    public function categoryShow(Category $category){
        return view ('category.show', compact('category'));
    }
}
