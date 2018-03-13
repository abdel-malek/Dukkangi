<?php 

namespace App\Http\Services; 

use App\User;
use Session;

class UserService {
	public static function loadUserData($filter)
	{	
		$index = $filter ? $filter['pageIndex'] : 0 ; 

		$user = User::select(['id' , 'name', 'email']);

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
		$user->orderBy('id','desc');
		$result['total'] = $user->count();

		$skip = ($index == 1) ? 0 : ($index-1)*10 ;
		$result['data']=$user->take(10)->skip($skip)->get();

		return $result;
	}

	public static function deleteUser($id)
	{
		return User::where('id','=',$id)->delete();
	}
	


}
