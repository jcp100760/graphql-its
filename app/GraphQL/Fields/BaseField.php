<?php

namespace App\GraphQL\Fields;

use App\Models\Proffessor;
use GraphQL\Type\Definition\Type;
use Illuminate\Database\Eloquent\Model;
use Rebing\GraphQL\Support\Field;
use Rebing\GraphQL\Support\Facades\GraphQL;

class BaseField extends Field
{ 
    protected $attributes = [
        'name' => 'BaseField',
    ];

    protected $Model;
    protected $Field;

    // public function __construct(array $settings = [])
    // {
    //     $this->attributes = \array_merge($this->attributes, $settings);
    // }

    public function __construct(Model $model, $field)
    {
        $this->Model = $model;
        $this->Field = $field;
    }

    public function type(): Type
    {
        return GraphQL::type($this->Model);
    }

    public function resolve($root, array $args): string
    {
        
        //return $this->getModel()->where('id' , $this->getField()->get())[0];
        return $this->Model->where('id' , $root[$this->Field])->get()[0];
    }

}
