@extends('layouts.app')
@section('title', 'GameApp - Show Category')
@section('class', 'my-profile')

@section('content')
        <header>
            <a href="{{ url('categories') }}" class="btn-back">
                <img src="{{ asset('images/btn-back.png') }}" alt="Back">
            </a>
            <img src="{{ asset('images/logo-show-categories.png') }}" alt="User Logo">
            <svg class="btn-burger" viewBox="0 0 100 100" width="80">
                <path class="line top" d="m 70,33 h -40 c 0,0 -8.5,-0.149796 -8.5,8.5 0,8.649796 8.5,8.5 8.5,8.5 h 20 v -20" />
                <path class="line middle" d="m 70,50 h -40" />
                <path class="line bottom" d="m 30,67 h 40 c 0,0 8.5,0.149796 8.5,-8.5 0,-8.649796 -8.5,-8.5 -8.5,-8.5 h -20 v 20" />
            </svg>
        </header>
        @include('menuburguer')
        
        <section>
            <figure class="avatar" >
                <img class="mask" src="{{ asset('images'). '/'. $category->image }}" alt="Photo">
                <img class="border" src="{{ asset('images/borde2.svg') }}" alt="border">
            </figure>
            <div class="grid">
                <span class="data data-id">
                <img src="{{ asset('images/ico-login.svg') }}" alt="Id">
                {{ $category->name }}
                </span>
                <span class="data data-address">
                    <img src="{{ asset('images/ico-address.svg') }}" alt="manufacturer">
                    {{ $category->manufacturer }}
                </span>
                <span class="data data-phone-number">
                    <img src="{{ asset('images/ico-phone-number.svg') }}" alt="releasedate">
                    {{ $category->releasedate }}
                </span>
                <span class="data data-birth-date">
                    <img src="{{ asset('images/ico-calendar.svg') }}" alt="description">
                    {{ $category->description }}
                </span>
            </div>
        </section>
    </main>  
    @endsection
    @section('js') 
    <script src="js/jquery-3.7.1.min.js"></script>  
    <script>
        $(document).ready(function () {
            
            $('header').on('click', '.btn-burger', function(){
            $(this).toggleClass('active')
            $('.nav').toggleClass('active')
            })
        //----------------------------       
        })
    </script>
@endsection
