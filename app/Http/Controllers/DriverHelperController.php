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
        $user = User::find($user_id);
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
    
        $cookie = cookie("user_id", $user->id, 30);
    
        return response(view('registration.driver_helper.registers1')->with("user", null))->cookie($cookie);

    }

    function driverHelperStepTwo(Request $request) {

        $user_id = $request->cookie("user_id");

        $registrant = Registration::where("user_id", $user_id)->first();

        if ($registrant->step_id <= 1) {
            return back();
        }

        if ($user_id != null) {
            $user = User::find($user_id);
            return view('registration.driver_helper.registers2')->with("user", $user);
        } 

        return view('registration.driver_helper.registers2');
    }

    function driverHelperStepThree(Request $request) {

        $user_id = $request->cookie("user_id");

        $registrant = Registration::where("user_id", $user_id)->first();

        if ($registrant->step_id <= 2) {
            return back();
        }


        return view('registration.driver_helper.registers3');
    }

    function driverHelperStepFour(Request $request) {

        $user_id = $request->cookie("user_id");

        $registrant = Registration::where("user_id", $user_id)->first();

        if ($registrant->step_id <= 3) {
            return back();
        }

        return view('registration.driver_helper.registers4');
    }

    function driverHelperStepFive(Request $request) {

        $user_id = $request->cookie("user_id");

        $registrant = Registration::where("user_id", $user_id)->first();

        if ($registrant->step_id <= 3) {
            return back();
        }

        return view('registration.driver_helper.registers5');
    }

    public function stepOne(Request $request): RedirectResponse
    {
        $user_id = $request->cookie('user_id');

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

        $user = User::find($user_id);

        $user->first_name = $request->first_name;
        $user->middle_name = $request->middle_name;
        $user->surname = $request->surname;
        $user->gender = $request->gender;
        $user->birth_date = $request->birth_date;
        $user->age = $request->age;
        $user->user_type = $request->user_type;
        $user->marital_status = $request->marital_status;

        $user->save();

        Registration::where("user_id", $user_id)->update(["step_id" => 2]);

        return redirect("/driver_helper/step/2");
    }

    public function stepTwo(Request $request): RedirectResponse
    {
        $user_id = $request->cookie('user_id');

        $request->validate([
            "phone_number1" => ["phone:PH", "required"],
            "phone_number2" => ["phone:PH", "required"],
            "email" => ["email", "required", 'regex:/[(@gmail.com)|(@yahoo.com)]$/']
        ], [
            'phone_number1.phone' => 'Invalid phone number e.g.(0909 090 0909)',
            'phone_number2.phone' => 'Invalid phone number e.g.(0909 090 0909)',
            'email.regex' => 'Invalid email e.g.(test@gmail.com or test@yahoo.com)',
           
        ]);

        $user = User::find($user_id);

        $user->phone_number1 = $request->phone_number1;
        $user->phone_number2 = $request->phone_number2;
        $user->email = $request->email;

        $user->save();

        Registration::where("user_id", $user_id)->update(["step_id" => 3]);

        return redirect("/driver_helper/step/3");
    }

}
