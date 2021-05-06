<?php


namespace App\Http\Controllers;


use App\Models\City;
use App\Models\Country;
use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        // $data = Country::query()->limit(5)->get();
        // $data = City::query()->find(5);
        // $data = Country::query()->find('RUS');


        /*$post->title = 'Статья 5';
        $post->content = 'Lorem 5';
        $post->save();*/

        /*Post::query()->create([
            'title'=>'Пост 6',
            'content'=>'Мой контент 6'
        ]);*/

        /*$post = Post::query()->find(5);
        $post->content = 'New content';
        $post->save();*/
        // $post = Post::query()->where('id','>=', 3);
        // $post->update(['updated_at'=>NOW()]);

        // dd($post);




        #$data = DB::table('country')->get();
        /*
        $data = DB::table('city')
            ->orderBy('population', 'DESC')
            ->limit(10)
            ->select(['ID', 'name'])
            ->where([['id', '<=', 2], ['id', '!=', 1]])
            ->get();
        */


        /*$data = DB::table('city')
            ->select('city.ID', 'city.Name as city_name', 'country.Code', 'country.Name as country_name')
            ->limit(10)
            ->join('country', 'city.CountryCode', '=', 'country.Code')
            ->orderBy('city.ID')
            ->get();*/

        // $post = Post::query()->find(6)->delete();
        // dd($post);
        return view('welcome', ['date' => NOW()]);
    }

    public function test(): string
    {
        return __METHOD__;
    }
}
