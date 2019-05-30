<?php

namespace App\Http\Controllers;

use App\Http\ViewModels\Merchant\ShowViewModel;
use App\Models\Merchant;
use Illuminate\Http\Request;

class MerchantController extends Controller
{
    public function show(Request $request, Merchant $merchant)
    {
        return new ShowViewModel($merchant);
    }
}
