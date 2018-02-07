<?php

namespace App\Http\Controllers\Admin\CitizenCharter;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Admin\OrganizationsFunctions as OF;
use App\Models\Logs;

class OrganizationFunctions extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $organization_functions = OF::create($request->all());
        Logs::create(['description' => "Added $organization_functions->name"]);
        return $organization_funtions; 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return response()->json(OF::all());
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
        $of = OF::find($id);
        $of->fill($request->all());
        $of->save();
        Logs::create(['description' => "$of->name has been updated"]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $of = OF::find($id)
        Logs::create(['description' => "$of->name has been deleted"]);
        $of->delete();
    }
}
?>
