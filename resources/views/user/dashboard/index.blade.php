<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    {{-- Custom CSS bootstrap --}}
    <link href="{{ asset('css/user/Dashboard/index.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0 px-lg-5">
            <a href="index.html" class="navbar-brand ml-lg-3">
                <h1 class="m-0 text-uppercase text-primary"><i class="fa fa-book-reader mr-3"></i>AILearning</h1>
            </a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-lg-3" id="navbarCollapse">
                <div class="navbar-nav mx-auto py-0">
                    <a href="index.html" class="nav-item nav-link active">Kelas</a>
                    <a href="about.html" class="nav-item nav-link">Fitur Simpel</a>
                    <a href="course.html" class="nav-item nav-link">Courses</a>
                    <a href="contact.html" class="nav-item nav-link">Contact</a>
                </div>
                <a href="" class="btn btn-primary py-2 px-4 d-none d-lg-block">Profile</a>
            </div>
        </nav>
    </div>

    {{-- end navbar --}}

    <div class="jumbotron jumbotron-fluid position-relative overlay-bottom" style="margin-bottom: 90px;">
        <div class="container text-center my-5 py-5">
            <h1 class="text-white mt-4 mb-4">Learn From Home</h1>
            <h1 class="text-white display-1 mb-5">Learn With AI</h1>
            <div class="mx-auto mb-5" style="width: 100%; max-width: 700px;">
                <div class="input-group">
                    <button class="btn btn-outline-light bg-white text-body px-4 dropdown-toggle" type="button"
                        data-bs-toggle="dropdown" aria-expanded="false">Courses</button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Courses 1</a></li>
                        <li><a class="dropdown-item" href="#">Courses 2</a></li>
                        <li><a class="dropdown-item" href="#">Courses 3</a></li>
                    </ul>
                    <input type="text" class="form-control border-light" style="padding: 30px 25px;"
                        placeholder="Keyword">
                    <button class="btn btn-secondary px-4 px-lg-5">Search</button>
                </div>

            </div>
        </div>
    </div>

    {{-- end jumbotron --}}

    <div class="d-flex justify-content-center align-items-center" style="height: 200px; background-color: #f1f1f1;">
        <a href="{{ route('nyobaai') }}" class="btn btn-primary">Coba Belajar Efisien Dengan AI</a>
    </div>

    
    <div class="container-fluid pt-5 vh-100">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="pr-3">Kelas</span></h2>
        <div class="row px-xl-5 pb-3 row-gap-4">
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <div class="card shadow-sm" style="width: 18rem;">
                    <img src="{{ asset('images/user/class.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <p class="small text-secondary">Ruang Kelas. (Bu Jaenam)</p>
            
                        <div class="position-relative">
                            <button class="btn btn-primary">Masuk Kelas</button>
                            <span class="position-absolute top-0 end-0 translate-middle bg-danger badge rounded-pill">5</span>
                        </div>
                    </div>
                </div>
            </div>
            

            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <div class="card shadow-sm" style="width: 18rem;">
                    <img src="{{ asset('images/user/class.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <p class="small text-secondary">Ruang Kelas. (Bu Jaenam)</p>

                        <div class="d-flex justify-content-center">
                            <button class="btn btn-primary">Masuk Kelas</button>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <div class="card shadow-sm" style="width: 18rem;">
                    <img src="{{ asset('images/user/class.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <p class="small text-secondary">Ruang Kelas. (Bu Jaenam)</p>
            
                        <div class="position-relative">
                            <button class="btn btn-primary">Masuk Kelas</button>
                            <span class="position-absolute top-0 end-0 translate-middle bg-danger badge rounded-pill">1</span>
                        </div>
                    </div>
                </div>
            </div>
            

            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <div class="card shadow-sm" style="width: 18rem;">
                    <img src="{{ asset('images/user/class.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <p class="small text-secondary">Ruang Kelas. (Bu Jaenam)</p>

                        <div class="d-flex justify-content-center">
                            <button class="btn btn-primary">Masuk Kelas</button>
                        </div>

                    </div>
                </div>
            </div>




        </div>
    </div>
    {{-- end Kelass --}}
    <div class="container-fluid pt-5  vh-100">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="pr-3">Fitur
                Simpel Lainya</span></h2>
        <div class="row px-xl-5 pb-3">
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <a class="text-decoration-none" href="">
                    <div class="cat-item d-flex align-items-center mb-4 border border-secondary rounded">
                        <div class="overflow-hidden" style="width: 100px; height: 100px;">
                            <img class="img-fluid" src="{{ asset('images/user/fitur_simpel.jpg') }}" alt="">
                        </div>
                        <div class="flex-fill pl-3">
                            <h6>Perhitungan Nilai</h6>
                            <button class="btn btn-primary">Coba</button>
                        </div>
                    </div>
                </a>
            </div>
            
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <a class="text-decoration-none" href="">
                    <div class="cat-item d-flex align-items-center mb-4 border border-secondary rounded">
                        <div class="overflow-hidden" style="width: 100px; height: 100px;">
                            <img class="img-fluid" src="{{ asset('images/user/fitur_simpel.jpg') }}" alt="">
                        </div>
                        <div class="flex-fill pl-3">
                            <h6>Perhitungan Nilai</h6>
                            <button class="btn btn-primary">Coba</button>
                        </div>
                    </div>
                </a>
            </div>
            
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <a class="text-decoration-none" href="">
                    <div class="cat-item d-flex align-items-center mb-4 border border-secondary rounded">
                        <div class="overflow-hidden" style="width: 100px; height: 100px;">
                            <img class="img-fluid" src="{{ asset('images/user/fitur_simpel.jpg') }}" alt="">
                        </div>
                        <div class="flex-fill pl-3">
                            <h6>Menghitung Target Nilai</h6>
                            <button class="btn btn-primary">Coba</button>
                        </div>
                    </div>
                </a>
            </div>
            
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <a class="text-decoration-none" href="">
                    <div class="cat-item d-flex align-items-center mb-4 border border-secondary rounded">
                        <div class="overflow-hidden" style="width: 100px; height: 100px;">
                            <img class="img-fluid" src="{{ asset('images/user/fitur_simpel.jpg') }}" alt="">
                        </div>
                        <div class="flex-fill pl-3">
                            <h6>Perhitungan Nilai</h6>
                            <button class="btn btn-primary">Coba</button>
                        </div>
                    </div>
                </a>
            </div>
            
          
          
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>

</html>
