<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceProviderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_provider_table_', function (Blueprint $table) {
            $table->id();
            $table->String ("firstName",50);
            $table->String ("lastName",50);
            $table->String ("gender",7);
            $table->bigInteger ("phoneNo")->length(11); // always bigint
            $table->String ("email",50);
            $table->String ("password",50);
            $table->String ("Area",100)->nullable();
            $table->String ("City",25)->nullable();
            $table->Integer ("pincode")->length(10)->nullable();
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
        Schema::dropIfExists('service_provider_table_');
    }
}
