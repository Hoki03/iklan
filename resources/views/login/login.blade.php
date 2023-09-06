<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login</title>
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
  <div class="flex items-center min-h-screen p-6 bg-gray-50 white:bg-gray-900">
    <img src="{{asset('Image/logo-kominfo-transparent.png')}}" width="32px" height="32px" style="align-self: flex-start;" alt="User Image">

    <div class="flex-1 h-full max-w-4xl mx-auto overflow-hidden bg-white rounded-lg  dark:bg-gray-800">
      <!-- <div class="flex flex-col overflow-y-auto md:flex-row"> -->
      <!-- <div class="h-32 md:h-auto md:w-1/2">
          <img aria-hidden="true" class="object-cover w-full h-full dark:hidden" src="{{asset('windmil/public/assets/img/login-office.jpeg')}}" alt="Office" />
          <img aria-hidden="true" class="hidden object-cover w-full h-full dark:block" src="{{asset('windmil/public/assets/img/login-office-dark.jpeg')}}" alt="Office" />
        </div> -->
      <center>
        <div class="flex items-center justify-center p-20 sm:p-12 md:w-1/2 ">
          <div class="w-full">
            <form action="{{route('login_proses')}}" method="post">
              @csrf
              <h1 class="mb-4">
                Welcome.
              </h1>
              <label class="block text-sm">
                <input name="email" class="block w-full mt-1 text-sm dark:border-gray-600 white:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input" placeholder="example@email.com" />
              </label>
              @error('email')
              <small>*{{$message}}</small>
              @enderror
              <label class="block mt-4 text-sm">
                <input name="password" class="block w-full mt-1 text-sm dark:border-gray-600 white:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input" placeholder="***************" type="password" />
              </label>
              @error('password')
              <small>*{{$message}}</small>
              @enderror

              <p class="mt-4">
                <a class="text-sm font-medium hover:underline" href="forgot">
                  Lupa kata sandi?
                </a>
              </p>

              <!-- You should use a button here, as the anchor is only used for the example  -->
              <button type="submit" class="btn-signin block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                Sign in
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
      </center>
      <!-- </div> -->
    </div>
  </div>
</body>

</html>