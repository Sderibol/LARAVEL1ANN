<x-layout titlePage="Mostra Prodotto">
	<x-header title="Prodotti"/>
	<div class="contanier">
		<div class="row justify-content-center">
			<div class="col-5">
				<img src="{{Storage::url($product->img)}}" alt="" class="img-fluid">
			</div>
			<div class="col-5">
				<h5 class="card-title">Nome: {{$product->name}}</h5>
				<p class="card-text">Descrizione:{{$product->description}}</p>
				<p class="card-text">Prezzo: {{$product->price}}</p>
				<ul class="card-text">
					Tags associati:
					@foreach ($product->tags as $tag )
					<li>{{$tag->name}}</li>
					@endforeach
				</ul>	
			</div>
			<p class="card-text muted mx-4">Creato da: {{$product->user->name}}</p>
		</div>
	</div>
</x-layout>