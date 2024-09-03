<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\StudentDetail>
 */
class StudentDetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'usn'=> $this->faker->numberBetween(1,1000 ),
            'name' => $this->faker->name(),
            'dob' => $this->faker->date(),
            'gender'=> rand(1,2) ,
            'email' => $this->faker->email()     
        ];

        // |
        // | province           | varchar(255)    | NO   |     | NULL    |                |
        // | district           | varchar(255)    | NO   |     | NULL    |                |
        // | city               | varchar(255)    | NO   |     | NULL    |                |
        // | vdcNo              | int             | NO   |     | NULL    |                |
        // | toleName           | varchar(255)    | NO   |     | NULL    |                |
        // | phone              | varchar(255)    | NO   |     | NULL    |                |
        // | email              | varchar(255)    | NO   |     | NULL    |                |
        // | enrollmentDate     | date            | NO   |     | NULL    |                |
        // | program            | varchar(255)    | NO   |     | NULL    |                |
        // | status             | varchar(255)    | NO   |     | NULL    |                |
        // | emergencyContactNo
    }
}
