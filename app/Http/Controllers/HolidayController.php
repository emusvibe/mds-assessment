<?php

namespace App\Http\Controllers;
use PDF;
use App\Holiday;
use Illuminate\Http\Request;

class HolidayController extends Controller
{
    public function index()
    {
        return view('index');
    }
    
    
    public function fetch()
    {
        $holidays = Holiday::all();
        return view('holidays', compact('holidays'));
        dd($holidays);
    }

    public function downloadPDF()
    {
        $holidays = Holiday::all();       
        $pdf = PDF::loadView('holidays', compact('holidays'));
        return $pdf->download('holidays.pdf');
        
    } 
}
