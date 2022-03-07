@extends('layouts.app')

@section('page-title', 'MovieCollection - home')


@section('content')
    <div class='cards-container'>
        @foreach($lista_film as $index => $obj)

        @php $fields = $obj->getOriginal();

        @endphp

        <div class="card" style="background-image: url({{$fields['poster']}})">            

            <div class="overlay">
                <h2>#{{$fields['id']}}</h2>
                <h3>{{$fields['title']}}</h3>
                <p>{{$fields['original_title']}}</p>
                <div class="flag">
                    <img src="{{ asset('images/'.getFlagURL($fields['nationality'])) }}" alt="">
                </div>
            </div>

        </div>
        @endforeach
    </div>
@endsection