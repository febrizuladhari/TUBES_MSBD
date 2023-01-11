<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Print Request Shifting Items</title>

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

    <h2 class="text-center">Request Shifting Items on Bina Swalayan</h2>
    <p> Date/Time : {{ $waktuPrint->toDateTimeString() }} <span id='datetime'></span> </p>
    <table width="100%">
        <thead class="text-center">
            <tr>
                <td>No</td>
                <td>ID</td>
                <td>Request Shifting</td>
                <td>Category</td>
                <td>Rack</td>
                <td>Warehouse</td>
                <td>Outlet</td>
                <td>Requester</td>
                <td>Needed Date</td>
            </tr>
        </thead>

        <tbody>
            @foreach ($cetakShifting as $shifting)
                <tr>
                    <td class="text-center">{{ $no++ }}</td>
                    <td style="margin-left: 30px;">{{ $shifting->id }}</td>
                    <td style="margin-left: 30px;">{{ $shifting->nama_barang }}</td>
                    <td style="margin-left: 30px;">{{ $shifting->kategori }}</td>
                    <td style="margin-left: 30px;">{{ $shifting->rak }}</td>
                    <td style="margin-left: 30px;">{{ $shifting->gudang }}</td>
                    <td style="margin-left: 30px;">{{ $shifting->outlet }}</td>
                    <td style="margin-left: 30px;">{{ $shifting->user }}</td>
                    <td style="margin-left: 30px;">{{ $shifting->tanggal_diperlukan }}</td>
            @endforeach
                </tr>
        </tbody>
    </table>

</body>
</html>
