@extends('layouts.app')

@section('content')
    {{$movies->all()}}
    {{$rating->all()}}

    {{--    @foreach($movies->all() as $movie)--}}
{{--        {{$movie->picture}}--}}
{{--        <img src="storage/{{$movie->picture}}" alt="sorry">--}}
{{--    @endforeach--}}
{{--    {{$genre = \App\Models\Movies::where('genre','Action')->get()}}--}}
{{--{{$genre}}--}}
{{--    @foreach($genre as $genre)--}}
{{--        {{$genre}}--}}

{{--    @endforeach--}}

{{--    {{$rating->all()}}--}}
{{--{{\App\Models\User()->rating()}}--}}
{{--    {{$rating->name}}--}}



@endsection
