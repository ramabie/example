<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class Upload extends Component
{
    use WithFileUploads;

    public $photo;

    public $message;

    public function updatedPhoto()
    {
        $this->validate([
            'photo' => 'image|max:1024',
        ]);
    }

    public function save()
    {
        $this->message = 'sukses';
    }

    public function render()
    {
        return view('livewire.upload');
    }
}
