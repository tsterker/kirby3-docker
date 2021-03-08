<?php

require __DIR__ . '/../../kirby/bootstrap.php';

new Kirby;  // Boot kirby to have DB plugin and kirby config available

use Beebmx\KirbyDB\Schema;
use Illuminate\Database\Schema\Blueprint;

if (Schema::hasTable('users')) {
    return;
}

Schema::create('users', function (Blueprint $table) {
    $table->bigIncrements('id');
    $table->timestamps();
    $table->string('name');
    $table->string('email');
});
