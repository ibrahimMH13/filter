<?php


namespace App\Filter\Subject;


use App\Filter\Contract\IFilter;
use Illuminate\Database\Eloquent\Builder;

class SubjectFilter implements IFilter
{

    public function filter(Builder $builder, $value)
    {
       return $builder->whereHas('subjects',function ( Builder $Builder) use($value){
           return $Builder->where('slug',$value);
       });
    }
}
