<?php
/**
 * Created by PhpStorm.
 * User: Venkatesh SM
 * Date: 1/11/2017
 * Time: 12:03 AM
 */
namespace venkateshsm\Todo;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model {

    protected $table = 'todos';

    protected $fillable = ['user_id','completed','todo'];

}