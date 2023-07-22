<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\ItemGroup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ItemController extends Controller
{
    public function createGroup(Request $req)
    {
        $obj = new ItemGroup;

        $obj->name = $req->get('groupname');
        $res = $obj->save();

        return redirect('/All-Groups');
    }


    public function addItem(Request $req)
    {
        $obj = new Item;

        $obj->name = $req->get('name');

        $group = $req->get('group');

        $obj->item_group_id = DB::table('item_groups')
            ->where('name', $group)
            ->value('id');

        $obj->price = $req->get('price');

        $res = $obj->save();

        return redirect('/All-Items');
    }
}
