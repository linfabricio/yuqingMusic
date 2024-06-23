<?php

namespace App\Http\Livewire;

use Aerni\Spotify\Spotify;
use Livewire\Component;

class SearchMusic extends Component
{
    protected $spotify;

    public $filter = null;
    public $musics = [];

    protected $rules = [
        'filter' => 'required',
    ];

    public function render()
    {
        return view('livewire.search-music');
    }

    public function searchMusic(Spotify $spotify)
    {
        $this->validate();
        $this->spotify = $spotify;
        $this->musics = $this->spotify->searchTracks($this->filter)->limit(12)->get();
    }
}
