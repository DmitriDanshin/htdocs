<?php


namespace App\Http\Controllers;


use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        #$data = DB::table('country')->get();
        /*
        $data = DB::table('city')
            ->orderBy('population', 'DESC')
            ->limit(10)
            ->select(['ID', 'name'])
            ->where([['id', '<=', 2], ['id', '!=', 1]])
            ->get();
        */


        $data = DB::table('city')
            ->select('city.ID', 'city.Name as city_name', 'country.Code', 'country.Name as country_name')
            ->limit(10)
            ->join('country', 'city.CountryCode', '=', 'country.Code')
            ->orderBy('city.ID')
            ->get();


        dd($data);

        return view('home', ['date' => date('Y-m-d h:i:s')]);
    }

    public function test(): string
    {
        return __METHOD__;
    }
}
