<x-layout titlePage="Lista prodotti">
	<x-header title="Lista prodotti"/>
	<div class="container my-5">
		<div class="row justify-content-center align-items-center">
			@foreach ($products as $product)
			<div class="col-12 col-md-3">
				<div class="card border shadow rounded" style="width: 18rem;">
					<img src="{{Storage::url($product->img)}}" class="card-img-top img-fluid" alt="Fissure in Sandstone"/>
					<div class="card-body">
						<h5 class="card-title">Nome: {{$product->name}}</h5>
						<p class="card-text">Descrizione:{{$product->description}}</p>
						<p class="card-text">Prezzo: {{$product->price}} € </p>
						<p class="card-text muted">Creato da: {{$product->user->name}}</p>
						<ul class="card-text">
							Tags associati:
							@foreach ($product->tags as $tag )
					<li>{{$tag->name}}</li>
					@endforeach
						</ul>

						<div class="mt-2 text-center">
							<a href="{{route('products.show', compact('product'))}}" class="btn btn-primary" data-mdb-ripple-init>Dettagli</a>
						</div>
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</x-layout>