<?php


namespace App\Filter\Course;


use App\Filter\Contract\IFilter;
use App\Filter\FilterTrait;
use Illuminate\Database\Eloquent\Builder;

class AccessFilter implements IFilter
{
    use FilterTrait;

    public function filter(Builder $builder, $value)
    {
        return is_null($this->resolveValue($value)) ? $builder : $builder->where('free', $this->resolveValue($value));
    }

    public function mappings()
    {
        return [
            'free' => true,
            'premium' => false,
        ];
    }
}
