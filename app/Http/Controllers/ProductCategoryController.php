<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductCategoriesCollection;
use App\Models\ProductCategory;
use App\Models\ProductCategory_i18n;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ProductCategoryController extends Controller
{
    public $languages = ['ru', 'kz', 'en'];

    public function all(): JsonResponse
    {
        return response()->json(ProductCategoriesCollection::collection(ProductCategory::all()));
    }

    public function index()
    {
        $categories = ProductCategory::all();
        return view('admin.product_categories.list', ['categories' => $categories]);
    }

    public function create(){
        return view('admin.product_categories.create');
    }

    public function store(Request $request){
        $request->validate([
            'title_ru' => 'required',
            'title_kz' => 'required',
            'title_en' => 'required',
        ]);

        $category = new ProductCategory();
        $category->save();

        $category->i18n()->saveMany([
            new ProductCategory_i18n(['locale' => 'ru', 'title' => $request->title_ru]),
            new ProductCategory_i18n(['locale' => 'kz', 'title' => $request->title_kz]),
            new ProductCategory_i18n(['locale' => 'en', 'title' => $request->title_en])
        ]);

        return redirect('/admin/product-categories')->with(['message' => 'Успешно добавлено', 'alert' => 'alert-success']);
    }

    public function edit($id){
        $category = ProductCategory::find($id);
        if (!$category) abort(404);
        return view('admin.product_categories.update', ['category' => $category]);
    }

    public function update(Request $request, $id)
    {
        $category = ProductCategory::find($id);
        if (!$category) abort(404);

        $request->validate([
            'title_ru' => 'required',
            'title_kz' => 'required',
            'title_en' => 'required',
        ]);

        foreach ($category->i18n as $translate){
            foreach ($this->languages as $language) {
                if ($translate->locale === $language){
                    $translate->title = $request['title_' . $language];
                    $translate->save();
                }
            }
        }

        $category->save();

        return redirect('/admin/product-categories')->with(['message' => 'Успешно обновлено', 'alert' => 'alert-success']);
    }

    public function destroy($id){
        $category = ProductCategory::find($id);
        if (!$category) abort(404);

        foreach ($category->products as $product){
            $product->product_category_id = 0;
            $product->save();
        }

        $category->i18n()->delete();
        $category->delete();

        return redirect('/admin/product-categories')->with(['message' => 'Категория удалена', 'alert' => 'alert-success']);
    }
}
