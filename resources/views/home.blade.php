<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <title>Verifikasi Email</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <p>Silahkan Klik <a href="{{ url('verfikasi/register/'.$remember_token) }}">{{ url('verfikasi/register/'.$remember_token) }}</a></p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>
</html>