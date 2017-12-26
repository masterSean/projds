<?php

namespace App\Http\Controllers\Admin\CitizenCharter;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Admin\OfficialsPositions as OP;
use Carbon\Carbon;
use Storage;

class OfficialsPositions extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $file_name = $file->getClientOriginalName();
            $file_ext = $file->getClientOriginalExtension();
            $disk_name = md5($file_name) . "." . $file_ext;

            $request->file('image')->storeAs('offcials_positions', $disk_name, 'public');

            $op = OP::create([
                "name" => "Officials_&_KeyPositions-" . Carbon::now()->toDateString(),
                "disk_name" => $disk_name,
                "primary" => (OP::where('primary', true)->first() === null),
            ]);

            return $op;
        }
    }

    public function update(Request $request, $id)
    {
        $op = OP::find($id);
        $op->primary = true;
        $op->save();

        $files = OP::where('id', '!=', $id)->get();

        foreach ($files as $file) {
            $file->primary = false;
            $file->save();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return OP::all();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $file = OP::find($id);
        
        Storage::disk('public')->delete('officials_positions/' . $file->disk_name);
        
        $file->delete();
    }
}
