<?php 

namespace App\Http\Services; 

use App\User;
use Session;

class UserService {
	public static function loadUserData($filter)
	{	
		$index = $filter ? $filter['pageIndex'] : 0 ; 

		$user = User::select(['id' , 'name', 'email' ,'birth_date','gender']);

		if (!empty($filter['id']))
		{
			$user->where('id' ,'=' , $filter['id']);
		} 

		if (!empty($filter['name']))
		{
			$user->where('name' ,'like' , '%'.$filter['name'].'%' );
		} 
		
		if (!empty($filter['email']))
		{
			$user->where('email' ,'like' , '%'.$filter['email'].'%' );
		} 
		if (!empty($filter['gender']))
		{
			$user->where('gender' ,'like' , '%'.$filter['gender'].'%' );
		}	
		if (!empty($filter['birth_date']))
		{
			$user->where('birth_date' ,'like' , '%'.$filter['birth_date'].'%' );
		}	
		$user->orderBy('id','desc');
		$result['total'] = $user->count();

		$skip = ($index == 1) ? 0 : ($index-1)*10 ;
		$result['data']=$user->take(10)->skip($skip)->get();

		// foreach ($result['data'] as $res) {
			// dd($res->birth_date);
			// $res->birth_date = date_format($res->birth_date,"d:m:Y");
		// }
		return $result;
	}

	public static function deleteUser($id)
	{
		return User::where('id','=',$id)->delete();
	}
	


}
