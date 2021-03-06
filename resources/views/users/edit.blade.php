@extends('layouts.app')
@section('content')
<div class="containter">
    <div class="panel panel-default col-md-10 col-md-0ffset-1">
        <div class="panel-heading">
            <h4>
                <i class="glyphicon glyphicon-edit"></i>编辑个人资料
            </h4>
        </div>

        @include('common.error')

        <div class="panel-body">
            <form enctype="multipart/form-data" action="{{ route('users.update', $user->id) }}" method="post" accept-charset="utf-8">
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group">
                    <label for="name-field">用户名</label>
                    <input type="text" name="name" id="name-field" value="{{ old('name', $user->name) }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="email-field">邮 箱</label>
                    <input type="text" name="email" id="email-field" value="{{ old('email', $user->email) }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="introduction-field">个人简介</label>
                    <textarea name="introduction" id="introduction-field" class="form-control" rows="3">{{ old('introduction', $user->introduction) }}</textarea>
                </div>
                <div class="form-group">
                    <label for="" class="avatar-label">用户头像</label>
                    <input type="file" name="avatar" id="">

                    @if ($user->avatar)
                        <br>
                        <img src="{{ $user->avatar }}" width="200" alt="" class="thumbnail img-responsive">
                    @endif
                </div>
                <div class="well well-sm">
                    <button type="submit" class="btn btn-primary">保存</button>
                </div>
            </form>
        </div>
    </div>  
</div>
@endsection