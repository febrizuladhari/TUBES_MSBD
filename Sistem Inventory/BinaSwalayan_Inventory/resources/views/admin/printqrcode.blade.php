<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Print QR Code</title>

    <style>
        .text-center {
            text-align: center;
        }
    </style>

</head>
<body>
    <h2 class="text-center">List ID Items With QR Code</h2>
    <table width="100%">
        <tr>
            @foreach ($dataBarangs as $data)
                    <td class="text-center" style="border: 1px solid #333;">
                        <br>
                        <img src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->merge(public_path('logo.png'), 0.4, true)->
                        size(150)->errorCorrection('H')->generate($data->id)) !!} ">
                        <br>
                        <p>{{ $data->id }}</p>
                    </td>

                    @if ($no++ % 3 == 0)
                        <tr></tr>
                    @endif
            @endforeach
        </tr>
    </table>
</body>
</html>
