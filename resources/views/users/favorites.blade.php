@extends('layouts.app')

@section('content')
    <div class="row">
        <aside class="col-sm-4">
            @include('users.card', ['user' => $user])
        </aside>
        <div class="col-sm-8">
            @include('users.navtabs', ['user' => $user])
            <!--お気に入りしたmicropostsを表示させる-->
            @include('microposts.microposts', ['microposts' => $favorite_microposts])
        </div>
    </div>
@endsection