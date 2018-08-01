<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as BaseVerifier;

class VerifyCsrfToken extends BaseVerifier
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
    	'categories',
    	'categorytosub',
    	'/rate',
      'comment-save',
      '/admin/products/store',
      'categoryfilter',
      'stripe',
      'paypal',
      '/admin/coupons',
      '/admin/coupon',
      '/changeqty',
      '/getreview',
      '/admin-login',
      '/review',
      '/get-income'
    ];
}
