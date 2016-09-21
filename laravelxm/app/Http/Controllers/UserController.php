<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class UserController extends Controller
{
    //
    public function index(){
    	// return 'Hello Index';
    	$list = \DB::table('user')->get();
    	// var_dump($list);
    	// dd($list); == var_dump($list);die();
        // var_dump($_SERVER["REDIRECT_URL"]);
            // var_dump($_GET);
    	return view('user.index',['list'=>$list]);
    }

    // public function show($id = ''){
    // 	return '详情'.$id;
    // }
    public function destroy($id){
    	// return '删除'.$id;
    	$m = \DB::table('user')->where('id','=',$id)->delete();
    	// var_dump($m);
    	if($m>0){
    		return $this->index();
    	}
    }
    // public function show($id)
    // {
    //     // dd($id);
    //     $user = \DB::table('user')->where('id','=',$id)->first();
    //     return view('user.edit',['user'=>$user,'id'=>$id]);
    // }
   
    // 修改
    public function edit($id)
    {
        // dd($id);
        $user = \DB::table('user')->where('id','=',$id)->first(); 
        return view('user.edit',['user'=>$user,'id'=>$id]);
    }
    public function update($id,Request $request)
    {   
        // dd($request);
        // echo '<pre>';
        // var_dump($request->input);
        $name = $request->input('name');
        $age = $request->input('age');
        $sex = $request->input('sex');
        // $idd=$_POST['id'];

        $m= \DB::table('user')->where('id','=',$id)->update(array('name'=>$name,'age'=>$age,'sex'=>$sex));
        if($m>0){
            return $this->index();
        }
    }
    // 添加
    public function create()
    {
        return view('user.create');
    }

     public function store(Request $request)
    {   
        // var_dump($_POST);
        // $name=$_POST['name'];
        // $age=$_POST['age'];
        // $sex=$_POST['sex'];
        // dd($request);
        
        $name=$request->input('name');
        $age=$request->input('age');
        $sex=$request->input('sex');
        
        $m = \DB::table('user')->insert(array('name'=>$name,'age'=>$age,'sex'=>$sex));
        if($m>0){
            // return '添加成功';
            return $this->index();

        }
    }
   
}
