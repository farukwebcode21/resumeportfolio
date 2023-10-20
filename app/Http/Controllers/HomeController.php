<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\HeroPropertie;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class HomeController extends Controller {

    public function index(): View {
        return view('Home');
    }
    public function resume(): View {
        return view('pages.Resume');
    }
    public function project(): View {
        return view('pages.Project');
    }

    public function contact(): View {
        return view('pages.Contact');
    }

    public function privacy(): View {
        return view('pages.Privacy');
    }

    public function terms(): View {
        return view('pages.Terms');
    }

    public function about(Request $request): Object {
        return About::get();
    }
    public function heroProperties(Request $request): object {
        return HeroPropertie::get();
    }

}
