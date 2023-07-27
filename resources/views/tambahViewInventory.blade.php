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
<body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
            <div class="container px-5">
                <img src="/assets/img/logo.png" width="100px" height=50px>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="/konsumen">Konsumen</a></li>
                        <li class="nav-item"><a class="nav-link" href="/inventory">Inventory</a></li>
                        <li class="nav-item"><a class="nav-link" href="/product">Product</a></li>
                        <li class="nav-item"><a class="nav-link" href="/login">Log In</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <section class="row justify-content-center" style="padding-top: 100px ; min-height:100vh">
            <div class="col-6">
            <form action="/inventory/tambah" method="post">
                @csrf
            <h1 class="h3 mb-3 text-center fw-normal pt-5">Menambah Data Inventory</h1>
            
            <div class="form-floating">
                <input name="id_konsumen" type="number" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">ID Konsumen</label>
            </div>
            <div class="form-floating">
            <input name="nama_barang" type="text" class="form-control" id="floatingInput" placeholder="name">
            <label for="floatingInput">Nama Barang</label>
            </div>
            <div class="form-floating">
            <input name="harga_barang" type="number" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Harga Barang</label>
            </div>
            <div class="form-floating">
                <input name="jumlah_barang" type="number" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Jumlah Barang</label>
                </div>
            <div class="form-floating">
                    <input name="keterangan_barang" type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Keterangan</label>
                    </div>
                    
            <div class="checkbox mb-3">
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Tambah Data Barang</button>
        </div>
        </form>
        </section>
    
    <!-- Footer-->
    <footer class="py-5 bg-black">
        <div class="container px-5"><p class="m-0 text-center text-white small"></p></div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="/js/scripts.js"></script>
</body>
</html>