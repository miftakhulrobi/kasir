<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Star Admin Free Bootstrap Admin Dashboard Template</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{asset('admin')}}/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="{{asset('admin')}}/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="{{asset('admin')}}/vendors/css/vendor.bundle.addons.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('admin')}}/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{asset('admin')}}/images/favicon.png" />

  <link rel="stylesheet" href="{{asset('admin')}}/vendors/iconfonts/font-awesome/css/font-awesome.css">

  <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">
</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
        <a class="navbar-brand brand-logo" href="/transaction">
          <img src="{{asset('admin')}}/images/logo.svg" alt="logo" />
        </a>
        <a class="navbar-brand brand-logo-mini" href="/transaction">
          <img src="{{asset('admin')}}/images/logo-mini.svg" alt="logo" />
        </a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">
        <ul class="navbar-nav navbar-nav-left header-links d-none d-md-flex">
          <li class="nav-item">
            <a href="#" class="nav-link">Transaction
              <span class="badge badge-animasi ml-1">New</span>
            </a>
          </li>
          <li class="nav-item active">
            <a href="#" class="nav-link">
            <i class="mdi mdi-calendar"></i>{{now()->format('d M Y')}}</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="mdi mdi-clock"></i>
              <span id="jam"></span>:
              <span id="menit"></span>:
              <span id="detik"></span>
            </a>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
       
          <li class="nav-item dropdown d-none d-xl-inline-block">
            <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <span class="profile-text">Hello, {{Auth::user()->name}} !</span>
              <img class="img-xs rounded-circle" src="{{asset('admin')}}/images/faces/admin.jpg" alt="Profile image">
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
       
              <a href="/logout" class="dropdown-item">
                Sign Out
              </a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <div class="nav-link">
              <div class="user-wrapper">
                <div class="profile-image">
                    <img src="{{asset('admin')}}/images/faces/admin.jpg" alt="profile image">
                </div>
                <div class="text-wrapper">
                    <p class="profile-name">{{Auth::user()->name}}</p>
                  <div>
                    <small class="designation text-muted">Kasir</small>
                    <span class="status-indicator online"></span>
                  </div>
                </div>
              </div>
              <button class="btn btn-success btn-block btn-new-product" data-toggle="modal" data-target="#addproduct">New Product
                <i class="mdi mdi-plus"></i>
              </button>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/transaction">
              <i class="menu-icon mdi mdi-television"></i>
              <span class="menu-title">Transaction</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/product">
                <i class="menu-icon mdi mdi-chart-line"></i>
                <span class="menu-title">Product</span>
            </a>
          </li>
 
        </ul>
      </nav>
      <!-- partial -->
      @yield('content')
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <div class="modal fade" id="addproduct" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addproductLabel">Tambah Product</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="/product/store" method="POST">
                {{ csrf_field() }}
                <div class="form-group form-floating-label">
                    <label for="inputFloatingLabel" class="placeholder">Product</label>
                    <input id="inputFloatingLabel" type="text" name="productname" class="form-control input-border-bottom" required>
                </div>    
                <div class="form-group form-floating-label">
                    <label for="inputFloatingLabel" class="placeholder">Harga</label>
                    <input id="inputFloatingLabel" type="number" name="harga" class="form-control input-border-bottom" required>
                </div>    
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Tambah</button>
        </div>
    </form>
      </div>
    </div>
</div>

  <!-- plugins:js -->
  <script src="{{asset('admin')}}/vendors/js/vendor.bundle.base.js"></script>
  <script src="{{asset('admin')}}/vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="{{asset('admin')}}/js/off-canvas.js"></script>
  <script src="{{asset('admin')}}/js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  {{-- <script src="{{asset('admin')}}/js/dashboard.js"></script> --}}
  <!-- End custom js for this page-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
  <script>
    @if(Session::has('sukses'))
    toastr.success("{{Session::get('sukses')}}", "Sukses")
    @endif
    @if(Session::has('error'))
    toastr.error("{{Session::get('error')}}", "Gagal")
    @endif
</script>
<script>
window.setTimeout('waktu()', 1000);
function waktu() {
    var waktu = new Date();
    setTimeout('waktu()', 1000);
    document.getElementById('jam').innerHTML = waktu.getHours();
    document.getElementById('menit').innerHTML = waktu.getMinutes();
    document.getElementById('detik').innerHTML = waktu.getSeconds();
}
</script>

@yield('footer')
</body>

</html>