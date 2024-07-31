@extends('layouts.app')
@section('title', 'GameApp - Show User')
@section('class', 'my-profile')

@section('content')
        <header>
            <a href="{{ url('users') }}" class="btn-back">
                <img src="{{ asset('images/btn-back.png') }}" alt="Back">
            </a>
            <img src="{{ asset('images/logo-show-user.png') }}" alt="User Logo">
            <svg class="btn-burger" viewBox="0 0 100 100" width="80">
                <path class="line top" d="m 70,33 h -40 c 0,0 -8.5,-0.149796 -8.5,8.5 0,8.649796 8.5,8.5 8.5,8.5 h 20 v -20" />
                <path class="line middle" d="m 70,50 h -40" />
                <path class="line bottom" d="m 30,67 h 40 c 0,0 8.5,0.149796 8.5,-8.5 0,-8.649796 -8.5,-8.5 -8.5,-8.5 h -20 v 20" />
            </svg>
        </header>
        @include('menuburguer')
        
        <section>
            <figure class="avatar" >
                <img class="mask" src="{{ asset('images/photo.png') }}" alt="Photo">
                <img class="border" src="{{ asset('images/borde2.svg') }}" alt="border">
            </figure>
            <h2>{{ $user->fullname }}</h2>
            <span class="email"> >
                {{ $user->email }}
            </span>
            <span class="role">
                <img src="{{ asset('images/ico-login.png') }}" alt="role">
                {{ $user->role }}
            </span>
            <div class="grid">
                <span class="data data-id">
                <img src="{{ asset('images/ico-login.svg') }}" alt="Id">
                {{ $user->document }}
                </span>
                <span class="data data-address">
                    <img src="{{ asset('images/ico-address.svg') }}" alt="Address">
                    {{ $user->Address }}
                </span>
                <span class="data data-phone-number">
                    <img src="{{ asset('images/ico-phone-number.svg') }}" alt="Phone Number">
                    {{ $user->Phone }}
                </span>
                <span class="data data-birth-date">
                    <img src="{{ asset('images/ico-calendar.svg') }}" alt="Birth Date">
                    {{ $user->date }}
                </span>
                <span class="data data-gender">
                    <img src="{{ asset('images/ico-female.svg') }}" alt="Gender">
                    {{ $user->Gender }}
                </span>
                <span class="data data-status">
                    <img src="{{ asset('images/ico-logout.svg') }}" alt="Status">
                    {{ $user->Status }}
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
