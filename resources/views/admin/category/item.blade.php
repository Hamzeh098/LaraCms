<li>
    <input type="checkbox"
           value="{{$category->id}}"
           name="categories[]"
    >
    {{$category->title}}
    @if(isset($categories[$category->id]))
        @include('admin.category.list',['items'=>$categories[$category->id]])
    @endif
</li>