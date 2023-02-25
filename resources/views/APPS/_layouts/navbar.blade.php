<nav class="navbar">
	<div class="container">
		<div class="navbar-bars">
			<a href="#" class="navbar-title sidebar-toggle" style="padding: 0;"><i class="ion-navicon-round"></i></a>
        	<a href="{{ route('index') }}" class="navbar-title">Pariwisata Makassar</a>
		</div>
		<div class="navbar-item">
			<a href="{{ route('index') }}" class="navbar-title">Pariwisata Makassar</a>
			<ul>
		        <li><a href="{{ route('index') }}">Beranda</a></li>
			    <li><a href="{{ route('fotoWisata') }}">Spot Foto </a></li>
			    <li><a href="{{ route('kulinerWisata') }}">Kuliner </a></li>
			    {{-- <li><a data-slide="slides" data-slide-target="#discover">Discover</a></li> --}}
			    {{-- <li><a href="news.html"> News</a></li> --}}
				<a href="{{ route('login') }}"><li><button class="btn-login">LOGIN TOURGUIDE</button></li></a>
  		  	</ul>
		</div>
	</div>
</nav>