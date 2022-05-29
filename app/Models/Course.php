<?php

namespace App\Models;

use App\Filter\Course\CourseFilters;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Course extends Model
{
    use HasFactory;
    protected $fillable=[
        'name' ,
        'slug',
        'free' ,
        'difficulty' ,
        'type' ,
    ];

    /**
     * @param Builder $builder
     * @param Request $request
     * @param array $otherFilters
     * @return Builder
     */
    public function scopeFilter(Builder $builder,Request $request,$otherFilters =[]){

        return (new CourseFilters($request))->add($otherFilters)->filter($builder);
    }

    public function subjects(){
        return $this->morphToMany(Subject::class,'subjectable');
    }
}
