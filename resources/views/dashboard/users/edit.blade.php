@extends('dashboard.layouts.layout')

@section('content')
        <!-- Breadcrumb -->
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('dashboard.home')}}">{{trans('words.Home')}}</a>
            </li>
            <li class="breadcrumb-item"><a href="{{ route('dashboard.users.index') }}">{{ trans('words.users') }}</a>
            </li>
            <li class="breadcrumb-item active">{{ trans('words.user-edit') }}</li>

        </ol>

        <div class="container-fluid">

            <div class="animated fadeIn">
                <form action="{{Route('dashboard.users.update', $user)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                        <div class="card">
                            <div class="card-header">
                                <strong>{{ __('words.user-edit') }}</strong>
                            </div>
                            <div class="card-block">

                                <div class="form-group col-12">
                                    <label>{{ __('words.name') }}</label>
                                    <input  type="text" name="name" class="form-control" value="{{$user->name}}"
                                        placeholder="{{ __('words.name') }}" value="">
                                </div>
                                <div class="form-group col-12">
                                    <label>{{ __('words.email') }}</label>
                                    <input type="text" name="email" class="form-control"
                                        placeholder="{{ __('words.email') }}" value="{{$user->email}}">
                                </div>
                                <div class="form-group col-12">
                                    <label>{{ __('words.status') }}</label>
                                    <select name="status" id="" class="form-control">
                                        <option value="admin" @if ($user->status == 'admin') selected @endif>{{ __('words.admin') }}</option>
                                        <option value="writer" @if ($user->status == 'writer') selected @endif >{{ __('words.writer') }}</option>
                                        <option value="" @if ($user->status == null) selected @endif>{{ __('words.notActive') }}</option>
                                    </select>
                                </div>

                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-dot-circle-o"></i>
                                    {{ __('words.edit') }}</button>
                                <button type="reset" class="btn btn-sm btn-danger"><i class="fa fa-ban"></i>
                                    {{ __('words.Reset') }}</button>
                            </div>
                        </div>
                </form>
            </div>
        </div>
        <!--/.container-fluid-->
@endsection