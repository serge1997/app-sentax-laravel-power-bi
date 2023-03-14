<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')
        <title>Laravel</title>

        <script src="/js/jquery-min-3-6-3.js"></script>

    </head>
    <body>
        	<!-- Navbar goes here -->
		<nav class="bg-slate-200 shadow-sm">
			<div class="max-w-6xl mx-auto px-4">
				<div class="flex justify-between">
					<div class="flex space-x-7">
						<div>
							<!-- Website Logo -->
							<a href="#" class="flex items-center py-4 px-2">
								<img class="w-16" src="/img/logo.png" alt="logo sentaxt">
							</a>
						</div>
						<!-- Primary Navbar items -->
						<div class="hidden md:flex items-center space-x-1 font-semibold text-gray-700">
							<a href="{{ route('inicio') }}" class="py-4 px-2">Inicio</a>
							@auth
                                <a href="#" data-first="{{ Auth::user()->id }}"  class="portal-um py-4 px-2 ">Portal BI</a>
                                <a href="#" class="py-4 px-2 portal-dois">Portal BI</a>
                                <a href="#" class="py-4 px-2 portal-tres">Portal BI</a>
                            @endauth
						</div>
					</div>
					<!-- Secondary Navbar items -->
					<div class="flex items-center space-x-3 ">
						@guest
                            <a href="{{ route('logar') }}" class="py-2 px-2 font-medium text-white bg-sky-500 hover:text-white transition duration-300">Log In</a>
                        @endguest
                        @auth
                            @if (Auth::user())
                                <h3 class="font-medium uppercase">{{ Auth::user()->name }}</h3>    
                            @endif
                            <a href="{{ route('sair') }}" class="py-2 px-4 font-medium text-white bg-sky-500 hover:bg-sky-400 transition duration-300">Sair</a>
                        @endauth

					</div>
					<!-- Mobile menu button -->
					<div class="md:hidden flex items-center">
						<button class="outline-none mobile-menu-button">
						<svg class=" w-6 h-6 text-gray-500 hover:text-green-500 "
							x-show="!showMenu"
							fill="none"
							stroke-linecap="round"
							stroke-linejoin="round"
							stroke-width="2"
							viewBox="0 0 24 24"
							stroke="currentColor"
						>
							<path d="M4 6h16M4 12h16M4 18h16"></path>
						</svg>
					</button>
					</div>
				</div>
			</div>
			<!-- mobile menu -->
			<div class="hidden mobile-menu">
				<ul class="font-semibold p-4 text-gray-700">
					<li><a href="" class="block py-2">Inicio</a></li>
					<li><a href="#services" class="block py-2">Categoria</a></li>
					<li><a href="#about" class="block py-2">Carrinho</a></li>
					<li><a href="#contact" class="block py-2">Minhas compras</a></li>
				</ul>
			</div>
			
		</nav>
		@yield("content")

  
        
                
    <script src="/js/script.js"></script>
    </body>
</html>
