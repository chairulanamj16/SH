<div>
    <div class="container">
        @if (session('success'))
            <div class="alert alert-success" role="alert">
                <strong>{{ session('success') }}</strong>
            </div>
        @endif
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
            <div class="col-12 col-md-8">
                <a href="/print" class="btn btn-dark">
                    Print
                </a>
                <br>
                <br>
                <table class="table table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th>NO</th>
                            <th>OBAT</th>
                            <th>JENIS OBAT</th>
                            <th>KEMASAN</th>
                            <th>JUMLAH</th>
                            <th>
                                AKSI
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($items as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->obat }}</td>
                                <td>{{ $item->jenis_obat }}</td>
                                <td>{{ $item->kemasan }}</td>
                                <td>{{ $item->jumlah }}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{ url('obat/' . $item->id) }}" class="btn btn-warning">
                                            Edit
                                        </a>
                                        <button class="btn btn-danger" data-bs-toggle="modal"
                                            data-bs-target="#modelIddelete{{ $item->id }}">
                                            Hapus
                                        </button>
                                    </div>
                                    <!-- Modal -->
                                    <div class="modal fade" id="modelIddelete{{ $item->id }}" tabindex="-1"
                                        role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    Apakah anda yakin ingin menghapus data ini ?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">
                                                        Tutap
                                                    </button>
                                                    <button type="button" class="btn btn-primary"
                                                        wire:click='delete("{{ $item->id }}")'
                                                        data-bs-dismiss="modal">
                                                        Hapus
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
