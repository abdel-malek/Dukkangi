<?php
namespace App\Http\Services;
use App\Brand;

class BrandService{

  public static function loadBrands($filter){
    $index = $filter ? $filter['pageIndex'] : 1;
    $brands = Brand::select(['id', 'arabic']);

    // add Filter
    $brands->orderBy('id', 'desc');
    $result['total'] = $brands->count();

    $skip = $index == 1 ? 0 : (($index -1) * 10);
    $result['data'] = $brands->take(10)->skip($skip)->get();
    return $result;
  }

  public static function loadById($id){
    return Brand::find($id);
  }

  public static function deleteBrand($id){
    return Brand::where('id','=',$id)->delete();
  }

  public static function updateCreateBrand($brand){
    return Brand::updateOrCreate(['id'=>$brand['id']],
    ['english' => $brand['english'],'arabic' => $brand['arabic'],
    'german' => $brand['german'],'kurdi' => $brand['kurdi'],
    'turky' => $brand['turky'],'image_path' => $brand['image_path']]);
  }
}

?>
