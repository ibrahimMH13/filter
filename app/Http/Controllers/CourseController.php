<?php

namespace App\Http\Controllers;

use App\Filter\Course\DifficultyFilter;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
   public function index(Request $request){
       return Course::with(['subjects'])->filter($request,$this->getFilters())->get();
   }

    private function getFilters()
    {
        return [
          'difficulty'=>DifficultyFilter::class
        ];
    }
}
