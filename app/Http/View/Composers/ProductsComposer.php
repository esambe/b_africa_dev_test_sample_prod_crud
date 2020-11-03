<?php

namespace App\Http\View\Composers;

use App\Models\Models\Product;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;

class ProductsComposer
{
    public function compose(View $view)
    {
        $view->with('products', Product::with('vendor')->orderBy('title')->where('vendor_id', Auth::user()->id)->paginate(10));
    }
}
