<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\User;
use \App\Article;
use \App\Category;
class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        //
        $article= Article::where('user_id',$id)->get();
        return view ('blog',['article'=>$article]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function createform($id){

        $cat = Category::all();
        $user = User::find($id);
        return view('createblog',['user'=>$user,'category'=>$cat]);

     }
    public function create($id,Request $request){
        
        $this->validate($request,[    		
            'title' => 'required',
            'category_id' => 'required',
            'description' => 'required',
            'image' => 'required'
        ]);

        Article::create([
            'title' => $request->title,            
            'description' => $request->description,
            'user_id' => $id,
            'image' => $request->image,
            'category_id' => $request->category_id
        ]);
        return redirect('/');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $blog = Article::find($id);
        $blog->delete();
        return redirect('/');


    }
}
