<?php

namespace Database\Seeders;

use App\Models\Treatment;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TreatmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

            $description_henna = 'Este tratamiento se ha utilizado miles de años atrás como instrumento fortalecedor del cabello para darle más vitalidad y brillo,
                                  incluso para alteraciones cutáneas la caspa, cuero cabelludo graso o cualquier otra alteración.
                                  Pero sobre todos es utilizado para pigmentar el cabello de una forma natural y respetuosa.';

            $description_neutra = 'Es un tratamiento que ejerce un efecto detoxificante y se utiliza para fortaceler el cabello y prevenir la caída.
                                  También se utiliza en combinación con la henna pura (Lawsonia Inermis) para rebajar la colorización de la misma.';

            $description_manzanilla = 'Nuestro tratamiento de flor de manzanilla es ideal para cabellos claros, ya que tiene una ligera pigmentación en tonos dorados.
                También es recomendado su uso para cueros cabelludos sensibles, estresados o con descamación al ser la flor de manzanilla un calmante natural. Todos nuestros tratamientos van acompañados de aceites vegetales,
                 aceite de argán o karité ya que los tratamientos son alcalinos y necesitan una parte ácida.';

            $description_ghassoul = 'El Ghassoul es una arcilla proveniente de Marruecos, de las montañas del Atlas, rica en sílice, hierro, magnesio y otros elevo elementos.
                Todos estos elementos ayudan a sanar el cuero cabelludo aportándole minerales y nutrientes y estimular el crecimiento del cabello. Puede reemplazar en algunos casos el champú ya que es un lavante natural';


        DB::table('treatments')->insert([
            ['id' => 1, 'name' => 'Henna', 'description' => $description_henna, 'duration' => 120, 'is_active' => true],
            ['id' => 2, 'name' => 'Henna neutra', 'description' => $description_neutra, 'duration' => 120, 'is_active' => true],
            ['id' => 3, 'name' => 'Henna con manzanilla', 'description' => $description_manzanilla, 'duration' => 120, 'is_active' => true],
            ['id' => 4, 'name' => 'Ghassoul', 'description' => $description_ghassoul, 'duration' => 120, 'is_active' => true],
        ]);
    }
}
