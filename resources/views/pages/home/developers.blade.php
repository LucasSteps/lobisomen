@extends('layouts.default')

<!-- Portifolio -->
<div class="page portfolio home">

    <!-- Port -->
    <div class="port">

        <!-- Cards -->
        <div class="cards">
            @foreach ($develops as $develop)
                <div class="card-port {{$develop->name}}">
                    <div class="data">
                        <div class="name">
                            <h2>{{ $develop->name }}</h2>
                        </div>
                        <img class="linkedin" src="https://upload.wikimedia.org/wikipedia/commons/f/f8/LinkedIn_icon_circle.svg" alt="LINKEDIN" data-link="{{$develop->linkedin}}">
                    </div>
                    <img class="img" src="{{ $develop->img }}" alt="">
                </div>
            @endforeach
        </div>

    </div>

</div>
