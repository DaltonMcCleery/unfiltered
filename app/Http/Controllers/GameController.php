<?php

namespace App\Http\Controllers;

use App\Games;
use App\Http\Resources\GamesResource;
use Illuminate\Http\Request;

class GameController extends Controller
{
    /**
     * Find or Create a New Game
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index() {
        return view('game.find');
    }

    public function play(Games $session) {
        dd($session);
    }

    /**
     * Get the currently available Games List (Public Games)
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function find() {
        $games = Games::with('Host')
            ->where('type', 'public')
            ->whereColumn('max_sessions', '!=', 'current_sessions')
            ->latest()
            ->get();

        return GamesResource::collection($games);
    }

    public function postQuestion(Request $request) {
        //
    }

    public function postAnswer(Request $request) {
        //
    }

    public function decideWinner(Request $request) {
        //
    }

}
