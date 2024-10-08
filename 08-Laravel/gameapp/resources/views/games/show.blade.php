@extends('layouts.app')
@section('title', 'GameApp - Show Game')
@section('class', 'my-profile')

@section('content')
    <header>
        <a href="{{ url('games') }}" class="btn-back">
            <img src="{{ asset('images/btn-back.png') }}" alt="Back">
        </a>
        <img src="{{ asset('images/logo-show-game.png') }}" alt="Game Logo">
        <svg class="btn-burger" viewBox="0 0 100 100" width="80">
            <path class="line top" d="m 70,33 h -40 c 0,0 -8.5,-0.149796 -8.5,8.5 0,8.649796 8.5,8.5 8.5,8.5 h 20 v -20" />
            <path class="line middle" d="m 70,50 h -40" />
            <path class="line bottom" d="m 30,67 h 40 c 0,0 8.5,0.149796 8.5,-8.5 0,-8.649796 -8.5,-8.5 -8.5,-8.5 h -20 v 20" />
        </svg>
    </header>

    @include('menuburguer')

    <section>
        <figure class="avatar">
            <img class="mask" src="{{ asset('images').'/'.$game->image }}" alt="Game Image">
            <img class="border" src="{{ asset('images/shape-border.svg') }}" alt="border">
        </figure>

        <div class="grid">
            <span class="data data-title">
                <img src="{{ asset('images/ico-login.svg') }}" alt="Title">
                {{ $game->title }}
            </span>
            <span class="data data-developer">
                <img src="{{ asset('images/ico-address.svg') }}" alt="Developer">
                {{ $game->developer }}
            </span>
            <span class="data data-releasedate">
                <img src="{{ asset('images/ico-calendar.svg') }}" alt="Release Date">
                {{ $game->releasedate }}
            </span>
            <span class="data data-category">
                <img src="{{ asset('images/ico-category.svg') }}" alt="Category">
                {{ $game->category->name }}
            </span>
            <span class="data data-price">
                <img src="{{ asset('images/ico-price.svg') }}" alt="Price">
                ${{ $game->price }}
            </span>
            <span class="data data-genre">
                <img src="{{ asset('images/ico-genre.svg') }}" alt="Genre">
                {{ $game->genre }}
            </span>
            <span class="data data-slider">
                <img src="{{ asset('images/ico-slider.svg') }}" alt="Slider">
                {{ $game->slider == 1 ? 'Active' : 'Inactive' }}
            </span>
            <span class="data data-description">
                <img src="{{ asset('images/ico-description.svg') }}" alt="Description">
                {{ $game->description }}
            </span>
        </div>
    </section>
@endsection

@section('js') 
    <script src="{{ asset('js/jquery-3.7.1.min.js') }}"></script>  
    <script>
        $(document).ready(function () {
            $('header').on('click', '.btn-burger', function () {
                $(this).toggleClass('active')
                $('.nav').toggleClass('active')
            })
        })
    </script>
@endsection
