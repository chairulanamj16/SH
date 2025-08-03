<?php

namespace App\Livewire\Obat;

use Livewire\Component;

class Edit extends Component
{
    public $item;
    public $obat, $jenis_obat, $kemasan, $jumlah;
    public function mount($obat)
    {
        $this->item = $obat;
        $this->obat = $obat->obat;
        $this->jenis_obat = $obat->jenis_obat;
        $this->kemasan = $obat->kemasan;
        $this->jumlah = $obat->jumlah;
    }
    public function render()
    {
        return view('livewire.obat.edit');
    }

    public function edit()
    {
        $this->validate([
            'obat' => 'required|string',
            'jenis_obat' => 'required|string',
            'kemasan' => 'required|string',
            'jumlah' => 'required|string',
        ]);

        $this->item->obat = $this->obat;
        $this->item->jenis_obat = $this->jenis_obat;
        $this->item->kemasan = $this->kemasan;
        $this->item->jumlah = $this->jumlah;
        $this->item->save();
        return redirect()->route('obat.index');
    }
}
