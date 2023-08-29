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
  <div class="group-2">
    <div class="layer-2">
      <svg class="layer-1" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M16.0418 26.8408C13.1441 26.8491 10.3614 25.7061 8.30333 23.6624C6.24525 21.6188 5.07968 18.841 5.06201 15.9379C5.06201 10.0655 10.0598 5.0839 15.957 5.07617C18.8564 5.08622 21.635 6.24061 23.6907 8.28918C25.7464 10.3377 26.9136 13.1154 26.9393 16.0203C26.947 21.9081 21.9954 26.8228 16.0418 26.8408ZM15.9081 24.1376C16.2884 24.1376 16.5351 23.9677 16.5608 23.6845C16.661 22.6521 17.4268 22.4307 18.249 22.1604C19.7034 21.6816 20.4948 20.6157 20.5436 19.071C20.5925 17.5264 19.7908 16.4734 18.3389 15.9585C17.1981 15.5517 16.0263 15.2093 14.9009 14.7948C14.13 14.5091 13.5673 13.9787 13.6418 13.0699C13.7163 12.1611 14.3741 11.7827 15.1681 11.5587C16.2396 11.2626 17.2238 11.6205 18.2336 11.9191C18.7475 12.071 19.3514 12.4649 19.6623 11.7338C20.022 10.8893 19.2075 10.74 18.7038 10.5006C17.7891 10.0655 16.7458 9.93936 16.4529 8.61866C16.3116 7.98533 15.5921 8.17585 15.443 8.80917C15.3818 9.13211 15.2317 9.43147 15.0097 9.67348C14.7877 9.91549 14.5026 10.0905 14.1865 10.1788C12.5497 10.7683 11.6684 11.9037 11.8148 13.7007C11.9613 15.4977 13.1895 16.2159 14.6979 16.6794C15.5921 16.9522 16.5094 17.1556 17.3933 17.4517C18.1642 17.7091 18.7501 18.224 18.7141 19.138C18.6781 20.1111 18.0409 20.5848 17.1724 20.8423C15.8465 21.2362 14.6876 20.747 13.5441 20.1626C12.984 19.8743 12.3647 19.2538 11.8585 20.1369C11.2804 21.1435 12.3056 21.3314 12.8324 21.6816C13.8294 22.3226 15.4019 22.2222 15.5535 23.9188C15.569 24.0063 15.8156 24.081 15.9081 24.1376Z" fill="black" />
        <path d="M15.9955 31.9997C9.3892 31.9997 3.13232 27.6051 0.976459 21.4444C0.413725 19.843 0.573038 19.686 2.24325 19.5676C3.78499 19.4569 4.64065 19.8945 5.42437 21.416C7.65731 25.7463 11.378 28.0041 16.2987 27.8909C21.1501 27.7776 24.619 25.3292 26.8108 21.053C27.5637 19.5856 29.1928 18.857 30.7422 19.5083C31.8729 19.9769 31.2382 20.8239 30.9992 21.4675C28.8048 27.672 22.6173 31.9997 15.9955 31.9997Z" fill="black" />
        <path d="M29.1158 12.4597C27.9775 12.6759 27.3428 12.0143 26.7646 10.8738C24.4957 6.39677 20.8803 4.0231 15.754 4.11578C10.7742 4.21876 7.33096 6.6362 5.14426 11.0051C4.50444 12.2923 2.2869 13.0492 1.09205 12.3438C0.339167 11.8984 0.727172 11.2651 0.919889 10.7322C2.31773 6.83959 4.81536 3.83774 8.4847 1.88628C10.4364 0.843281 12.5828 0.217064 14.7883 0.0471731C16.9938 -0.122717 19.2106 0.167409 21.2985 0.899234C23.3864 1.63106 25.3002 2.78868 26.9191 4.29901C28.5379 5.80933 29.8266 7.63955 30.7038 9.67409C30.768 9.82598 30.8348 9.97788 30.8913 10.1323C31.6288 12.1147 31.3847 12.47 29.1158 12.4597Z" fill="black" />
        <path d="M4.04192 16.0036C4.41451 17.641 3.75927 18.2099 2.05822 18.2074C0.403422 18.2074 -0.0385424 17.5303 0.00257055 16.0345C0.0693791 13.9749 0.277514 13.8076 2.25865 13.7175C4.04449 13.6402 4.31943 14.5465 4.04192 16.0036Z" fill="black" />
        <path d="M27.9157 15.6351C27.574 14.2088 28.2626 13.6244 29.866 13.7068C31.7238 13.7995 31.9371 14.008 31.9962 15.9827C32.0425 17.4372 31.6827 18.2637 29.9817 18.1735C27.9697 18.0654 27.9235 18.1143 27.9157 15.6351Z" fill="black" />
      </svg>
    </div>
  </div>

  <div class="flex items-center min-h-screen p-6 bg-gray-50 white:bg-gray-900">
    <div class="flex-1 h-full max-w-4xl mx-auto overflow-hidden bg-white rounded-lg shadow-xl dark:bg-gray-800">
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
                <input name="email" class="block w-full mt-1 text-sm dark:border-gray-600 white:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input" placeholder="example@student.uksw.edu" />
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
                <a class="text-sm font-medium text-purple-600 dark:text-purple-400 hover:underline" href="forgot">
                  Forgot your password?
                </a>
              </p>

              <!-- You should use a button here, as the anchor is only used for the example  -->
              <button type="submit" class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
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