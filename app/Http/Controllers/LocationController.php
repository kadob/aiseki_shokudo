<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Location;
use App\Models\Nicelocation;
use App\Models\Post;

class LocationController extends Controller
{
    //モデルからページネーションでとってきて、ロケ一覧画面を返す
    public function showLocalist(Location $location)
    {   
        return view('locations/localist')->with(['locations'=> $location->getPaginateByLimit()]);
    }
    
    //ロケ検索
    public function searchLocation(Request $request)
    {
        $locations = Location::paginate(6);//Locationテーブルから６件を上限にページネーションする
        $search = $request->input('search');//HTTPリクエストの中のsearchを取得
        $query = Location::query();//Locationテーブルでクエリを発行

        if ($search) {

            $spaceConversion = mb_convert_kana($search, 's');//日本語の文字列を変換する（例）半角カタカナ->全角カタカナ

            $wordArraySearched = preg_split('/[\s,]+/', $spaceConversion, -1, PREG_SPLIT_NO_EMPTY);//正規表現に基づき、単語の配列に分割
            
            //上記で作った配列を回す
            foreach($wordArraySearched as $value) {
                $query->where('celebrity', 'like', '%'.$value.'%');//like で部分文字列の一致。'%'.$value.'%' で、部分一致のパターンを指定
            }

            $locations = $query->paginate(6);//クエリの検索結果に基づいて当てはまった６件を上限に格納
        }
            //$locationsと$searchという変数を渡して、ロケ一覧画面を表示する
            return view('locations.localist')->with([
                'locations' => $locations,
                'search' => $search,
            ]);
    }
    
    public function showLocadetail(Location $location)
    {
        //nicelocationテーブルのlocation_idと$locationのidが一致し、認証されたユーザーIDと一致するレコードの一番最初のレコードを代入。
        $nicelocation=Nicelocation::where('location_id',$location->id)->where('user_id',auth()->user()->id)->first();
        $locationposts=Post::where('location_id',$location->id)->orderBy('created_at', 'desc')->take(3)->get();
        //locationとnicelocationという変数を持たせてロケ詳細画面を返す
        return view('locations.location',compact('location','nicelocation','locationposts'));
    }
    
    public function showLocapop()
    {
        //リレーションを組むnicelocationからいいねの数で降順に並べて、取得したのを代入
        $locations = Location::withCount('nicelocations')->orderBy('nicelocations_count','desc')->paginate(6);
        
        $currentPage = $locations->currentPage();

        $rank = ($currentPage - 1) * 6 + 1;
        $previousCount = null;

        $locations->transform(function ($location) use (&$rank, &$previousCount) {
            if ($previousCount !== null && $location->nicelocations_count !== $previousCount) {
                $rank++;
            }
    
            $location->rank = $rank;
            $previousCount = $location->nicelocations_count;
    
            return $location;
        });
        
        //locationsという変数を持たせてロケ人気ランキング画面を返す
        return view('locations.locapop',compact('locations'));
    }
}