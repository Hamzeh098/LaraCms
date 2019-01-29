@extends('layouts.admin')
@section('content')
    <div class="card-title">
        <h4>لیست کاربران </h4>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            @include('partials.success')
            <table class="table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>نام و نام خانوادگی</th>
                    <th>ایمیل</th>
                    <th>کیف پول</th>
                    <th>تاریخ ثبت نام</th>
                    <th>وضعیت</th>
                    <th>عملیات</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <th scope="row">{{$user->id}}</th>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->wallet }}</td>
                        <td>{{$user->created_at}}</td>
                        <td>
                            <span class="badge badge-{{$user->status ==1 ? 'success' : 'danger'}}">
                                {{$user->status ==1 ? 'فعال' : 'غیر فعال'}}
                            </span>
                        </td>
                        <td>
                            <a href="{{route('admin.user.delete',[$user->id])}}">حذف</a>
                        </td>
                        <td>
                            <a href="{{route('admin.user.edit',[$user->id])}}">ویرایش</a>
                        </td>

                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
