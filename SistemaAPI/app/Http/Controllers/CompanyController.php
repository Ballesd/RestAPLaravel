<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\company;

class CompanyController extends Controller
{

    public function index(){

        $company = company::all();
        return $company; 
    }
}
