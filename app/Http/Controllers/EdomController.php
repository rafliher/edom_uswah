<?php

namespace App\Http\Controllers;

use App\Department;
use App\EdomAspect;
use App\EdomRating;
use App\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class EdomController extends Controller
{
    //
    public function validate_login(){
        if(!(Session::has('id'))){
            return redirect()->route('login')->with(['alert'=>'Please Log in first!']);
        }
    }
    public function index(){
        $this->validate_login();
        $member_info = Member::find(Session::get('member_id'));
        $department_partners = $member_info->department->members;
        if($member_info->department->name == 'Inti'){
            $sets_to_rate = [$department_partners];
        }else{
            $main_department_members = Department::where('name', 'Inti')->get()[0]->members;
            $sets_to_rate = [$main_department_members, $department_partners];
        }
        foreach ($sets_to_rate as $set) {
            foreach ($set as $key => $member) {
                if($member->id == Session::get('member_id')){
                    unset($set[$key]);
                }
                if(count(EdomRating::where('rater_id', Session::get('member_id'))
                    ->where('rated_id', $member->id)
                    ->get())>0){
                        $member['rated'] = true;
                }else{
                    $member['rated'] = false;
                }
            }
        }
        return view('edom.index', ['sets_to_rate' => $sets_to_rate]);

    }
    public function create($id){
        $this->validate_login();
        $aspects = EdomAspect::all();
        $rating_reciever = Member::find($id);
        return view('edom.new', ['aspects'=>$aspects, 'rating_reciever'=>$rating_reciever]);
    }

    public function insert(Request $request, $id){
        $rater_id = Session::get('member_id');
        $rated_id = $id;
        foreach ($request->request as $key => $value) {
            if($key != '_token'){
                EdomRating::create([
                    'rater_id'=>$rater_id,
                    'rated_id'=>$rated_id,
                    'aspect_id'=>$key,
                    'score'=>$value
                ]);
            }
        }
        return redirect()->action('EdomController@index');
    }
}
