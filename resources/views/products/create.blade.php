<x-layout titlePage="Aggiungi un prodotto">
	<x-header title="Aggiungi un prodotto"/>
	<div class="container my-5">
		<div class="row justify-content-center">
			<div class="col-12 col-md-5">
				<form class="p-5 bg-light border shadow rounded" method="POST" action="{{route('products.store')}}" enctype="multipart/form-data">
					@csrf
					<div class="mb-4">
						<div class="form-group mb-3">
							<label for="name" class="form-label">Nome</label>
							<input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{old('name')}}" />
							@error('name')
								<div class="invalid-feedback">{{ $message }}</div>
							@enderror
						</div>
						
						<div class="form-group mb-3">
							<label for="description" class="form-label">Descrizione</label>
							<textarea name="description" id="description" class="form-control @error('description') is-invalid @enderror" cols="30" rows="3">{{old('description')}}</textarea>
							@error('description')
								<div class="invalid-feedback">{{ $message }}</div>
							@enderror
						</div>

						<div class="form-group mb-3">
							<label for="price" class="form-label">Prezzo</label>
							<input type="number" step="0.01" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{old('price')}}" />
							@error('price')
								<div class="invalid-feedback">{{ $message }}</div>
							@enderror
						</div>

						<div class="form-group mb-3">
							<label for="img" class="form-label">Aggiungi un'immagine</label>
							<input type="file" class="form-control @error('img') is-invalid @enderror" id="img" name="img" />
							@error('img')
								<div class="invalid-feedback">{{ $message }}</div>
							@enderror
						</div>

						<div class="form-group mb-3">
							<label for="tags" class="form-label">Aggiungi tags</label>
							<select name="tags[]" id="tags" class="form-control @error('tags') is-invalid @enderror" multiple>
								@foreach ($tags as $tag)
									<option value="{{$tag->id}}" {{ in_array($tag->id, old('tags', [])) ? 'selected' : '' }}>
										{{$tag->name}}
									</option>
								@endforeach
							</select>
							@error('tags')
								<div class="invalid-feedback">{{ $message }}</div>
							@enderror
						</div>

						<div class="text-center">
							<button type="submit" class="btn btn-primary">Aggiungi</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</x-layout>