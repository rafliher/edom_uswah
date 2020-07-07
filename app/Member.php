<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Member extends Model
{
    //
    protected $fillable = ['name', 'gender', 'department_id'];

    public static function get_formated_rows(){
        $members = Member::where('id', '!=' , 1)->get();
        return $members;
    }

    public static function get_by_id($id){
        $member = Member::where('id', $id)->get();
        return $member[0];
    }

    public static function insert($request){
        $success = Member::create([
            'name' => $request->name,
            'gender' => $request->gender,
            'department_id' => $request->department_id
        ]);
        $input_data = Member::where('name', $request->name)->get();
        return $input_data[count($input_data)-1];
    }

    public function department(){
        return $this->belongsTo('App\Department');
    }
    public function user(){
        return $this->belongsTo('App\User');
    }
    public function edomRatings()
    {
        return $this->hasMany('App\EdomRating', 'rated_id', 'id');
    }
}
