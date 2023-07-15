<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ItemGroup;
use App\Models\Item;

class ItemController extends Controller
{
    public function createGroup(Request $req)
    {
        $obj = new ItemGroup;

        $obj->group_name = $req->get('groupname');
        $res = $obj->save();

        return redirect('/All-Groups');
    }


    public function addItem(Request $req)
    {
        $obj = new Item  ;

        $obj->group_name = $req->get('group');
        $obj->item_name = $req->get('item_name');
        $res = $obj->save();

        return redirect('/All-Items');
    }
}
