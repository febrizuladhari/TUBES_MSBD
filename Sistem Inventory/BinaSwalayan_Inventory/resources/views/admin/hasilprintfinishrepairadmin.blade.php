<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Print Repaired Items</title>

    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        .text-center {
            text-align: center;
        }
    </style>
    <script>
        var dt = new Date();
        document.getElementById('datetime').innerHTML=dt;
    </script>
</head>
<body>

    <h2 class="text-center">Repaired Items on Bina Swalayan</h2>
    <p> Date/Time : {{ $waktuPrint->toDateTimeString() }} <span id='datetime'></span> </p>
    <table width="100%">
        <thead class="text-center">
            <tr>
                <td>No</td>
                <td>ID</td>
                <td>Repaired Items</td>
                <td>Category</td>
                <td>Rack</td>
                <td>Warehouse</td>
                <td>Outlet</td>
                <td>Out Date</td>
                <td>Back Date</td>
                <td>Location</td>
                <td>Noted</td>
            </tr>
        </thead>

        <tbody>
            @foreach ($cetakFinishRepair as $repair)
                <tr>
                    <td class="text-center">{{ $no++ }}</td>
                    <td style="margin-left: 30px;">{{ $repair->id }}</td>
                    <td style="margin-left: 30px;">{{ $repair->nama_barang }}</td>
                    <td style="margin-left: 30px;">{{ $repair->kategori }}</td>
                    <td style="margin-left: 30px;">{{ $repair->rak }}</td>
                    <td style="margin-left: 30px;">{{ $repair->gudang }}</td>
                    <td style="margin-left: 30px;">{{ $repair->nama }}</td>
                    <td style="margin-left: 30px;">{{ $repair->tanggal_keluar }}</td>
                    <td style="margin-left: 30px;">{{ $repair->tanggal_kembali }}</td>
                    <td style="margin-left: 30px;">{{ $repair->lokasi }}</td>
                    <td style="margin-left: 30px;">{{ $repair->catatan }}</td>
            @endforeach
                </tr>
        </tbody>
    </table>

</body>
</html>
