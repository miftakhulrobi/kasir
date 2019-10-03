<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Kasir</title>
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

  <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper auth-page">
      <div class="content-wrapper d-flex align-items-center auth auth-bg-1 theme-one">
        <div class="row w-100">
          <div class="col-lg-4 mx-auto">
            <div class="auto-form-wrapper">
              <form action="/postlogin" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                  <label class="label">Username</label>
                  <div class="input-group">
                    <input type="text" name="email" class="form-control" placeholder="Email" required>
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i id="email" class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="form-group mb-4">
                  <label class="label">Password</label>
                  <div class="input-group">
                    <input type="password" name="password" class="form-control" placeholder="*********" required>
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i id="password" class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="form-group mb-5">
                  <button type="submit" class="btn btn-primary submit-btn btn-block btn-login">Login</button>
                </div>
                <div class="form-group d-flex justify-content-between">
                  {{-- <div class="form-check form-check-flat mt-0">
                    <label class="form-check-label">
                      <input type="checkbox" class="form-check-input" checked> Keep me signed in
                    </label>
                  </div> --}}
                  {{-- <a href="#" class="text-small forgot-password text-black">Forgot Password</a> --}}
                </div>
        
              </form>
            </div>
            <ul class="auth-footer float-right">
              <li>
                <a href="/">Home</a>
              </li>
            </ul>
            <p id="by" class="footer-text text-center mt-5">copyright © 2019 <span class="text-info">Miftakhul Robi</span>. All rights reserved.</p>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="{{asset('admin')}}/vendors/js/vendor.bundle.base.js"></script>
  <script src="{{asset('admin')}}/vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="{{asset('admin')}}/js/off-canvas.js"></script>
  <script src="{{asset('admin')}}/js/misc.js"></script>
  <!-- endinject -->

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
  $(document).ready(function() {
    $('[name="email"]').keyup(function() {
        if(this.value.length < 6){
           $('#email').addClass('text-danger');
        }else{
           $('#email').removeClass('text-danger');
           $('#email').addClass('text-success');       
        }
    })
    $('[name="password"]').keyup(function() {
        if(this.value.length < 6){
           $('#password').addClass('text-danger');
        }else{
           $('#password').removeClass('text-danger');
           $('#password').addClass('text-success');       
        }
    })
  })
  </script>
</body>

</html>