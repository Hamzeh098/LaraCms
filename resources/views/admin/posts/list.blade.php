@extends('layouts.admin')
@section('content')
    <div class="card-title">
        <h4>لیست مطالب </h4>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            @include('partials.success')
            <table class="table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>عنوان مطلب</th>
                    <th>نویسنده</th>
                    <th>تعداد بازدید</th>
                    <th>تاریخ مطلب</th>
                    <th>وضعیت</th>
                    <th>عملیات</th>
                </tr>
                </thead>
                <tbody>
                @foreach($posts as $post)
                    <tr>
                        <th scope="row">{{$post->post_id}}</th>
                        <td>{{$post->post_title}}</td>
                        <td>{{$post->post_author}}</td>
                        <td>{{$post->post_count_view }}</td>
                        <td>{{$post->created_at}}</td>
                        <td>
                            <span class="badge badge-{{$post->post_status == 1 ? 'success' : 'danger'}}">
                                {{$post->post_status ==1 ? 'فعال' : 'غیر فعال'}}
                            </span>
                        </td>
                        <td>
                            <a href="{{route('admin.post.delete',[$post->post_id])}}">حذف</a>
                        </td>
                        <td>
                            <a href="{{route('admin.post.edit',[$post->post_id])}}">ویرایش</a>
                        </td>

                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
