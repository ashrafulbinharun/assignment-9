<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PortfolioController extends Controller {

    public function home() {
        return view( "pages.home" );
    }
    public function projects() {
        return view( "pages.projects" );
    }
    public function about() {
        return view( "pages.about" );
    }
    public function contact() {
        return view( "pages.contact" );
    }

    public function submitContactForm( Request $request ) {
        // Log the form data
        Log::info( 'Contact form submitted', $request->all() );

        return response()->json( ['message' => 'Form submitted successfully'] );
    }

}