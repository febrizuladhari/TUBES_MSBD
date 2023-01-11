<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Print Request Buy Items</title>

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

    <h2 class="text-center">Request Buy Items on Bina Swalayan</h2>
    <p> Date/Time : {{ $waktuPrint->toDateTimeString() }} <span id='datetime'></span> </p>
    <table width="100%">
        <thead class="text-center">
            <tr>
                <td>No</td>
                <td>Request Buy Items</td>
                <td>Category</td>
                <td>Outlet</td>
                <td>Requester</td>
            </tr>
        </thead>

        <tbody>
            @foreach ($cetakIncoming as $incoming)
                <tr>
                    <td class="text-center">{{ $no++ }}</td>
                    <td style="margin-left: 30px;">{{ $incoming->nama_barang }}</td>
                    <td style="margin-left: 30px;">{{ $incoming->nama_kategori }}</td>
                    <td style="margin-left: 30px;">{{ $incoming->nama }}</td>
                    <td style="margin-left: 30px;">{{ $incoming->nama_user }}</td>
            @endforeach
                </tr>
        </tbody>
    </table>

</body>
</html>
