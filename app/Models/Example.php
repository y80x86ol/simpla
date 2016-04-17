<?php

/**
 * 实例model类
 */

namespace App\Models;

use ActiveRecord\Model;

class Example extends Model {

    static $table_name = 'users';

    public function showMessage() {
        echo '<p>I am a Example model message!</p>';
    }

}
