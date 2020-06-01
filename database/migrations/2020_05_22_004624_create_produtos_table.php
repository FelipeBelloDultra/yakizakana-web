<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->bigIncrements('id_produto');
            $table->bigInteger('fornecedor_id')->unsigned();
            $table->bigInteger('tipo_id')->unsigned();
            $table->string('nome', 100);
            $table->string('descricao', 255);
            $table->string('imagem', 255);
            $table->decimal('preco', 8, 2);
            $table->decimal('preco_promocional', 8, 2);
            $table->foreign('fornecedor_id')->references('id_fornecedor')->on('fornecedores')->onDelete('cascade');
            $table->foreign('tipo_id')->references('id_tipo')->on('tipos')->onDelete('cascade');
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
        Schema::dropIfExists('produtos');
    }
}
