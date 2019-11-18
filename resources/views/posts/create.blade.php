@extends ('layouts.app')
@section('content')
	
	<div class="container">
		<form action="/p" enctype="multipart/form-data" method="POST">
			@csrf
			<div class="col-8 offset-2">
				<div class="row">
					<h1>Add New Post</h1>
				</div>
				<div class="form-group row">
	                <label for="caption" class="col-md-4 col-form-label">Image Caption</label>

	                <input id="caption" name="caption" type="text"
	                	class="form-control @error('caption') is-invalid @enderror"
	                	  value="{{ old('caption') }}" 
	                	 required autocomplete="caption" autofocus>

	                @error('caption')
	                    <span class="invalid-feedback" role="alert">
	                        <strong>{{ $message }}</strong>
	                    </span>
	                @enderror
				</div>
	                <div class=" form-group row">
	                	<label for="image" class="col-md-4 col-form-label"> Post Image</label>
	                	<input type="file" name="image" id="image" class="form-control-file" @error('imag
	                	') is-invalid @enderror
	                	 name="image">

	                	@error('image')
		                    <strong>{{ $message }}</strong>
	                	@enderror
	                </div>

	                <div class="row">
	                	<button class="btn btn-primary mt-4">Add New Post</button>
	                </div>
	            </div>
            </div>
		</form>
	</div>

@endsection