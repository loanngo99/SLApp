<?php

namespace App\Livewire;

use Livewire\Component;

class SearchInput extends Component
{
    public $count = 0;

    public function increment()
    {
        $this->count++;
    }

    public function search()
    {
        $this->count++;
    }

    public function render()
    {
        return view('livewire.search-input');
    }
}
