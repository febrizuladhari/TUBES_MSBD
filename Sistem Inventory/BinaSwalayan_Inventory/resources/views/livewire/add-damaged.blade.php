<div>

    @foreach($barangs as $barang)
    <h4>id = {{$barang->id}}</h4>
    <h4>name = {{$barang->Nama}}</h4>
    <h4>category = {{$barang->Kategori}}</h4>
    <h4>warehouse = {{$barang->Gudang}}</h4>
    <h4>rack = {{$barang->Rak}}</h4>
    <h4>status = {{$barang->Status}}</h4>
    @endforeach
    <form wire:submit.prevent="store">
        <div class="col">
        <input id="qr" type="search" wire:model="search" class="form-control mb-4" placeholder="Search Item ...">
    </div>
    <div class="input-group input-group-merge">
        <span id="catatan" class="input-group-text"><i class="bx bx-package"></i></span>
        <input wire:model="note" type="text" class="form-control" id="" name="catatan" placeholder="Notes"/>

    </div>
    <button type="submit" class="btn btn-primary">Send Report</button>
    </form>
    <div id="reader" width="600px"></div>

    <script src="https://unpkg.com/html5-qrcode" type="text/javascript"></script>
                <script>
                    function onScanSuccess(decodedText, decodedResult) {
                    // handle the scanned code as you like, for example:
                    console.log(`Code matched = ${decodedText}`, decodedResult);
                    $('#qr').val(decodedText)
                    }
                    function onScanFailure(error) {
                    // handle scan failure, usually better to ignore and keep scanning.
                    // for example:
                    console.warn(`Code scan error = ${error}`);
                    }

                    let html5QrcodeScanner = new Html5QrcodeScanner(
                    "reader",
                    { fps: 10, qrbox: {width: 250, height: 250} },
                    /* verbose= */ false);
                    html5QrcodeScanner.render(onScanSuccess, onScanFailure);
                </script>
</div>
