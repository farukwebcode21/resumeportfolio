<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller {

    public function project(Request $request): object {
        return Project::get();
    }
}
