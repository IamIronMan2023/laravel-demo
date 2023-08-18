<?php

namespace Tests\Unit;

use App\Models\Employee;
use Illuminate\Foundation\Testing\WithFaker;
//use PHPUnit\Framework\TestCase;
use Tests\TestCase;

use function PHPUnit\Framework\assertNotNull;
use function PHPUnit\Framework\assertTrue;

class EmployeeControllerTest extends TestCase
{
    use WithFaker;
    /**
     * A basic unit test example.
     */

    public function setup(): void
    {
        parent::setup();
        $this->withoutMiddleware();
    }

    public function test_store(): void
    {
        $email = fake()->safeEmail();
        $response = $this->call('POST', route('employees.store'), [
            'first_name' => fake()->firstName(),
            'last_name' => fake()->lastName(),
            'email' => $email,
            'age' => fake()->numberBetween(18, 100),
            'gender' => fake()->randomElement(['Male', "Female"])
        ]);

        $employee = Employee::where('email', $email)->first();
        assertNotNull($employee, 'Employee not created');
    }
}
