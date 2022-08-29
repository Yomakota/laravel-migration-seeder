@extends('layouts.app')

@section('main_content')
    <h1>Travel Agency</h1>
    <div class="travels">
        @foreach ($travels as $item)
            <div class="item">
                <div> <span> City: </span> {{ $item->city }} </div>
                <div> <span> Country: </span> {{ $item->country }} </div>
                <div> <span> Description: </span> {{ $item->locality_description }}</div>
                <div> <span> Hotel: </span> {{ $item->hotel }}</div>
                <div> <span> Hotel Address: </span> {{ $item->hotel_address }}</div>
                <div> <span> Stars: </span> {{ $item->rating_stars }}</div>
                <div> <span> Price: </span> {{ $item->price }} euro</div>
            </div>
        @endforeach
    </div>
@endsection
