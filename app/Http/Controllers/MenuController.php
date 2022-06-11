<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
   
    public function index()
    {
        return view('menu.list' , ["menus" => Menu::all()]);
    }

    public function create()
    {
       
       return view('menu.create');
    }

    public function store(Request $request , $id)
    {
       $data =  $request->all(); //["title" => "Pizza margarita" , "ingredient" => "Tomate x oignon" , "price" =>  12];
       if($id == 0)
          Menu::create($data);
       else{

            $menu = Menu::find($id);

            $menu -> update($data);
       }
         

       return redirect('/menus/list');

    }

    public function show(Menu $menu)
    {
       
    }

   
    public function edit($id)
    {
        
        $menu = $id == 0 ? ["id" => 0 , "title" => "" , "ingredient" => "" , "price" => ""] : Menu::find($id);
        
        if(empty($menu))
            $menu = ["id" => 0 , "title" => "" , "ingredient" => "" , "price" => ""] ;

        return view('menu.edit', $menu);
    }

  
    public function update(Request $request, $id)
    {
      
        
    }

   
    public function destroy(Menu $menu)
    {
       
    }
}
