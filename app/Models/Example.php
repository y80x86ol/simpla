<?php

/**
 * Example Model Class.
 * User: ken<695093513@qq.com>
 * Date: 2016/3/25 0025
 * Time: 下午 10:38
 */

namespace App\Models;

use Illuminate\Http\Model;

class Example extends Model {

    protected $table = 'users';

    public function showMessage() {
        echo '<p>I am a Example model message!</p>';
    }

    public function getUser() {
        $result = $this->table('users')->select();
        print_r($result);

        $result2 = $this->table('users')->findOne();
        print_r($result2);

        $where = array(
            'name' => 'yang'
        );
        $result3 = $this->table('users')->where($where)->select();
        print_r($result3);
    }

}
