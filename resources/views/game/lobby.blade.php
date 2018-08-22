@extends('wrapper')
@section('content')
    <section class="hero is-medium is-dark is-bold">
        <div class="container" align="center">

            <div class="hero-body">
                <h2 class="subtitle">
                    <span class="icon is-medium">
                        <i class="fas fa-plus-circle"></i>
                    </span>
                    LOBBY
                </h2>
                <lobby :current_ninja = "'{{ Auth::user()->username }}'" :session_id = "'{{ $session_id }}'"></lobby>
            </div>
        </div>
    </section>
@endsection