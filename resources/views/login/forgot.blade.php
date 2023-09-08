<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Lupa Password</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('lte/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{asset('lte/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('lte/dist/css/adminlte.min.css')}}">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="{{asset('windmil/public/assets/css/tailwind.output.css')}}" />
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/login.css')}}" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer>
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="{{asset('windmil/public/assets/js/init-alpine.js')}}"></script>

</head>

<body>
  <!-- /lupa password class="hold-transition login-page"-->
  <!-- <div class="login-box">
    <div class="card card-outline card-primary">
      <div class="card-header text-center">
        <a href="{{asset('/')}}" class="h1"><b>Password Reset</a>
      </div>

      <div class="card-body">
        <p class="login-box-msg">Masukkan Email untuk meminta akses ganti password.</p>
        <form action="recover" method="post">
          <div class="input-group mb-3">
            <input type="email" class="form-control" placeholder="Email">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-12">
              <button type="submit" class="btn btn-primary btn-block">Kirim</button>
            </div>
          </div>

        </form>
      </div>
    </div>
  </div> -->

  <div class="flex items-center min-h-screen p-6 bg-gray-50 white:bg-gray-900" style="flex-direction:column">
    <img src="{{asset('Image/logo-kominfo-transparent.png')}}" width="32px" height="32px" style="align-self: flex-start;" alt="User Image">
    <div class="flex-1 h-full w-full overflow-hidden bg-white rounded-lg  dark:bg-gray-800">
      <div class="flex items-center text-center max-w-2xl justify-center mx-auto p-20 sm:p-12">
        <div class="w-full" style="padding: 0 5em;">
          <form action="{{route('login_proses')}}" method="post">
            <h1 class="mb-4">
              Password Reset
            </h1>
            <p>Masukkan Email untuk meminta akses ganti password.</p>
            <label class="block text-sm">
              <input name="email" class="block w-full mt-1 text-sm dark:border-gray-600 white:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input" placeholder="example@email.com" />
            </label>
            @error('email')
            <small>*{{$message}}</small>
            @enderror

            <!-- You should use a button here, as the anchor is only used for the example  -->
            <button type="submit" class="btn-signin block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
              kirim
            </button>
            @if($message=Session::get('succes'))

            <script>
              Swal.fire('{{$message}}');
            </script>
            @endif
            @if($message=Session::get('failed'))
            <script>
              Swal.fire('{{$message}}');
            </script>
            @endif
          </form>
        </div>
      </div>
    </div>
  </div>

    <!-- jQuery -->
    <script src="{{asset('lte/plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('lte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('lte/dist/js/adminlte.min.js')}}"></script>
</body>

</html>