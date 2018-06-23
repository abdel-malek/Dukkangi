<?php
namespace App\Http\Services;
use App\Brand;
use App\Product;
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

  public static function brandProducts($filter , $id) {
    $index = $filter ? $filter['pageIndex'] : 1;
    $products = Product::where('brand_id','=',$id);
    // add Filter
    $products->orderBy('id', 'desc');
    $result['total'] = $products->count();

    $skip = $index == 1 ? 0 : (($index -1) * 10);
    $result['data'] = $products->take(10)->skip($skip)->get();
    return $result; 
  }


  public static function autoComplete($request){
        $brands = Brand::select('id','english')->where('english' , 'like' , '%'.$request->text.'%')->limit(6)->get();
            //Arabic
        $comp = Brand::select('id','arabic','english')->where('arabic' , 'like' , '%'.$request->text.'%')->limit(6)->get();
        foreach ($comp as $c) {
            $c->english = $c->arabic;
            self::addNoRedundancy($brands,$c);
        }   
            //German
        $comp = Brand::select('id','german','english')->where('german' , 'like' , '%'.$request->text.'%')->limit(6)->get();
        foreach ($comp as $c) {
            $c->english = $c->german;
            self::addNoRedundancy($brands,$c);
        }       
    
            //Turkish
        $comp = Brand::select('id','turky','english')->where('turky' , 'like' , '%'.$request->text.'%')->limit(6)->get();
        foreach ($comp as $c) {
            $c->english = $c->turky;
            self::addNoRedundancy($brands,$c);
        }
            //Kurdi
        $comp = Brand::select('id','kurdi','english')->where('kurdi' , 'like' , '%'.$request->text.'%')->limit(6)->get();
        foreach ($comp as $c) {
            $c->english = $c->kurdi;
            self::addNoRedundancy($brands,$c);        
        }
        foreach ($brands as $p) {
                $p->type = 'br';
        }   
        return $brands;
    }
    private static function addNoRedundancy($arr , $obj){
        foreach ($arr as $a) {
            if($a->id == $obj->id )
                return ;
        }
        $arr->push($obj);
        return ;
    }
}

?>
