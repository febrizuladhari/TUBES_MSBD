<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cetak Barcode</title>

    <style>
        .text-center {
            text-align: center;
        }
    </style>
</head>
<body>
    <table width="100%">
        <tr>
            @foreach ($dataproduk as $produk)
                <td class="text-center" style="border: 1px solid #333;">
                    <img src="{{!!QrCode::merge(public_path('logo.png'), 0.4, true)
                                ->size(200)->errorCorrection('H')
                                ->generate("12345") !!}}">
                    <br>
                </td>
            @endforeach
        </tr>
    </table>
</body>
</html>