<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\News as NewsModel;

class News extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.news', ['news' => NewsModel::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->only(['title', 'description']);

        if ($request->hasFile('image')) {
            $data['image'] = $this->uploadImage($request->file('image'));
        }

        return NewsModel::create($data);
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
        $news = NewsModel::find($id);
        $data = $request->only(['title', 'description']);

        if ($request->hasFile('image')) {
            Storage::disk('public')->delete('news/' . $news->image);
            $data['image'] = $this->uploadImage($request->file('image'));
            $news->file($data);
        }

        $news->update($data); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $news = NewsModel::find($id);
        Storage::disk('public')->delete('news/' . $news->image);
        $news->delete();
    }

    /**
     * Upload Image
     */
    private function uploadImage($file)
    {
        $file_name = $file->getClientOriginalName();
        $file_ext = $file->getClientOriginalExtension();
        $image_name = md5($file_name) . "." . $file_ext;

        $file->storeAs('news', $image_name, 'public');

        return $image_name;
    }
}
?>
