{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}
@extends('layouts.app')
@section('title', 'GameApp - Catalogue')
@section('class', 'dashboard')

@section('content')
    <header>
        <img src="images/logo-dashboard.png" alt="">
        <svg class="btn-burger" viewBox="0 0 100 100" width="80">
            <path class="line top" d="m 70,33 h -40 c 0,0 -8.5,-0.149796 -8.5,8.5 0,8.649796 8.5,8.5 8.5,8.5 h 20 v -20" />
            <path class="line middle" d="m 70,50 h -40" />
            <path class="line bottom"
                d="m 30,67 h 40 c 0,0 8.5,0.149796 8.5,-8.5 0,-8.649796 -8.5,-8.5 -8.5,-8.5 h -20 v 20" />
        </svg>
    </header>
    @include('menuburguer')
    <section>
        <article class="module">
            <aside>
                <img class="icon" src="images/img-user.svg" alt="">
                <span class="rows">20 Rows</span>
            </aside>
            <img class="title" src="images/title-module-users.svg" alt="">
            <a href="users.html">
                <img src="images/btn-enter.svg" alt="View">
            </a>
        </article>
        <article class="module">
            <aside>
                <img class="icon" src="images/img-categories.svg" alt="">
                <span class="rows">10 Rows</span>
            </aside>
            <img class="title" src="images/title-module-categories.svg" alt="">
            <a href="categories.html">
                <img src="images/btn-enter.svg" alt="View">
            </a>
        </article>
        <article class="module">
            <aside>
                <img class="icon" src="images/img-games.svg" alt="">
                <span class="rows">6 Rows</span>
            </aside>
            <img class="title" src="images/title-module-games.svg" alt="">
            <a href="games.html">
                <img src="images/btn-enter.svg" alt="View">
            </a>
        </article>
    </section>
@endsection
@section('js')
    <script>
        $(document).ready(function() {
            $('header').on('click', '.btn-burger', function() {
                $(this).toggleClass('active')
                $('.nav').toggleClass('active')
            })

            // $togglePass = false
            // $('section').on('click', '.ico-eye', function() {
            //     !$togglePass ? $(this).next().attr('type', 'text') :
            //         $(this).next().attr('type', 'password') !$togglePass ? $(this).attr('src',
            //             'images/ico-eye-hidden.svg') :
            //         $(this).attr('src', 'images/ico-eye.svg')
            //     $togglePass = !$togglePass
            // })
        })
    </script>
@endsection
