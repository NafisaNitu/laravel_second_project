<?php

namespace App\Models\student;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    public static $name  = 'Santo';
    public static $name1 = 'Maruf';
    public static $name2 = 'Mamun';
    public static $name3 = 'Nitu';
    public static $name4 = 'Fariya';

    public static function index()
    {
       return [
           0 => [
               'id'=> 1,
               'name' => self::$name4,
               'phone' => '0123456',
               'image' => asset('assets/img/p1.jpg'),
           ],
           1 => [
               'id'=> 2,
               'name' => self::$name,
               'phone' => '0123456',
               'image' => asset('assets/img/p4.jpg'),
           ],
           2 => [
               'id'=> 3,
               'name' => self::$name1,
               'phone' => '0123456',
               'image' => asset('assets/img/p9.jpg'),
           ],
           3 => [
               'id'=> 4,
               'name' => self::$name2,
               'phone' => '0123456',
               'image' => asset('assets/img/p2.jpg'),
           ],
           4 => [
               'id'=> 5,
               'name' => self::$name3,
               'phone' => '0123456',
               'image' => asset('assets/img/p3.jpg'),
           ],
           5 => [
               'id'=> 6,
               'name' => self::$name2,
               'phone' => '0123456',
               'image' => asset('assets/img/p10.jpg'),
           ],
       ];
    }

}
