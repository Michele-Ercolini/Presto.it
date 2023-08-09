<?php

namespace App\Http\Livewire;

use App\Models\Announcement;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CreateAnnouncement extends Component
{
    public $title;
    public $price;
    public $body;
    public $category;
    
    protected $rules = [
        'title' => 'required|min:3',
        'price' => 'required|numeric',
        'category' => 'required',
        'body' => 'required|min:10',
    ];

    protected $messages = [
        'required' => 'Il campo :attribute è obbligatorio',
        'min' => 'Il campo è troppo corto'
    ];

    public function announcementStore(){
        $this->validate();

        $category = Category::find($this->category);
        $category->announcements()->create([
            'title' => $this->title,
            'price' => $this->price,
            'body' => $this->body,
            'user_id' => Auth::user()->id,
        ]);
        
        session()->flash('message', 'Annuncio correttamente salvato');
        $this->reset();
    }

    public function updated($propertyName){
        $this->validateOnly($propertyName);
    }


    public function render()
    {
        return view('livewire.create-announcement', ['categories' => Category::all()]);
    }
}
