<?php

namespace App\Http\Controllers;

use App\Product;
use App\Website;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'link' => 'required|url',
        ]);

        $link = $request->link;
        $domain = $this->getDomain($link);

        $website = Website::where('domain', '=', $domain)->first();

        if ($website === null) {
            return redirect()->back()->with('error','This website is missing in database ');
        }else{
            $website_id=$website->id;

            $product = Product::create(['website_id' => $website_id, 'link' => $link]);
            $user = Auth::user();
            $product->users()->attach($user);
            return redirect()->route('dashboard')
                ->with('success','Product created successfully.');
        }


    }

    /**
     * Display the specified resource.
     *
     * @param Product $product
     * @return Response
     */
    public function show(Product $product)
    {
        $get_data = $this->scrape_data()->content();
        $data = json_decode($get_data, true);
        //dd($data);
        return view('products.single_product', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Product $product
     * @return Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Product $product
     * @return Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Product $product
     * @return Response
     */
    public function destroy(Product $product)
    {
        //
    }
    public function getDomain($link)
    {
        return parse_url($link, PHP_URL_HOST);
    }
}
