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
					$table->increments('id');
					$table->string('name')->comment('ユーザー名');
					$table->string('email')->comment('メールアドレス');
					$table->string('password')->comment('パスワード');
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
