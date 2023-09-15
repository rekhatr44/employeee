<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\User;
use App\Models\Basic;
use App\Models\Education;
use App\Models\Experiance;
use App\Models\Family;
use App\Exports\UserdataExport;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(Auth::id())
        {
            $usertype=Auth()->user()->usertype;
            if($usertype=='user')
            {
                return view('home');
            }else if($usertype=='admin')
            {
                return view('admin');
            }
            
        }
    }
    public function create(){
        return view('auth.create');
    }
    public function insertData(Request $request){
        $userId = $request->input('user_id');
        
        Basic::create([
            'user_id' => $userId,
            'firstname' => $request->input('Firstname'),
            'lastname' => $request->input('Lastname'),
            'email' => $request->input('Email'),
            'phone' => $request->input('Phone'),
            'dob' => $request->input('Dateofbirth'),
            'role' => $request->input('Role'),
            'department' => $request->input('Department'),
            'salary' => $request->input('Salary'),

        ]);
        Education::create([
            'user_id' => $userId,
            'school1' => $request->input('School1'),
            'degree1' => $request->input('Degree1'),
            'percentage1' => $request->input('Percentage1'),
            'school2' => $request->input('School2'),
            'degree2' => $request->input('Degree2'),
            'percentage2' => $request->input('Percentage2'),
            

        ]);
        Experiance::create([
            'user_id' => $userId,
            'company1' => $request->input('Company1'),
            'number1' => $request->input('Number1'),
            'reponsibility1' => $request->input('Responsibility1'),
            'company2' => $request->input('Company2'),
            'number2' => $request->input('Number2'),
            'responsibility2' => $request->input('Responsibility2'),
            

        ]);
        Family::create([
            'user_id' => $userId,
            'father' => $request->input('Father'),
            'mother' => $request->input('Mother'),
            'spouse' => $request->input('Spouse'),
            'children' => $request->input('Children'),
           

        ]);
        return view('auth.createsuccess');
       
    }

    public function display(){
        $user = Auth::user();
  $userdata = User::with(['basics'])->find($user->id);
  $userdata = User::with(['education'])->find($user->id);
  $userdata = User::with(['experiances'])->find($user->id);
  $userdata = User::with(['families'])->find($user->id);
  return view('auth.display', compact('userdata'));
    }
    public function edit($id){
        $user = Auth::user();
        $userdata = User::with(['basics'])->find($user->id);
        $userdata = User::with(['education'])->find($user->id);
        $userdata = User::with(['experiances'])->find($user->id);
        $userdata = User::with(['families'])->find($user->id);
       return view("auth.edit",compact('userdata'));
    }
    public function update($id, Request $request){
        $user = User::findOrFail($id);
        $user->basics()->updateOrCreate(
            ['user_id' => $user->id], // Match by user_id
            [
                'firstname' => $request->input('Firstname'),
                'lastname' => $request->input('Lastname'),
                'email' => $request->input('Email'),
                'phone' => $request->input('Phone'),
                'dob' => $request->input('Dateofbirth'),
                'role' => $request->input('Role'),
                'department' => $request->input('Department'),
                'salary' => $request->input('Salary'),
            ]
        );
    
        // Update or create education data in a similar manner
        $user->education()->updateOrCreate(
            ['user_id' => $user->id],
            [
                'school1' => $request->input('School1'),
                'degree1' => $request->input('Degree1'),
                'percentage1' => $request->input('Percentage1'),
                'school2' => $request->input('School2'),
                'degree2' => $request->input('Degree2'),
                'percentage2' => $request->input('Percentage2'),
            ]
        );
        $user->experiances()->updateOrCreate(
            ['user_id' => $user->id],
            [
                'company1' => $request->input('Company1'),
                'number1' => $request->input('Number1'),
                'reponsibility1' => $request->input('Responsibility1'),
                'company2' => $request->input('Company2'),
                'number2' => $request->input('Number2'),
                'responsibility2' => $request->input('Responsibility2'),
            ]
        );
        $user->families()->updateOrCreate(
            ['user_id' => $user->id],
            [
                'father' => $request->input('Father'),
                'mother' => $request->input('Mother'),
                'spouse' => $request->input('Spouse'),
                'children' => $request->input('Children'),
                
            ]
        );
        return view('auth.success');
        
    
        
    }
    public function success(){
        return view('auth.success');
    }
    public function createsuccess(){
        return view('auth.createsuccess');
    }

    public function admindisplay(){
        $users = User::all();
        $userdata = User::with(['Basicsall', 'Educationall', 'Experiancesall', 'Familiesall'])
        ->get();

    return view('auth.admindisplay', compact('userdata'));
    }
    public function adminedit($id){
        
       
        $user = User::with(['Basicsall', 'Educationall', 'Experiancesall', 'Familiesall'])
        ->find($id);
        
       
        
       return view("auth.adminedit",compact('user'));
    }
    public function updateData($id, Request $request){
    $user = User::findOrFail($id);
        $user->Basicsall()->update(
            // Match by user_id
            [
                'firstname' => $request->input('Firstname'),
                'lastname' => $request->input('Lastname'),
                'email' => $request->input('Email'),
                'phone' => $request->input('Phone'),
                'dob' => $request->input('Dateofbirth'),
                'role' => $request->input('Role'),
                'department' => $request->input('Department'),
                'salary' => $request->input('Salary'),
            ]
        );
    
        // Update or create education data in a similar manner
        $user->Educationall()->update(
            
            [
                'school1' => $request->input('School1'),
                'degree1' => $request->input('Degree1'),
                'percentage1' => $request->input('Percentage1'),
                'school2' => $request->input('School2'),
                'degree2' => $request->input('Degree2'),
                'percentage2' => $request->input('Percentage2'),
            ]
        );
        $user->Experiancesall()->update(
            
            [
                'company1' => $request->input('Company1'),
                'number1' => $request->input('Number1'),
                'reponsibility1' => $request->input('Responsibility1'),
                'company2' => $request->input('Company2'),
                'number2' => $request->input('Number2'),
                'responsibility2' => $request->input('Responsibility2'),
            ]
        );
        $user->Familiesall()->update(
           
            [
                'father' => $request->input('Father'),
                'mother' => $request->input('Mother'),
                'spouse' => $request->input('Spouse'),
                'children' => $request->input('Children'),
                
            ]
        );
        return view('auth.success');
    }
    public function export_user(){
        return Excel::download(new UserdataExport, 'userdata.xlsx');
    }
    public function deleteData($id){
        $user = User::findOrFail($id);
        $user->Basic()->delete();
    
       
        $user->Education()->delete();
        $user->Experiance()->delete();
        $user->Family()->delete();
        
       $user->delete();
       
        return view('auth.success');
        }
    }

