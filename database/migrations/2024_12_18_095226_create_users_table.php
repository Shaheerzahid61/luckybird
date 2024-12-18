<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id(); // Auto-incrementing primary key
            $table->string('email')->unique(); // Email field
            $table->string('password'); // Password field
            $table->string('first_name'); // First name field
            $table->string('last_name'); // Last name field
            $table->string('country'); // Country field
            $table->date('birth_date'); // Birth date field
            $table->boolean('terms_accepted')->default(false); // Terms acceptance
            $table->timestamps(); // Created at and updated at timestamps
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
