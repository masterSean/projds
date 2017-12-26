<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Admin\VisionMission as VM;
use App\Models\Admin\OfficialsPositions as OP;
use App\Models\Admin\OrganizationsFunctions as OF;
use App\Models\Admin\OrganizationStructure as OS;
use App\Models\Admin\FAQs as FAQ;

class ClientController extends Controller
{
    public function dashboard()
    {
        return view('client.dashboard');
    }

    public function vision_mission()
    {
        return view('client.vision_mission', [ 'data' => VM::all() ]);
    }

    public function organization_functions()
    {
        return view('client.organization_functions', [ 'data' => OF::all() ]);
    }

    public function officials_positions()
    {
        return view('client.officials_positions', [ 'data' => OP::where('primary', true)->first() ]);
    }

    public function faqs()
    {
        return view('client.faqs', [ 'data' => FAQ::all() ]);
    }

    public function organization_structure()
    {
        return view('client.organization_structure', [ 'data' => OS::where('primary', true)->first() ]);
    }
}