<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\models\City;
use App\models\Make;
use App\models\Status;
use App\models\Gearbox;
use App\models\Product;
use App\models\Section;
use App\models\FuelType;
use App\models\SellType;
use App\models\Advandage;
use App\models\Subcategory;
use App\models\TypeCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\District;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $products = Product::where('category_id', 1)->get();
        return view('admin.products.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sellTypes = SellType::where('category_id', 1)->get();
        $sections = Section::get();
        $typeCategories = TypeCategory::get();
        $makes = Make::get();
        $cities = City::get();
        $users = User::get();
        $statuses = Status::get();
        $gearboxes = Gearbox::get();
        $fuels = FuelType::get();
        $advandages = Advandage::get();
        return view('admin.products.create', compact('advandages', 'fuels', 'gearboxes', 'sellTypes', 'sections', 'typeCategories', 'makes', 'cities', 'users', 'statuses'));
    } 

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $x = [];
        for ($i = 0; $i < count($request->images); $i++) {
            $imageName = time() .  $i . '.' . $request->images[$i]->getClientOriginalExtension();
            $x[$i] = $imageName;
            $request->images[$i]->move(public_path('assets/images/products'), $imageName);
        }
        $images = implode('|', $x);
        $advandages = implode('|', $request->advandage_id);

        Product::create([
            'category_id' => $request->category_id,
            // 'subcategory_id' => $request->subcategory_id,
            'sell_type_id' => $request->sell_type_id,
            'section_id' => $request->section_id,
            'type_category_id' => $request->type_category_id,
            'make_id' => $request->make_id,
            'model' => $request->model,
            'status_id' => $request->status_id,
            'year' => $request->year,
            'gearbox_id' => $request->gearbox_id,
            'fuel_type_id' => $request->fuel_type_id,
            'distance' => $request->distance,
            'work_hour' => $request->work_hour,
            'color' => $request->color,
            'payment_method' => $request->payment_method,
            'city_id' => $request->city_id,
            'district_id' => $request->district_id,
            'advandage_id' => $advandages,
            'interior_brush' => $request->interior_brush,
            'interior_color' => $request->interior_color,
            'description' => $request->description,
            'user_id' => $request->user_id,
            'images' => $images,
            'price' => $request->price,
        ]);
        return redirect()->route('products.index')->with('success', 'The product has created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $advandages = Advandage::get();
        $product = Product::find($id);
        return view('admin.products.show', compact('advandages', 'product'));
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sellTypes = SellType::where('category_id', 1)->get();
        $sections = Section::get();
        $typeCategories = TypeCategory::get();
        $makes = Make::get();
        $cities = City::get();
        $users = User::get();
        $statuses = Status::get();
        $gearboxes = Gearbox::get();
        $fuels = FuelType::get();
        $advandages = Advandage::get();
        $product = Product::find($id);
        return view('admin.products.edit', compact('advandages', 'fuels','gearboxes', 'sellTypes', 'sections', 'typeCategories', 'makes', 'cities', 'users', 'product', 'statuses'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::find($id);

        if ($request->images) {
            $x = [];
            for ($i = 0; $i < count($request->images); $i++) {
                $imageName = time() .  $i . '.' . $request->images[$i]->getClientOriginalExtension();
                $x[$i] = $imageName;
                $request->images[$i]->move(public_path('assets/images/products'), $imageName);
            }
            $images = implode('|', $x);
        }
        else{
            $images = $product->images;
        }
        $advandages = implode('|', $request->advandage_id);

        $product->update([
            'category_id' => $request->category_id,
            // 'subcategory_id' => $request->subcategory_id,
            'sell_type_id' => $request->sell_type_id,
            'section_id' => $request->section_id,
            'type_category_id' => $request->type_category_id,
            'make_id' => $request->make_id,
            'model' => $request->model,
            'status_id' => $request->status_id,
            'year' => $request->year,
            'gearbox_id' => $request->gearbox_id,
            'fuel_type_id' => $request->fuel_type_id,
            'distance' => $request->distance,
            'work_hour' => $request->work_hour,
            'color' => $request->color,
            'payment_method' => $request->payment_method,
            'city_id' => $request->city_id,
            'district_id' => $request->district_id,
            'advandage_id' => $advandages,
            'interior_brush' => $request->interior_brush,
            'interior_color' => $request->interior_color,
            'product_type' => $request->product_type,
            'user_id' => $request->user_id,
            'images' => $images,
            'price' => $request->price,
        ]);
        return redirect()->route('products.index')->with('success', 'The product has updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $old = Product::find($id);
        $old->delete();
        return redirect()->route('products.index')->with('success', 'Deleted successfully');
    }

    public function getSections(Request $request)
    {
        $sections = Section::where('sell_type_id', $request->sellTypeId)->get();
        $typeCategories = TypeCategory::where('sell_type_id', $request->sellTypeId)->get();
        $makes = Make::where('sell_type_id', $request->sellTypeId)->get();
        
        return response()->json([
            'sections' =>$sections,
            'typeCategories' => $typeCategories,
            'makes' => $makes,
        ]);
    }

    public function getSectionstest()
    {
        $sections = Section::where('sell_type_id', 1)->get();
        dd($sections);
        // return response()->json($sections);
    }

    public function getDistricts(Request $request)
    {
        $districts = District::where('city_id', $request->cityId)->get();
        return response()->json($districts);
    }
}
