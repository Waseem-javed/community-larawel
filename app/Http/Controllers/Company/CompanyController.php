<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index(){
        return view('companies.companies');
    }

    public function companyProfile(){
        return view('companies.components.CompanyProfile');
    }
}