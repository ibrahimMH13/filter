<?php


namespace App\Filter\Course;


use App\Filter\Contract\IFilter;
use App\Filter\FilterTrait;
use Illuminate\Database\Eloquent\Builder;

class DifficultyFilter implements IFilter
{
    use FilterTrait;
    public function filter(Builder $builder, $value)
    {
      return is_null($value = $this->resolveValue($value))?$builder:$builder->where('difficulty',$value);
    }
    public function mappings()
    {
        return [
            'beginner'=>'beginner',
            'intermediate'=>'intermediate',
            'advance'=>'advance'
        ];
    }
}
