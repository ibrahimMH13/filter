<?php

namespace App\Filter\Course;

use App\Filter\FiltersAbstract;
use App\Filter\Subject\SubjectFilter;

class CourseFilters extends FiltersAbstract
{
    protected $filters =[
      'access' => AccessFilter::class,
      'type' => TypeFilter::class,
      'subjects' => SubjectFilter::class,
    ];
}
