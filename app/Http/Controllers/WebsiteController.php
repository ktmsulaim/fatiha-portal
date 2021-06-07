<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class WebsiteController extends Controller
{
    public function index()
    {
        return view('website.index');
    }

    public function applicationComplete(Request $request)
    {
        if(!$request->has('id')) {
            return Redirect::route('index');
        }

        $application = Application::findOrFail($request->get('id'));

        return view('website.applications.complete', compact('application'));
    }
}
