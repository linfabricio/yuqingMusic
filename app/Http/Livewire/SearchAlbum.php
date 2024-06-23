<?php

namespace App\Http\Livewire;

use Aerni\Spotify\Spotify;
use Livewire\Component;

class SearchAlbum extends Component
{
    protected $spotify;

    public $filter = null;
    public $albums = [];

    protected $rules = [
        'filter' => 'required',
    ];

    public function render()
    {
        return view('livewire.search-album');
    }

    public function searchAlbum(Spotify $spotify)
    {
        $this->validate();
        $this->spotify = $spotify;
        $this->albums = $this->spotify->searchAlbums($this->filter)->limit(12)->get();
    }
}
