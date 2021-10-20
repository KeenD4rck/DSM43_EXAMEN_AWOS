<?php
namespace Database\Factories;

Use App\Models\Post;
Use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends factory
{
   /** 
    @var string
    */
    protected $model = Post::class;

/** 
*define model's default state.
*@return array
*/

public function definition()
{

    return [
        //
        'name' => $this->faker->sentence,
        'email' => $this->faker->unique()->safeEmail(),
        'email_verified_at'=> now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'rememberToken' => Str::random(10),

        'user id' =>random(1,100),

    ];
}
}