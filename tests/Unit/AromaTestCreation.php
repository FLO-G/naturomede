<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AromaCreationTest extends TestCase
{
    use RefreshDatabase;

    public function testCreationAromaValid()
    { 
        $this->post('/aromas', [
            'name' => 'Testing Aroma',
        ]);

        $this->assertDatabaseHas('aromas', ['name' => 'Aroma Test']);
    }

    public function testCreationAromaInvalid()
    {
        $response = $this->post('/aromas', [
            'name' => '',
        ]);

        $response->assertSessionHasErrors('name'); // Vérifie le champ "name"
        $this->assertDatabaseMissing('aromas', ['name' => '']); // Vérifie que l'aroma n'a pas été enregistré en base de données
    }
}