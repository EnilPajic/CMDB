<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

use App\Http\Requests;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use Illuminate\Http\Response as HttpResponse;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return User::all();
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        try {
            if (!$token = JWTAuth::attempt($credentials)) {
                return response()->json(['error' => 'invalid_credentials'], 401);
            }
        } catch (JWTException $e) {

            return response()->json(['error' => 'could_not_create_token'], 500);
        }

        // u odgovoru se vraca token
        return response()->json(compact('token'));
    }

    //registracija korisnika
    public function store(Request $request)
    {
        try
        {
            $korisnik=new User();

            //validacija za polja kod registracije
            $rules=array(
                'name'=>'required|max:32',
                'email'=>'required|email|max:255|unique:users',
                'password'=>'required|min:6|max:32'
            );

            $validator= Validator::make(Input::all(), $rules);

            //ako su polja validna, spremi korisnika u bazu i posalji mail za verikikaciju
            if(!$validator->fails()) {

                $data = Input::except('password');
                $korisnik->fill($data);
                $korisnik->password=bcrypt($request->password);
                $korisnik->save();

            }
            else{
                //POST zahtjev nepotpun ili polja nisu prosla validaciju
                return response()->json(['error' => 'Validation failed'], HttpResponse::HTTP_UNAUTHORIZED);
            }

        } catch (Exception $e) {
            return response()->json(['error' => 'Unable to register user'], HttpResponse::HTTP_CONFLICT);
        }

        //registracija uspjesna, kreiraj token za korisnika
        $token = JWTAuth::fromUser($korisnik);

        //vrati JWT
        return response()->json(compact('token'));

    }

}
