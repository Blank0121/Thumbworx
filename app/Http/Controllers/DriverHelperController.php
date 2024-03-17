<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Registration;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class DriverHelperController extends Controller
{
   function driverHelperStepOne(Request $request) {

    $user_id = $request->cookie('user_id');

    if ($user_id != null) {
        $user = Registration::where("user_id", $user_id)->get();

        return view('registration.driver_helper.registers1')->with("user", $user);
    } 
        $user = User::create([
            "username" => null,
            "first_name" => "",
            "middle_name" => "",
            "surname" => "",
            "gender" => "",
            "user_type" => "",
            "marital_status" => "",
            "birth_date" => null,
            "email" => "",
            "password" => null,
            "age" => null
        ]);
    
        Registration::create([
            "user_id" => $user->id,
            "user_type" => "driver/helper",
            "step_id" => 1,
        ]);
    
        $cookie = cookie()->forever("user_id", $user->id);
    
        return response(view('registration.driver_helper.registers1')->with("user", null))->cookie($cookie);

    }

    function driverHelperStepTwo() {
        return view('registration.driver_helper.registers2');
    }

    function driverHelperStepThree() {
        return view('registration.driver_helper.registers3');
    }

    function driverHelperStepFour() {
        return view('registration.driver_helper.registers4');
    }

    function driverHelperStepFive() {
        return view('registration.driver_helper.registers5');
    }

    public function stepOne(Request $request): RedirectResponse
    {
        $request->validate([
            'first_name' => ['required', 'regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/', 'max:25'],
            'middle_name' => ['required', 'regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/','max:25', ],
            'surname' => ['required', 'regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/','max:25', ],
            'gender' => ['required'],
            'birth_date' => ['required', 'date'],
            'age' => ['required', 'numeric', 'min:18', 'max:100'],
            'user_type' => ['required', 'string'],
            'marital_status' => ['required', 'string'],
        ], [
            'first_name.regex' => 'Invalid values e.g.(Juan)',
            'first_name.required' => 'First name is required',
            'middle_name.regex' => 'Invalid values e.g.(Jose)',
            'middle_name.required' => 'Middle name is required',
            'surname.regex' => 'Invalid values e.g.(Dela Cruz)',
            'surname.required' => 'Surname is required',
            'gender.required' => 'Gender is required',
            'birth_date.required' => 'Birth date is required',
            'age.min' => 'Age must be 18 above',
            'age.max' => 'Age must be below 100',
        ]);


        return redirect("/driver_helper/step/2");
    }

    public function stepTwo(Request $request): RedirectResponse
    {
        $request->validate([
            "phone_number1" => ["phone:PH", "required"],
            "phone_number2" => ["phone:PH", "required"],
            "email" => ["email", "required", 'regex:/(@gmail.com | @yahoo.com )$/']
        ], [
            'phone_number1.phone' => 'Invalid phone number e.g.(0909 090 0909)',
            'phone_number2.phone' => 'Invalid phone number e.g.(0909 090 0909)',
            'email.regex' => 'Invalid email e.g.(test@gmail.com or test@yahoo.com)',
           
        ]);

        return redirect("/driver_helper/step/2");
    }

}
