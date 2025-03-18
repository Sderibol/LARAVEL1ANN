<nav class="navbar navbar-expand navbar-dark bg-dark ">
	<div class="container-fluid">
		<div class=" navbar" id="navbarText">
			<ul class="navbar-nav me-auto mb-2 mb-lg-0">
				<li class="nav-item">
					<a class="nav-link active " aria-current="page" href="{{route('welcome')}}">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link active " aria-current="page" href="">Link1</a>
				</li>
				<li class="nav-item">
					<a class="nav-link active " aria-current="page" href="">Link2</a>
				</li>
				@guest
				<li class="nav-item">
					<a class="nav-link" href="{{route('register')}}">Registrati</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="{{route('login')}}">Accedi</a>
				</li>
			</ul>
			@else
			<ul class="navbar-nav dropdown-list">
				<!-- Avatar -->
				<li class="nav-item dropdown">
					<a
					class="nav-link dropdown-toggle d-flex align-items-center"
					href="#"
					id="navbarDropdownMenuLink"
					role="button"
					data-bs-toggle="dropdown"
					aria-expanded="false"
					>
					<img
					src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img (31).webp"
					class="rounded-circle"
					height="22"
					alt="Portrait of a Woman"
					loading="lazy"
					/>
				</a>
				<ul class="dropdown-menu me-5 pe-5" aria-labelledby="navbarDropdownMenuLink">
					<li>
						<a class="dropdown-item" href="">Ciao, {{Auth::user()->name}}</a>
					</li>
					<li>
						<a class="dropdown-item" href="{{route('products.create')}}">Aggiungi un nuovo prodotto</a>
					</li>
					<li>
						<a class="dropdown-item" href="{{route('products.index')}}">Lista prodotti</a>
					</li>
					<li>
						<form method="POST" action="{{route('logout')}}">
							@csrf
							<button type="submit" class="btn btn-danger mt-2 mx-2"  href="{{route('logout')}}">Logout</button>
						</form>
					</li>
				</ul>
			</li>
		</ul>
		@endguest
	</div>
</div>
</nav>