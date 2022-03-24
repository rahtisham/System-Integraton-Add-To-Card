<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SuperCategory;
use App\Models\subCategory;

class SidebarController extends Controller
{
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
