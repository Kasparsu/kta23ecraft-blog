@extends('partials.layout')
@section('title', 'Home')
@section('content')
<div class="container mx-auto">
    {{ $posts->links() }}
    <div class="flex flex-row flex-wrap">
        @foreach ($posts as $post)
            <div class="basis-1/4 mb-2">
                <div class="card bg-base-300 shadow-xl mx-1 h-full">
                    {{-- <figure>
                        <img src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg" alt="Shoes" />
                    </figure> --}}
                    <div class="card-body">
                        <h2 class="card-title">{{$post->title}}</h2>
                        <p>{{$post->snippet}}...</p>
                        <div class="card-actions justify-end">
                            <button class="btn btn-primary">Read More</button>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
