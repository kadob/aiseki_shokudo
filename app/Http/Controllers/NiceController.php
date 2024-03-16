<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Location;
use App\Models\NiceLocation;
use App\Models\Map;
use App\Models\NiceMap;
use Illuminate\Support\Facades\Auth;

class NiceController extends Controller
{
    /**
     * ロケにいいねする
     * @param Request $request
     * @param Location $location
     * @return void
     */
    public function niceLocation(Location $location, Request $request)
    {
        $niceLocation = new NiceLocation();
        $niceLocation->location_id = $location->id;
        $niceLocation->user_id = Auth::user()->id;
        $niceLocation->save();
        return back();
    }

    /**
     * ロケのいいねを取り消す
     * @param Request $request
     * @param Location $location
     * @return void
     */
    public function unniceLocation(Location $location, Request $request)
    {
        $user = Auth::user()->id;
        $niceLocation = NiceLocation::where('location_id', $location->id)
            ->where('user_id', $user)
            ->first();
        $niceLocation->delete();
        return back();
    }

    /**
     * マップスポットにいいねする
     * @param Request $request
     * @param Map $map
     * @return void
     */
    public function niceMap(Map $map, Request $request)
    {
        $niceMap = new NiceMap();
        $niceMap->map_id = $map->id;
        $niceMap->user_id = Auth::user()->id;
        $niceMap->save();
        return back();
    }

    /**
     * マップスポットのいいねを取り消す
     * @param Request $request
     * @param Map $map
     * @return void
     */
    public function unniceMap(Map $map, Request $request)
    {
        $user = Auth::user()->id;
        $niceMap = NiceMap::where('map_id', $map->id)
            ->where('user_id', $user)
            ->first();
        $niceMap->delete();
        return back();
    }

    /**
     * いいねリストを表示する
     * @return View
     */
    public function showNiceList(): View
    {
        $user = Auth::user()->id;
        $niceLocations = NiceLocation::where('user_id', $user)->get();
        $niceMaps = NiceMap::where('user_id', $user)->get();
        return view('nice.list')->with([
            'niceLocations' => $niceLocations,
            'niceMaps' => $niceMaps,
        ]);
    }
}
