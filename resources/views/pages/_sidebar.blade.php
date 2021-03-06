<div class="col-md-3" data-sticky_column>
    <div class="page-content content--center no-padding-bottom">
        <div class="primary-sidebar">
            <aside class="widget news-letter">
                <h3 class="widget-title text-uppercase">Получать новости</h3>
                <form action="/subscribe" method="post">
                    @csrf

                    <div class="form-group {!! ($errors->has('email')) ? 'has-error' : '' !!}">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder=""
                               name="email" value="{{ old('email') }}">
                        @if ($errors->has('email'))
                            <span class="help-block">{{ $errors->first('email') }}</span>
                        @endif
                    </div>
                    <input type="submit" value="Подписаться" class="text-uppercase text-center btn btn-subscribe">
                </form>
            </aside>
            <aside class="widget">
                <h3 class="widget-title text-uppercase text-center">Популярные посты</h3>
                @foreach($popularPosts as $post)
                    <div class="popular-post">
                        <a href="{{ route('post.show', $post->slug) }}" class="popular-img">
                            <img src="{{ $post->getImage() }}" alt="" width="100">
                            <div class="p-overlay"></div>
                        </a>
                        <div class="p-content">
                            <a href="{{ route('post.show', $post->slug) }}">{{ $post->title }}</a>
                            <span class="p-date">{{ $post->getDate() }}</span>
                        </div>
                    </div>
                @endforeach
            </aside>
            <aside class="widget">
                <h3 class="widget-title text-uppercase text-center">Рекомендованные посты</h3>
                @foreach($featuredPosts as $post)
                    <div class="popular-post">
                        <a href="{{ route('post.show', $post->slug) }}" class="popular-img">
                            <img src="{{ $post->getImage() }}" alt="" width="100">
                            <div class="p-overlay"></div>
                        </a>
                        <div class="p-content">
                            <a href="{{ route('post.show', $post->slug) }}">{{ $post->title }}</a>
                            <span class="p-date">{{ $post->getDate() }}</span>
                        </div>
                    </div>
                @endforeach
            </aside>
            <aside class="widget">
                <h3 class="widget-title text-uppercase text-center">Недавние посты</h3>
                @foreach($recentPosts as $post)
                    <div class="popular-post">
                        <a href="{{ route('post.show', $post->slug) }}" class="popular-img">
                            <img src="{{ $post->getImage() }}" alt="" width="100">
                            <div class="p-overlay"></div>
                        </a>
                        <div class="p-content">
                            <a href="{{ route('post.show', $post->slug) }}">{{ $post->title }}</a>
                            <span class="p-date">{{ $post->getDate() }}</span>
                        </div>
                    </div>
                @endforeach
            </aside>
        </div>
    </div>
</div>