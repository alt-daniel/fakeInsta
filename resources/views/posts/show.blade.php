@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8">
                <img src="/storage/{{ $post->image }}" alt="" class="w-100">
            </div>
            <div class="col-4">
                <div>

                    <div>
                        <img src="{{ $post->user->profile->image }}" alt="" class="w-100">
                    </div>

                    <p>{{ $post->caption }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
