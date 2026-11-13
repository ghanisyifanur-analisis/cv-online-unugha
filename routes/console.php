<?php

use Illuminate\\Support\\Facades\\Artisan;

Artisan::command('portfolio:about', function () {
    $this->comment('Academic Research & Software Engineering Portfolio');
})->purpose('Display portfolio application information');