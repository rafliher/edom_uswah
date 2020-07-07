<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    //
    protected $table = 'departments';
    protected $fillable = ['name', 'description'];

    public static function insert($request){
        $success = Department::create([
            'name' => $request->name,
            'description' => $request->description
        ]);
        return true;
    }

    public function members(){
        return $this -> hasMany('App\Member');
    }
    
}
