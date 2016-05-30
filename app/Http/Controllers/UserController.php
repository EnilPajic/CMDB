<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use Illuminate\Http\Response as HttpResponse;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Log;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('jwt.auth', ['except' => ['login', 'store']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function Wellcome()
    {
        return View::make('dashboard');
    }
    public function index()
    {
        return User::all();
    }
    public function LogujSe (Request $r)
    {
        var_dump ($r);
        echo "<script>alert ('radi');</script>";
        return "<h1>Testiram samo</h1>";
    }
    public function login(Request $request)
    {
        Log::info ('Pozvao login @user');
        $credentials = $request->only('email', 'password');
        echo "<script>alert ('radi token?');</script>";
        try {
            Log::info ('Pozvao login @user 1111111');

            $token = JWTAuth::attempt($credentials);
            Log::info ('Pozvao login @user pppppppp');
            if (!$token) {
                return response()->json(['error' => 'invalid_credentials'], 401);
            }
        } catch (JWTException $e) {

            return response()->json(['error' => 'could_not_create_token'], 500);
        }
        Log::info ('Pozvao login @user 2222222222222');

        //JWTAuth::setToken ('token');
        return response()->json(compact('token'));
    }


    public function store(Request $request)
    {
        try
        {
            $korisnik=new User();


            $rules=array(
                'name'=>'required|max:32',
                'email'=>'required|email|max:255|unique:users',
                'password'=>'required|min:6|max:32',
                'g-recaptcha-response' => 'required|captcha'

            );

            $validator= Validator::make(Input::all(), $rules);


            if(!$validator->fails()) {

                $data = Input::except('password');
                $korisnik->fill($data);
                $korisnik->password=bcrypt($request->password);
                $korisnik->save();

            }
            else{

                return response()->json(['error' => 'Validation failed'], HttpResponse::HTTP_UNAUTHORIZED);
            }

        } catch (Exception $e) {
            return response()->json(['error' => 'Unable to register user'], HttpResponse::HTTP_CONFLICT);
        }


        $token = JWTAuth::fromUser($korisnik);


        return response()->json(compact('token'));

    }

}
