<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use App\Models\Registration;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class DriverHelperController extends Controller
{

    function draftViewDH(Request $request) {
        $user_id = $request->cookie('user_id');

        $registrant = Registration::where('user_id', $user_id)->first();

        $cookie = cookie()->forget("user_id");

        return response(view("success-draft")->with("draft_id", $registrant->draft_id))->withCookie($cookie);
    }

    function getDraftDH(Request $request) {

        $request->validate([
            'draft_id' => ['required', 'uuid']
        ], [
            'draft_id.required' => 'Draft ID is required',
            'draft_id.uuid' => 'Invalid draft ID'
        ]);

        $registrant = Registration::where('draft_id', $request->draft_id)->first();

        $user_id = cookie()->forever("user_id", $registrant->user_id);

        return redirect()->route('dh.step-'.strval($registrant->step_id))->withCookie($user_id);
    }

    function generateDraftDH(Request $request) {
        $user_id = $request->cookie('user_id');

        if (!$user_id) {
            return redirect('/');
        }

        $user = User::find($user_id);

        $user->save($request->all());

        Registration::where('user_id', $user_id)->update(["draft_id" => strval(Str::uuid())]);

        return redirect()->route('dh.save-draft');
    }

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

        $user_id = cookie("user_id", $user->id);
    
        return response(view('registration.driver_helper.registers1')->with("user", null))->withCookie($user_id);
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

        if ($user_id != null) {
            $user = User::find($user_id);
            return view('registration.driver_helper.registers3')->with("user", $user);
        } 

        return view('registration.driver_helper.registers3');
    }

    function driverHelperStepFour(Request $request) {

        $user_id = $request->cookie("user_id");

        $registrant = Registration::where("user_id", $user_id)->first();

        if ($registrant->step_id <= 3) {
            return back();
        }

        if ($user_id != null) {
            $user = User::find($user_id);
            return view('registration.driver_helper.registers4')->with("user", $user);
        } 

        return view('registration.driver_helper.registers4');
    }

    function driverHelperStepFive(Request $request) {

        $user_id = $request->cookie("user_id");

        $registrant = Registration::where("user_id", $user_id)->first();

        if ($registrant->step_id <= 3) {
            return back();
        }

        if ($user_id != null) {
            $user = User::find($user_id);
            return view('registration.driver_helper.registers5')->with("user", $user);
        } 

        return view('registration.driver_helper.registers5');
    }

     function stepOne(Request $request): RedirectResponse
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

     function stepTwo(Request $request): RedirectResponse
    {
        $user_id = $request->cookie('user_id');

        $request->validate([
            "phone_number1" => ["phone:PH", "required"],
            "phone_number2" => "nullable|phone:PH",
            "email" => ["email", "required", 'regex:/([A-Za-z0-9]+)(@gmail.com)|(@yahoo.com)$/']
        ], [
            'phone_number1.phone' => 'Invalid phone number e.g.(XXXX XXX XXXX)',
            'phone_number2.phone' => 'Invalid phone number e.g.(XXXX XXX XXXX)',
            'email.regex' => 'Invalid email must end with @gmail.com or @yahoo.com',
        ]);

        if ($request->phone_number1 == $request->phone_number2) {
            return back()->withErrors(['phone_number1'=> 'Phone numbers must not match', 'phone_number2'=> 'Phone numbers must not match']);
        }

        $user = User::find($user_id);

        $user->phone_number1 = $request->phone_number1;
        $user->phone_number2 = $request->phone_number2;
        $user->email = $request->email;

        $user->save();

        Registration::where("user_id", $user_id)->update(["step_id" => 3]);

        return redirect("/driver_helper/step/3");
    }

     function stepThree(Request $request)
    {
        $user_id = $request->cookie('user_id');

        $request->validate([
            "per_zip_code" => "required",
            "per_country" => ["required","alpha"],
            "per_house_number" => "nullable|alpha_num",
            "per_street" => "nullable|alpha_num",
            "per_barangay" => [ "required","alpha_num"],
            "per_city" => "required",
            "per_province" => [ "required","alpha"],
            "per_region" => [ "required","string"],
            "cur_zip_code" => "required",
            "cur_country" => ["required","string"],
            "cur_house_number" => "nullable|alpha_num",
            "cur_street" =>  "nullable|alpha_num",
            "cur_barangay" =>  ["required","alpha_num"],
            "cur_city" => "required",
            "cur_province" =>  ["required","alpha"],
            "cur_region" =>  ["required","string"]
        ], [
            'per_zip_code.required' => 'Invalid Zip Code',
            'per_country.alpha' => 'Invalid Country e.g.(Philippines)',
            'per_country.required' => 'Field required',
            'per_house_number.regex' => 'Invalid House number e.g.(213)',
            'per_street.regex' => 'Invalid Street Address e.g.(Silangan Road)',
            'per_barangay.regex'=> 'Invalid Barangay',
            'per_city.required' => 'Field required',
            'per_province.alpha' => 'Invalid Province e.g.(Laguna)',
            'per_region.regex' => 'Invalid Region e.g.(IV-A)',
            'cur_zip_code.required' => 'Invalid Zip Code',
            'cur_country.alpha' => 'Invalid country e.g.(Philippines)',
            'cur_country.required' => 'Field required',
            'cur_house_number.regex' => 'Invalid house number e.g.(213)',
            'cur_street.regex' => 'Invalid street address e.g.(Silangan Road)',
            'cur_barangay.regex' => 'Invalid Barangay',
            'cur_city.required' => 'Field required',
            'cur_province.alpha' => 'Invalid Province e.g.(Laguna)',
            'cur_region.regex' => 'Invalid Region e.g.(IV-A)'
           
        ]);

        $user = User::find($user_id);

        $user->per_zip_code = $request->per_zip_code;
        $user->per_country = $request->per_country;
        $user->per_house_number = $request->per_house_number;
        $user->per_street = $request->per_street;
        $user->per_barangay = $request->per_barangay;
        $user->per_city = $request->per_city;
        $user->per_province = $request->per_province;
        $user->per_region = $request->per_region;

        $user->cur_zip_code = $request->cur_zip_code;
        $user->cur_country = $request->cur_country;
        $user->cur_house_number = $request->cur_house_number;
        $user->cur_street = $request->cur_street;
        $user->cur_barangay = $request->cur_barangay;
        $user->cur_city = $request->cur_city;
        $user->cur_province = $request->cur_province;
        $user->cur_region = $request->cur_region;

        $user->save();

        Registration::where("user_id", $user_id)->update(["step_id" => 4]);

        return redirect("/driver_helper/step/4");
    }

    function stepFour(Request $request)
    {
        $user_id = $request->cookie('user_id');

        $request->validate([
            "emergency_name" => ["string", "required"],
            "emergency_relationship" => ["string", "required"],
            "emergency_phone" => "phone:PH",
            "emergency_email" => ["email", "required", 'regex:/([A-Za-z0-9]+)(@gmail.com)|(@yahoo.com)$/'],
            "emergency_address" => ["string", "required"],
        ], [
            'emergency_name.string' => 'Invalid format',
            'emergency_relationship.string' => 'Invalid format',
            'emergency_phone.phone' =>  'Invalid phone number e.g.(XXXX XXX XXXX)',
            'emergency_email.regex' => 'Invalid email must end with @gmail.com or @yahoo.com',
            'emergency_address.string' => 'Invalid format',
        ]);

        $user = User::find($user_id);

        $user->emergency_name = $request->emergency_name;
        $user->emergency_relationship = $request->emergency_relationship;
        $user->emergency_phone = $request->emergency_phone;
        $user->emergency_email = $request->emergency_email;
        $user->emergency_address = $request->emergency_address;

        $user->save();

        Registration::where("user_id", $user_id)->update(["step_id" => 5]);

        return redirect("/driver_helper/step/5");
    }

   
}
