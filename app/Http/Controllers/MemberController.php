<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Department;
use App\EdomAspect;
use App\Member;
use App\ModelUser;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $members = Member::get_formated_rows();
        return view('member.index', ['members'=>$members]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        $departments = Department::all();
        return view('member.new', ['departments'=>$departments]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $new_member = Member::insert($request);
        ModelUser::new_user($new_member);
        return redirect()->action('MemberController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        $member = Member::get_by_id($id);
        $edom_aspects = EdomAspect::all();
        $edom_result = [];
        foreach ($edom_aspects as $aspect) {
            $edom_result[$aspect->id]=[$aspect->aspect_name, 0];
        }
        foreach ($member->edomRatings as $rating){
            $edom_result[$rating->aspect_id][1] += $rating->score;
        }
        $temp =[];
        foreach ($edom_result as $key => $value) {
            $temp[$key][0] = $value[0];            
            $temp[$key][1] = $value[1] /(count($member->edomRatings) / count($edom_aspects));
        }
        $edom_result = $temp;
        return view('member.show', ['member'=>$member, 'edom_result'=>$edom_result]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        $member = Member::where('id', $id)->get();
        $departments = Department::all();
        return view('member.edit', ['member'=>$member[0], 'departments'=>$departments]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){
        Member::where('id', $id)
          ->update([
              'name'=>$request->name,
              'gender'=>$request->gender,
              'department_id'=>$request->department_id
          ]);
        return redirect()->action('MemberController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $success = Member::where('id', $id)->delete();
        return redirect()->action('MemberController@index');
    }
}
