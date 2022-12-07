<div>
    <div class="container-fluid">
        <div class="row">
            <div class="table-responsive text-nowrap">
                <table class="table table-responsive table-hover table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Warehouse</th>
                            <th>Category</th>
                            <th>Rack</th>
                            <th>Outlet</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                    @foreach($barangs as $barang)

                        <h4>id = {{$barang->id}}</h4>
                        <h4>name = {{$barang->Nama}}</h4>
                        <h4>category = {{$barang->Kategori}}</h4>
                        <h4>warehouse = {{$barang->Gudang}}</h4>
                        <h4>rack = {{$barang->Rak}}</h4>
                        <h4>status = {{$barang->Status}}</h4>

                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row mt-5">
            <form wire:submit.prevent="store" class="container-fluid">
                <div class="mb-3">
                    <label class="form-label" for="qr">Name</label>
                    <input id="qr" type="search" wire:model="search" class="form-control mb-4 @error('qr') is-invalid @enderror" placeholder="Search Item ...">
                    @error('qr')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label" for="catatan">Notes</label>
                    <div class="input-group input-group-merge">
                        <span id="catatan" class="input-group-text"><i class="bx bx-package"></i></span>
                        <input wire:model="note" type="text" class="form-control @error('catatan') is-invalid @enderror" id="" name="catatan" placeholder="Notes"/>
                        @error('catatan')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Send Report</button>
                </div>
            </form>

            <div class="container-fluid my-4">
                <div id="reader" width="600px"></div>
            </div>

            <script src="https://unpkg.com/html5-qrcode" type="text/javascript"></script>
            <script>
                function onScanSuccess(decodedText, decodedResult) {
                    // handle the scanned code as you like, for example:
                    $('#qr').val(decodedText)
                }
                function onScanFailure(error) {
                    // handle scan failure, usually better to ignore and keep scanning.
                    // for example:
                    console.warn(`Code scan error = ${error}`);
                }

                let html5QrcodeScanner = new Html5QrcodeScanner(
                    "reader",
                    { fps: 10, qrbox: {width: 300, height: 300} },
                    /* verbose= */ false
                );
                html5QrcodeScanner.render(onScanSuccess, onScanFailure);
            </script>
        </div>
    </div>
</div>
