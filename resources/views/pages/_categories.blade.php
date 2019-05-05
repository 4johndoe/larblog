<div class="faq__menu">
    <ul class="faq-menu">
        @foreach($categories as $category)
            <li>
                <div class="faq-menu__category analytics--tab ">
                    <div>
                        <i class="analytics-icon4"></i>
                    </div>

                    <a href="{{ route('category.show', $category->slug) }}">
                        <span>{{ $category->title }}</span>
                    </a>
                </div>
            </li>
        @endforeach
    </ul>
</div>