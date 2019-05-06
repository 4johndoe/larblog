@extends('layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <!-- Content (start) -->
                <div class="page-content content--center no-padding-bottom">

                    @include('admin._partials.flash')

                    <div class="faq margin-bottom--large">
                        <div class="faq__answers all--width">
                            <div class="post-open margin-bottom--large">
                                <div class="analytics-title margin-bottom">
                                    <div class="analytics-title__text">
                                        <div class="text-title page-text--title text-title--small no-margin-bottom">
                                            @if($post->hasCategory())
                                                {{ $post->getCategoryTitle() }}
                                            @endif
                                        </div>
                                    </div>

                                    <div class="analytics-title__date">
                                        {{ $post->getDate() }}
                                    </div>
                                </div>

                                <p class="p-title margin-bottom p-title-small">
                                    {{ $post->title }}
                                </p>

                                <div class="text-flex margin-bottom--large text-flex--analytics">
                                    <div class="text-flex__block">
                                        <img src="{{ $post->getImage() }}" alt="" width="200">
                                    </div>
                                    <div class="text-flex__block">
                                        <p>Знаменитый трейдер Ларри Вильямс за год превратил $10 000 в $1 100 000. В своей книге «The Definitive Guide to Trading Futures» он пишет: «Управление капиталом — это самая важная глава в этой книге».</p>
                                    </div>
                                </div>

                                {!! $post->content !!}

                                <div class="decoration">
                                    @foreach($post->tags as $tag)
                                        <a href="{{ route('tag.show', $tag->slug) }}">#{{ $tag->title }}</a>
                                    @endforeach
                                </div>

                                <div class="author">
                                    <span>By {{ $post->author->name }} at {{ $post->getDate() }}</span>
                                </div>

                                <div class="button-center button-center--open-account">
                                    <a href="#" class="button button--blue">Перейти в Личный кабинет</a>
                                </div>

                                <div class="speaker-bottom margin-bottom-small">
                                    <ul class="social-small">
                                        <li><a href="#"><img src="/images/webinar/social/fb-small.svg" alt="logo"></a></li>
                                        <li><a href="#"><img src="/images/webinar/social/in-small.svg" alt="logo"></a></li>
                                        <li><a href="#"><img src="/images/webinar/social/yt-small.svg" alt="logo"></a></li>
                                        <li><a href="#"><img src="/images/webinar/social/tg-small.svg" alt="logo"></a></li>
                                        <li><a href="#"><img src="/images/webinar/social/vk-small.svg" alt="logo"></a></li>
                                        <li><a href="#"><img src="/images/webinar/social/tw-small.svg" alt="logo"></a></li>
                                    </ul>

                                    <router-link class="normal-link" :to="{ name: 'list-analytics' }">< Назад</router-link>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    @if($post->hasPrevious())
                                        <div class="single-blog-box">
                                            <a href="{{ route('post.show', $post->getPrevious()->slug) }}">
                                                <img src="{{ $post->getPrevious()->getImage() }}" alt="" width="150">
                                                <div class="overlay">
                                                    <div class="promo-text">
                                                        <p><i class="pull-left fa fa-angle-left"></i></p>
                                                        <h5>{{ $post->getPrevious()->title }}</h5>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    @endif
                                </div>
                                <div class="col-md-6">
                                    @if($post->hasNext())
                                        <div class="single-blog-box">
                                            <a href="{{ route('post.show', $post->getNext()->slug) }}">
                                                <img src="{{ $post->getNext()->getImage() }}" alt="" width="150">
                                                <div class="overlay">
                                                    <div class="promo-text">
                                                        <p><i class="pull-left fa fa-angle-left"></i></p>
                                                        <h5>{{ $post->getNext()->title }}</h5>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    @endif
                                </div>
                            </div><!-- .row -->

                            <div class="related-post-carousel">
                                <div class="related-heading">
                                    <h4>Похожие статьи</h4>
                                </div>
                                <div class="items">
                                    @foreach($post->related() as $item)
                                        <div class="single-item">
                                            <a href="{{ route('post.show', $item->slug) }}">
                                                <img src="{{ $item->getImage() }}" alt="" width="200">
                                                <p>{{ $item->title }}</p>
                                            </a>
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                            @if(!$post->getComments()->isEmpty())
                                <div class="text-title page-text--title margin-bottom">
                                    КОММЕНТАРИИ
                                </div>

                                @foreach($post->getComments() as $comment)
                                    <div class="comment-block margin-bottom">
                                        <div class="comment-block__title no-margin-bottom">
                                            <img src="{{ $comment->author->getImage() }}" alt="" width="30">
                                            {{ $comment->author->name }}
                                        </div>

                                        <p class="comment-text">
                                            {{ $comment->text }}
                                        </p>

                                        <p class="comment-date">
                                            {{ $comment->created_at->diffForHumans() }}
                                        </p>

                                    </div>
                                @endforeach

                            @endif
                        </div>
                    </div>

                    @if(Auth::check())
                        <div class="text-title text-title--center margin-bottom">
                            КОММЕНТИРОВАТЬ
                        </div>

                        <div class="contacts-feedback margin-bottom--last contacts-feedback--form">
                            <div class="contacts-feedback__block">
                                <form method="post" class="feedback-form" action="/comment">
                                    @csrf

                                    <input type="hidden" name="post_id" value="{{ $post->id }}">
                                    <div class="feedback-form__line">
                                        <div class="label">
                                            <input type="text" placeholder="Имя*" name="name">
                                            <div class="error-message">
                                                Необходимо заполнить
                                            </div>
                                        </div>

                                        <div class="label">
                                            <input type="email" placeholder="E-mail*" name="email">
                                            <div class="error-message">
                                                Необходимо заполнить
                                            </div>
                                        </div>
                                    </div>

                                    <div class="label">
                                        <textarea name="message" placeholder="Сообщение"></textarea>
                                    </div>

                                    <div class="label feedback-form--button">
                                        <button class="button button--blue button--download button--download-pdf">
                                            Отправить
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    @endif
                </div>
                <!-- Content (end) -->
            </div>
            @include('pages._sidebar')
        </div>
    </div>
@endsection
