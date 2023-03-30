<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::disableForeingKeyConstraints();
        Schema::create('notation', function (Blueprint $table) {
            $table->id();
            $table->foreign('id-etd')
                  ->references('id')
                  ->on('etudiants')
                  ->onDelete('restrict')
                  ->onUpdate('restrict');

        });

        Schema::table('etudiants', function (Blueprint $table) {
            $table->string('nom',50)->change();
          });

          Schema::create('etudiants', function (Blueprint $table) {
            $table->id();
            $table->string('nom')->default('ahmad');

            $table->string('prenom');
            $table->integer('age');
            $table->timestamps();

        });
        
        
        Schema::table('etudiants', function (Blueprint $table) {
            $table->renameColumn('from', 'to');
          });
        
        
            
        Schema::table('etudiants', function (Blueprint $table) {
            $table->dropColumn('age');
        }); 

        Schema::table('stagiaires', function (Blueprint $table) {
            $table->integer('age')->unique();
        });

    }

    public function down(): void
    {
        Schema::dropIfExists('etudiants');
    }
};


