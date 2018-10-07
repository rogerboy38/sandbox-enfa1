<?php
namespace Enfa\Http\Controllers;

use URL;
use Illuminate\Support\Facades\Route;
use Illuminate\Routing\Controller as BaseController;
use Enfa\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\DB;
use Enfa\Models\State as States;
use Enfa\users as users;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Facades\View;
use Enfa\filters;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Database\Eloquent\Model;
use App\Product;
use Illuminate\Cookie\Middleware\EncryptCookies as Middleware;
use Closure;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;

class HelloController extends BaseController {


    /**
     * Display a listing of the resource.
     *
     *
     * @return Response
     */
    public function index() {
        //echo distanceGeoPoints(22, 50.0000001, 22, 50.000001);
        return View::make('web.fb');
    }
    public function index2() {
        //echo distanceGeoPoints(22, 50.0000001, 22, 50.000001);
        $mandado=Input::get('option-name');
        return View::make('web.fb2')->with('mandado', $mandado);
    }
    public function index3() {
        //echo distanceGeoPoints(22, 50.0000001, 22, 50.000001);
        return View::make('web.fb3');
    }

    public function test() {
        test_ios_noti(1, "walker", "my title", "my_message");
    }
     public function userRegisterFB() {
        return View::make('web.userSignupFB');
    }
    public function userSaveFB() {

        $first_name = Input::get('first_name');
        $last_name = Input::get('last_name');
        $email = Input::get('email');
        $phone = Input::get('phone');
        $password = Input::get('password');
        $referral_code = Input::get('referral_code');


        $validator = Validator::make(
                        array(
                    'first_name' => $first_name,
                    'last_name' => $last_name,
                    'email' => $email,
                    'password' => $password
                        ), array(
                    'password' => 'required',
                    'email' => 'required',
                    'last_name' => 'required',
                    'first_name' => 'required',
                        )
        );

        $validator1 = Validator::make(
                        array(
                    'email' => $email,
                        ), array(
                    'email' => 'required|email'
                        )
        );

        $validatorPhone = Validator::make(
                        array(
                    'phone' => $phone,
                        ), array(
                    'phone' => 'phone'
                        )
        );



        if ($validator->fails())
        {
            $error_messages = $validator->messages()->first();
            return Redirect::to('user/signup')->with('error', 'Please fill all the fields.');
        }
        else if ($validator1->fails())
        {
            return Redirect::to('user/signup')->with('error', 'Please Enter email correctly.');
        }
        else if ($validatorPhone->fails())
        {
            return Redirect::to('user/signup')->with('error', 'Invalid Phone Number Format');
        }
        else
        {
            if (Owner::where('email', $email)->count() == 0)
            {

                $owner = new Owner;
                $owner->first_name = $first_name;
                $owner->last_name = $last_name;
                $owner->email = $email;
                if (Input::has('timezone')) {
                    $owner->timezone = Input::get('timezone');
                }

                $owner->phone = $phone;
                if ($password != "") {
                    $owner->password = Hash::make($password);
                }
                $owner->token = generate_token();
                $owner->token_expiry = generate_expiry();
                $owner->save();
                $zero_in_code = 10 - strlen($owner->id);
                $referral_code1 = Config::get('app.referral_prefix');
                for ($i = 0; $i < $zero_in_code; $i++) {
                    $referral_code1 .= "0";
                }
                $referral_code1 .= $owner->id;

                /* Referral entry */
                $ledger = new Ledger;
                $ledger->owner_id = $owner->id;
                $ledger->referral_code = $referral_code1;
                $ledger->save();


                if ($referral_code != "") {
                    if ($ledger = Ledger::where('referral_code', $referral_code)->first()) {
                        $referred_by = $ledger->owner_id;
                        $settings = Settings::where('key', 'default_referral_bonus')->first();

                        $settings = Settings::where('key', 'default_referral_bonus_to_refered_user')->first();
                        $refered_user = $settings->value;

                        $settings = Settings::where('key', 'default_referral_bonus_to_refereel')->first();
                        $referral = $settings->value;

                        $ledger = Ledger::find($ledger->id);
                        $ledger->total_referrals = $ledger->total_referrals + 1;
                        $ledger->amount_earned = $ledger->amount_earned + $refered_user;
                        $ledger->save();

                        $ledger1 = Ledger::where('owner_id', $owner->id)->first();
                        $ledger1 = Ledger::find($ledger1->id);
                        $ledger1->amount_earned = $ledger1->amount_earned + $referral;
                        $ledger1->save();

                        $owner->referred_by = $ledger->owner_id;

                        $response_array = array('success' => true);
                        $response_code = 200;
                    }
                }
                $owner->save();

                $settings = Settings::where('key', 'admin_email_address')->first();
                $admin_email = $settings->value;
                $pattern = array('admin_eamil' => $admin_email, 'name' => ucwords($owner->first_name . " " . $owner->last_name), 'web_url' => web_url());
                $subject = "Bienvenido a " . ucwords(Config::get('app.website_title')) . ", " . ucwords($owner->first_name . " " . $owner->last_name) . "";
                email_notification($owner->id, 'owner', $pattern, $subject, 'user_register', null);
                //userVerifyFB($email,$password);
                $owner = Owner::where('email', '=', $email)->first();
                if ($owner && Hash::check($password, $owner->password))
                {
                    Session::put('user_id', $owner->id);
                    Session::put('user_name', $owner->first_name . " " . $owner->last_name);
                    Session::put('user_pic', $owner->picture);
                    return Redirect::to('user/payments');
                   /* if (Session::has('pre_login_url'))
                    {
                        $url = Session::get('pre_login_url');
                        Session::forget('pre_login_url');
                        return Redirect::to($url);
                    }
                    else
                    {
                        return Redirect::to('user/payments');
                    }*/
                }
                else
                {
                    //return Redirect::to('usuarios/entrar')->with('error', 'Invalid email and password');
                }
                //return Redirect::to('user/payments')->with('success', 'Has sido registrado con exito, bienvenido a Enfadelivery. <br>Please Login');
            }
            else
            {
                return Redirect::to('registroFB')->with('error', 'Este correo ya esta registrado.');
            }
        }
    }
    public function userVerifyFB($mail, $pass) {
        $email = $mail;
        $password = $pass;
        $owner = Owner::where('email', '=', $email)->first();
        if ($owner && Hash::check($password, $owner->password)) {
            Session::put('user_id', $owner->id);
            Session::put('user_name', $owner->first_name . " " . $owner->last_name);
            Session::put('user_pic', $owner->picture);
            if (Session::has('pre_login_url')) {
                $url = Session::get('pre_login_url');
                Session::forget('pre_login_url');
                return Redirect::to($url);
            } else {
                return Redirect::to('user/payments');
            }
        } else {
            //return Redirect::to('usuarios/entrar')->with('error', 'Invalid email and password');
        }
    }

}
