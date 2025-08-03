<?php

namespace App\Livewire\Obat;

use Livewire\Component;

class Edit extends Component
{
    public $obat;
    public function mount($obat)
    {
        $this->obat = $obat;
    }
    public function render()
    {
        return view('livewire.obat.edit');
    }
}
