<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Admin\OrganizationStructure as OS;
use File;
use Carbon\Carbon;
use Storage;

class OrganizationStructure extends Controller
{
    public function index()
    {
        return view('admin.organization_structure');
    }

    public function store(Request $request)
    {
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $file_name = $file->getClientOriginalName();
            $file_extension = $file->getClientOriginalExtension();
            $file_path = md5($file_name) . "." . $file_extension;
            $data = [
                "name"      => Carbon::now()->toDateString(), 
                "file_path" => $file_path,
                "primary"   => false,
            ];

            Storage::disk('public')->put($file_path, $file);

            $os = OS::create($data);

            return $os;
        }
    }

    public function update(Request $request, $id)
    {
        $os = OS::find($id);
        $os->primary = true;
        $os->save();

        $files = OS::where('id', '!=', $id)->get();
        
        foreach ($files as $file) {
            $file->primary = false;
            $file->save();
        }
    }

    public function show($id)
    {
        $data = OS::all();
        
        foreach ($data as $key => $file) {
            $file['path'] = storage_path('app/public' . $file->file_path);
        }

        return response()->json($data);
    }
}
