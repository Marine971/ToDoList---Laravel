<?php

namespace App\Http\Controllers;
 

use Illuminate\Http\Request;
use App\Models\ListItem;

class TodoListController extends Controller
{
    //
    public function saveItem(Request $request){
        $newItem = new ListItem();
        $newItem->name = $request->name;
        $newItem->is_complete = 0;
        $newItem->save();
       
        return redirect('/');
    }
     public function index(){
        return view('welcome', ['listItems' => ListItem::all()]);
         
     }
     public function complete($id){
       
        $item = ListItem::find($id);
         $item->is_complete = 1;
         $item->save();
         return redirect('/');

         
     }
}
