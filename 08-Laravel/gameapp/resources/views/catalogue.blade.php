@extends('layouts.app')
@section('title', 'GameApp - Catalogue')
@section('class', 'catalogue')

@section('content')

    <header>
        <a href="{{url('/')}}" class="btn-back">
            <img src="{{asset('images/btn-back.png')}}" alt="Back">
        </a>
        <img src="{{asset('images/logo-welcome.png')}}" alt="Logo" class="logo-top">
        <svg class="btn-burger" viewBox="0 0 100 100" width="80">
            <path class="line top"
                d="m 70,33 h -40 c 0,0 -8.5,-0.149796 -8.5,8.5 0,8.649796 8.5,8.5 8.5,8.5 h 20 v -20" />
            <path class="line middle" d="m 70,50 h -40" />
            <path class="line bottom"
                d="m 30,67 h 40 c 0,0 8.5,0.149796 8.5,-8.5 0,-8.649796 -8.5,-8.5 -8.5,-8.5 h -20 v 20" />
        </svg>
    </header>
    @include('menuburguer')
    <section class="scroll">
        <form action="" method="post">
            <input type="text" placeholder="Filter" maxlength="18">
        </form>
        <article>
            <h2>
                <img src="{{asset('images/ico-category.svg')}}" alt="Category">
                Nintendo Switch
            </h2>
            <div class="owl-carousel owl-theme">
                <figure>
                    <img src="{{asset('images/slide-c1-01.png')}}" alt="" class="slide">
                    <figcaption>Donkey Kong</figcaption>
                    <a href="view-game.html" class="btn-more">
                        <img src="{{asset('images/ico-more.svg')}}" alt="">
                        view
                    </a>
                </figure>
                <figure>
                    <img src="{{asset('images/slide-c1-02.png')}}" alt="" class="slide">
                    <figcaption>Mario Bros</figcaption>
                    <a href="view-game.html" class="btn-more">
                        <img src="{{asset('images/ico-more.svg')}}" alt="">
                        view
                    </a>
                </figure>
                <figure>
                    <img src="{{asset('images/slide-c1-03.png')}}" alt="" class="slide">
                    <figcaption>Yooka Laylee</figcaption>
                    <a href="view-game.html" class="btn-more">
                        <img src="{{asset('images/ico-more.svg')}}" alt="">
                        view
                    </a>
                </figure>
            </div>
        </article>
        <article>
            <h2>
                <img src="{{asset('images/ico-category.svg')}}" alt="Category">
                Play Station 5
            </h2>
            <div class="owl-carousel owl-theme">
                <figure>
                    <img src="{{asset('images/slide-c2-01.png')}}" alt="" class="slide">
                    <figcaption>Superman</figcaption>
                    <a href="view-game.html" class="btn-more">
                        <img src="images/ico-more.svg" alt="">
                        view
                    </a>
                </figure>
                <figure>
                    <img src="images/slide-c2-02.png" alt="" class="slide">
                    <figcaption>Mortal Kombat</figcaption>
                    <a href="view-game.html" class="btn-more">
                        <img src="images/ico-more.svg" alt="">
                        view
                    </a>
                </figure>
                <figure>
                    <img src="images/slide-c2-03.png" alt="" class="slide">
                    <figcaption>FC 24</figcaption>
                    <a href="view-game.html" class="btn-more">
                        <img src="images/ico-more.svg" alt="">
                        view
                    </a>
                </figure>
            </div>
        </article>
        <article>
            <h2>
                <img src="images/ico-category.svg" alt="Category">
                <figcaption>Xbox 360</figcaption>
            </h2>
            <div class="owl-carousel owl-theme">
                <figure>
                    <img src="images/slide-c3-01.png" alt="" class="slide">
                    <figcaption>Resident Evil</figcaption>
                    <a href="view-game.html" class="btn-more">
                        <img src="images/ico-more.svg" alt="">
                        view
                    </a>
                </figure>
                <figure>
                    <img src="images/slide-c3-02.png" alt="" class="slide">
                    <figcaption>Call of Duty</figcaption>
                    <a href="view-game.html" class="btn-more">
                        <img src="images/ico-more.svg" alt="">
                        view
                    </a>
                </figure>
                <figure>
                    <img src="images/slide-c3-03.png" alt="" class="slide">
                    <figcaption>Forza Horizon 2</figcaption>
                    <a href="view-game.html" class="btn-more">
                        <img src="images/ico-more.svg" alt="">
                        view
                    </a>
                </figure>
            </div>
        </article>
    </section>
@endsection

@section('js')
<script>
    $(document).ready(function () {
        $('.owl-carousel').owlCarousel({
            center: false,
            loop: true,
            margin: 0,
            dots: false,
            responsive: {
                0: {
                    items: 2
                }
            }
        })
        //---------------
        $('header').on('click', '.btn-burger', function () {
            $(this).toggleClass('active')
            $('.nav').toggleClass('active')
        })
        //---------------
    })
</script>

@endsection