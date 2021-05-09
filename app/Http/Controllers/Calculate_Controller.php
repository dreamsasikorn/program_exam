<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Calculate_Controller extends Controller
{
    public function index()
    {
        return view('welcome');
    }
    public function calculate(Request $data)
    {
        $priceproducts = $data->input('priceproducts');
        $amount = $data->input('amount');
        $total = $amount - $priceproducts;
        $totalback = $total;

        $money  = [500, 100, 50, 20, 10, 5, 1];
        $cashback = [];
        for ($i = 0; $i < count($money); $i++) {
            $cashback[$i] = floor($total / $money[$i]);
            $total = $total % $money[$i];
        }
        $datamoney = array(
            'cashback' => $cashback,
            'totalback' => $totalback,
            'priceproducts' => $priceproducts,
            'amount' => $amount
        );
        return view('cash', $datamoney);
    }

    public function cashview()
    {
        $totalback = 0;
        $priceproducts = 0;
        $amount = 0;
        $cashback =  [0, 0, 0, 0, 0, 0, 0];
        $datamoney = array(
            'cashback' => $cashback,
            'totalback' => $totalback,
            'priceproducts' => $priceproducts,
            'amount' => $amount
        );
        return view('cash', $datamoney);
    }
}
