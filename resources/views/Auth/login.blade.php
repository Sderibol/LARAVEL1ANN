<x-layout titlePage="Accedi">
	<x-header title="Accedi"/>

	<div class="container my-5">
		<div class="row justify-content-center">
			<div class="col-12 col-md-5">
				<!-- Pills navs -->
				<ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
					<li class="nav-item" role="presentation">
						<a
						class="nav-link active"
						id="tab-login"
						data-mdb-pill-init
						href="#pills-login"
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
				<!-- Pills navs -->
				
				<!-- Pills content -->
				<div class="tab-content">
					<div
					class="tab-pane fade show active"
					id="pills-login"
					role="tabpanel"
					aria-labelledby="tab-login"
					>
					<form class="p-5 bg-light border shadow rounded" action="{{route('login')}}" method="POST">
						@csrf
						<!-- Email input -->
						<div data-mdb-input-init class="form-outline mb-4">
							<label class="form-label" for="loginName">Email or username</label>
							<input type="email" id="loginName" class="form-control" name="email" />
						</div>
						
						<!-- Password input -->
						<div data-mdb-input-init class="form-outline mb-4">
							<label class="form-label" for="loginPassword">Password</label>
							<input type="password" id="loginPassword" class="form-control" name="password" />
						</div>
						
					
						<!-- Submit button -->
						<div class="mt-3 text-center">
							<button type="submit" class="btn btn-primary  mb-4">Accedi</button>
						</div>
					</form>
				</div>
</x-layout>