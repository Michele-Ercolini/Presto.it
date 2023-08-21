<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Announcement;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class PublicController extends Controller
{
    
    public function home() {
        
        $announcements = Announcement::where('is_accepted', true)->take(6)->orderBy('created_at', 'desc')->get();

        return view('welcome', compact('announcements'));
    }

    public function profile(){
        $announcements = Announcement::where('user_id', Auth::id())->orderBy('created_at', 'DESC')->get();
        return view('user.profile', compact('announcements'));
    }

    public function categoryShow(Category $category){
        /* $announcements=Announcement::where('is_accepted', true)->orderBy('created_at', 'DESC'); */
        return view ('category.show', compact('category'));
    }

    public function lavora(){
        return view ('user.lavora');
    }

    public function searchAnnouncements(Request $request)
    {
        $announcements = Announcement::search($request->searched)->where('is_accepted', true)->paginate(9);
        return view('announcement.index', compact('announcements'));
    }
}
