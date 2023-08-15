<?php

namespace App\Http\Controllers;

use App\Services\ArrayParse;
use App\Services\GetRacersListFacade;
use Illuminate\Http\Request;

class MainController extends Controller
{

    public function home()
    {

        return view("home");

    }

    public function report(Request $request)
    {

        $finalTime = new GetRacersListFacade;
        $resourcesPath = public_path();
        $sortOrder = $request->get("sort_order") ?? "asc";
        $result = $finalTime->getList($resourcesPath, $sortOrder);

        return view("report")->with("result", $result);

    }

    public function drivers(Request $request)
    {

        $sortOrder = $request->get("sort_order");
        $names = new ArrayParse;
        $resourcesPath = public_path();
        $racers = $names->getArray($resourcesPath . "/abbreviations.txt");
        if ($sortOrder === "desc") {
            arsort($racers);
        } elseif ($sortOrder) {
            asort($racers);
        }

        return view("drivers")->with("result", $racers);

    }

    public function racer(Request $request)
    {

        $finalTime = new GetRacersListFacade;
        $resourcesPath = public_path();
        $sortOrder = $request->get("sort_order") ?? "asc";
        $result = $finalTime->getList($resourcesPath, $sortOrder);

        return view("racer")->with("result", $result);

    }
}



