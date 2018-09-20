<?php

use Illuminate\Database\Seeder;

class ReceitaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('receitas')->insert(
            ['nome' => 'BOLO DE LARANJA', 'foto' => 'NULL', 'tempoPreparo' => '40.0' ,'rendimento' => '12',
            'ingredientes' =>
            '4 ovos
            2 xícaras (chá) de açúcar
            1 xícara (chá) de óleo
            suco de 2 laranjas
            casca de 1 laranja
            2 xícaras (chá) de farinha de trigo
            1 colher (sopa) de fermento',
            'modoPreparo' => 'Bata no liquidificador os ovos, o açúcar, o óleo, o suco e a casca da laranja
            Passe para uma tigela e acrescente a farinha de trigo e o fermento
            Leve para assar em uma forma com furo central, untada e enfarinhada, por mais ou menos 30 minutos
            Desenforme o bolo e molhe com suco de laranja',
            'categoria_id' => '1']);

        DB::table('receitas')->insert(
            ['nome' => 'BIFE', 'foto' => 'NULL', 'tempoPreparo' => '40.0' ,'rendimento' => '15',
            'ingredientes' =>
            '1 kg de carne macia
            1 vidro de champignon
            Sal
            Cebola
            Salsinha
            1 caldo de carne
            Azeite
            Amido de milho
            Margarina
            Shoyu',
            'modoPreparo' => 'Corte a carne para bife , lave e tempere a seu gosto
            Passe os bifes na margarina até dourar
            Reserve',
            'categoria_id' => '2']);
    }
}
