<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PagesController extends Controller
{
    private $flights;
    private $departure;
    private $arrival;

    public function index() 
    {
       $response = HTTP::get($_ENV['API_AS']);
       $this->flights = $response->json();
       return view('pages.home')->with('flights', $this->flights);
    }

    public function departure() 
    {
       $response = HTTP::get($_ENV['API_AS']);
       $this->departure = $response->json();
       return view('pages.departure')->with('departure', $this->departure);
    }

    public function arrival() 
    {
       $response = HTTP::get($_ENV['API_AS']);
       $this->arrival = $response->json();
       return view('pages.arrival')->with('arrival', $this->arrival);
    }
}
