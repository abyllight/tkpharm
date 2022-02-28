<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Product_i18n;
use App\Models\ProductCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public $languages = ['ru', 'kz', 'en'];

    public function index()
    {
        $products = Product::all();
        return view('admin.products.list', ['products' => $products]);
    }

    public function create(){
        $categories = ProductCategory::all();
        return view('admin.products.create', ['categories' => $categories]);
    }

    public function store(Request $request){
        $request->validate([
            'category' => 'required',
            'title_ru' => 'required',
            'title_kz' => 'required',
            'title_en' => 'required',
            'subtitle_ru' => 'required',
            'subtitle_kz' => 'required',
            'subtitle_en' => 'required',
            'description_ru' => 'required',
            'description_kz' => 'required',
            'description_en' => 'required',
            'image' => 'image|mimes:jpeg,jpg,png|required|max:10000'
        ]);

        $product = new Product();
        $product->product_category_id = $request->category;
        $product->is_active = true;
        $product->link = $request->link;
        $product->image = $request->file('image')->store('products', 'public');
        $product->save();

        foreach ($this->languages as $language){
            $product->i18n()->save(
                new Product_i18n([
                    'locale' => $language,
                    'title' => $request['title_'.$language],
                    'subtitle' => $request['subtitle_'.$language],
                    'description' => $request['description_'.$language],
                    'amount' => $request['amount_'.$language]
                ])
            );
        }

        return redirect('/admin/products')->with(['message' => 'Успешно добавлено', 'alert' => 'alert-success']);
    }

    public function edit($id)
    {
        $product = Product::find($id);
        if (!$product) abort(404);

        $categories = ProductCategory::all();

        return view('admin.products.update', ['product' => $product, 'categories' => $categories]);
    }

    public function update(Request $request, $id){
        $product = Product::find($id);
        if (!$product) abort(404);

        $request->validate([
            'category' => 'required',
            'title_ru' => 'required',
            'title_kz' => 'required',
            'title_en' => 'required',
            'subtitle_ru' => 'required',
            'subtitle_kz' => 'required',
            'subtitle_en' => 'required',
            'description_ru' => 'required',
            'description_kz' => 'required',
            'description_en' => 'required'
        ]);

        if ($request->has('image')){
            $request->validate([
                'image' => 'image|mimes:jpeg,jpg,png|required|max:10000',
            ]);
            Storage::disk('public')->delete($product->image);
            $product->image = $request->file('image')->store('products', 'public');
        }

        $product->product_category_id = $request->category;
        $product->link = $request->link;

        foreach ($product->i18n as $translate){
            foreach ($this->languages as $language) {
                if ($translate->locale === $language){
                    $translate->title = $request['title_' . $language];
                    $translate->subtitle = $request['subtitle_' . $language];
                    $translate->description = $request['description_' . $language];
                    $translate->amount = $request['amount_' . $language];
                    $translate->save();
                }
            }
        }

        $product->save();

        return redirect('/admin/products')->with(['message' => 'Успешно обновлено', 'alert' => 'alert-success']);
    }

    public function activate($id) {
        $product = Product::find($id);
        if (!$product) abort(404);

        $product->is_active = !$product->is_active;
        $product->save();

        return redirect('/admin/products')->with(['message' => 'Статус изменен', 'alert' => 'alert-success']);
    }

    public function destroy($id){
        $product = Product::find($id);
        if (!$product) abort(404);
        Storage::disk('public')->delete($product->image);

        $product->i18n()->delete();
        $product->delete();

        return redirect('/admin/products')->with(['message' => 'Продукт удален', 'alert' => 'alert-success']);
    }
}
