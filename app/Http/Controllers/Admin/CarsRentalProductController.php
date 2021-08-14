<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\models\City;
use App\models\Make;
use App\models\Section;
use App\models\SellType;
use App\models\TypeCategory;
use Illuminate\Http\Request;
use App\models\CarsRentalProduct;
use App\Http\Controllers\Controller;

class CarsRentalProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $products = CarsRentalProduct::get();
        return view('admin.products.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sellType = SellType::get();
        $sections = Section::get();
        $typeCategory = TypeCategory::get();
        $makes = Make::get();
        $cities = City::get();
        $users = User::get();
        return view('admin.carsRentals.create', compact('sellType', 'sections', 'typeCategory', 'makes', 'cities', 'users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fileName = $request->image->getClientOriginalName();
        $file_to_store = time() . '_' . $fileName ;
        $request->image->move(public_path('assets/images/carsRentals'), $file_to_store);
        
        CarsRentalProduct::create([
            'sell_type_id' => $request->sell_type_id,
            'section_id' => $request->section_id,
            'type_category_id' => $request->type_category_id,
            'make_id' => $request->make_id,
            'year' => $request->year,
            'rent_period' => $request->rent_period,
            'city_id' => $request->city_id,
            'district_id' => $request->district_id,
            'price' => $request->price,
            'user_id' =>  $request->user_id,
            'image' => $file_to_store,
        ]);
        return redirect()->route('carsRentals.index')->with('success', 'The Car Rental has created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sellType = SellType::get();
        $sections = Section::get();
        $typeCategory = TypeCategory::get();
        $makes = Make::get();
        $cities = City::get();
        $users = User::get();
        $CarsRental = CarsRentalProduct::find($id);
        return view('admin.carsRentals.edit', compact('sellType', 'sections', 'typeCategory', 'makes', 'cities', 'CarsRental', 'users'));
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
        $CarsRental = CarsRentalProduct::find($id);

        if ($request->image) {
            unlink(public_path('assets/images/carsRentals') .'/' . $CarsRental->image);
            $fileName = $request->image->getClientOriginalName();
            $file_to_store = time() . '_' . $fileName ;
            $request->image->move(public_path('assets/images/carsRentals'), $file_to_store);
        }
        else{
            $file_to_store = $CarsRental->image;
        }

        $CarsRental->update([
            'sell_type_id' => $request->sell_type_id,
            'section_id' => $request->section_id,
            'type_category_id' => $request->type_category_id,
            'make_id' => $request->make_id,
            'year' => $request->year,
            'rent_period' => $request->rent_period,
            'city_id' => $request->city_id,
            'district_id' => $request->district_id,
            'price' => $request->price,
            'user_id' =>  $request->user_id,
            'image' => $file_to_store,
        ]);
        return redirect()->route('carsRentals.index')->with('success', 'The Car Rental has updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $old = CarsRentalProduct::find($id);
        $old->delete();
        return redirect()->route('carsRentals.index')->with('success', 'Deleted successfully');
    }
}
