<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\ItemGroup;
use App\Models\Expenditure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ExpenseController extends Controller
{
    
    public function addExpense(Request $req)
    {
        $obj = new Expenditure;
        $obj->user_id = auth()->id();

        $item_name = $req->get('item_name');
        $obj->item_id =DB::table('items')
        ->where('name', $item_name)
        ->value('id');
        $obj->amount = $req->get('amount');
        $res = $obj->save();


        return redirect('/Add-Expense');
    }

}
