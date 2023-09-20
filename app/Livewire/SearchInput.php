<?php

namespace App\Livewire;

use Livewire\Component;
use App\Services\YoutubeService;

class SearchInput extends Component
{
    public $count = 0;
    public $videos;

    public function increment()
    {
        $this->count++;
    }

    public function search()
    {
        $videos = new YoutubeService;
        $this->videos = $videos->get('videos', 'part=snippet&id=BFflHDlTeHw&id=zH_SjIezX5I&id=ViBXz_2deCQ');
    }

    public function render()
    {
        return view('livewire.search-input');
    }
}
