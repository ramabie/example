<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class Upload extends Component
{
    use WithFileUploads;

    public $photo;

    public $pesan='';

    public function updatedPhoto()
    {
        $this->validate([
            'photo' => 'image|max:5120',
        ]);
    }

    public function save()
    {
        $this->pesan = 'sukses';
    }

    public function render()
    {
        return view('livewire.upload');
    }
}
