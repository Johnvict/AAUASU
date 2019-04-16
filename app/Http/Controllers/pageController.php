<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Material;
use App\Nick;

class pageController extends Controller
{
    /**
     * @return $this
     */
    public function errorReportPage()
    {
        return view('errorPage');
    }

    public function getWelcome()
    {
        return view('welcome');
    }

    public function getoffice1()
    {
        return view('offices/president');
    }

    public function getoffice2()
    {
        return view('offices/vpresident');
    }

    public function getoffice3()
    {
        return view('offices/gensec');
    }

    public function getoffice4()
    {
        return view('offices/pro');
    }

    public function getoffice5()
    {
        return view('offices/finsec');
    }

    public function getoffice6()
    {
        return view('offices/treasurer');
    }

    public function getoffice7()
    {
        return view('offices/drwelfare');
    }

    public function getoffice8()
    {
        return view('offices/drsocial');
    }

    public function getoffice9()
    {
        return view('offices/drsports');
    }

    public function getoffice10()
    {
        return view('offices/ags');
    }

    //SRC OFFICES
    public function getSp()
    {
        return view('src.sp');
    }

    public function getDsp()
    {
        return view('src.dsp');
    }

    public function getChiefwhip()
    {
        return view('src.chiefwhip');
    }

    //SJC OFFICES
    public function getCj()
    {
        return view('sjc.cj');
    }

    public function getLordChancellor()
    {
        return view('sjc.lordchancellor');
    }

    public function getRegistrar()
    {
        return view('sjc.registrar');
    }
    public function getgallery1()
    {
        return view('gallery/achievements');
    }

    public function getgallery2()
    {
        return view('gallery/pastadmin');
    }

    public function getgallery3()
    {
        return view('gallery/photos');
    }

    public function getabout1()
    {
        return view('pages/about');
    }

    public function getabout2()
    {
        return view('pages/sub');
    }

    public function getprogram1()
    {
        return view('programs/foa');
    }

    public function getprogram2()
    {
        return view('programs/sportsfestival');
    }

    public function getSignup()
    {
        return view('aauaites/signup');
    }

}
