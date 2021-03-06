
@extends("layouts.app")
@section("content")
<div class="container">
    @can("view",$user->profile)
	<form action="/profile/{{$user->id}}" enctype="multipart/form-data" method="post">
        @csrf
        @method("PATCH")
        <div class="row">
            <div class="col-8 offset-2">
                <div class="row">
                    <h3>Edit profile</h3>
                </div>
                <div class="row mb-3">
                    <label for="title" class="col-md-4 col-form-label">Title</label>

                    
                    <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') ?? $user->profile->title }}"  autocomplete="title" autofocus>

                    @error('title')
                        <span class="invalid-feedback" role="alert">
                             <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    
                </div>
                 <div class="row mb-3">
                    <label for="description" class="col-md-4 col-form-label">Description</label>

                    
                    <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') ?? $user->profile->description }}"  autocomplete="description" autofocus>

                    @error('description')
                        <span class="invalid-feedback" role="alert">
                             <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    
                </div>
                <div class="row mb-3">
                    <label for="url" class="col-md-4 col-form-label">URL</label>

                    
                    <input id="url" type="text" class="form-control @error('url') is-invalid @enderror" name="url" value="{{ old('url') ?? $user->profile->url}}"  autocomplete="url" autofocus>

                    @error('url')
                        <span class="invalid-feedback" role="alert">
                             <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    
                </div>
                <div class="row mb-3">
                    <label for="image" class="col-md-4 col-form-label">Image</label>             
                    <input id="image" type="file" class="form-control-file @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}"  autocomplete="image" autofocus>

                    @error('image')
                        <span class="invalid-feedback" role="alert">
                             <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    
                </div>
                <div class="row pt-3 mb-3">
                    <button class="btn btn-primary col-4">Edit profile</button>
                </div>
                
            </div>
        </div>
    </form>
    @else 
        <div class="alert">
            You are not authorized to view this link
        </div>
    @endcan
</div>
@endsection("content")
