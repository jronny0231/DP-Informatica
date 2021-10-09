<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->id();
            $table->integer('expediente');
            $table->string('nombre', 50);
            $table->string('apellido', 50);
            $table->text('direccion', 100)->nullable();
            $table->string('sexo', 8);
            $table->string('sector', 30)->nullable();
            $table->smallInteger('id_estado_civil');
            $table->string('ciudad', 30);
            $table->string('identificacion', 20);
            $table->string('tel_casa', 15);
            $table->string('celular', 16);
            $table->string('tel_trabajo', 15)->nullable();
            $table->tinyText('ext_trabajo')->nullable();
            $table->date('fecha_nacimiento');
            $table->smallInteger('edad');
            $table->string('lugar_nacimiento', 30)->nullable();
            $table->string('ocupacion', 15)->nullable();
            $table->string('religion', 12)->nullable();
            $table->string('referido', 12);
            $table->boolean('sabe_leer')->default(false);
            $table->boolean('sabe_escribir')->default(false);
            $table->string('escolaridad', 15)->nullable();
            $table->string('nombre_madre', 50)->nullable();
            $table->string('nombre_padre', 50)->nullable();
            $table->smallInteger('id_seguro')->default(1);
            $table->string('plan_seguro', 20)->nullable();
            $table->string('afiliado', 25)->nullable();
            $table->string('poliza', 25)->nullable();
            $table->string('antecedentes_personales', 250)->nullable();
            $table->string('antecedentes_familiares', 250)->nullable();
            $table->string('observacion')->nullable();
            $table->string('email', 50)->nullable();
            $table->boolean('campo_especial_1')->default(false);
            $table->boolean('campo_especial_2')->default(false);
            $table->smallInteger('id_doctor');
            $table->date('fecha_creacion');
            $table->smallInteger('id_create_by')->nullable();
            $table->smallInteger('id_modify_by')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pacientes');
    }
}
