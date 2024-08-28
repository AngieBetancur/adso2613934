@extends('layouts.app')
@section('title', 'GameApp - Edit Category')
@section('class', 'my-profile')
@section('content')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<header>
    <a href="{{url('categories')}}" class="btn-back">
        <img src="{{asset('images/btn-back.png')}}" alt="Back">
    </a>
    <img src="{{asset('images/logo-edit-categories.png')}}" alt="User Logo">
    <svg class="btn-burger" viewBox="0 0 100 100" width="80">
        <path class="line top" d="m 70,33 h -40 c 0,0 -8.5,-0.149796 -8.5,8.5 0,8.649796 8.5,8.5 8.5,8.5 h 20 v -20" />
        <path class="line middle" d="m 70,50 h -40" />
        <path class="line bottom"
            d="m 30,67 h 40 c 0,0 8.5,0.149796 8.5,-8.5 0,-8.649796 -8.5,-8.5 -8.5,-8.5 h -20 v 20" />
    </svg>
</header>
@include('menuburguer')
<section class="scroll">
    <form action="{{url('categories/'.$category->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        @if (count($errors->all()) > 0)
            @foreach ($errors->all() as $message)
                {{$message}}
            @endforeach
        @endif
        <div class="form-group">
            <img id="upload" class="mask" src="{{ asset('images'). '/'. $category->image }}" alt="">
            <img class="border" src="{{asset('images/shape-border.svg')}}" alt="">
            <input id="photo" type="file" name="image" accept="image/*">
            <input type="hidden" name="originphoto" value="{{ $category->image }}">
            <input type="hidden" name="id" value="{{ $category->id }}">
        </div>
        <div class="form-group">
            <label>
                Name:
            </label>
            <input type="text" name="name" value="{{old('name', $category->name)}}">
        </div>
        <div class="form-group">
            <label>
                Manufacturer:
            </label>
            <input type="text" name="manufacturer"  value="{{old('manufacturer', $category->manufacturer)}}">
        </div>
        <div class="form-group">
            <label>
                <img src="images/ico-fullname.svg" alt="releasedate">
                Releasedate:
            </label>
            <input type="date" name="releasedate"  value="{{old('releasedate', $category->releasedate)}}">
        </div>
        <div class="form-group">
            <label>
                Description:
            </label>
            <input type="text" name="description"  value="{{old('description', $category->description)}}">
        </div>
        <div class="form-group">
            <button type="submit">
                <img src="{{asset('images/content-btn-edit.svg')}}" alt="Login">
            </button>
        </div>
    </form>
</section>
@endsection

@section('js')
<script>
    $(document).ready(function () {

        $('header').on('click', '.btn-burger', function () {
            $(this).toggleClass('active')
            $('.nav').toggleClass('active')
        })
        //----------------------------
        $togglePass = false
        $('section').on('click', '.ico-eye', function () {
            !$togglePass ? $(this).next().attr('type', 'text')
                : $(this).next().attr('type', 'password')

            !$togglePass ? $(this).attr('src', 'images/ico-eye.svg')
                : $(this).attr('src', 'images/closedico-eye.svg')

            $togglePass = !$togglePass

        })
        //----------------------------
        $('.border').click(function (e) {
            $('#photo').click()
        })
        $('#photo').change(function (e) {
            e.preventDefault()
            let reader = new FileReader()
            reader.onload = function (evt) {
                $('#upload').attr('src', event.target.result)
            }
            reader.readAsDataURL(this.files[0])
        })
        //----------------------------
    })
</script>
<script>
    @if (count($errors->all()) > 0)
            @php    $error = '' @endphp
            @foreach ($errors->all() as $message)
                @php        $error .= "<li>" . $message . "</li>" @endphp
            @endforeach
        </script>
        <script>
            $(document).ready(function (){
                Swal.fire({
                    position: "top",
                    title: "Error!",
                    html: `@php echo $error @endphp`,
                    icon: 'error',
                    toast: true,
                    showConfirmButton: false,
                    timer: 5000,
                })
            })
        </script>
    @endif
@endsection
