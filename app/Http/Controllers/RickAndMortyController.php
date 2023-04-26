<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class RickAndMortyController extends Controller
{
    public function obtenerPersonajes()
    {
        $client = new Client();
        $response = $client->request('GET', 'https://rickandmortyapi.com/api/character');
        $personajes = json_decode($response->getBody()->getContents());

        return view('personajes', ['personajes' => $personajes]);
    }
}
