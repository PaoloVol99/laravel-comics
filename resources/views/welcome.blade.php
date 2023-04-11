@extends('layouts.app')

@section('content')

<div>
    <ul>
        @forelse ($comics as $comic)
            <li>{{ $comic['title'] }}</li>
        @empty

        @endforelse
    </ul>
</div>

@endsection