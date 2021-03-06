<?php

namespace App\View\Components;

use App\Models\File;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\Component;

class FileListing extends Component {
    public Collection $files;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct() {
        //
        $this->files = File::all();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render() {
        return view('components.file-listing');
    }

    public function previewImgUrl($mimeType) {
        $urlMapping = [
            "application/pdf"                                                         => asset("assets/img/PDF_file_icon.svg"),
            "application/msword"                                                      => asset("assets/img/docx_icon.svg"),
            "application/vnd.openxmlformats-officedocument.wordprocessingml.document" => asset("assets/img/docx_icon.svg"),
            "application/zip"                                                         => asset("assets/img/zip_icon.svg"),
        ];

        return $urlMapping[$mimeType];
    }
}
