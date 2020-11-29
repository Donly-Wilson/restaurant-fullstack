<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\FoodItem;
use App\Models\FoodCategory;
use Illuminate\Http\Request;

class FoodItemsController extends Controller
{
    //Any link using this controller will need to be logged in
    public function __construct()
    {
        $this->middleware('auth');
    }

    //Route for "All Food items" page
    public function index()
    {
        // return 10 item from FoodItem table per page
        $items = FoodItem::paginate(10);

        return view('admin/food-items/all', [
            'items' => $items //passed down items variable to route
        ]);
    }

    public function create()
    {
        $categories = FoodCategory::all();
        return view('admin/food-items/create', [
            'categories' => $categories
        ]);
    }

    public function store()
    {
        //Add validation for new food category info being inputed in table
        request()->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'image_url' => ['nullable', 'string'], //nullable means an empty value can be returned
            'price' => ['required', 'regex:/^\d*(\.\d{2})?$/'], //This regrex validates price with 2 decimals
            'category_id' => ['required', 'integer'],
        ]);

        //This is the formData being requested and added to table
        // return request()->all();
        $item = new FoodItem();
        $item->title = request('title');
        $item->description = request('description');
        $item->image_url = request('image_url');
        $item->price = request('price');
        $item->category_id = request('category_id');
        $item->save();

        return redirect('admin/food-items');
    }

    public function edit($id) // $id created in the route/web.php and pulled from browser's navlink
    {

        //Find food item by id in food-items table and store it in "$item" variable
        $item = FoodItem::find($id);
        $categories = FoodCategory::all();
        return view('admin/food-items/edit', [
            'item' => $item,
            'categories' => $categories
        ]);
    }

    public function update($id) // $id created in the route/web.php and pulled from browser's navlink
    {
        //Add validation for new food category info being inputed in table
        request()->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'image_url' => ['nullable', 'string'], //nullable means an empty value can be returned
            'price' => ['required', 'regex:/^\d*(\.\d{2})?$/'],
            'category_id' => ['required', 'integer'],
        ]);
        // return request()->all();

        //Select food category by id and rename every value
        $item = FoodItem::find($id);
        $item->title = request('title');
        $item->description = request('description');
        $item->image_url = request('image_url');
        $item->price = request('price');
        $item->category_id = request('category_id');
        $item->save();

        return redirect('admin/food-items');
    }

    public function delete($id)
    {
        $item = FoodItem::find($id);
        $item->delete();
        return redirect('admin/food-items');
    }
}
