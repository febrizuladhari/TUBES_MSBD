<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Print Categories</title>

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

    <h2 class="text-center">Categories on Bina Swalayan</h2>
    <p> Date/Time : {{ $waktuPrint->toDateTimeString() }} <span id='datetime'></span> </p>
    <table class="text-center" width="100%">
        <thead>
            <tr>
                <td>No</td>
                <td>Category</td>
                {{-- <td>Items</td> --}}
            </tr>
        </thead>

        <tbody>
            @foreach ($cetakKategori as $kategori)
            {{-- @foreach($jumlah as $jumlahBarang) --}}
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $kategori->nama_kategori }}</td>
                    {{-- <td>{{ $jumlahBarang }}</td>
            @endforeach --}}
            @endforeach
                </tr>
        </tbody>
    </table>

</body>
</html>
