<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Add_Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class AddMenuController extends Controller
{
    private $root = 'backend.pages.';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view($this->root.'available_foods.layout');
    }

    public function menuList(Request $request)
    {
        $limit = $request->limit;
        $page = $request->page;
        $offset = ($limit * ($page - 1));
        $menu = Add_Menu::offset($offset)->limit($limit)->get();
        $total = Add_Menu::count();
        $data = [
            'total' => $total,
            'limit' => $limit,
            'data' => $menu,
            'status' => 'ok',
            'code' => 200
        ];
        return response()->json($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view($this->root.'addMenu');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        $validator = Validator::make($request->all(),[
            'category' => 'required',
            'title' => 'required',
            'price' => 'required',
            'code' => 'required',
        ]);
        if($validator->fails()){
            $data = [
                'data' => $validator->errors(),
                'error' => true,
                'code' => 500
            ];
            return response()->json($data);
        }

        $menu = new Add_Menu();
        $menu->category = json_encode($request->category);
        $menu->subtitle = $request->subtitle;
        $menu->title = $request->title;
        $menu->price = $request->price;
        $menu->food_code = $request->code;
        //menu image
        if ($request->image) {
            $image_name = 'image' . '-' . time() . '.' . $request->image->getClientOriginalExtension();
            $path = $request->image->storeAs('public/menu', $image_name);
            $menu->image = $image_name;
        }
        else{
            $menu->image = 0;
        }
        //menu save
        if($menu->save()){
            $data = [
                'data' => $menu,
                'status' => 'ok',
                'code' => 201
            ];
        }else{
            $data = [
                'data' => $menu,
                'status' => 'error',
                'code' => 500
            ];
        }
        return response()->json($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Backend\Add_Menu  $add_Menu
     * @return \Illuminate\Http\Response
     */
    public function show(Add_Menu $add_Menu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Backend\Add_Menu  $add_Menu
     * @return \Illuminate\Http\Response
     */
    public function edit(Add_Menu $add_Menu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Backend\Add_Menu  $add_Menu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Add_Menu $add_Menu)
    {
        //
    }

    public function updateStatus(Request $request, $id)
    {
        //dd($id);
        $menu = Add_Menu::find($id);
        $menu->status = $request->status;
        if($menu->update()){
            $data = [
                'data' => $menu,
                'status' => 'ok',
                'code' => 201
            ];
        }else{
            $data = [
                'data' => $menu,
                'status' => 'error',
                'code' => 500
            ];
        }
        return response()->json($data);
    }

    public function updateALLStatus(Request $request, $category)
    {
        if($menu = Add_Menu::where('category', 'like', '%'.$category.'%')->update(['status' => $request->status])){
            $data = [
                'data' => $menu,
                'status' => 'ok',
                'code' => 201
            ];
        }else{
            $data = [
                'data' => $menu,
                'status' => 'error',
                'code' => 500
            ];
        }
        return response()->json($data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Backend\Add_Menu  $add_Menu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Add_Menu $add_Menu)
    {
        //
    }
}
