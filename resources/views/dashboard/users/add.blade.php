@extends('dashboard.layouts.layout')

@section('content')
        <!-- Breadcrumb -->
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('dashboard.home')}}">{{trans('words.Home')}}</a>
            </li>
            <li class="breadcrumb-item"><a href="{{ route('dashboard.users.index') }}">{{ trans('words.users') }}</a>
            </li>
            <li class="breadcrumb-item active">{{ trans('words.user-add') }}</li>

        </ol>

    
        <div class="container-fluid">

            <div class="animated fadeIn">
                <form action="{{Route('dashboard.users.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
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
                                <strong>{{ __('words.user-add') }}</strong>
                            </div>
                            <div class="card-block">

                                <div class="form-group col-12">
                                    <label>{{ __('words.name') }}</label>
                                    <input  type="text" name="name" class="form-control"
                                        placeholder="{{ __('words.name') }}" value="">
                                </div>
                                <div class="form-group col-12">
                                    <label>{{ __('words.email') }}</label>
                                    <input type="text" name="email" class="form-control"
                                        placeholder="{{ __('words.email') }}" value="">
                                </div>
                                <div class="form-group col-12">
                                    <label>{{ __('words.status') }}</label>
                                    <select name="status" id="" class="form-control">
                                        <option value="admin">{{ __('words.admin') }}</option>
                                        <option value="writer" >{{ __('words.writer') }}</option>
                                        <option value="">{{ __('words.notActive') }}</option>
                                    </select>
                                </div>

                                


                                <div class="form-group col-12">
                                    <label>{{ __('words.password') }}</label>
                                    <input type="password" name="password" class="form-control"
                                        placeholder="{{ __('words.password') }}" value="">
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-dot-circle-o"></i>
                                    {{ __('words.Submit') }}</button>
                                <button type="reset" class="btn btn-sm btn-danger"><i class="fa fa-ban"></i>
                                    {{ __('words.Reset') }}</button>
                            </div>
                        </div>
                </form>
            </div>
        </div>
        <!--/.container-fluid-->
@endsection