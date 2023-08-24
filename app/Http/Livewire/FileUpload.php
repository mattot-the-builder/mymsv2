<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;

class FileUpload extends Component {

    use WithFileUploads;

    public $file;

    public function render() {
        return view('livewire.file-upload');
    }

    // upload function
    public function upload($type) {
        $this->validate([
            'file' => 'image|max:1024', // 1MB Max
        ]);

        $file_name = Auth::user()->staff->id . '_' . $type . '.' . $this->file->extension();

        $this->file->storeAs('photos/staff/' . $type, $file_name, 'public');

        session()->flash('message', 'Image successfully Uploaded.');
    }
}
