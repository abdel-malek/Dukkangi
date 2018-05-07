@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if(Auth::check()) 
                    You Are Logged in! 
                    @else 
                    You Are Not Logged in!
                    @endif 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<!--php -r 'file_get_contents("http://packagist.org/p/symfony/debug%248cc5da2b3479cd136997d6a73a5ce7fee0e7126963131b5ddfe6c0e68232d9a8.json")';-->

<!-- $ php -r "file_get_contents('http://packagist.org/p/provider-archived%24795f9e1158fa74844fc0381151acdcf3befcbda8c98f0d8eb633e1e7e734eb8d.json');" -->