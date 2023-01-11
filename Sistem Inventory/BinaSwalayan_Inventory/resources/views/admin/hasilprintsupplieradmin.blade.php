<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Print Suppliers</title>

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

    <h2 class="text-center">Suppliers on Bina Swalayan</h2>
    <p> Date/Time : {{ $waktuPrint->toDateTimeString() }} <span id='datetime'></span> </p>
    <table width="100%">
        <thead class="text-center">
            <tr>
                <td>No</td>
                <td>Suppliers</td>
                {{-- <td>Items</td> --}}
            </tr>
        </thead>

        <tbody>
            @foreach ($cetakSupplier as $supplier)
            {{-- @foreach($jumlah as $jumlahBarang) --}}
                <tr>
                    <td class="text-center">{{ $no++ }}</td>
                    <td style="margin-left: 30px;">{{ $supplier->nama }}</td>
                    {{-- <td>{{ $jumlahBarang }}</td>
            @endforeach --}}
            @endforeach
                </tr>
        </tbody>
    </table>

</body>
</html>
