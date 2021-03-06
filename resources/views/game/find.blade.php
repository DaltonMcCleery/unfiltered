@extends('wrapper')
@section('content')
    <section class="hero is-medium is-dark is-bold">
        <div class="container" align="center">

            {{-- Create a New Game --}}
            <div class="hero-body" style="padding-top: 4rem; !important">

                <div class="row">
                    <div class="col-md-6">
                        <h2 class="subtitle">
                            <span class="icon is-medium">
                                <i class="fas fa-plus-circle"></i>
                            </span>
                            CREATE A GAME
                        </h2>
                        @include('game.create')
                        <br>
                    </div>

                    <div class="col-md-6">
                        <h2 class="subtitle">
                            <span class="icon is-medium">
                                <i class="fas fa-plus-circle"></i>
                            </span>
                            JOIN A GAME
                        </h2>
                        @include('game.join')
                    </div>
                </div>

                <br><br>

                {{-- Available Public Games --}}
                <h2 class="subtitle">
                    <span class="icon is-medium">
                        <i class="fas fa-users"></i>
                    </span>
                    PUBLIC GAMES
                </h2>
                <available-games :authed_user_id = {{ Auth::user()->id }}></available-games>
            </div>
        </div>
    </section>
@endsection