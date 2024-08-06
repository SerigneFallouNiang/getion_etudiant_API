<?php

namespace Database\Factories;

use App\Models\UE;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Matiere>
 */
class MatiereFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        //  $model = Matiere::class;
        $matieres = [
            ['libelle' => 'Algèbre linéaire', 'date_debut' => '2024-09-01', 'date_fin' => '2024-12-15'],
            ['libelle' => 'Mécanique classique', 'date_debut' => '2024-09-15', 'date_fin' => '2025-01-10'],
            ['libelle' => 'Programmation orientée objet', 'date_debut' => '2024-09-01', 'date_fin' => '2024-12-20'],
            ['libelle' => 'Génétique', 'date_debut' => '2024-10-01', 'date_fin' => '2025-01-30'],
            ['libelle' => 'Thermodynamique', 'date_debut' => '2024-09-15', 'date_fin' => '2025-01-15'],
            ['libelle' => 'Anglais scientifique', 'date_debut' => '2024-09-01', 'date_fin' => '2024-12-20'],
            ['libelle' => 'Statistiques et probabilités', 'date_debut' => '2024-10-01', 'date_fin' => '2025-02-01'],
        ];

        $matiere = $this->faker->unique()->randomElement($matieres);

        return [
            'u_e_id' => UE::factory(),
            'libelle' => $matiere['libelle'],
            'date_debut' => $matiere['date_debut'],
            'date_fin' => $matiere['date_fin'],
        ];
    }
    }
