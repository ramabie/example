<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class Upload extends Component
{
    use WithFileUploads;

    public $photo;

    public $pesan='', $path='';

    public function save()
    {

        $this->validate([
            'photo' => 'image|max:5120',
        ]);

        $this->pesan = 'sukses';

        $this->path = $this->photo->store('photos');
    }

    public function render()
    {
        return view('livewire.upload');
    }
}
