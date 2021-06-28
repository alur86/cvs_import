<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable()->change();
            $table->unsignedBigInteger('profile_id')->nullable()->change();
            $table->unsignedBigInteger('report_request_id')->nullable()->change();
            $table->string('record_type', 20)->unique()->nullable()->change();
            $table->dateTime('report_date')->unique()->nullable()->change(); 
            $table->integer('productAdId')->unique()->nullable()->change(); 
            $table->unsignedBigInteger('keywordId')->unique()->nullable()->change(); 
            $table->integer('adGroupId')->nullable()->change(); 
            $table->integer('adGroupId')->nullable()->change(); 
            $table->string('asin', 255)->unique()->default(0);
            $table->string('sku', 255)->unique()->default(0);
            $table->string('query', 255)->unique()->nullable()->change();
            $table->string('placement', 50)->default(0);
            $table->integer('impressions')->nullable()->change();
            $table->float('averageImpressionPosition', 8, 2)->nullable()->change();
            $table->integer('clicks')->nullable()->change();
            $table->float('cost', 8, 2)->nullable()->change();
            $table->float('bidPlus', 8, 2)->nullable()->change();
            $table->float('units1d', 8, 2)->default(0);
            $table->float('units7d', 8, 2)->default(0);
            $table->float('units14d', 8, 2)->default(0);
            $table->float('sales1d', 8, 2)->nullable()->change();
            $table->float('sales7d', 8, 2)->nullable()->change();
            $table->float('sales14d', 8, 2)->nullable()->change();
            $table->float('sales30d', 8, 2)->nullable()->change();
            $table->float('sales1dSameSKU', 8, 2)->nullable()->change();
            $table->float('sales7dSameSKU', 8, 2)->nullable()->change();
            $table->float('sales14dSameSKU', 8, 2)->nullable()->change();
            $table->float('sales30dSameSKU', 8, 2)->nullable()->change();
            $table->float('conversions1d', 8, 2)->nullable()->change();
            $table->float('conversions7d', 8, 2)->nullable()->change();
            $table->float('conversions14d', 8, 2)->default(0);
            $table->float('conversions30d', 8, 2)->nullable()->change();
            $table->float('conversions1dSameSKU', 8, 2)->nullable()->change();
            $table->float('conversions7dSameSKU', 8, 2)->nullable()->change();
            $table->float('conversions14dSameSKU', 8, 2)->default(0);
            $table->float('conversions30dSameSKU', 8, 2)->nullable()->change();
            $table->timestamps();

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reports');
    }
}

