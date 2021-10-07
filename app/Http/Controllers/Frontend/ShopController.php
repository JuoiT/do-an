<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Slide;
use App\Models\Banner;
use App\Models\Blog;
use App\Models\Favorite;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShopController extends Controller
{
    // so luong san pham hien thi
    private $limit = 6;

    public function home()
    {
        // dd(Carbon::now());
        $new_product = Product::orderBy('created_at', 'DESC')->limit(5)->get();
        $category = Category::withCount('products')->get();
        $slide = Slide::where('status', '1')->get();
        $banner_pro = Banner::where('role', '1')->where('status', '1')->get();
        $banner_blog = Banner::where('role', '0')->where('status', '1')->get();
        $sale_product = Product::where('sale_price', '>', '0')->orderByRaw('sale_price / price ASC')->get();
        $sale_cat_pro = Product::all();
        // dd(count($category));
        // for ($i=1; $i < count($new_product); $i++) {

        // }
        return view('frontend.pages.home', compact('new_product', 'category', 'slide', 'banner_pro', 'banner_blog', 'sale_product'));
    }

    public function product()
    {
        $hotProducts = Product::orderBy('created_at', 'DESC')->limit(3)->get();
        $bestSeller = Product::withCount('orderDetails')->orderBy('order_details_count', 'DESC')->limit(3)->get();
        $categories = Category::all();
        return view('frontend.pages.product', compact('categories', 'hotProducts', 'bestSeller'));
    }

    public function filter(Request $request)
    {
        $params = $request->all();
        $params['orderByRole'] = 'desc';
        // Uncomment if want to show only instock product
        // $params['status'] = '1';
        if ($params['orderBy'] == 'price-desc') {
            $params['orderBy'] = 'product_price';
        }
        if ($params['orderBy'] == 'price-asc') {
            $params['orderBy'] = 'product_price';
            $params['orderByRole'] = 'asc';
        }

        $query = Product::filter($params);
        $page = intval($request->page);
        $totalPage = ceil($query->count() / $this->limit);
        $offset = ($page - 1) * $this->limit;
        $products = $query->with('category')->limit($this->limit)->offset($offset)->get();

        return view('frontend.pages.ajax.shop-products', compact('products', 'page', 'totalPage'));
    }

    public function detail()
    {
        return view('frontend.pages.detail');
    }

    public function cart()
    {
        return view('frontend.pages.cart');
    }

    public function checkout()
    {
        return view('frontend.pages.checkout');
    }

    public function whishlist()
    {
        return view('frontend.pages.whishlist');
    }

    public function register()
    {
        return view('frontend.pages.register');
    }

    public function login()
    {
        return view('frontend.pages.login');
    }

    public function blog()
    {
        $list_blog = Blog::orderBy('created_at', 'ASC')->paginate(config("const.record"));
        $new_blog = Blog::orderBy('created_at', 'ASC')->limit(3)->get();
        return view('frontend.pages.blog', compact('list_blog', 'new_blog'));
    }

    public function blog_detail($id)
    {
        $blog_detail = Blog::find($id);
        $new_blog = Blog::orderBy('created_at', 'ASC')->limit(3)->get();
        return view('frontend.pages.blog-detail', compact('blog_detail', 'new_blog'));
    }

    public function contact()
    {
        return view('frontend.pages.contact');
    }
}
