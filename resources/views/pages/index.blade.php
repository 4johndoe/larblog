@extends('layout')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="page-content content--center no-padding-bottom">
                    <div class="page-text no-margin-bottom">
                        <div class="page-text__block acctypes-show-more">
                            <h1 class="text-title page-text--title">
                                АНАЛИТИКА ФОРЕКС
                            </h1>
                            <p class="p-title no-margin-bottom">
                                Аналитика для трейдеров
                            </p>
                        </div>
                    </div>

                    <div class="faq margin-bottom--large">

                        @include('pages._categories')

                        <div class="faq__answers">
                            <div class="sort-icons sort-icons--absolute">
                                <span class="sort-icons__block sort--two"></span>
                                <span class="sort-icons__block sort--one"></span>
                            </div>

                            <div class="posts">
                                @foreach($posts as $post)
                                    <div class="posts__block">
                                        <a href="{{ route('post.show', $post->slug) }}" class="post webinar--post">
                                            <div class="post__image">
                                                <img src="{{ $post->getImage() }}" alt="" width="200">
                                            </div>
                                            <div class="post__date">
                                                {{ $post->getDate() }}
                                            </div>
                                            <div class="text-title text-title--small">
                                                @if($post->hasCategory())
                                                    {{ $post->getCategoryTitle() }}
                                                @endif
                                            </div>
                                            <p class="p-title no-margin-bottom p-title--small">
                                                {!! $post->description !!}
                                            </p>
                                            <p>
                                                Знаменитый трейдер Ларри Вильямс за год превратил $10 000 в $1 100 000. В своей книге «The Definitive Guide to Trading Futures» он пишет: «Управление капиталом — это самая важная глава в этой книге».
                                            </p>

                                            <div class="post-hide"></div>
                                        </a>
                                    </div>
                                @endforeach

                                {{ $posts->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('pages._sidebar')
        </div>
    </div>

@endsection