@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row border border-left-0" style="border-radius: 15px">
            <div class="col-8" >
                <img  src="/cms/public/storage/{{$post->image}}" class="w-100 card-image"/>
            </div>

            <div class="col-4">
                <div>
                    <div class="d-flex align-items-center">
                        <div class="pr-3">
                            <img src="{{ $post->user->profile->profileImage() }}" class="rounded-circle w-100" style="max-width: 40px;">
                        </div>
                        <div>
                            <div class="font-weight-bold">
                                <a href="/cms/public/profile/{{ $post->user->id }}">
                                    <span class="text-dark">{{ $post->user->username }}</span>
                                </a>
                                <a href="#" class="pl-3">Follow</a>
                            </div>
                        </div>
                    </div>

                <hr>

            <div class="col-4">

                <p>
                    <span class="font-weight-bold">
                        <a href="/cms/public/profile/{{ $post->user->id }}">
                            <span class="text-dark">{{ $post->user->username }}:</span>
                        </a>
                    </span> {{ $post->caption }}
                </p>
            </div>


                </div>

    </div>
@endsection

