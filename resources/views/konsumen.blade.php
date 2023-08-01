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
        <section class="row justify-content-center" style="padding-top: 100px ; min-height:100vh">
            <div class="col-6">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Konsumen</th>
                        <th scope="col">Email</th>
                        <th>#</th>
                    </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        @foreach ($konsumens as $konsumen )
                        <tr>
                            <td>{{$konsumen->id}}</td>
                            <td>{{$konsumen->name}}</td>
                            <td>{{$konsumen->email}}</td>
                            <td>
                                <form onsubmit="return confirm('Data Konsumen Akan Dihapus?')" action="/konsumen/hapus/{{$konsumen->id}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger">
                                    Hapus
                                </button>
                                </form>
                            </td>
                        </tr>
                            
                        @endforeach
                    </tbody>
                </table>
                <a href="/konsumen/tambahViewKonsumen" class="btn btn-primary">Tambah Konsumen</a>
            </div>
            
        </section>
    
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