<?php

/**
 * Example Model Class.
 * User: ken<695093513@qq.com>
 * Date: 2016/3/25 0025
 * Time: 下午 10:38
 */

namespace App\Models;

use ActiveRecord\Model;

class Example extends Model {

    static $table_name = 'users';

    public function showMessage() {
        echo '<p>I am a Example model message!</p>';
    }

}
