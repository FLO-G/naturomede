<?php

namespace Database\Seeders;

use App\Models\Aroma;
use App\Models\AromaFamily;
use App\Models\Client;
use App\Models\Family;
use App\Models\FamilyProperty;
use App\Models\Gender;
use App\Models\Group;
use App\Models\Herbal;
use App\Models\MeasureHd;
use App\Models\Nutri;
use App\Models\Patho;
use App\Models\Property;
use App\Models\Symptom;
use App\Models\System;
use App\Models\Treatable;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseRealSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $symptoms = [
            ['name' => 'Crampes'],
            ['name' => 'Déformation de l\'articulation'],
            ['name' => 'Douleurs articulaires'],
            ['name' => 'Douleurs spasmodique'],
            ['name' => 'Impotence fonctionnelle'],
            ['name' => 'Palpitations'],
            ['name' => 'Prurit'],
            ['name' => 'Spasmophilie'],
            ['name' => 'Toux'],
            ['name' => 'Troubles du sommeil'],
        ];

        foreach ($symptoms as $symptom)
        {
            $sym = new Symptom($symptom);
            $sym->save();
        }

        $pathos = [
            ['name' => 'Dystonie Neuro-Végétative', 'definition' => 'Trouble de l\'excitabilité musculaire. Déséquilibre du système neuro-végétatif qui va toucher les différents muscles du corps et provoquer différents symptômes.', 'cause' => 'Manque de quelquechose', 'complication' => 'Dépression'],
            ['name' => 'Arthrose', 'definition' => 'Usure du cartilage et phénomènes inflammatoires entrainant des douleurs persistantes au niveau articulaire.', 'cause' => 'Acidité de l\'organisme', 'complication' => 'Douleur des articulations (pour Sary)']
        ];

        foreach ($pathos as $patho)
        {
            $pat = new Patho($patho);
            $pat->save();
        }

        // $genders = Gender::pluck('id'); // Récupère les IDs de tous les genres disponibles dans la base de données

        // Client::factory()->count(10)->create()->each(function ($client) use ($genders) {
        //     $client->gender_id = $genders->random(); // Attribue un genre aléatoire à chaque client
        //     $client->save();
        // });


        // $ids = range(1, 10);
        // Client::each(function ($client) use($ids) {
        //     shuffle($ids);
        //     $client->pathos()->attach(array_slice($ids, 0, rand(1, 4)));
        //     shuffle($ids);
        //     $client->symptoms()->attach(array_slice($ids, 0, rand(1, 4)));
            
        // });
        
        $ids = range(1, 10);
        
        // Patho::each(function ($patho) use($ids){
        //     shuffle($ids);
        //     $patho->herbals()->attach(array_slice($ids, 0, rand(1, 4)));
        //     shuffle($ids);
        //     $patho->nutris()->attach(array_slice($ids, 0, rand(1, 4)));
        //     shuffle($ids);
        //     $patho->measures()->attach(array_slice($ids, 0, rand(1, 4)));
        //     shuffle($ids);
        //     $patho->aromas()->attach(array_slice($ids, 0, rand(1, 4)));
        // });

        Client::factory()->count(10)->create()->each(function ($client) use ($ids) {
            shuffle($ids);
            $client->pathos()->attach(array_slice($ids, 0, rand(1, 4)));
            shuffle($ids);
            $client->symptoms()->attach(array_slice($ids, 0, rand(1, 4)));
            $client->save();
        });
        

        



        // $p = Patho::where('name', 'Dystonie Neuro-Végétative')->first();
        // $p->systems()->attach(System::whereIn('name', ['Nerveux'])->pluck('id'));
        // $p->symptoms()->attach(Symptom::whereIn('name', ['Crampes','Palpitations', 'Douleurs spasmodique'])->pluck('id'));
        // $p->nutris()->attach(Nutri::whereIn('name', ['Taurine', 'Glutamine', 'Oméga 3', 'Oméga 6', 'Oméga 9', 'Magnésium', 'Vitamines groupe B', 'Vitamine D3', 'Zinc', 'Calcium', 'Protéines'])->pluck('id'));
        // $p->herbals()->attach(Herbal::whereIn('name', ['Aubépine', 'Mélisse', 'Passiflore', 'Valériane', 'Eschscholtzia', 'Tilleul', 'Rodiole', 'Ashwagandha'])->pluck('id'));

        // $p = Patho::where('name', 'Arthrose')->first();
        // $p->systems()->attach(System::whereIn('name', ['Ostéo-articulaire'])->pluck('id'));
        // $p->symptoms()->attach(Symptom::whereIn('name', ['Déformation de l\'articulation', 'Douleurs articulaires', 'Impotence fonctionnelle'])->pluck('id'));
        // $p->nutris()->attach(Nutri::whereIn('name', ['Chondroïtine sulfate', 'Glucosamine sulfate'])->pluck('id'));
        // $p->herbals()->attach(Herbal::whereIn('name', ['Prêle', 'Harpagophytum', 'Reine des près', 'Pin des montagnes', 'Ortie feuille', 'Cassis MG', 'Curcuma'])->pluck('id'));

        // $s = Symptom::where('name', 'Troubles du sommeil')->first();
        // $s->nutris()->attach(Nutri::whereIn('name', ['Mélatonine'])->pluck('id'));
        // $s->herbals()->attach(Herbal::whereIn('name', ['Valériane', 'Eschscholtzia', 'Passiflore'])->pluck('id'));
    }
}
