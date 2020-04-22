<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewController extends Controller
{
    public function admin()
    {
        return view('admin/home');
    }
    public function grids()
    {
        return view('admin/grids');
    }
    public function forms()
    {
        return view('admin/forms');
    }
    public function compose_mail()
    {
        return view('admin/compose_mail');
    }
    public function codes()
    {
        return view('admin/codes');
    }
    public function charts()
    {
        return view('admin/charts');
    }
    public function blank_page()
    {
        return view('admin/blank_page');
    }
    public function widgets()
    {
        return view('admin/widgets');
    }
    public function media()
    {
        return view('admin/media');
    }
    public function inbox()
    {
        return view('admin/inbox');
    }
    public function tables()
    {
        return view('admin/tables');
    }
    public function sign_in()
    {
        return view('admin/sign_in');
    }
    public function sign_up()
    {
        return view('admin/sign_up');
    }
}
