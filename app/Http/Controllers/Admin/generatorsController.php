<?php

namespace App\Http\Controllers\admin;

use App\User;
use App\models\Make;
use App\models\Status;
use App\models\FuelType;
use App\models\SellType;
use Illuminate\Http\Request;
use App\models\admin\Generator;
use App\Http\Controllers\Controller;

class generatorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Generator::where('category_id', 4)->get();
        return view('admin.generators.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sellTypes = SellType::where('category_id', 4)->get();
        $makes = Make::get();
        $users = User::get();
        $statuses = Status::get();
        $fuels = FuelType::get();
        return view('admin.generators.create', compact('fuels', 'sellTypes', 'makes', 'users', 'statuses'));
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

        Generator::create([
            'category_id' => $request->category_id,
            'sell_type_id' => $request->sell_type_id,
            'make_id' => $request->make_id,
            'model' => $request->model,
            'status_id' => $request->status_id,
            'fuel_type_id' => $request->fuel_type_id,
            'country' => $request->country,
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
