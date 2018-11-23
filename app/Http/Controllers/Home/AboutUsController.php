<?php

namespace App\Http\Controllers\Home;

use App\Model\Company;
use App\Model\Vision;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutUsController extends Controller
{
    //
    public $about;
    public $vision;
    public function __construct(Company $about,Vision $vision)
    {
        $this->about = $about;
        $this->vision = $vision;
    }

    public function index()
    {
       $company = $this->about->where('status','=',0)->first();
        return view('home.aboutUs.company_introduce',compact('company'));
    }

    public function vam()
    {
        $vision = $this->vision->where('status','=',0)->first();
        return view('home.aboutUs.about_vam',compact('vision'));
    }

    public function team()
    {
        return view('home.aboutUs.team');
    }

}
