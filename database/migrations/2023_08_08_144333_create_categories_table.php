<?php

use App\Models\Category;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        $categories = ['Abbigliamento', 'Auto e Moto', 'Casa e Cucina', 'Elettronica', 'Giardinaggio', 'Giochi e Giocattoli', 'Libri', 'Musica','Prodotti Animali', 'Sport', 'Videogiochi'];

        foreach($categories as $category){
            Category::create(['name'=>$category]);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
