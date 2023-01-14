@foreach ($categories->where('parent_id', $parentId) as $category)
    <li class="arrow-plus">
        <a href="shop.html">{{ $category->name }}</a>
        @if ($categories->where('parentId', $category->id) != null)
            <div class="cat-left-drop-menu">
                <div class="cat-left-drop-menu-left">
                    @php
                        $relatedCategory = $categories->where('parent_id', $category->id)->first();
                    @endphp

                    @if ($relatedCategory != null)
                        <a class="menu-item-heading" href="#">{{ $relatedCategory->name }}</a>
                        <ul>
                            @foreach ($categories->where('parent_id', $relatedCategory->id) as $category)
                                <li><a href="#">{{ $category->name }}</a></li>
                            @endforeach
                        </ul>
                    @endif
                </div>
            </div>
        @endif
    </li>
@endforeach
