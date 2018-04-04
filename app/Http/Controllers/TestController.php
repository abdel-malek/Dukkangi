<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\CartService;

class TestController extends Controller
{
  public function loadCart($id)
  {
      return CartService::loadCart($id);
  }
}
