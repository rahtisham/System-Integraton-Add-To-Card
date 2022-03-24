<?php

namespace App\Http\Controllers;
use App\Models\SuperCategory;
use App\Models\subCategory;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $categories = [];
        $sidebare = SuperCategory::all();

        foreach ($sidebare as $side)
        {

            $subName = $side->subCat[0]['sub_name'];
            $subCatId = $side->subCat[0]['s_id'];
            $subCatImage = $side->subCat[0]['images'];
            $subID = $side->subCat[0]['sub_id'];

            $supCatName = $side->s_name;
            $supCatId = $side->s_id;
            $categories[] = [

               'name' => $supCatName,
               'supCatID' => $supCatId,
               'subName' => $subName,
               'sub_id' => $subID,
            ];

        }
        dd($categories);

        return view('main' , ['categories'=> $categories]);
    }
}
