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
        Schema::create('admissions', function (Blueprint $table) {
            $table->id();
            $table->string('full_name',50)->nullable();
            $table->date('dob')->nullable();
            $table->string('plceofbirth',50)->nullable();
            $table->tinyInteger('age')->nullable();
            $table->string('regionid',50)->nullable();
            $table->string('districtid',50)->nullable();
            $table->string('street',50)->nullable();
            $table->string('pobox',50)->nullable();
            $table->string('phoneNo',50)->nullable();
            $table->string('fathername',50)->nullable();
            $table->string('fathercareer',50)->nullable();
            $table->string('fatherwplace',50)->nullable();
            $table->string('mothername',50)->nullable();
            $table->string('mothercareer',50)->nullable();
            $table->string('motherwplace',50)->nullable();
            $table->string('expectations', 2000)->nullable();
            $table->string('contribute', 100)->nullable();
            $table->string('prvschool', 200)->nullable();
            $table->string('prvschoolregion', 200)->nullable();
            $table->string('prvschooldistrict', 200)->nullable();
            $table->string('pslt2pno', 200)->nullable();
            $table->string('prvschoolhighlevel', 200)->nullable();
            $table->string('prvschoolhighyear', 200)->nullable();
            $table->string('prvschoolhighreason', 200)->nullable();
            $table->string('islmlevel', 200)->nullable();
            $table->string('qrncomp', 200)->nullable();
            $table->tinyInteger('juzno')->nullable();
            $table->string('transschoolname', 200)->nullable();
            $table->string('transschlregion', 200)->nullable();
            $table->string('transschlndistrict', 200)->nullable();
            $table->string('transttnaexamno', 200)->nullable();
            $table->string('transpremno', 200)->nullable();
            $table->string('translevel', 200)->nullable();
            $table->string('translevelyear', 200)->nullable();
            $table->string('transclass', 200)->nullable();
            $table->string('transreasons', 200)->nullable();
            $table->string('_token', 200)->nullable();
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
        Schema::dropIfExists('admissions');
    }
};
