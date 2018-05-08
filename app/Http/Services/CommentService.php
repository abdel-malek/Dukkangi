<?php
namespace App\Http\Services;

use App\Comment;

class CommentService
{
    public static function loadComments($filter)
    {
        $index = $filter ? $filter['pageIndex'] : 0 ;

        $comments = Comment::select('id', 'description','user_id', 'rate', 'product_id', 'created_at')
      ->with(['product' => function ($query) {
          $query->addSelect('id', 'arabic');
      },
      'user' => function ($query) {
          $query->addSelect('id', 'email');
      }]);

        if (!empty($filter['rate'])) {
            $comments->where('rate', '=', $filter['rate']);
        }

        if (!empty($filter['user']['email'])) {
            $email = $filter['user']['email'];
            $comments->whereHas('user', function ($query) use ($email) {
                $query->where('email', 'like', '%'.$email.'%');
            });
        }

        if (!empty($filter['product']['arabic'])) {
            $product = $filter['product']['arabic'];
            $comments->whereHas('product', function ($query) use ($product) {
                $query->where('arabic', 'like', '%'.$product.'%');
            });
        }

        $comments->OrderBy('id', 'desc');
        $result['total'] = $comments->count();

        $skip = ($index == 1) ? 0 : ($index-1)*10 ;
        $result['data']=$comments->take(10)->skip($skip)->get();

        return $result;
    }
    public static function deleteComment($id){
        $comment = Comment::find($id);
        $comment->delete();
        return 1;
    }
}
