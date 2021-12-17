<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Working Projects</title>
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/>
  </head>
  <body class="bg-gray-100 font-sans leading-normal tracking-normal">
    <nav id="header" class="fixed w-full z-10 top-0">

  		<div id="progress" class="h-1 z-20 top-0" style="background:linear-gradient(to right, #4dc0b5 var(--scroll), transparent 0);"></div>

  		<div class="w-full md:max-w-4xl mx-auto flex flex-wrap items-center justify-between mt-0 py-3">

  			<div class="pl-4">
  				<a class="text-gray-900 text-base no-underline hover:no-underline font-extrabold text-xl" href="/">
  					Laurens Kosters
  				</a>
  			</div>

  			<div class="block lg:hidden pr-4">
  				<button id="nav-toggle" class="flex items-center px-3 py-2 border rounded text-gray-500 border-gray-600 hover:text-gray-900 hover:border-green-500 appearance-none focus:outline-none">
  					<svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
  						<title>Menu</title>
  						<path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
  					</svg>
  				</button>
  			</div>

  			<div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden lg:block mt-2 lg:mt-0 bg-gray-100 md:bg-transparent z-20" id="nav-content">
  				<ul class="list-reset lg:flex justify-end flex-1 items-center">
  					<li class="mr-3">
  						<a class="inline-block text-gray-600 no-underline hover:text-gray-900 hover:text-underline py-2 px-4" href="/portfolio">Portfolio</a>
  					</li>
  					<li class="mr-3">
  						<a class="inline-block py-2 px-4 text-gray-900 font-bold no-underline" href="/workingprojects">Working Projects</a>
  					</li>
  					<li class="mr-3">
  						<a class="inline-block text-gray-600 no-underline hover:text-gray-900 hover:text-underline py-2 px-4" href="/finishedprojects">Finished Projects</a>
  					</li>
            <li>
              @if (Route::has('login'))
                  <div>
                      @auth
                          <a href="{{ url('/dashboard') }}" class="inline-block text-gray-600 no-underline hover:text-gray-900 hover:text-underline py-2 px-4">Dashboard</a>
                      @else
                          <a href="{{ route('login') }}" class="inline-block text-gray-600 no-underline hover:text-gray-900 hover:text-underline py-2 px-4">Log in</a>

                          <!-- @if (Route::has('register'))
                              <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                          @endif -->
                      @endauth
                  </div>
              @endif
            </li>
  				</ul>
  			</div>
  		</div>
  	</nav>

    <div class="container w-full md:max-w-3xl mx-auto pt-20">

  		<div class="w-full px-4 md:px-6 text-xl text-gray-800 leading-normal" style="font-family:Georgia,serif;">

  			<!--Title-->
  			<div class="font-sans">
  						<h1 class="font-bold font-sans break-normal text-gray-900 pt-6 pb-2 text-3xl md:text-4xl">Working Projects</h1>
  			</div>


  			<!--Post Content-->


  			<!--Lead Para-->
  			<p class="py-6">
          As a sutdent I am most of the time working on many projects at once and I also start projects for fun. So here you can see the projects I am currently working on.
  			</p>

  			<p class="py-6">Projects:</p>

        <ul>
        @foreach($Project as $Project)
          @if($Project->finished == 'no')
            <blockquote class="border-l-4 border-green-500 italic my-8 pl-8 md:pl-12"><a href="#"><li>{{ $Project->name }}</li></a> <br> <li>{{ $Project->description }}</li></blockquote>
            @if (Auth::check())
            <form action="projects/{{ $Project->id }}/edit">
            <button>Edit</button>
            </form>
            @endif
            <hr class="border-b-2 border-gray-400 mb-8 mx-4">
          @endif
        @endforeach
      </ul>
    </div>
    <footer class="bg-white border-t border-gray-400 shadow">
      <div class="container max-w-4xl mx-auto flex py-8">

        <div class="w-full mx-auto flex flex-wrap">
          <div class="flex w-full md:w-1/2 ">
            <div class="px-8">
              <h3 class="font-bold text-gray-900">About</h3>
              <p class="py-4 text-gray-600 text-sm">
                Website with Laravel php framework. Website also self made by Laurens Kosters. For contact click on one of the socials.
              </p>
            </div>
          </div>

          <div class="flex w-full md:w-1/2">
            <div class="px-8">
              <h3 class="font-bold text-gray-900">Social</h3>
              <ul class="list-reset items-center text-sm pt-3">
                <li>
                  <a class="inline-block text-gray-600 no-underline hover:text-gray-900 hover:text-underline py-1" href="#">Email</a>
                </li>
                <li>
                  <a class="inline-block text-gray-600 no-underline hover:text-gray-900 hover:text-underline py-1" href="#">Instagram</a>
                </li>
                <li>
                  <a class="inline-block text-gray-600 no-underline hover:text-gray-900 hover:text-underline py-1" href="#">Twitter</a>
                </li>
              </ul>
            </div>
          </div>
        </div>



      </div>
    </footer>

      <script>
        /* Progress bar */
        //Source: https://alligator.io/js/progress-bar-javascript-css-variables/
        var h = document.documentElement,
          b = document.body,
          st = 'scrollTop',
          sh = 'scrollHeight',
          progress = document.querySelector('#progress'),
          scroll;
        var scrollpos = window.scrollY;
        var header = document.getElementById("header");
        var navcontent = document.getElementById("nav-content");

        document.addEventListener('scroll', function() {

          /*Refresh scroll % width*/
          scroll = (h[st] || b[st]) / ((h[sh] || b[sh]) - h.clientHeight) * 100;
          progress.style.setProperty('--scroll', scroll + '%');

          /*Apply classes for slide in bar*/
          scrollpos = window.scrollY;

          if (scrollpos > 10) {
            header.classList.add("bg-white");
            header.classList.add("shadow");
            navcontent.classList.remove("bg-gray-100");
            navcontent.classList.add("bg-white");
          } else {
            header.classList.remove("bg-white");
            header.classList.remove("shadow");
            navcontent.classList.remove("bg-white");
            navcontent.classList.add("bg-gray-100");

          }

        });


        //Javascript to toggle the menu
        document.getElementById('nav-toggle').onclick = function() {
          document.getElementById("nav-content").classList.toggle("hidden");
        }
      </script>
  </body>
</html>
