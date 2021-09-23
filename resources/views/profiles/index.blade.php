@extends('layouts.app')


@section('content')

<div class="container">

    <div class="row">
        <div  class="col-3 p-5">
            <img class="rounded-circle w-100" src="{{$user->profile->profileImage()}}">
        </div>
        <div class="col-9 pt-5">
                <div class="d-flex justify-content-between align-items-baseline">
                    <div class="d-flex align-items-center pb-3">
                        <div class="h4">{{$user->username}}</div>

                        <div id="app">
                                <follow-button user-id="{{ $user->id }}" follows="{{ $follows }}"></follow-button>
                        </div>

                    </div>



                    @can('update', $user->profile)
                        <a href="/cms/public/p/create">Add new Post</a>
                    @endcan
                </div>



            @can('update', $user->profile)
            <a href="/cms/public/profile/{{$user->id}}/edit">Edit Profile</a>
            @endcan

            <div class="d-flex">
                <div class="pr-5"><strong>{{ $postCount }}</strong> posts</div>
                <div class="pr-5"><strong>{{ $followersCount }}</strong> followers</div>
                <div class="pr-5"><strong>{{ $followingCount }}</strong> following</div>
            </div>

            <div class="pt-4 font-weight-bold">


                {{ $user->profile->title ?? ""}}
            </div>

                <div>
                    <section>{{$user->profile->description ?? "" }}</section>
                </div>

            <div class="font-weight-bold"> <a href="#"> {{$user->profile->url ?? "" }} </a></div>
        </div>
        </div>
    <div class="row pt-5">
    @foreach($user->posts as $post)

        <div class="col-4 mt-5">
            <a  href="/cms/public/p/{{$post->id}}">
                <img  src="/cms/public/storage/{{$post->image}}" class="w-100"/>
            </a>

        </div>
    @endforeach
    </div>
</div>

</div>
@endsection
