@extends('layouts.app')

@section('content')
    <div class="container">
        @foreach($posts as $post)
            <div class="row">
                <div class="col-6 offset-3">
                    <a href="/cms/public/profile/{{ $post->user->id }}">
                        <img src="/cms/public/storage/{{ $post->image }}" class="w-100">
                    </a>
                </div>
            </div>
            <div class="row pt-2 pb-4">
                <div class="col-6 offset-3 ">
                    <div>
                        <p>
                    <span class="font-weight-bold pr-2 ml-2">
                        <img src="{{$post->user->profile->profileImage()}}" class="rounded-circle" width="50px" height="50px"/>
                        <a href="/cms/public/profile/{{ $post->user->id }}">
                            <span class="text-dark">{{ $post->user->username }}</span>

                        </a>

                    </span> {{ $post->caption }}
                        <hr>
                    </div>
                </div>
            </div>

        @endforeach

        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                {{$posts->links("pagination::bootstrap-4")}}
            </div>
        </div>
    </div>
@endsection
