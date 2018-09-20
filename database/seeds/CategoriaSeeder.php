<?php

use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->insert(['nome' => 'BOLOS E TORTAS']);
        DB::table('categorias')->insert(['nome' => 'CARNES']);
        DB::table('categorias')->insert(['nome' => 'PEIXES E FRUTOS DO MAR']);
        DB::table('categorias')->insert(['nome' => 'SALADAS E MOLHOS']);
        DB::table('categorias')->insert(['nome' => 'SOPAS']);
        DB::table('categorias')->insert(['nome' => 'MASSAS']);
        DB::table('categorias')->insert(['nome' => 'BEBIDAS']);
        DB::table('categorias')->insert(['nome' => 'DOCES E SOBREMESAS']);
        DB::table('categorias')->insert(['nome' => 'LANCHES']);
        DB::table('categorias')->insert(['nome' => 'ALIMENTAÇÃO SAUDÁVEL']);
    }
}
