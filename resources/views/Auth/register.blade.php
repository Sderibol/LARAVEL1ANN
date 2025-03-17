<x-layout>
	<x-header title="Registrati"/>
	<div class="container my-5">
		<div class="row justify-content-center">
			<div class="col-12 col-md-5">
				<ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
					<li class="nav-item" role="presentation">
						<a
						class="nav-link active"
						id="tab-login"
						data-mdb-pill-init
						href="{{route('login')}}"
						role="tab"
						aria-controls="pills-login"
						aria-selected="true"
						>Login</a
						>
					</li>
					<li class="nav-item" role="presentation">
						<a
						class="nav-link"
						id="tab-register"
						data-mdb-pill-init
						href="{{route('register')}}"
						role="tab"
						aria-controls="pills-register"
						aria-selected="false"
						>Register</a
						>
					</li>
				</ul>
				<form class="p-5 bg-light border shadow rounded" action="{{route('register')}}" method="POST">
					@csrf
					<!-- 2 column grid layout with text inputs for the first and last names -->
					<div class="row mb-4">
						<div class="col">
							<div data-mdb-input-init class="form-outline">
								<label class="form-label" for="form3Example1">First name</label>
								<input type="text" id="form3Example1" class="form-control" name="name" />
							</div>
						</div>
						<div class="col">
							<div data-mdb-input-init class="form-outline">
								<label class="form-label" for="form3Example2">Last name</label>
								<input type="text" id="form3Example2" class="form-control" name="username" />
							</div>
						</div>
					</div>
					
					<!-- Email input -->
					<div data-mdb-input-init class="form-outline mb-4">
						<label class="form-label" for="form3Example3">Email address</label>
						<input type="email" id="form3Example3" class="form-control" name="email" />
					</div>
					
					<!-- Password input -->
					<div data-mdb-input-init class="form-outline mb-4">
						<label class="form-label" for="form3Example4">Password</label>
						<input type="password" id="form3Example4" class="form-control" name="password" />
					</div>
					
					<!-- Checkbox -->
					<div data-mdb-input-init class="form-outline mb-4">
						<label class="form-label" for="form3Example4"> Conferma Password</label>
						<input type="password" id="form3Example4" class="form-control" name="password_confirmation" />
					</div>
{{-- 					
					<div data-mdb-input-init class="form-outline mb-4">
						<label class="form-label" > Aggiungi una foto profilo</label>
						<input type="file" class="form-control" />
					</div> --}}
					<!-- Submit button -->
					<div class="mb-3 mt-3 text-center">
						<button  type="submit" class="btn btn-primary mb-4">Registrati</button>
					</div>
					
					
					
	
				</form>
			</div>
		</div>
	</div>
</x-layout>