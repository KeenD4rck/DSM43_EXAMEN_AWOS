<?php
namespace Database\Factories;

Use App\Models\Category;
Use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends factory
{
   /** 
    @var string
    */
    protected $model = Category::class;

/** 
*define model's default state
*@return array
*/

public function definition()
{

    return [
        //
        'name' => $this->faker->word
    
    ];
}
}