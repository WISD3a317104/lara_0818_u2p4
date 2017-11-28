<?php


namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

class AdminController extends Controller{
    public function index(){
       
        
        echo 'welcome';
        
    }
    public function login(){
        session(['admin'=>111]);
        echo 'login';
    }
}