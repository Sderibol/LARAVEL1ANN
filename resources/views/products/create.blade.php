<x-layout>
	<x-header title="Aggiungi un prodotto"/>
	<div class="container my-5">
		<div class="row justify-content-center">
			<div class="col-12 col-md-5">
				<form class="p-5 bg-light border shadow rounded" method="POST" action="{{route('products.store')}}" enctype="multipart/form-data">
					@csrf
					<div class="row mb-4">
							<div data-mdb-input-init class="form-outline mb-4">
								<label class="form-label" >Nome</label>
								<input type="text" class="form-control" name="name" />
							</div>
							<div data-mdb-input-init class="form-outline mb-4">
								<label class="form-label" >Descrizione</label>
								<textarea name="description" id="" class="form-control" cols="30" rows="5"></textarea>
							</div>
						<div data-mdb-input-init class="form-outline mb-4">
							<label class="form-label" >Prezzo</label>
							<input type="number" id="form3Example3" class="form-control" name="price" />
						</div>
						<div data-mdb-input-init class="form-outline mb-4">
							<label class="form-label" >Aggiungi un immagine</label>
							<input type="file"  class="form-control" name="img" />
						</div>
						
						<div class=" mt-3 text-center">
							<button  type="submit" class="btn btn-primary mb-4">Aggiungi</button>
						</div>
						
					</div>
					
					
	
				</form>
			</div>
		</div>
	</div>
</x-layout>