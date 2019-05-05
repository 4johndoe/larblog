@extends('layout')

@section('content')

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

            <div class="faq__menu">
                <ul class="faq-menu">
                    <li>
                        <div class="faq-menu__category analytics--tab router-link-active">
                            <div>
                                <i class="analytics-icon0"></i>
                            </div>

                            <a href="https://next.gerchikco.com/analytics/fundamental">
                                <span>fundamental</span>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="faq-menu__category analytics--tab ">
                            <div>
                                <i class="analytics-icon1"></i>
                            </div>

                            <a href="https://next.gerchikco.com/analytics/technical">
                                <span>technical</span>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="faq-menu__category analytics--tab ">
                            <div>
                                <i class="analytics-icon2"></i>
                            </div>

                            <a href="https://next.gerchikco.com/analytics/funds">
                                <span>funds</span>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="faq-menu__category analytics--tab ">
                            <div>
                                <i class="analytics-icon3"></i>
                            </div>

                            <a href="https://next.gerchikco.com/analytics/crypto">
                                <span>crypto</span>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="faq-menu__category analytics--tab ">
                            <div>
                                <i class="analytics-icon4"></i>
                            </div>

                            <a href="https://next.gerchikco.com/analytics/oil">
                                <span>oil</span>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>

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
                                    {{ $post->category->title }}
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

@endsection