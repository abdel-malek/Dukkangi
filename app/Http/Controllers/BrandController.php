<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\BrandService;
use App\Brand;

class BrandController extends Controller
{
    public function __construct()
    {
        $this->middleware('isadmin');
    }

    public function brandPage(){
      return view('admin.brand.index');
    }

    public function brands(Request $request){
      $filter = $request->input('filter');
      return BrandService::loadBrands($filter);
    }

    public function createBrand(){
      $brand = new Brand();
      return view('admin.brand.create',compact('brand'));
    }

    public function editBrand($id){
      $brand = BrandService::loadById($id);
      return view('admin.brand.create',compact('brand'));
    }

    public function createBrandInfo(Request $request){
      $brand = $request->all();

      //save image
      $brand['image_path'] = '';
      if($request->hasFile('image'))
          $brand['image_path'] = ImageService::saveImage($request->file('image'));

      BrandService::updateCreateBrand($brand);
      return redirect('/admin/brand');
    }

    public function deleteBrand($id){
      return BrandService::deleteBrand($id);
    }
}
