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
        $aromas = [
            ['name' => 'Aroma 1'],
            ['name' => 'Aroma 2'],
            ['name' => 'Aroma 3'],
            ['name' => 'Aroma 4'],
            ['name' => 'Aroma 5'],
        ];

        foreach ($aromas as $aroma) {
            Aroma::create($aroma);
        }

        $groups = [
            ['name' => 'Group 1'],
            ['name' => 'Group 2'],
            ['name' => 'Group 3'],
            ['name' => 'Group 4'],
            ['name' => 'Group 5'],
        ];

        foreach ($groups as $group) {
            Group::create($group);
        }

        $families = [
            [
                'name' => 'Family 1',
                'group_id' => 5
            ],
            [
                'name' => 'Family 2',
                'group_id' => 3
            ],
            [
                'name' => 'Family 3',
                'group_id' => 4
            ],
            [
                'name' => 'Family 4',
                'group_id' => 2
            ],
            [
                'name' => 'Family 5',
                'group_id' => 1
            ],
        ];

        foreach ($families as $family) {
            Family::create($family);
        }

        $properties = [
            ['name' => 'Prop 1'],
            ['name' => 'Prop 2'],
            ['name' => 'Prop 3'],
            ['name' => 'Prop 4'],
            ['name' => 'Prop 5'],
        ];

        foreach ($properties as $property) {
            Property::create($property);
        }

        $aromasFamilies = [
            [
                'aroma_id' => 5,
                'family_id' => 2
            ],
            [
                'aroma_id' => 5,
                'family_id' => 1
            ],
            [
                'aroma_id' => 3,
                'family_id' => 4
            ],
            [
                'aroma_id' => 2,
                'family_id' => 3
            ],
            [
                'aroma_id' => 3,
                'family_id' => 2
            ],
        ];

        foreach ($aromasFamilies as $aromaFamily) {
            AromaFamily::create($aromaFamily);
        }

        $familiesProperties = [
            [
                'family_id' => 1,
                'property_id' => 5
            ],
            [
                'family_id' => 1,
                'property_id' => 4
            ],
            [
                'family_id' => 2,
                'property_id' => 3
            ],
            [
                'family_id' => 3,
                'property_id' => 5
            ],
            [
                'family_id' => 3,
                'property_id' => 2
            ],
        ];

        foreach ($familiesProperties as $familyProperty) {
            FamilyProperty::create($familyProperty);
        }


        // $systems = [
        //     ['name' => 'Cardio-vasculaire'],
        //     ['name' => 'Cutanée'],
        //     ['name' => 'Digestif'],
        //     ['name' => 'Endocrinien'],
        //     ['name' => 'Génito-urinaire'],
        //     ['name' => 'Lymphatique'],
        //     ['name' => 'Nerveux'],
        //     ['name' => 'Ostéo-articulaire'],
        //     ['name' => 'Reproducteur'],
        //     ['name' => 'Respiratoire'],
        // ];

        // foreach ($systems as $system)
        // {
        //     $sys = new System($system);
        //     $sys->save();
        // }

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

        $genders = [
            ['name' => 'gender 1'],
            ['name' => 'gender 2'],
        ];
        foreach ($genders as $gender) {
            Gender::create($gender);
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

        $genders = Gender::pluck('id'); // Récupère les IDs de tous les genres disponibles dans la base de données

        $ids = range(1, 10);

        Client::factory()->count(10)->create()->each(function ($client) use ($genders, $ids) {
            $client->gender_id = $genders->random(); // Attribue un genre aléatoire à chaque client
            shuffle($ids);
            $client->pathos()->attach(array_slice($ids, 0, rand(1, 4)));
            shuffle($ids);
            $client->symptoms()->attach(array_slice($ids, 0, rand(1, 4)));
            $client->save();
        });
        

        $herbals = [
            ['name' => 'Ashwagandha'],
            ['name' => 'Aubépine'],
            ['name' => 'Bouillon blanc'],
            ['name' => 'Cassis MG'],
            ['name' => 'Curcuma'],
            ['name' => 'Eschscholtzia'],
            ['name' => 'Fumeterre'],
            ['name' => 'Harpagophytum'],
            ['name' => 'Mauve'],
            ['name' => 'Mélisse'],
            ['name' => 'Ortie feuille'],
            ['name' => 'Passiflore'],
            ['name' => 'Pin des montagnes'],
            ['name' => 'Plantain'],
            ['name' => 'Prêle'],
            ['name' => 'Reine des près'],
            ['name' => 'Rodiole'],
            ['name' => 'Tilleul MG'],
            ['name' => 'Valériane'],
        ];

        foreach ($herbals as $herbal)
        {
            $phyto = new Herbal($herbal);
            $phyto->save();
        }

        $measures = [
            ['name' => 'measure 1'],
            ['name' => 'measure 2'],
            ['name' => 'measure 3'],
            ['name' => 'measure 4'],
            ['name' => 'measure 5'],
        ];

        foreach ($measures as $measure)
        {
            $msr = new MeasureHd($measure);
            $msr->save();
        }

        $nutris = [
            ['name' => 'nutri 1'],
            ['name' => 'nutri 2'],
            ['name' => 'nutri 3'],
            ['name' => 'nutri 4'],
            ['name' => 'nutri 5'],
        ];

        foreach ($nutris as $nutri)
        {
            $msr = new Nutri($nutri);
            $msr->save();
        }

        Patho::each(function ($patho) use($ids){
            shuffle($ids);
            $patho->herbals()->attach(array_slice($ids, 0, rand(1, 4)));
            shuffle($ids);
            $patho->nutris()->attach(array_slice($ids, 0, rand(1, 4)));
            shuffle($ids);
            $patho->measures()->attach(array_slice($ids, 0, rand(1, 4)));
            shuffle($ids);
            $patho->aromas()->attach(array_slice($ids, 0, rand(1, 4)));
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
