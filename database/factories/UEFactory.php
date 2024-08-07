<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UE>
 */
class UEFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $ues = [
        ['libelle' => 'Mathématiques fondamentales', 'coef' => '6', 'date_debut' => '2024-09-01', 'date_fin' => '2024-12-20'],
        ['libelle' => 'Physique générale', 'coef' => '5', 'date_debut' => '2024-09-01', 'date_fin' => '2024-12-20'],
        ['libelle' => 'Introduction à l\'informatique', 'coef' => '4', 'date_debut' => '2024-09-15', 'date_fin' => '2025-01-15'],
        ['libelle' => 'Biologie cellulaire', 'coef' => '5', 'date_debut' => '2024-09-01', 'date_fin' => '2024-12-15'],
        ['libelle' => 'Chimie organique', 'coef' => '4', 'date_debut' => '2024-09-15', 'date_fin' => '2025-01-10'],
        ['libelle' => 'Langues étrangères', 'coef' => '3', 'date_debut' => '2024-09-01', 'date_fin' => '2024-12-20'],
        ['libelle' => 'Méthodologie du travail universitaire', 'coef' => '2', 'date_debut' => '2024-09-01', 'date_fin' => '2024-11-30'],
    ];


    public function definition(): array
    {
        static $index = 0;
        
        if ($index >= count($this->ues)) {
            $index = 0; // Reset the index if we've used all UEs
        }

        $ue = $this->ues[$index];
        $index++;

        return $ue;
    }
    }
