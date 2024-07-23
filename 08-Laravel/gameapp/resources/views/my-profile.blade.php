@extends('layouts.app')
@section('title', 'GameApp - Users Module')
@section('class', 'my-profile')

@section('content')
        <header>
            <a href="dashboard.html" class="btn-back">
                <img src="images/btn-back.png" alt="Back">
            </a>
            <img src="images/logo-my-profile.png" alt="User Logo">
            <svg class="btn-burger" viewBox="0 0 100 100" width="80">
                <path class="line top" d="m 70,33 h -40 c 0,0 -8.5,-0.149796 -8.5,8.5 0,8.649796 8.5,8.5 8.5,8.5 h 20 v -20" />
                <path class="line middle" d="m 70,50 h -40" />
                <path class="line bottom" d="m 30,67 h 40 c 0,0 8.5,0.149796 8.5,-8.5 0,-8.649796 -8.5,-8.5 -8.5,-8.5 h -20 v 20" />
            </svg>
        </header>
        @include('menuburguer')
        
        <section>
            <figure class="avatar" >
                <img class="mask" src="images/photo.png" alt="Photo">
                <img class="border" src="images/borde2.svg" alt="border">
            </figure>
            <h2>Lily Collins</h2>
            <span class="email"><b>lilcollins@gmail.com</b></span>
            <span class="role">
                <img src="images/ico-login.png" alt="role">
                <b>Admin</b>
            </span>
            <div class="grid">
                <span class="data data-id">
                <img src="images/ico-login.svg" alt="Id">
                <b>1021563320</b>
                </span>
                <span class="data data-address">
                    <img src="images/ico-address.svg" alt="Address">
                    <b>Cll 11 C 45</b>
                </span>
                <span class="data data-phone-number">
                    <img src="images/ico-phone-number.svg" alt="Phone Number">
                    <b>3122002211</b>
                </span>
                <span class="data data-birth-date">
                    <img src="images/ico-calendar.svg" alt="Birth Date">
                    <b>29/06/1985</b>
                </span>
                <span class="data data-gender">
                    <img src="images/ico-female.svg" alt="Gender">
                    <b>Female</b>
                </span>
                <span class="data data-status">
                    <img src="images/ico-logout.svg" alt="Status">
                    <b>Active</b>
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
