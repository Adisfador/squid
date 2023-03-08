<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\NewsModel;
use App\Http\Requests\Admin\PostFormRequest;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = NewsModel::orderBy('time', 'DESC')->paginate(8);
        return view("admin.posts.index", compact("data"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.posts.create", []);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostFormRequest $request)
    {




        $chek = $request->validated();
        foreach ($request->file("Img") as $file) {
            $file->storeAs("public/img/innerImg", $file->getClientOriginalName());
        }

        if ($request->has("mainImg")) {
            $mainImg = str_replace("public/img", "", $request->file("mainImg")->storeAs("public/img", $request["mainImg"]->getClientOriginalName()));

            $chek["mainImg"] = "img" . $mainImg;
        }
        $chek["titleUrl"] = Str::slug($chek["title"], '_');

        NewsModel::create($chek);
        return redirect(route("admin.posts.index"));
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
    // public function edit( NewsModel $data)
    // {
    //     return view("admin.posts.create", [
    //         "data" => $data,
    //     ]);
    // }
    public function edit($id)
    {
        $data = NewsModel::find($id);
        return view("admin.posts.create", [
            "data" => $data,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PostFormRequest $request, $id)
    {
        $data = NewsModel::find($id);


        $chek = $request->validated();
        foreach ($request->file("Img") as $file) {
            $file->storeAs("public/img/innerImg", $file->getClientOriginalName());
        }
        if ($request->has("mainImg")) {

            $mainImg = str_replace("public/img", "", $request->file("mainImg")->storeAs("public/img", str_replace("img/", "", $data["mainImg"])));

            $chek["mainImg"] = "img" . $mainImg;
        }
        $chek["titleUrl"] = Str::slug($chek["title"], '_');

        $data->update($chek);

        return redirect(route("admin.posts.index"));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(NewsModel $post)
    {
        $post->delete();

        return redirect(route("admin.posts.index"));
    }

    public function search(Request $request)
    {
        $filter = $request->text;

        $data = NewsModel::where("title", 'LIKE', '%' . $filter . '%')->orderBy('time', 'DESC')->paginate(10);

        return view("admin.adminSearch", ['data' => $data, 'filter' => $filter]);
    }
}
