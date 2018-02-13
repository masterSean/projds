<?php

namespace App\Http\Controllers\Admin\CitizenCharter;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Admin\VisionMission as VM;
use App\Models\Logs;

class VisionMission extends Controller
{
    public function store(Request $request)
    {
        $data = VM::updateOrcreate(['name' => $request->name], ['content' => $request->content]);
        Logs::create(['description' => "Added $data->name"]);
        return $data;
    }

    public function show($name)
    {
        return response()->json(VM::where('name', $name)->first()); 
    }

    public function update(Request $request, $id)
    {
        $vm = VM::find($id);
        $vm->fill($request->all());
        $vm->save();
        Logs::create(['description' => "Updated $vm->name"]);

        return redirect()->back();
    }

    public function delete($id)
    {
        $vm = VM::find($id); 
        Logs::create(['description' => "Deleted $vm->name"]);
        $vm->delete();
    }
}
?>
