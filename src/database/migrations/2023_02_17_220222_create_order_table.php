<?php

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
        Schema::create('order', function (Blueprint $table) {
            $table->id();
            $table->string("name_collection");
            $table->string("company_collection");
            $table->string("address_line_1_collection");
            $table->string("address_line_2_collection");
            $table->string("city_collection" );
            $table->string("county_collection" );
            $table->string("postcode_collection" );
            $table->string("country_collection" );
            $table->string("phone_collection" );
            $table->string("email_collection");
            $table->string("name_delivery" );
            $table->string("company_delivery");
            $table->string("address_line_1_delivery");
            $table->string("address_line_2_delivery");
            $table->string("city_delivery");
            $table->string("county_delivery");
            $table->string("postcode_delivery");
            $table->string("country_delivery");
            $table->string("phone_delivery");
            $table->string("email_delivery");
            $table->string("terms_and_conditions");
            $table->string("product_id");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order');
    }
};
