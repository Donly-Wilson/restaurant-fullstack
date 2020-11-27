<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\FoodCategory;
use Illuminate\Http\Request;

class FoodCategoriesController extends Controller
{
    //Any link using this controller will need to be logged in
    public function __construct()
    {
        $this->middleware('auth');
    }

    //Route for "All Food categories" page
    public function index()
    {
        // return 10 category from FoodCategory table per page
        $categories = FoodCategory::paginate(10);

        return view('admin/food-categories/all', [
            'categories' => $categories //passed down categories variable to route
        ]);
    }

    public function create()
    {
        return view('admin/food-categories/create', []);
    }

    public function store()
    {
        // return request()->all();
        $category = new FoodCategory();
        $category->title = request('title');
        $category->description = request('description');
        $category->image_url = request('image_url');
        $category->save();

        return redirect('admin/food-categories');
    }

    public function edit($id) // $id created in the route/web.php and pulled from browser's navlink
    {

        //Find category by id in food-categories table and store it in "$category" variable
        $category = FoodCategory::find($id);
        return view('admin/food-categories/edit', [
            'category' => $category,
        ]);
    }

    public function update($id) // $id created in the route/web.php and pulled from browser's navlink
    {
        //Add validation for new food category info being inputed in table
        request()->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'image_url' => ['required', 'string'],
        ]);

        //Select food category by id and rename every value
        $category = FoodCategory::find($id);
        $category->title = request('title');
        $category->description = request('description');
        $category->image_url = request('image_url');
        $category->save();

        return redirect('admin/food-categories');
    }

    public function delete($id)
    {
        $category = FoodCategory::find($id);
        $category->delete();
        return redirect('admin/food-categories');
    }
}
