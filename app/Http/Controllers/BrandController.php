<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\BrandService;
use App\Brand;
use App\Http\Services\ImageService;


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
      if($request->hasFile('image_path'))
          $brand['image_path'] = ImageService::saveImage($request->file('image_path'));
        
      BrandService::updateCreateBrand($brand);
      return redirect('/admin/brand');
    }

    public function deleteBrand($id){
      return BrandService::deleteBrand($id);
    }
    public function BrandProducts($id){
      return view('admin.brand.products')->withId($id);
    }
    public function getBrandProducts(Request $request,$id){
      $filter = $request->input('filter');
      return BrandService::brandProducts($filter,$id);
    }
}
