@extends('layouts.app')


@section('content')
    <div id="hero" class="hero route bg-image" style="background-image: url('{{ asset('img/hero-bg.jpg') }}');">
        <div class="overlay-itro"></div>
        <div class="hero-content display-table">
            <div class="table-cell">
                <div class="container">
                    <h1 class="hero-title mb-4">I am Tarek Hasan</h1>
                    <p class="hero-subtitle"><span class="typed"
                            data-typed-items="Web Developer, UI/Ux Designer, Full Stact Web Developer"></span></p>
                    <a href="{{ route('about') }}"><button type="button"
                            class="btn btn-outline-light">Explore</button></a>
                </div>
            </div>
        </div>
    </div>
@endsection
