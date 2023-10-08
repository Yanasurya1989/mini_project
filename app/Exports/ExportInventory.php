<?php

namespace App\Exports;

use App\Models\Inventories_model;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class ExportInventory implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        $inv = Inventories_model::orderBy('name', 'asc')->get();
        return view('backend.inventories.table', ['inv'=>$inv]);
        
    }
}
