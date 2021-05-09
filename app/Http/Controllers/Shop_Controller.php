<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Shop_Controller extends Controller
{
    public function compareview()
    {
        $money = 0;
        $shop = 0;
        $piece_products = [0, 0];
        $amount = [0, 0];
        $datamoney = array(
            'money' => $money,
            'shop' => $shop,
            'piece_products' => $piece_products,
            'amount' => $amount
        );
        return view('shop', $datamoney);
    }
    public function compare(Request $data)
    {
        $money = $data->input('money');
        $piece_products[0] = floor($money / 25);
        if ($piece_products[0] >= 10) {
            $piece_products[0] = floor($money / 20);
            $amount[0] = $money - ($piece_products[0] * 20);
        } else {
            $amount[0] = $money - ($piece_products[0] * 25);
        }


        $piece_products[1] = floor($money / 30);
        $amount[1] = $money - ($piece_products[1] * 30);
        $piece_products[1] = $piece_products[1] + floor($piece_products[1] / 3);


        if ($piece_products[0] > $piece_products[1]) {
            $shop = 1;
        } elseif ($piece_products[0] < $piece_products[1]) {
            $shop = 2;
        } elseif ($piece_products[0] == $piece_products[1]) {
            if ($amount[0] > $amount[1]) {
                $shop = 1;
            } else {
                $shop = 2;
            }
        }
        $datamoney = array(
            'money' => $money,
            'shop' => $shop,
            'piece_products' => $piece_products,
            'amount' => $amount
        );
        return view('shop', $datamoney);
    }
}
