<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
   public function food()
   {
      return view('food', ['foods' => ['Bakso', 'Mie Ayam', 'Ceker Mercon', 'Air mineral', 'Es teh', 'Es jeruk']]);
   }
   public function beauty()
   {
      return view('beauty', ['beauty' => ['Face wash', 'Moisturizer', 'Serum', 'Essence', 'Toner']]);
   }
   public function homecare()
   {
      return view('homecare', ['homecare' => ['Shampo', 'Sunlight', 'Molto', 'Super pell', 'Sabun Citra']]);
   }
   public function babykid()
   {
      return view('babykid', ['babykid' => ['Zwitsal','Pigeon kid','Cusson', 'MyBaby', 'Johnson']]);
   }
}
