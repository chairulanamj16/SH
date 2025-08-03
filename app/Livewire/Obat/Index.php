<?php

namespace App\Livewire\Obat;

use App\Models\Obat;
use Livewire\Component;

class Index extends Component
{
    public $obat, $jenis_obat, $kemasan, $jumlah;

    public function render()
    {
        $data['items'] = Obat::orderBy('obat', 'ASC')->get();
        return view('livewire.obat.index', $data);
    }

    public function store()
    {
        $this->validate([
            'obat' => 'required|string',
            'jenis_obat' => 'required|string',
            'kemasan' => 'required|string',
            'jumlah' => 'required|string',
        ]);

        $item = new Obat();
        $item->obat = $this->obat;
        $item->jenis_obat = $this->jenis_obat;
        $item->kemasan = $this->kemasan;
        $item->jumlah = $this->jumlah;
        $item->save();
        $this->reset();
        return session()->flash('success', 'Berhasil simpan data');
    }

    public function delete($id)
    {
        $item = Obat::find($id);
        $item->delete();
        return session()->flash('success', 'Berhasil hapus data');
    }
}
