<div class="container">
    <div class="row">
        <div class="col-12 col-md-4">
            <div class="form-group">
                <label for="obat">OBAT</label>
                <input type="text" class="form-control" id="obat" wire:model.live='obat'>
                @error('obat')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="jenis_obat">JENIS OBAT</label>
                <input type="text" class="form-control" id="jenis_obat" wire:model.live='jenis_obat'>
                @error('jenis_obat')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="kemasan">KEMASAN</label>
                <input type="text" class="form-control" id="kemasan" wire:model.live='kemasan'>
                @error('kemasan')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="jumlah">JUMLAH</label>
                <input type="number" class="form-control" id="jumlah" wire:model.live='jumlah'>
                @error('jumlah')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <br>
            <br>
            <button class="btn btn-primary" wire:click='store'>
                Simpan
            </button>
        </div>
    </div>
</div>
