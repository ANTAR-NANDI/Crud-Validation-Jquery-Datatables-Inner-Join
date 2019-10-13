<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Department;
use Faker\Generator as Faker;

$factory->define(Department::class, function (Faker $faker) {
	$all = App\Employee::pluck('id')->toArray();
    return [
        'country'=>$faker->country,
         'city'=>$faker->city,
         'employees_id'=>$faker->randomElement($all)
    ];
});
