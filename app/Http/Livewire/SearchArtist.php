<?php

namespace App\Http\Livewire;

use Aerni\Spotify\Spotify;
use Livewire\Component;

class SearchArtist extends Component
{
    protected $spotify;

    public $filter = null;
    public $artists = [];

    protected $rules = [
        'filter' => 'required',
    ];

    public function render()
    {
        return view('livewire.search-artist');
    }

    public function searchArtist(Spotify $spotify)
    {
        $this->validate();
        $this->spotify = $spotify;
        $this->artists = $this->spotify->searchArtists($this->filter)->limit(12)->get();
    }
}
