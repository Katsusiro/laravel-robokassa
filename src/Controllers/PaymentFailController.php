<?php

namespace Chelout\Robokassa\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PaymentFailController extends Controller
{
    public function __invoke(Request $request)
    {

        return $request->all();
    }
}