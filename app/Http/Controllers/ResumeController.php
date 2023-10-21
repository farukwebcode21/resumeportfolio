<?php

namespace App\Http\Controllers;

use App\Models\Education;
use App\Models\Experience;
use App\Models\Language;
use App\Models\Resume;
use App\Models\Skill;
use Illuminate\Http\Request;

class ResumeController extends Controller {

    public function downloadresume(Request $request): object {
        return Resume::get();
    }

    public function experiences(Request $request): object {
        return Experience::get();
    }

    public function education(Request $request): object {
        return Education::get();
    }

    public function professionalSkill(Request $request): object {
        return Skill::get();
    }
    public function language(Request $request): object {
        return Language::get();
    }
}
