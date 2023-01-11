<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Print Items</title>

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

    <h2 class="text-center">Items on Bina Swalayan</h2>
    <p> Date/Time : {{ $waktuPrint->toDateTimeString() }} <span id='datetime'></span> </p>
    <table width="100%">
        <thead class="text-center">
            <tr>
                <td>No</td>
                <td>ID</td>
                <td>Items</td>
                <td>Category</td>
                <td>Rack</td>
                <td>Warehouse</td>
                <td>Outlet</td>
                <td>Supplier</td>
            </tr>
        </thead>

        <tbody>
            @foreach ($cetakBarang as $barang)
                <tr>
                    <td class="text-center">{{ $no++ }}</td>
                    <td style="margin-left: 30px;">{{ $barang->id }}</td>
                    <td style="margin-left: 30px;">{{ $barang->nama }}</td>
                    <td style="margin-left: 30px;">{{ $barang->kategori }}</td>
                    <td style="margin-left: 30px;">{{ $barang->rak }}</td>
                    <td style="margin-left: 30px;">{{ $barang->gudang }}</td>
                    <td style="margin-left: 30px;">{{ $barang->outlet }}</td>
                    <td style="margin-left: 30px;">{{ $barang->supplier }}</td>
            @endforeach
                </tr>
        </tbody>
    </table>

</body>
</html>
