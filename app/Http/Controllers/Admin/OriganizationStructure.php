<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\OriganizationStructure as OS;
use File;
use Carbon\Carbon;
use Storage;

class OriganizationStructure extends Controller
{
    public function index()
    {
        return response()->json(OS::all());
    }

    public function store(Request $request)
    {
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $file_name = $file->getClientOriginalName();
            $file_extension = File::extension($file);
            $file_path = md5($file_name) . "." . $file_extension;
            $data = [
                "name"      => Carbon::now()->toDateString(), 
                "file_path" => $file_path,
                "primary"   => false,
            ];

            Storage::disk('local')->put($file_path, $file);

            $os = OS::create($data);

            return $os
        }
    }

    public function update(Request $request, $id)
    {
        $os = OS::find($id);
        $os->primary = true;
        $os->save();
    }
}
