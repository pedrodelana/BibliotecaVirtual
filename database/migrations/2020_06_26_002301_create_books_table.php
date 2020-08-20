<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string("title", 255)->unique();
            $table->string("subtitle", 355);
            $table->string("img", 355);
            $table->timestamps();
        });

        DB::table('books')->insert([
            [
                'title' => 'Imperium',
                'subtitle' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                                    sed do eiusmod tempor',
                'img' => 'img/imperium.jpg'
            ],
            [
                'title' => 'Mulheres',
                'subtitle' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                                    sed do eiusmod',
                'img' => 'img/mulheres.jpg'
            ],
            [
                'title' => 'Platao',
                'subtitle' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                                    sed do eiusmod',
                'img' => 'img/platao.jpg'
            ],
            [
                'title' => 'Não Conte',
                'subtitle' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                                    sed do eiusmod',
                'img' => 'img/naoconte.jpg'
            ],
            [
                'title' => 'Poder',
                'subtitle' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                                    sed do eiusmod',
                'img' => 'img/poder.jpg'
            ],
            [
                'title' => 'Sapiens',
                'subtitle' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                                    sed do eiusmod',
                'img' => 'img/sapiens.jpg'
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
