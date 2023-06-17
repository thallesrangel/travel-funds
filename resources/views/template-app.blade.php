<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="/css/app.css">
    <script src="/js/app.js"></script>
    <link rel='icon' href="{{ asset('img/favicon.png') }}" type='image/x-icon' sizes="16x16" />
    <title>TravelFounds</title>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    <div class="container-fluid">
        @include('alert')
        <div class="row">
          <!-- Sidebar -->
          @include('dashboard.components.navbar')
    
          <!-- Content -->
          <main class="col-md-10 ml-sm-auto">
            <div class="row d-md-none">
              <div class="col-6">
                <a class="d-md-none" href="#">
                  <img class="img-fluid logo" src="{{ asset('img/logo.png') }}">
                </a>
              </div>
              <div class="col-6">
                <button class="btn btn-primary d-md-none" type="button" data-bs-toggle="modal" data-bs-target="#sidebarModal">
                  <i class="bi bi-list"></i>
                </button>
              </div>
            </div>
           
            @yield('content')
          </main>
        </div>
      </div>
    
    <div class="modal fade" id="sidebarModal" tabindex="-1" aria-labelledby="sidebarModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-fullscreen-sm-down">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="sidebarModalLabel">Menu</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <ul class="nav flex-column">
                <li class="nav-item">
                  <a class="nav-link active" href="#">Item 1</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Item 2</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Item 3</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
    </div>
</body>
</html>
