<?php

namespace App\Http\Livewire;

use Aerni\Spotify\Spotify;
use Livewire\Component;

class NewReleasesAlbums extends Component
{
    protected $spotify;

    public $albums = [];

    public function render()
    {
        return view('livewire.new-releases-albums');
    }

    public function mount(Spotify $spotify)
    {
        $this->spotify = $spotify;
        $this->albums = $this->spotify->newReleases()->get();
    }
}
