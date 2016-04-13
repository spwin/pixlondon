<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;


class PagesController extends Controller
{
    public function index(){
        return view('pages.homepage');
    }

    public function home(){
        //return view('pages.home');
        return view('pages.best_home');
    }

    public function seo(){
        return view('pages.seo');
    }

    public function programming(){
        return View('pages.programming');
    }

    public function design(){
        return View('pages.design');
    }

    public function services(){
        return View('pages.services');
    }

    public function contacts(){
        return view('pages.contacts');
    }

    public function sendMail(Request $request) {
        $rules = array(
            'name' => 'required|max:50',
            'email' => 'required|email|max:100',
            'phone' => 'numeric|digits_between:9,15',
            'subject' => 'required|max:100',
            'content' => 'required|min:10'
        );

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            $messages = $validator->messages()->toArray();
            foreach($messages as $field => $message){
                Input::merge(array($field => ''));
            }
            return Redirect::to(trans('routes.contacts'))->withErrors($validator)->withInput();
        } else {
            $data = [
                'email' => 'info@pixsens.co.uk',
                'name' => 'Pixsens Team'
            ];
            Mail::send('emails.contact', ['content' => Input::get('content'), 'phone' => Input::get('phone'), 'name' => Input::get('name')], function ($m) use ($data) {
                $m->from(Input::get('email'), Input::get('name'));
                $m->to($data['email'], $data['name'])->subject(Input::get('subject'));
            });
            return Redirect::to(trans('routes.contacts'))->with('success', 'Thank you for your message :)');
        }
    }
}
