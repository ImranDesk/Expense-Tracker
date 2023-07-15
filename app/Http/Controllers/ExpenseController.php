<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ItemGroup;
use App\Models\Item;
use App\Models\Expenditure;

class ExpenseController extends Controller
{
    
    public function addExpense(Request $req)
    {
        $obj = new Expenditure;

        $obj->group_name = $req->get('group');
        $obj->item_name = $req->get('item_name'); 
        $obj->expense = $req->get('expense');
        $res = $obj->save();


        return redirect('/Add-Expense');
    }

    public function getItemsByGroupName(Request $request, $groupName)
    {
        $items = Expenditure::where('group_name', $groupName)->get();

        return view('user.items', compact('items'));
    }
}
