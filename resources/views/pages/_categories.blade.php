<div class="faq__menu">
    <ul class="faq-menu">
        @foreach($categories as $category)
            @if($category->getPostsCount())
                <li>
                    <div class="faq-menu__category analytics--tab ">
                        <div>
                            <i class="analytics-icon4"></i>
                        </div>

                        <a href="{{ route('category.show', $category->slug) }}">
                            <span>{{ $category->title }} {{ $category->getPostsCount() }}</span>
                        </a>
                    </div>
                </li>
            @endif
        @endforeach
    </ul>
</div>