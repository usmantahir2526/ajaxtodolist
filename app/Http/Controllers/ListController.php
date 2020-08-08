<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Item;
class ListController extends Controller
{
    public function index()
    {
    	$items = Item::all();
    	return view ('list',compact('items'));
    }

    public function create(Request $request)
    {
    	$item = New Item;
    	$item->item = $request->text;
    	$item->save();
    	return 'Done';
    }

    public function destroy(Request $request)
    {
    	Item::where('id',$request->id)->delete();
    	return 'Delete Successfully';
    }

    public function update(Request $request)
    {
    	$item = Item::find($request->id);
    	$item->item = $request->value;
    	$item->save();
    	return "Done";
    }

    public function search(Request $request)
    {
    // 	return     $availableTags = [
    //   "ActionScript",
    //   "AppleScript",
    //   "Asp",
    //   "BASIC",
    //   "C",
    //   "C++",
    //   "Clojure",
    //   "COBOL",
    //   "ColdFusion",
    //   "Erlang",
    //   "Fortran",
    //   "Groovy",
    //   "Haskell",
    //   "Java",
    //   "JavaScript",
    //   "Lisp",
    //   "Perl",
    //   "PHP",
    //   "Python",
    //   "Ruby",
    //   "Scala",
    //   "Scheme"
    // ];
    	$term = $request->term;
    	$items = Item::where('item','LIKE','%'.$term.'%')->get();

    	if(count($items) == 0)
    	{
    		$searchresult[] = "No Record Found";
    	}
    	else
    	{
    		foreach ($items as $key => $value) {
    			$searchresult[] = $value->item;
    		}
    	}
    	return $searchresult;

    }
}
