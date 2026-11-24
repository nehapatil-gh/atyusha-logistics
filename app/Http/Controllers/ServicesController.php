<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class ServicesController extends Controller
{
    private const SERVICE_DESCRIPTION = 'Operationally coordinated service to support your supply chain with clear communication and adaptable execution.';

    public function index(): View
    {
        return view('pages.services', [
            'services' => [
                ['number' => '01', 'title' => 'Full Truck Load (FTL)'],
                ['number' => '02', 'title' => 'Part Truck Load (PTL)'],
                ['number' => '03', 'title' => 'Primary Transportation'],
                ['number' => '04', 'title' => 'Secondary Distribution'],
                ['number' => '05', 'title' => 'Last-Mile Delivery'],
                ['number' => '06', 'title' => 'Reverse Logistics'],
            ],
            'serviceDescription' => self::SERVICE_DESCRIPTION,
        ]);
    }
}
