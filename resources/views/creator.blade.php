@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Upload a movie</div>

                    <div class="card-body">
                        <form method="POST" action="/movieupload" enctype="multipart/form-data">
                            @csrf

                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-end">Movie Title</label>

                                <div class="col-md-6">
                                    <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required autocomplete="title" autofocus placeholder="Please Enter Movie Title">

                                    @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="publisher" class="col-md-4 col-form-label text-md-end">Movie Publisher</label>

                                <div class="col-md-6">
                                    <input id="publisher" type="text" class="form-control @error('publisher') is-invalid @enderror" name="publisher" value="{{ old('publisher') }}" required autocomplete="publisher" autofocus placeholder="Please Enter Movie Publisher">

                                    @error('publisher')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="Producer" class="col-md-4 col-form-label text-md-end">Movie Producer</label>

                                <div class="col-md-6">
                                    <input id="producer" type="text" class="form-control @error('producer') is-invalid @enderror" name="producer" value="{{ old('producer') }}" required autocomplete="producer" autofocus placeholder="Please Enter Movie Producer">

                                    @error('producer')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="genre" class="col-md-4 col-form-label text-md-end">Select the appropriate Movie Genre</label>

                                <div class="col-md-6">

                                    <select name="genre" id="genre">
                                        <option value="Action">Action</option>
                                        <option value="Drama">Drama</option>
                                        <option value="Horror">Horror</option>
                                        <option value="Thriller">Thriller</option>
                                        <option value="Science Fiction">Science Fiction</option>
                                    </select>
                                    @error('genre')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="agerating" class="col-md-4 col-form-label text-md-end">Movie Age rating</label>

                                <div class="col-md-6">
                                    <input id="agerating" type="text" class="form-control @error('agerating') is-invalid @enderror" name="agerating" value="{{ old('agerating') }}" required autocomplete="agerating" autofocus placeholder="Please Enter Movie Age Rating">

                                    @error('agerating')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="rating" class="col-md-4 col-form-label text-md-end">Movie rating</label>

                                <div class="col-md-6">
                                    <input id="rating" type="text" class="form-control @error('rating') is-invalid @enderror" name="rating" value="{{ old('rating') }}" required autocomplete="rating" autofocus placeholder="Please Enter Rating">

                                    @error('rating')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="description" class="col-md-4 col-form-label text-md-end">Movie Description</label>

                                <div class="col-md-6">
                                    <textarea name="description" id="description" cols="30" rows="10" placeholder="Enter your description"></textarea>

                                    @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="picture" class="col-md-4 col-form-label text-md-end">Movie Cover Photo</label>

                                <div class="col-md-6">
                                    <input id="picture" type="file" class="form-control" name="picture">

                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="video" class="col-md-4 col-form-label text-md-end">Video Content</label>

                                <div class="col-md-6">
                                    <input id="video" type="file" class="form-control" name="video">

                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Upload
                                    </button>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
