<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0 px-lg-5">
            <a href="index.html" class="navbar-brand ml-lg-3">
                <h1 class="m-0 text-uppercase text-primary"><i class="fa fa-book-reader mr-3"></i>Edukate</h1>
            </a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-lg-3" id="navbarCollapse">
                <div class="navbar-nav mx-auto py-0">
                    <a href="index.html" class="nav-item nav-link active">Home</a>
                    <a href="about.html" class="nav-item nav-link">About</a>
                    <a href="course.html" class="nav-item nav-link">Courses</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu m-0">
                            <a href="detail.html" class="dropdown-item">Course Detail</a>
                            <a href="feature.html" class="dropdown-item">Our Features</a>
                            <a href="team.html" class="dropdown-item">Instructors</a>
                            <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                        </div>
                    </div>
                    <a href="contact.html" class="nav-item nav-link">Contact</a>
                </div>
                <a href="" class="btn btn-primary py-2 px-4 d-none d-lg-block">Join Us</a>
            </div>
        </nav>
    </div>

    {{-- end navbar --}}

    <div class="jumbotron jumbotron-fluid position-relative overlay-bottom" style="margin-bottom: 90px;">
        <div class="container text-center my-5 py-5">
          <h1 class="text-white mt-4 mb-4">Learn From Home</h1>
          <h1 class="text-white display-1 mb-5">Education Courses</h1>
          <div class="mx-auto mb-5" style="width: 100%; max-width: 600px;">
            <div class="input-group">
              <button class="btn btn-outline-light bg-white text-body px-4 dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Courses</button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Courses 1</a></li>
                <li><a class="dropdown-item" href="#">Courses 2</a></li>
                <li><a class="dropdown-item" href="#">Courses 3</a></li>
              </ul>
              <input type="text" class="form-control border-light" style="padding: 30px 25px;" placeholder="Keyword">
              <button class="btn btn-secondary px-4 px-lg-5">Search</button>
            </div>
          </div>
        </div>
      </div>

      {{-- end jumbotron --}}
      
      <div class="container-fluid py-5">
        <div class="container py-5">
          <div class="row">
            <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 500px;">
              <div class="position-relative h-100">
                <img class="position-absolute w-100 h-100" src="img/about.jpg" style="object-fit: cover;">
              </div>
            </div>
            <div class="col-lg-7">
              <div class="section-title position-relative mb-4">
                <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">About Us</h6>
                <h1 class="display-4">First Choice For Online Education Anywhere</h1>
              </div>
              <p>Tempor erat elitr at rebum at at clita aliquyam consetetur. Diam dolor diam ipsum et, tempor voluptua sit consetetur sit. Aliquyam diam amet diam et eos sadipscing labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit. Sanctus clita duo justo et tempor consetetur takimata eirmod, dolores takimata consetetur invidunt magna dolores aliquyam dolores dolore. Amet erat amet et magna</p>
              <div class="row pt-3 mx-0">
                <div class="col-3 px-0">
                  <div class="bg-success text-center p-4">
                    <h1 class="text-white" data-bs-toggle="counter-up">123</h1>
                    <h6 class="text-uppercase text-white">Available<span class="d-block">Subjects</span></h6>
                  </div>
                </div>
                <div class="col-3 px-0">
                  <div class="bg-primary text-center p-4">
                    <h1 class="text-white" data-bs-toggle="counter-up">1234</h1>
                    <h6 class="text-uppercase text-white">Online<span class="d-block">Courses</span></h6>
                  </div>
                </div>
                <div class="col-3 px-0">
                  <div class="bg-secondary text-center p-4">
                    <h1 class="text-white" data-bs-toggle="counter-up">123</h1>
                    <h6 class="text-uppercase text-white">Skilled<span class="d-block">Instructors</span></h6>
                  </div>
                </div>
                <div class="col-3 px-0">
                  <div class="bg-warning text-center p-4">
                    <h1 class="text-white" data-bs-toggle="counter-up">1234</h1>
                    <h6 class="text-uppercase text-white">Happy<span class="d-block">Students</span></h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>
