<?php

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Auth;
use Tests\TestCase;

class LoginTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    /**
     * Teste la connexion réussie d'un utilisateur.
     *
     * @return void
     */
    public function testSuccessfulLogin()
    {
        // Créer un utilisateur de test
        $user = User::factory()->create([
            'email' => 'test@example.com',
            'password' => bcrypt('password'),
        ]);

        // Effectuer une requête POST vers l'URL de connexion avec les informations d'identification valides
        $response = $this->post('/login', [
            'email' => 'test@example.com',
            'password' => 'password',
        ]);

        // Vérifier que la connexion a réussi et que l'utilisateur est redirigé vers une page appropriée
        $response->assertRedirect('/');
        $this->assertAuthenticatedAs($user);
    }

    /**
     * Teste la connexion avec des informations d'identification invalides.
     *
     * @return void
     */
    public function testInvalidLogin()
    {
        $response = $this->post(route('login'), [
            'email' => 'wrongemail@example.com',
            'password' => 'wrongpassword',
        ]);

        $response->assertRedirect(route('login'));
        $this->assertGuest();
    }
}
