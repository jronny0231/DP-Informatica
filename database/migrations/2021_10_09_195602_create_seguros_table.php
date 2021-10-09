<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSegurosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seguros', function (Blueprint $table) {
            $table->id();
            $table->integer('codigo');
            $table->string('nombre', 60);
            $table->text('direccion');
            $table->string('contacto', 30)->nullable();
            $table->integer('rnc');
            $table->string('telefono_1', 15);
            $table->string('telefono_2', 15)->nullable();
            $table->smallInteger('id_consultorio')->nullable();
            $table->string('plan_1', 20)->nullable();
            $table->string('plan_2', 20)->nullable();
            $table->string('plan_3', 20)->nullable();
            $table->string('plan_4', 20)->nullable();
            $table->string('plan_5', 20)->nullable();
            $table->double('porcentaje_comision', 3, 2)->nullable();
            $table->smallInteger('id_comprobante')->default(1);
            $table->string('ref_externa')->nullable();
            $table->string('nombre_corto', 20)->nullable();
            $table->boolean('aplica_descuento');
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
        Schema::dropIfExists('seguros');
    }
}
