<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Jobs\ResizeImage;

use App\Models\Announcement;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class CreateAnnouncement extends Component
{
    use WithFileUploads;
    public $title;
    public $price;
    public $body;
    public $category;
    public $images = [];
    public $temporary_images;
    public $announcement;

    
    protected $rules = [
        'title' => 'required|min:3',
        'price' => 'required|numeric',
        'category' => 'required',
        'body' => 'required|min:10',
        'images.*' => 'image|max:2048',
        'temporary_images.*' => 'image|max:2048'
    ];

    protected $messages = [
        'required' => 'Il campo :attribute è obbligatorio',
        'min' => 'Il campo è troppo corto',
        'temporary_images.required' => 'L\'immagine è richiesta',
        'temporary_images.*.image' => 'I file devono essere immagini',
        'temporary_images.*.max' => 'L\'immagine dev\'essere massimo di 2Mb',
        'images.image' => 'Il file deve essere un\'immagine',
        'image.max' => 'L\'immagine dev\'essere massimo di 2Mb'
    ];

    public function announcementStore(){
        $this->validate();

        $category = Category::find($this->category);
        $this->announcement = $category->announcements()->create([
            'title' => $this->title,
            'price' => $this->price,
            'body' => $this->body,
            'user_id' => Auth::user()->id,

        ]);
        if(count($this->images)){
			foreach($this->images as $image){
				// $this->announcement->images()->create(['path'=>$image->store('images','public')]);

                $newFileName = "announcements/{$this->announcement->id}";
                $newImage = $this->announcement->images()->create(['path'=>$image->store($newFileName, 'public')]);

                dispatch(new ResizeImage($newImage->path , 250 , 200));
			}

            // File::deleteDirectory(storage_path('/app/livewire-tmp'));
		}
        
        session()->flash('message','Articolo inserito con successo, sarà pubblicato dopo la revisione');
        $this->reset();
    }

    /* public function store(){

    
        $this->announcement = Category::find($this->category)->announcements()->create($this->validate());
		if(count($this->images)){
			foreach($this->images as $image){
				$this->announcement->images()->create(['path'=>$image->store('images','public')]);
			}
		}

		session()->flash('message','Articolo inserito con successo, sarà pubblicato dopo la revisione');
		$this->cleanForm();
    } */

    public function updated($propertyName){
        $this->validateOnly($propertyName);
    }

    public function updatedTemporaryImages()
	{
		if ($this->validate(['temporary_images.*'=>'image|max:2048',])) {
		    foreach ($this->temporary_images as $image) 
			{
				$this->images[] = $image;
			}
		}
	}

    public function removeImage($key)
	{
		if(in_array($key, array_keys($this->images))) {
			unset($this->images[$key]);
		}
	}


    public function render()
    {
        return view('livewire.create-announcement', ['categories' => Category::all()]);
    }
}
