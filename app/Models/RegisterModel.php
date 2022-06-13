<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class RegisterModel extends Model
{
    use HasFactory;
    protected $table = 'register_models';

    public static function getRegisteredUsers()
    {
        $records = DB::table('register_models')->select('id','name','email','contact','mandal','village','address','sscyearofpass','sscpercentage','interyearofpass','interpercentage','qualification','graduationstream','graduationyearofpass','graduationpercentage','postgraduationyearofpass','postgraduationpercentage','trainings','resume')->get()->toArray();
        return $records;
    }
}
