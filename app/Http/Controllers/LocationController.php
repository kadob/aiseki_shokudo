<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Location;
use App\Models\NiceLocation;
use App\Models\Post;

class LocationController extends Controller
{
    /**
     * ロケリストを表示する
     * @return View
     */
    public function showList(): View
    {
        $location = new Location();
        $locations = $location->getPaginateByLimit()
        // return view('locations/list')->with([
        //     'locations' => $locations
        // ]);
    }

    /**
     * ロケを検索する
     * @param Request $request
     * @return View
     */
    // public function search(Request $request): View
    // {
    //     $locations = Location::paginate(6);
    //     $search = $request->input('search');
    //     $query = Location::query();
    //     if ($search) {
    //         $spaceConversion = mb_convert_kana($search, 's'); //日本語の文字列を変換する（例）半角カタカナ->全角カタカナ
    //         $wordArraySearched = preg_split('/[\s,]+/', $spaceConversion, -1, PREG_SPLIT_NO_EMPTY); //正規表現に基づき、単語の配列に分割
    //         foreach ($wordArraySearched as $value) {
    //             $query->where('celebrity', 'like', '%' . $value . '%'); //like で部分文字列の一致。'%'.$value.'%' で、部分一致のパターンを指定
    //         }
    //         $locations = $query->paginate(6);
    //     }
    //     return view('locations.list')->with([
    //         'locations' => $locations,
    //         'search' => $search,
    //     ]);
    // }

    /**
     * ロケの詳細を表示する
     * @param Location $location
     * @return View
     */
    public function detail(Location $location): View
    {
        $niceLocation = NiceLocation::where('location_id', $location->id)
                ->where('user_id', auth()->user()->id)
                ->first();
        $posts = Post::where('location_id', $location->id)
                ->orderBy('created_at', 'desc')
                ->take(3)
                ->get();

        return view('locations.detail')->with([
            'location' => $location,
            'niceLocation' => $niceLocation,
            'posts' => $post,
        ]);
    }

    /**
     * ロケ人気ランキングを表示する
     * @return View
     */
    public function pop(): View
    {
            $locations = Location::withCount('niceLocations')
                ->orderBy('niceLocations_count', 'desc')
                ->paginate(6);

        $currentPage = $locations->currentPage();

        $rank = ($currentPage - 1) * 6 + 1;
        $previousCount = null;

        $locations->transform(function ($location) use (&$rank, &$previousCount) {
            if ($previousCount !== null && $location->niceLocations_count !== $previousCount) {
                $rank++;
            }

            $location->rank = $rank;
            $previousCount = $location->niceLocations_count;

            return $location;
        });

        return view('locations.pop')->with([
                'locations'=>$locations
        ]);
    }
}
