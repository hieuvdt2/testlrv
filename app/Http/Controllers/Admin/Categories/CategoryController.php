<?php

namespace App\Http\Controllers\Admin\Categories;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    protected $categorieModel;
    public function __construct(Categories $categorieModel)
    {
        $this->categorieModel = $categorieModel;
    }

    public function list()
    {
        $categories = $this->categorieModel->get();
        // dd($categories); = console.log()
        // truyen data sang view bang compact
        return view('Admin/Categories/list', compact('categories'));
    }

    public function create()
    {
        return view('Admin/Categories/create');
    }

    public function postCreate(Request $request)
    {
        $data = [
            "name" => $request->name_category,
            "description" => $request->description
        ]; // data
        $this->categorieModel->create($data); // phuong thuc tao moi : create
        
        return redirect()->route('categories.list');
    }
}
