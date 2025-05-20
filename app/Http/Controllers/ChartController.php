<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChartController extends Controller
{
     public function pie()
    {
        $data = [
            'labels' => ['Apel', 'Jeruk', 'Pisang', 'Anggur', 'Mangga'],
            'data' => [30, 25, 20, 15, 10],
            'colors' => ['#ff9999', '#66b3ff', '#99ff99', '#ffcc99', '#c2c2f0']
        ];
        
        return view('charts.pie', compact('data'));
    }
}
