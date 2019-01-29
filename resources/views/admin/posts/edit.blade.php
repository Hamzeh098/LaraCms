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
            <form action="{{ route('admin.post.update',[$post->post_id]) }}" method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="postTitle">عنوان مطلب</label>
                    <input id="postTitle" name="postTitle" type="text"
                           class="form-control input-default hasPersianPlaceHolder"
                           value="{{old('postTitle',$post->post_title)}}"
                    >
                </div>
                <div class="form-group">
                    <label for="postContent">محتوا</label>
                    <textarea id="postContent"
                              name="postContent"
                              rows="15px"
                              class="form-control input-default hasPersianPlaceHolder"
                              value="{{old('postContent')}}"
                    >{{old('postContent',$post->post_content)}}</textarea>
                </div>
                <div class="form-group">
                    <label for="postCategory">دسته بندی ها</label>
                    <ul>
                        @foreach($categories as $category)
                            <input type="checkbox"
                                   name="categories[]"
                                   value="{{$category->id}}"
                                    {{in_array($category->id,$postCategories)?'checked':''}}
                            >
                            <li>{{$category->title}}</li>
                        @endforeach
                    </ul>
                </div>
                <div class="form-group">
                    <label for="postStatus">نقش مطلب :</label>
                    <select name="postStatus" id="postStatus" class="form-control persianText">
                        @foreach($postStatus as $postStatusId =>$postStatusTitle)
                            <option value="{{$postStatusId}}"
                                    {{$post->post_status == $postStatusId ? 'selected' : '' }}
                            >{{$postStatusTitle}}</option>
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
