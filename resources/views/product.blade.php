{{-- @dd($products) --}}

{{-- <h1>INI HALAMAN PRODUCT</h1>

@foreach ( $products as $product)
    <h1>{{$product->nama_barang}}</h1>
    <p>{{$product->harga_barang}}</p>
    <p>{{$product->jumlah_barang}}</p>
    <hr>
@endforeach --}}

{{-- @dd($products) --}}

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>One Page Wonder - Start Bootstrap Template</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="/css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-dark bg-dark navbar-expand-md" >
            <div class="container px-5">
            <img src="/assets/img/logo.png" width="150px" height="100px">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="/konsumen">Konsumen</a></li>
                        <li class="nav-item"><a class="nav-link" href="/inventory">Inventory</a></li>
                        <li class="nav-item"><a class="nav-link" href="/product">Product</a></li>
                        @auth
                        <form action="/logout" method="post">
                        @csrf
                        <li class="nav-item"><button type="submit" class= "btn btn-dark">Logout</button></li>
                        </form>
                        @else
                        <li class="nav-item"><a class="nav-link" href="/login">Log In</a></li>
                        @endauth
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header-->

        <!-- Content section 1-->
        @foreach ( $products as $product)


        <section id="scroll">
            <div class="container border p-md-5 p-2">
                <div class="row g-2 g-md-4">
                    <div class="col-6 col-md-3">
                        <img src="/assets/img/{{$product->img}}" style = "width:300px ; height:300px"alt=" "  />
                    </div>
                    <div class="card-body col-lg-6 order-lg-1">
                        <div class="p-5 text-center">
                            <h2 class="display-4">{{$product->nama_barang}}</h2>
                            <p>Rp.{{$product->harga_barang}} </p>
                            <p>Jumlah Barang {{$product->jumlah_barang}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @endforeach

        <!-- Footer-->
        <!-- Footer-->
        <footer class="py-5 bg-black">
            <div class="container px-5">
                <img src="/assets/img/wa.png" width="35px" height="35px">
                <a href="https://www.instagram.com/accounts/onetap/?next=%2F"><img src="/assets/img/instagram.png" width="35px" height="35px">
                <a href="https://m.facebook.com/?paipv=0&eav=AfZz28Eu4QA0DCbL0eZaLSYoBeXsVVEdgBZa0SYbaCpEYB3KLjuGc4ay_cX9W5kJFcE&_rdr"><img src="/assets/img/facebook.png" width="35px" height="35px">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive"></div>
            </div>

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="/js/scripts.js"></script>
    </body>
</html>
