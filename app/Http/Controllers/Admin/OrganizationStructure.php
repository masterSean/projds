<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Admin\OrganizationStructure as OS;
use App\Models\Logs;
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
            $image_name = md5($file_name) . "." . $file_extension;
            
            $primary = OS::where('primary', true)->first();

            $data = [
                "name"      => 'Organization_Structure-' . Carbon::now()->toDateString(), 
                "file_path" => $image_name,
                "primary"   => $primary === null,
            ];

            $request->file('image')->storeAs('organization_structure', $image_name, 'public');

            $os = OS::create($data);
            Logs::create(["description" => 'Uploaded file for organization structure.']);
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
        Logs::create(["description" => "$file->name has been uploaded and saved."]);
    }

    public function destroy($id)
    {
        $data = OS::find($id);
        Storage::disk('public')->delete('organization_structure/' . $data->file_path);
        Logs::create(["description" => "$data->name has been deleted."]);
        $data->delete();
    }

    public function show($id)
    {
        $data = OS::all();
        return response()->json($data);
    }
}
?>
