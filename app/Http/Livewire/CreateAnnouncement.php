<?php

namespace App\Http\Livewire;

use App\Models\Annuouncement;
use Livewire\Component;

class CreateAnnouncement extends Component
{
    public $title;
    public $price;
    public $body;
    protected $rules = [
        'title' => 'required|min:3',
        'price' => 'required|max_digits:8',
        'body' => 'required|min:10',
    ];

    protected $messages = [
        'title.required' => 'Il campo Titolo Annuncio è obbligatorio',
        'price' => 'Il campo Prezzo è obbligatorio',
        'body.required' => "La descrizione dell'annuncio è obbligatoria"
    ];

    public function announcementStore(){
        $this->validate();
        $announcement = Annuouncement::create([
            'title' => $this->title;
            'price' => $this->price;
            'body' => $this->body;
        ]);

        session()->flash('status', 'Annuncio correttamente salvato');
        $this->reset();
    }
    public function render()
    {
        return view('livewire.create-announcement');
    }
}
