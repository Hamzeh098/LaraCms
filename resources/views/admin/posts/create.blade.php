@extends('layouts.admin')
@section('content')
    <div class="card-title">
        <h4>نوشته جدید </h4>
    </div>
    <div class="card-body">
        <div class="col-md-12">
            <div class="basic-form p-10">
                @include('partials.error')
                @include('partials.success')
            </div>
            <form action="{{ route('admin.post.store') }}" method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="postTitle">عنوان مطلب</label>
                    <input id="postTitle" name="postTitle" type="text"
                           class="form-control input-default hasPersianPlaceHolder"
                           value="{{old('postTitle')}}"
                    >
                </div>
                <div class="form-group">
                    <label for="postContent">محتوا</label>
                    <textarea id="postContent" name="postContent"
                              class="form-control input-default hasPersianPlaceHolder"
                              value="{{old('postContent')}}"
                    ></textarea>
                </div>
                <div class="form-group">
                    <label for="postcategory">دسته بندی ها</label>
                    <div class="postcategory">
                        @include('admin.category.list',['items' =>$categories['root']])
                    </div>

                </div>
                <div class="form-group">
                    <label for="postTag">برچسب ها:</label>
                    <select name="postTags[]" id="postTags" multiple style="min-width: 300px">
                        @foreach($allTags as $tag)
                            <option value="{{$tag->id}}">{{$tag->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="postStatus">نقش مطلب :</label>
                    <select name="postStatus" id="postStatus" class="form-control persianText">
                        @foreach($postStatus as $postStatusId =>$postStatusTitle)
                            <option value="{{$postStatusId}}">{{$postStatusTitle}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group m-t-20">
                    <button type="submit" class="btn btn-primary m-b-10 m-l-5">ثبت اطلاعات
                    </button>
                </div>
            </form>
        </div>

@endsection
