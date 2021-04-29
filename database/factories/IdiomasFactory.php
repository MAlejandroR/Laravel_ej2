<?php

namespace Database\Factories;

use App\Models\Idiomas;
use App\Models\Empleado;
use Illuminate\Database\Eloquent\Factories\Factory;

class IdiomasFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Idiomas::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $idiomas =["Castellano","Inglés","Francés","Catalán","Aragonés", "Vasco", "Gallego", "Rumano", "Alemán"];
        $empleados =Empleado::All("id");
        return [
            'idioma'=>$this->faker->randomElement($idiomas),
            'empleado'=>$this->faker->randomElement($empleados)
            //
        ];
    }
}
