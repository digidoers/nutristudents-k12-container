<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGuidelinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guidelines', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name');
            $table->timestamps();
            $table->softDeletes();
            $table->integer('user_id')->nullable();
            $table->float('weekly_min_usda_componenent_serving_meat')->nullable()->default(0);
            $table->float('weekly_min_usda_componenent_serving_grain')->nullable()->default(0);
            $table->float('weekly_min_usda_componenent_serving_fruit')->nullable()->default(0);
            $table->float('weekly_min_usda_componenent_serving_milk')->nullable()->default(0);
            $table->float('weekly_min_usda_componenent_serving_veg')->nullable()->default(0);
            $table->float('weekly_min_usda_componenent_serving_vegleg')->nullable()->default(0);
            $table->float('weekly_min_usda_componenent_serving_vegred')->nullable()->default(0);
            $table->float('weekly_min_usda_componenent_serving_veggrn')->nullable()->default(0);
            $table->float('weekly_min_usda_componenent_serving_vegstar')->nullable()->default(0);
            $table->float('weekly_min_usda_componenent_serving_vegothr')->nullable()->default(0);
            $table->float('weekly_min_nutrition_facts_calories')->nullable()->default(0);
            $table->float('weekly_min_nutrition_facts_calfat')->nullable()->default(0);
            $table->float('weekly_min_nutrition_facts_totalfat')->nullable()->default(0);
            $table->float('weekly_min_nutrition_facts_satfat')->nullable()->default(0);
            $table->float('weekly_min_nutrition_facts_transfat')->nullable()->default(0);
            $table->float('weekly_min_nutrition_facts_polysatfat')->nullable()->default(0);
            $table->float('weekly_min_nutrition_facts_monosatfat')->nullable()->default(0);
            $table->float('weekly_min_nutrition_facts_cholesterol')->nullable()->default(0);
            $table->float('weekly_min_nutrition_facts_sodium')->nullable()->default(0);
            $table->float('weekly_min_nutrition_facts_potassium')->nullable()->default(0);
            $table->float('weekly_min_nutrition_facts_carbs')->nullable()->default(0);
            $table->float('weekly_min_nutrition_facts_fiber')->nullable()->default(0);
            $table->float('weekly_min_nutrition_facts_sugar')->nullable()->default(0);
            $table->float('weekly_min_nutrition_facts_protein')->nullable()->default(0);
            $table->float('weekly_min_nutrition_facts_vitamina')->nullable()->default(0);
            $table->float('weekly_min_nutrition_facts_vitaminb6')->nullable()->default(0);
            $table->float('weekly_min_nutrition_facts_vitaminb12')->nullable()->default(0);
            $table->float('weekly_min_nutrition_facts_vitaminc')->nullable()->default(0);
            $table->float('weekly_min_nutrition_facts_vitamind')->nullable()->default(0);
            $table->float('weekly_min_nutrition_facts_vitamine')->nullable()->default(0);
            $table->float('weekly_min_nutrition_facts_calcium')->nullable()->default(0);
            $table->float('weekly_min_nutrition_facts_iron')->nullable()->default(0);
            $table->float('weekly_min_nutrition_facts_magnesium')->nullable()->default(0);
            $table->float('weekly_min_nutrition_facts_coblamin')->nullable()->default(0);
            $table->float('weekly_min_nutrition_facts_thiamin')->nullable()->default(0);
            $table->float('weekly_min_nutrition_facts_riboflavin')->nullable()->default(0);
            $table->float('weekly_min_nutrition_facts_niacin')->nullable()->default(0);
            $table->float('weekly_min_nutrition_facts_zinc')->nullable()->default(0);
            $table->float('weekly_min_nutrition_facts_water')->nullable()->default(0);
            $table->float('weekly_min_nutrition_facts_ash')->nullable()->default(0);
            $table->float('daily_min_usda_componenent_serving_meat')->nullable()->default(0);
            $table->float('daily_min_usda_componenent_serving_grain')->nullable()->default(0);
            $table->float('daily_min_usda_componenent_serving_fruit')->nullable()->default(0);
            $table->float('daily_min_usda_componenent_serving_milk')->nullable()->default(0);
            $table->float('daily_min_usda_componenent_serving_veg')->nullable()->default(0);
            $table->float('daily_min_usda_componenent_serving_vegleg')->nullable()->default(0);
            $table->float('daily_min_usda_componenent_serving_vegred')->nullable()->default(0);
            $table->float('daily_min_usda_componenent_serving_veggrn')->nullable()->default(0);
            $table->float('daily_min_usda_componenent_serving_vegstar')->nullable()->default(0);
            $table->float('daily_min_usda_componenent_serving_vegothr')->nullable()->default(0);
            $table->float('daily_min_nutrition_facts_calories')->nullable()->default(0);
            $table->float('daily_min_nutrition_facts_calfat')->nullable()->default(0);
            $table->float('daily_min_nutrition_facts_totalfat')->nullable()->default(0);
            $table->float('daily_min_nutrition_facts_satfat')->nullable()->default(0);
            $table->float('daily_min_nutrition_facts_transfat')->nullable()->default(0);
            $table->float('daily_min_nutrition_facts_polysatfat')->nullable()->default(0);
            $table->float('daily_min_nutrition_facts_monosatfat')->nullable()->default(0);
            $table->float('daily_min_nutrition_facts_cholesterol')->nullable()->default(0);
            $table->float('daily_min_nutrition_facts_sodium')->nullable()->default(0);
            $table->float('daily_min_nutrition_facts_potassium')->nullable()->default(0);
            $table->float('daily_min_nutrition_facts_carbs')->nullable()->default(0);
            $table->float('daily_min_nutrition_facts_fiber')->nullable()->default(0);
            $table->float('daily_min_nutrition_facts_sugar')->nullable()->default(0);
            $table->float('daily_min_nutrition_facts_protein')->nullable()->default(0);
            $table->float('daily_min_nutrition_facts_vitamina')->nullable()->default(0);
            $table->float('daily_min_nutrition_facts_vitaminb6')->nullable()->default(0);
            $table->float('daily_min_nutrition_facts_vitaminb12')->nullable()->default(0);
            $table->float('daily_min_nutrition_facts_vitaminc')->nullable()->default(0);
            $table->float('daily_min_nutrition_facts_vitamind')->nullable()->default(0);
            $table->float('daily_min_nutrition_facts_vitamine')->nullable()->default(0);
            $table->float('daily_min_nutrition_facts_calcium')->nullable()->default(0);
            $table->float('daily_min_nutrition_facts_iron')->nullable()->default(0);
            $table->float('daily_min_nutrition_facts_magnesium')->nullable()->default(0);
            $table->float('daily_min_nutrition_facts_coblamin')->nullable()->default(0);
            $table->float('daily_min_nutrition_facts_thiamin')->nullable()->default(0);
            $table->float('daily_min_nutrition_facts_riboflavin')->nullable()->default(0);
            $table->float('daily_min_nutrition_facts_niacin')->nullable()->default(0);
            $table->float('daily_min_nutrition_facts_zinc')->nullable()->default(0);
            $table->float('daily_min_nutrition_facts_water')->nullable()->default(0);
            $table->float('daily_min_nutrition_facts_ash')->nullable()->default(0);
            $table->float('weekly_max_usda_componenent_serving_meat')->nullable()->default(0);
            $table->float('weekly_max_usda_componenent_serving_grain')->nullable()->default(0);
            $table->float('weekly_max_usda_componenent_serving_fruit')->nullable()->default(0);
            $table->float('weekly_max_usda_componenent_serving_milk')->nullable()->default(0);
            $table->float('weekly_max_usda_componenent_serving_veg')->nullable()->default(0);
            $table->float('weekly_max_usda_componenent_serving_vegleg')->nullable()->default(0);
            $table->float('weekly_max_usda_componenent_serving_vegred')->nullable()->default(0);
            $table->float('weekly_max_usda_componenent_serving_veggrn')->nullable()->default(0);
            $table->float('weekly_max_usda_componenent_serving_vegstar')->nullable()->default(0);
            $table->float('weekly_max_usda_componenent_serving_vegothr')->nullable()->default(0);
            $table->float('weekly_max_nutrition_facts_calories')->nullable()->default(0);
            $table->float('weekly_max_nutrition_facts_calfat')->nullable()->default(0);
            $table->float('weekly_max_nutrition_facts_totalfat')->nullable()->default(0);
            $table->float('weekly_max_nutrition_facts_satfat')->nullable()->default(0);
            $table->float('weekly_max_nutrition_facts_transfat')->nullable()->default(0);
            $table->float('weekly_max_nutrition_facts_polysatfat')->nullable()->default(0);
            $table->float('weekly_max_nutrition_facts_monosatfat')->nullable()->default(0);
            $table->float('weekly_max_nutrition_facts_cholesterol')->nullable()->default(0);
            $table->float('weekly_max_nutrition_facts_sodium')->nullable()->default(0);
            $table->float('weekly_max_nutrition_facts_potassium')->nullable()->default(0);
            $table->float('weekly_max_nutrition_facts_carbs')->nullable()->default(0);
            $table->float('weekly_max_nutrition_facts_fiber')->nullable()->default(0);
            $table->float('weekly_max_nutrition_facts_sugar')->nullable()->default(0);
            $table->float('weekly_max_nutrition_facts_protein')->nullable()->default(0);
            $table->float('weekly_max_nutrition_facts_vitamina')->nullable()->default(0);
            $table->float('weekly_max_nutrition_facts_vitaminb6')->nullable()->default(0);
            $table->float('weekly_max_nutrition_facts_vitaminb12')->nullable()->default(0);
            $table->float('weekly_max_nutrition_facts_vitaminc')->nullable()->default(0);
            $table->float('weekly_max_nutrition_facts_vitamind')->nullable()->default(0);
            $table->float('weekly_max_nutrition_facts_vitamine')->nullable()->default(0);
            $table->float('weekly_max_nutrition_facts_calcium')->nullable()->default(0);
            $table->float('weekly_max_nutrition_facts_iron')->nullable()->default(0);
            $table->float('weekly_max_nutrition_facts_magnesium')->nullable()->default(0);
            $table->float('weekly_max_nutrition_facts_coblamin')->nullable()->default(0);
            $table->float('weekly_max_nutrition_facts_thiamin')->nullable()->default(0);
            $table->float('weekly_max_nutrition_facts_riboflavin')->nullable()->default(0);
            $table->float('weekly_max_nutrition_facts_niacin')->nullable()->default(0);
            $table->float('weekly_max_nutrition_facts_zinc')->nullable()->default(0);
            $table->float('weekly_max_nutrition_facts_water')->nullable()->default(0);
            $table->float('weekly_max_nutrition_facts_ash')->nullable()->default(0);
            $table->float('daily_max_usda_componenent_serving_meat')->nullable()->default(0);
            $table->float('daily_max_usda_componenent_serving_grain')->nullable()->default(0);
            $table->float('daily_max_usda_componenent_serving_fruit')->nullable()->default(0);
            $table->float('daily_max_usda_componenent_serving_milk')->nullable()->default(0);
            $table->float('daily_max_usda_componenent_serving_veg')->nullable()->default(0);
            $table->float('daily_max_usda_componenent_serving_vegleg')->nullable()->default(0);
            $table->float('daily_max_usda_componenent_serving_vegred')->nullable()->default(0);
            $table->float('daily_max_usda_componenent_serving_veggrn')->nullable()->default(0);
            $table->float('daily_max_usda_componenent_serving_vegstar')->nullable()->default(0);
            $table->float('daily_max_usda_componenent_serving_vegothr')->nullable()->default(0);
            $table->float('daily_max_nutrition_facts_calories')->nullable()->default(0);
            $table->float('daily_max_nutrition_facts_calfat')->nullable()->default(0);
            $table->float('daily_max_nutrition_facts_totalfat')->nullable()->default(0);
            $table->float('daily_max_nutrition_facts_satfat')->nullable()->default(0);
            $table->float('daily_max_nutrition_facts_transfat')->nullable()->default(0);
            $table->float('daily_max_nutrition_facts_polysatfat')->nullable()->default(0);
            $table->float('daily_max_nutrition_facts_monosatfat')->nullable()->default(0);
            $table->float('daily_max_nutrition_facts_cholesterol')->nullable()->default(0);
            $table->float('daily_max_nutrition_facts_sodium')->nullable()->default(0);
            $table->float('daily_max_nutrition_facts_potassium')->nullable()->default(0);
            $table->float('daily_max_nutrition_facts_carbs')->nullable()->default(0);
            $table->float('daily_max_nutrition_facts_fiber')->nullable()->default(0);
            $table->float('daily_max_nutrition_facts_sugar')->nullable()->default(0);
            $table->float('daily_max_nutrition_facts_protein')->nullable()->default(0);
            $table->float('daily_max_nutrition_facts_vitamina')->nullable()->default(0);
            $table->float('daily_max_nutrition_facts_vitaminb6')->nullable()->default(0);
            $table->float('daily_max_nutrition_facts_vitaminb12')->nullable()->default(0);
            $table->float('daily_max_nutrition_facts_vitaminc')->nullable()->default(0);
            $table->float('daily_max_nutrition_facts_vitamind')->nullable()->default(0);
            $table->float('daily_max_nutrition_facts_vitamine')->nullable()->default(0);
            $table->float('daily_max_nutrition_facts_calcium')->nullable()->default(0);
            $table->float('daily_max_nutrition_facts_iron')->nullable()->default(0);
            $table->float('daily_max_nutrition_facts_magnesium')->nullable()->default(0);
            $table->float('daily_max_nutrition_facts_coblamin')->nullable()->default(0);
            $table->float('daily_max_nutrition_facts_thiamin')->nullable()->default(0);
            $table->float('daily_max_nutrition_facts_riboflavin')->nullable()->default(0);
            $table->float('daily_max_nutrition_facts_niacin')->nullable()->default(0);
            $table->float('daily_max_nutrition_facts_zinc')->nullable()->default(0);
            $table->float('daily_max_nutrition_facts_water')->nullable()->default(0);
            $table->float('daily_max_nutrition_facts_ash')->nullable()->default(0);
            $table->uuid('meal_type_id')->nullable();
            $table->uuid('age_grade_id')->nullable();
            $table->uuid('days_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('guidelines');
    }
}