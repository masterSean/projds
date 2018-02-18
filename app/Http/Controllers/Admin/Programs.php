<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Programs as ProgramsModel;

class Programs extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.programs');
    }

    public function show($param)
    {
        return ProgramsModel::all();
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

        return ProgramsModel::create($data);
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
        $program = ProgramsModel::find($id);
        $data = $request->only(['title', 'description']);

        if ($request->hasFile('image')) {
            $data['image'] = $this->uploadImage($request->file('image'));
        }

        $program->fill($data);

        $program->save(); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $program = ProgramsModel::find($id);
        $program->delete();
    }

    /**
     * Upload Image
     */
    private function uploadImage($file)
    {
        $file_name = $file->getClientOriginalName();
        $file_ext = $file->getClientOriginalExtension();
        $image_name = md5($file_name) . "." . $file_ext;

        $file->storeAs('programs', $image_name, 'public');

        return $image_name;
    }
}
?>
