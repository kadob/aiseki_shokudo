<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Map;
use App\Models\NiceMap;

class MapController extends Controller
{
    /**
     * マップスポットの詳細を表示する
     * @param Map $map
     * @return View
     */
    public function detail(Map $map): View
    {
        $niceMap = NiceMap::where('map_id', $map->id)
            ->where('user_id', auth()->user()->id)
            ->first();
        return view('maps.detail')->with([
            'map' => $map,
            'niceMap' => $niceMap,
        ]);
    }
}
