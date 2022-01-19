<!DOCTYPE html>
    <html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Aplikasi Sebaran WIFI Kabupaten Karawang</title>
        {{-- import file bootstrap  --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    </head>
    
    <body>
        <br>
        <div class="container">
            <nav class="navbar navbar-dark bg-success">
                <div class="container">
                    <a class="navbar-brand" href="#">
                        <img src="{{ asset('images/logo1.png') }}" width="300px"/>    
                    </a>
                </div>
            </nav>
            <br>
            <div class="col-12">
                <div class="row">
                    @foreach ($post as $item)
                    <div class="col-3">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">{{ $item->title }}</h5>
                                <p class="card-text">Nama Wifi : {{ substr($item->nama, 0, 100) }} <br> Alamat Wifi Terdaftar : {{ substr($item->lokasi, 0, 100) }}</p>
                                <a href="#" class="btn btn-primary">Detail Data</a>
                            </div>
                        </div>
                        <br>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </body>
    
    </html>