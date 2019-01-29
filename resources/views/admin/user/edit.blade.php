@extends('layouts.admin')
@section('content')
    <div class="card-title">
        <h4>لیست کاربران </h4>
    </div>
    <div class="card-body">
        <div class="col-md-12">
            <div class="basic-form p-10">
                @include('partials.success')
                @include('partials.error')
            </div>
            <form action="{{ route('admin.user.update',[$user->id]) }}" method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="userFullName">نام و نام خانوادگی</label>
                    <input id="userFullName" name="userFullName" type="text"
                           class="form-control input-default hasPersianPlaceHolder"
                           value="{{$user->name}}"
                    >
                </div>
                <div class="form-group">
                    <label for="userEmail">آدرس ایمیل</label>
                    <input id="userEmail" name="userEmail" type="email"
                           class="form-control input-default hasPersianPlaceHolder"
                           value="{{$user->email}}">
                </div>
                <div class="form-group">
                    <label for="userPassword">رمز عبور</label>
                    <input id="userPassword" name="userPassword" type="password"
                           class="form-control input-default hasPersianPlaceHolder">
                </div>
                <div class="form-group">
                    <label for="userRole">نقش کاربری :</label>
                    <select id="userRole" class="form-control persianText">
                        @foreach($usersRoles as $roleId =>$roleTitle)
                            <option value="{{$roleId}}" {{$user->role == $roleId ?'selected':''}}>{{$roleTitle}}</option>
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
