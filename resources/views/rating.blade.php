@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Rate and Comment this movie</div>

                    <div class="card-body">
                        <form method="POST" action="/rating" enctype="multipart/form-data">
                            @csrf

                            <h1>Rate this movie, {{$movie->title}} </h1>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <input id="movie" type="text" class="form-control @error('movie') is-invalid @enderror" name="movie" value="{{$movie->title}}" hidden autocomplete="movie" autofocus>

                                    @error('movie')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">Please enter your name</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="row mb-3">
                                <label for="star" class="col-md-4 col-form-label text-md-end">Star this movie up to 5-stars</label>

                                <div class="col-md-6">
                                    <input id="star" type="text" class="form-control @error('star') is-invalid @enderror" name="star" value="{{ old('star') }}" required autocomplete="star" autofocus>

                                    @error('star')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="comment" class="col-md-4 col-form-label text-md-end">Give us a comment</label>

                                <div class="col-md-6">
                                    <textarea name="comment" id="comment" cols="30" rows="10" placeholder="Enter your comment"></textarea>
                                    @error('comment')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Submit
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
