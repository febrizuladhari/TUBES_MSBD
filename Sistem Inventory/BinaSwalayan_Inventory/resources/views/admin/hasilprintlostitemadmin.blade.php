<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Print Lost Items</title>

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

    <h2 class="text-center">Lost Items on Bina Swalayan</h2>
    <p> Date/Time : {{ $waktuPrint->toDateTimeString() }} <span id='datetime'></span> </p>
    <table width="100%">
        <thead class="text-center">
            <tr>
                <td>No</td>
                <td>ID</td>
                <td>Lost Items</td>
                <td>Category</td>
                <td>Rack</td>
                <td>Warehouse</td>
                <td>Outlet</td>
                <td>Lost Date</td>
                <td>Reporter</td>
            </tr>
        </thead>

        <tbody>
            @foreach ($cetakLost as $lost)
                <tr>
                    <td class="text-center">{{ $no++ }}</td>
                    <td style="margin-left: 30px;">{{ $lost->id }}</td>
                    <td style="margin-left: 30px;">{{ $lost->nama_barang }}</td>
                    <td style="margin-left: 30px;">{{ $lost->kategori }}</td>
                    <td style="margin-left: 30px;">{{ $lost->rak }}</td>
                    <td style="margin-left: 30px;">{{ $lost->gudang }}</td>
                    <td style="margin-left: 30px;">{{ $lost->nama }}</td>
                    <td style="margin-left: 30px;">{{ $lost->tanggal_hilang }}</td>
                    <td style="margin-left: 30px;">{{ $lost->nama_user }}</td>
            @endforeach
                </tr>
        </tbody>
    </table>

</body>
</html>
