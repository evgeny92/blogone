@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">

                <div class="panel panel-default">
                    <div class="panel-heading">Post View</div>

                    <div class="panel-body">
                        <div class="col-md-4">
                            <ul class="list-group">
                                @if(count($categories) > 0)
                                    @foreach($categories->all() as $category)
                                        <li class="list-group-item"><a href="{{ url("category/{$category->id}") }}">{{ $category->category }}</a></li>
                                    @endforeach
                                @else
                                    <p>No Category Found</p>
                                @endif

                            </ul>
                        </div>
                        <div class="col-md-8">
                            @if(count($posts) > 0)
                                @foreach($posts->all() as $post)
                                    <h4>{{ $post->post_title }}</h4>
                                    <img class="img-rounded img-responsive" src="{{ $post->post_image }}" alt="">
                                    <p>{{ substr($post->post_body, 0, 150) }}</p>

                                @endforeach
                            @else
                                <p>No Post Available</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
