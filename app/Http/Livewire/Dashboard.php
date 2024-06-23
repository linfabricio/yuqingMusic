<?php

namespace App\Http\Livewire;

use Aerni\Spotify\Spotify;
use Livewire\Component;
use PhpParser\Node\Expr\FuncCall;

class Dashboard extends Component
{
    protected $spotify;

    public $featuredPlaylists = [];
    public $categories = [];
    public $categoriesPlaylist = [];
    public $categorySelected = [];

    public function render()
    {
        return view('livewire.dashboard');
    }

    public function mount(Spotify $spotify)
    {
        $this->spotify = $spotify;
        $this->featuredPlaylists = $this->spotify->featuredPlaylists()->limit(12)->get();
        $this->categories = $this->spotify->categories()->limit(12)->get();
    }

    public function getPlaylistFromCategory(Spotify $spotify, $idCategory)
    {
        $this->spotify = $spotify;
        $this->categorySelected = $this->spotify->category($idCategory)->get();
        $this->categoriesPlaylist = $this->spotify->categoryPlaylists($idCategory)->limit(8)->get();
    }
}
