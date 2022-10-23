@extends('base')

@section('content')
<div class="container">
    <div class="card mt-4">
        {{-- style="; --}}
    <div class=" items-center justify-center text-center">
        <div class="card-body">
            <h1 class="text-dark">Welcome to Midterm CheapTalk!</h1>
            <h4 class="mt-4 text-dark mb-10">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, minus! Eligendi, excepturi sunt voluptate veritatis distinctio, doloribus placeat nisi iure nulla tenetur eos reiciendis modi, sequi eaque? At, vitae blanditiis.
            </h4>
            @if (!Auth::check())
            <a href="{{url('/register')}}"
                class="btn btn-primary">
            Get Started
            </a>
            @endif

        </div>
    </div>
</div>
</div>
@endsection