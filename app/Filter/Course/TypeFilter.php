<?php


namespace App\Filter\Course;


use App\Filter\Contract\IFilter;
use App\Filter\FilterTrait;
use Illuminate\Database\Eloquent\Builder;

class TypeFilter implements IFilter
{
    use FilterTrait;

    public function mappings()
    {
        return [
            'theory'=>'theory',
            'project'=>'project',
            'snippet'=>'snippet'
        ];
    }

    public function filter(Builder $builder, $value)
    {
      return is_null($value = $this->resolveValue($value))?$builder:$builder->where('type',$value);
    }
}
