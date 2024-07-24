@extends('layouts.app')
@section('title', 'GameApp - Users Module')
@section('class', 'users')

@section('content')
<header>
            <a href="{{url('dashboard')}}" class="btn-back">
                <img src="images/btn-back.png" alt="Back">
            </a>
            <img src="images/logo-user.png" alt="User Logo">
            <svg class="btn-burger" viewBox="0 0 100 100" width="80">
                <path class="line top" d="m 70,33 h -40 c 0,0 -8.5,-0.149796 -8.5,8.5 0,8.649796 8.5,8.5 8.5,8.5 h 20 v -20" />
                <path class="line middle" d="m 70,50 h -40" />
                <path class="line bottom" d="m 30,67 h 40 c 0,0 8.5,0.149796 8.5,-8.5 0,-8.649796 -8.5,-8.5 -8.5,-8.5 h -20 v 20" />
            </svg>
        </header>
        <nav class="nav">
            <figure class="avatar">
                <img class="mask" src="images/photo.png" alt="Photo">
                <img class="border" src="images/borde2.svg" alt="Border">
            </figure>
            <h2>Lily Collins</h2>
            <h4>Administrator</h4>
            <menu>
                <a href='my-profile.html'>
                    <img src="images/ico-login.svg" alt="My Profile">
                    My Profile
                </a>
                <a href='dashboard.html'>
                    <img src="images/ico-categories.svg" alt="Dashboard">
                    Dashboard
                </a>
                <a href='index.html'>
                    <img src="images/ico-logout.svg" alt="Logout">
                    Logout
                </a>
            </menu>
        </nav>
        <section>
            <div class="area">
                <a class='add' href='{{url('users/create')}}'>
                    <img src="images/btn-add.svg" alt="Add">
                </a>
                @foreach ($users as $user)
                <article class="record">
                    <figure class="avatar">
                        <img class="mask" src="{{asset('images').'/'.$user->photo}}" alt="Photo">
                        <img class="border" src="images/shape-border-small.svg" alt="Border">
                    </figure>
                    <aside>
                        <h3>{{$user->fullname}}</h3>
                        <h4>{{$user->role}}</h4>
                    </aside>
                    <figure class="actions">
                        <a href='{{url('users/' .$user->id)}}'>
                            <img src="images/ico-search.svg" alt="Show">
                        </a>
                        <a href='{{url('users/' .$user->id . '/edit')}}'>
                            <img src="images/ico-edit.svg" alt="Edit">
                        </a>
                        <a href="javascript:;">
                            <img src="images/ico-delete.svg" alt="Delete">
                        </a>
                    </figure>
                </article>	
                @endforeach			
            </div>
        </section>
        <div class="paginate">
            <!-- {{ $users->links()}} -->
            {{ $users->links('layouts.paginator')}}
            
            <!-- <span>01/03</span>
            <a class="btn-prev" href="javascript:;">
                <img src="images/btn-next.png" alt="next">
            </a> -->
        </div>
@endsection