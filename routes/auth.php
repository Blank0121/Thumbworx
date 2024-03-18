<?php

use App\Models\Registration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DriverHelperController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;

Route::middleware('guest')->group(function () {
    
    Route::get('/driver_helper/draft', function (Request $request) {
        $user_id = $request->cookie('user_id');

        $registrant = Registration::where('user_id', $user_id)->first();

        return view("success-draft")->with("draft_id", $registrant->draft_id);
    })->name('dh.draft');

    // Route::get('register/role/driver_helper', [RegisteredUserController::class, 'create'])
    //             ->name('register.driver_helper');

    // Route::post('register/role/driver_helper', [RegisteredUserController::class, 'store']);

    Route::get('login', [AuthenticatedSessionController::class, 'create'])
                ->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store']);

    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
                ->name('password.request');

    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
                ->name('password.email');

    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
                ->name('password.reset');

    Route::post('reset-password', [NewPasswordController::class, 'store'])
                ->name('password.store');

    // Driver/Helper and Client Registration Routes

    Route::get('/driver_helper/step/1', [DriverHelperController::class, "driverHelperStepOne"])->name("dh.step-1");
    Route::post('/driver_helper/step/1', [DriverHelperController::class, "stepOne"]);
    Route::get('/driver_helper/step/2', [DriverHelperController::class, "driverHelperStepTwo"])->name("dh.step-2");
    Route::post('/driver_helper/step/2', [DriverHelperController::class, "stepTwo"]);
    Route::get('/driver_helper/step/3', [DriverHelperController::class, "driverHelperStepThree"])->name("dh.step-3");
    Route::post('/driver_helper/step/3', [DriverHelperController::class, "stepThree"]);
    Route::get('/driver_helper/step/4', [DriverHelperController::class, "driverHelperStepFour"])->name("dh.step-4");
    Route::get('/driver_helper/step/5', [DriverHelperController::class, "driverHelperStepFive"])->name("dh.step-5");
   
    // Draft registration route
    Route::post('/driver_helper/draft', [DriverHelperController::class, "draft"])->name('dh.draft');

    Route::get('/registerscl1', function () {
        return view('registration.client.registerscl1');
    });
    Route::get('/registerscl2', function () {
        return view('registration.client.registerscl2');
    });
    Route::get('/registerscl3', function () {
        return view('registration.client.registerscl3');
    });
    Route::get('/registerscl4', function () {
        return view('registration.client.registerscl4');
    });
    Route::get('/registerscl5', function () {
        return view('registration.client.registerscl5');
    });
                
});

Route::middleware('auth')->group(function () {
    Route::get('verify-email', EmailVerificationPromptController::class)
                ->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', VerifyEmailController::class)
                ->middleware(['signed', 'throttle:6,1'])
                ->name('verification.verify');

    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
                ->middleware('throttle:6,1')
                ->name('verification.send');

    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
                ->name('password.confirm');

    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::put('password', [PasswordController::class, 'update'])->name('password.update');

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
                ->name('logout');
});
