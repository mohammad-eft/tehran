<?php

namespace App\Http\Controllers;

use App\Models\phone_code;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Log;

class UserController extends Controller
{
    public function createSignup(Request $request)
    {
        $request->validate([
            'phoneNumber' => ['required', 'max:11'],
            'password' => ['required']
        ], [
            'phoneNumber.required' => 'شماره موبایل ضروری است',
            'phoneNumber.max' => 'باید 11 کاراکتر باشد',
            'password.required' => 'رمز ضروری می باشد'
        ]);

        $phoneNumber = $request->input('phoneNumber');
        $password = $request->input('password');
        $user = User::where('phoneNumber', $phoneNumber)->first();
        if ($user) {
            return redirect()->back()->with('message', 'این شماره تلفن قبلا استفاده شده');
        }
        if (!$user) {
            User::create([
                'phoneNumber' => $phoneNumber,
                'password' => Hash::make($password)
            ]);
            $user = User::where('phoneNumber', $phoneNumber)->first();
            Auth::login($user);
            return to_route('home');
        }
    }

    public function check(Request $request)
    {
        $user = User::where('phoneNumber', $request->phoneNumber)->first();

        if ($user) {
            if (isset($request->password)) {
                $checkHash = Hash::check($request->password, $user->password);
                if ($checkHash) {
                    Auth::login($user);
                    return to_route('dashboard');
                }
                return to_route('login', ['message' => 'لطفا اطلاعات خود را مجددا بررسی کنید']);
            }
            if (isset($request->code)) {
                $code = phone_code::where('phoneNumber', $request->phoneNumber)->first();
                if ($code->code == $request->code) {
                    Auth::login($user);
                    return to_route('dashboard');
                }
                return to_route('login', ['message' => 'لطفا اطلاعات خود را مجددا بررسی کنید']);
            }
        }
        return to_route('signup');
    }

    public function checkAuth(Request $request)
    {
        $bool = false;
        $user['validate'] = User::where('phoneNumber', $request->phoneNumber)->first();
        $code = phone_code::where('phoneNumber', $request->phoneNumber)->first();
        if ($code->code == $request->code) {
            $bool = true;
        }
        $user['checkCode'] = $bool;
        return response()->json($user);
    }

    public function loginWithActivationCode(Request $request)
    {
        $flag = true;
        $user = User::where('phoneNumber', $request->phoneNumber)->first();
        if ($user) {
            $flag = false;
        }
        if (!$flag) {
            $code = rand(1000, 10000);
            phone_code::upsert(['phoneNumber' => $request->phoneNumber, 'code' => $code], ['phoneNumber'], ['code']);
            $apiKey = 'YTBhZjhlNDAtZGI1Zi00ZWQ1LTkwNmYtZWU2MWFhYTkzY2M0NTcxZGQ3ZjY2Yzk1MmNjZmFiM2M2ZjVmNjBhMDg2MTQ=';
            $client = new \IPPanel\Client($apiKey);
            $patternValues = [
                'activation_code' => $code,
            ];
            $bulkID = $client->sendPattern(
                '7fvdx77gveizxqn',  // pattern code
                '+983000505',  // originator
                $request->phoneNumber,  // recipient
                $patternValues,  // pattern values
            );
        }
        return response()->json($flag);
    }

    public function logOut()
    {
        Auth::logout();
        return redirect('/');
    }

    public function sendCode(Request $request)
    {
        $user = User::where('phoneNumber', $request->phoneNumber)->first();
        if ($user) {
            return response()->json(false);
        }
        $code = rand(1000, 10000);
        phone_code::upsert(['phoneNumber' => $request->phoneNumber, 'code' => $code], ['phoneNumber'], ['code']);
        $apiKey = 'YTBhZjhlNDAtZGI1Zi00ZWQ1LTkwNmYtZWU2MWFhYTkzY2M0NTcxZGQ3ZjY2Yzk1MmNjZmFiM2M2ZjVmNjBhMDg2MTQ=';
        $client = new \IPPanel\Client($apiKey);
        $patternValues = [
            'activation_code' => $code,
        ];
        $bulkID = $client->sendPattern(
            '7fvdx77gveizxqn',  // pattern code
            '+983000505',  // originator
            $request->phoneNumber,  // recipient
            $patternValues,  // pattern values
        );
        return response()->json(true);
    }

    public function sendLoginCode(Request $request)
    {
        $user = User::where('phoneNumber', $request->phoneNumber)->first();
        if (!$user) {
            return response()->json(false);
        }
        $code = rand(1000, 10000);
        phone_code::upsert(['phoneNumber' => $request->phoneNumber, 'code' => $code], ['phoneNumber'], ['code']);
        $apiKey = 'YTBhZjhlNDAtZGI1Zi00ZWQ1LTkwNmYtZWU2MWFhYTkzY2M0NTcxZGQ3ZjY2Yzk1MmNjZmFiM2M2ZjVmNjBhMDg2MTQ=';
        $client = new \IPPanel\Client($apiKey);
        $patternValues = [
            'activation_code' => $code,
        ];
        $bulkID = $client->sendPattern(
            '7fvdx77gveizxqn',  // pattern code
            '+983000505',  // originator
            $request->phoneNumber,  // recipient
            $patternValues,  // pattern values
        );
        return response()->json(true);
    }

    public function CheckActivationCode(Request $request)
    {
        $phone = phone_code::where('phoneNumber', $request->phoneNumber)->first();
        if ($phone) {
            if ($phone->code == $request->code) {
                return response()->json(true);
            }
        }
        return response()->json(false);
    }

    public function loginPass(Request $request)
    {
        $user = User::where('phoneNumber', $request->phoneNumber)->first();

        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                Auth::login($user);
                return response()->json(['type' => true]);
            }
            if (!Hash::check($request->password, $user->password)) {
                return response()->json(['message' => 'رمز عبور اشتباه هست', 'type' => false]);
            }
        }
        if (!$user) {
            return response()->json(['message' => 'این کاربر ثبت نام نکرده لطفا ثبت نام کنید', 'type' => false]);
        }
    }

    public function LoginUser(Request $request)
    {
        $user = User::where('phoneNumber', $request->phoneNumber)->first();
        Auth::login($user);
        return redirect('/');
    }

    public function loginCode(Request $request)
    {
        $user = phone_code::where('phoneNumber', $request->phoneNumber)->first();
        if ($user) {
            if ($user->code == $request->code) {
                return response()->json(true);
            }
            return response()->json(false);
        }
        return response()->json(false);
    }
}
