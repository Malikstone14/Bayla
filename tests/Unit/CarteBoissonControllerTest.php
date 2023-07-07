<?php

namespace Tests\Feature\Controllers;

use App\Models\CarteBoisson;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CarteBoissonControllerTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    protected $user;

    public function setUp(): void
    {
        parent::setUp();

        // Créer un utilisateur pour les tests
        $this->user = User::factory()->create();
    }

    /**
     * Teste la méthode store.
     *
     * @return void
     */
    public function testStore()
    {
        $this->actingAs($this->user);

        $data = [
            'nom' => $this->faker->word,
            'prix' => $this->faker->randomNumber(2, 0, 100),
            'ordre' => $this->faker->numberBetween(1, 10),
            'section' => $this->faker->randomElement(['chaude', 'fraiche']),
            'ingredient' => $this->faker->word,
            'active' => $this->faker->boolean,
        ];

        $response = $this->post(route('carteboisson.store'), $data);

        $response->assertRedirect(route('carteboisson.index'));
        $this->assertCount(1, CarteBoisson::all());
        $this->assertDatabaseHas('carte_boissons', $data);
    }


    /**
     * Teste la méthode edit.
     *
     * @return void
     */
    public function testEdit()
    {
        $this->actingAs($this->user);

        $carteBoisson = CarteBoisson::factory()->create();

        $response = $this->get(route('carteboisson.edit', $carteBoisson));

        $response->assertStatus(200);
        $response->assertViewIs('carteboisson.edit');
        $response->assertViewHas('carteboisson', $carteBoisson);
    }

    /**
     * Teste la méthode update.
     *
     * @return void
     */
    public function testUpdate()
    {
        $this->actingAs($this->user);

        $carteBoisson = CarteBoisson::factory()->create();

        $data = [
            'nom' => $this->faker->word,
            'prix' => $this->faker->randomNumber(2, 0, 100),
            'ordre' => $this->faker->numberBetween(1, 10),
        ];

        $response = $this->put(route('carteboisson.update', $carteBoisson), $data);

        $response->assertRedirect(route('carteboisson.index'));
        $carteBoisson->refresh();
        $this->assertEquals($data['nom'], $carteBoisson->nom);
        $this->assertEquals($data['prix'], $carteBoisson->prix);
        $this->assertEquals($data['ordre'], $carteBoisson->ordre);
    }

    public function testDelete()
    {
        $this->actingAs($this->user);

        // Créer une carte de boisson à supprimer
        $carteBoisson = CarteBoisson::factory()->create();

        // Effectuer une requête DELETE vers l'URL de suppression avec l'ID de la carte de boisson
        $response = $this->delete(route('carteboisson.destroy', $carteBoisson));

        // Vérifier que la réponse a un statut de succès (302 pour une redirection après suppression)
        $response->assertStatus(302);

        // Vérifier que la carte de boisson a été supprimée de la base de données
        $this->assertDatabaseMissing('carte_boissons', ['id' => $carteBoisson->id]);
    }
}
