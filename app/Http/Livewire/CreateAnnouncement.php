<?php

namespace App\Http\Livewire;

use App\Models\Announcement;
use Livewire\Component;

class CreateAnnouncement extends Component
{
    public $title;
    public $price;
    public $body;
    public $category;
    
    protected $rules = [
        'title' => 'required|min:3',
        'price' => 'required|max_digits:8',
        'category' => 'required',
        'body' => 'required|min:10',
    ];

    protected $messages = [
        'required' => 'Il campo :attribute è obbligatorio',
        'min' => 'Il campo è troppo corto'
    ];

    public function announcementStore(){
        Announcement::create([
            'title' => $this->title,
            'price' => $this->price,
            'body' => $this->body
        ]);
        
        session()->flash('status', 'Annuncio correttamente salvato');
        $this->reset();
    }

    public function update($propertyName){
        $this->validate();
    }

    public function render()
    {
        return view('livewire.create-announcement');
    }
}
