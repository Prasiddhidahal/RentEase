<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('property_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('title');
            $table->string('sale_type');
            $table->string('type_of_property');
            $table->string('category_of_property');
            $table->string('street_name');
            $table->string('city');
            $table->string('area');
            $table->string('province');
            $table->longText('property_photo');
            $table->string('property_facing');
            $table->string('road_size')->nullable()->default('Not Specified');
            $table->string('road_type')->nullable()->default(' ');
            $table->string('build_year')->nullable()->default('Not Specified');
            $table->string('total_floor')->nullable()->default('Not Specified');
            $table->string('furnishing')->nullable()->default('Not Specified');
            $table->string('total_area');
            $table->string('built_area')->nullable()->default('Not Built');
            $table->string('latitude');
            $table->string('longitude'); 
            $table->string('kitchen')->nullable()->default('0');
            $table->string('living_room')->nullable()->default('0');;
            $table->string('bath_room')->nullable()->default('0');;
            $table->string('bed_room')->nullable()->default('0');;
            $table->string('parking')->nullable()->default('0');;
            $table->string('amenities')->nullable()->default('Not Specified');
            $table->string('price');
            $table->string('price_label');
            $table->longText('description');
            $table->longText('count')->nullable()->default('0');
            $table->string('likes')->nullable()->default('0');
            $table->string('comments')->nullable()->default('0');
            $table->timestamps();
        });
    }

    /**->nullable()->default('Not Built')
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('property_details');
    }
};
