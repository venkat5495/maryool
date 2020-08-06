@extends('layouts.app')

@section('content')

<form class="form-horizontal" action="{{ route('cms.store') }}" method="POST" enctype="multipart/form-data">
    <div class="row header">
        <div class="col-lg-10">
            <h1>CMS Information</h1>
            <ul class="breadcrumb">
                <li>{{__('Home')}}</li>
                <li><a href="./">{{__('CMS Information')}}</a></li>
            </ul>
        </div>
        <div class="col-sm-2 text-right">
            <button type="submit" name="button" class="btn btn-primary" data-toggle="tooltip" title="Save"><i class="fa fa-save"></i></button>
            <a href="./" data-toggle="tooltip" title="" class="btn btn-default" data-original-title="Cancel"><i class="fa fa-reply"></i></a>
        </div>
    </div>
    <hr>
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-pencil"></i> {{__('CMS')}}</h3>
            </div>
            	@csrf
                <div class="panel-body">
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="name">{{__('Name')}}</label>
                        <div class="col-sm-10">
                            <input type="text" placeholder="{{__('Name')}}" id="name" name="name" value="{{old('name')}}" class="form-control" required>
                            @if ($errors->has('name'))
                                <span role="alert">
                                    <strong style="color:red;">{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="content">{{__('Content In English')}}</label>
                        <div class="col-sm-10">
                            <textarea class="editor" name="content"  required>{{old('content')}}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="sa_content">{{__('Content In Arabic')}}</label>
                        <div class="col-sm-10">
                            <textarea class="editor" name="sa_content" required>{{old('sa_content')}}</textarea>
                        </div>
                    </div>
                </div>
        </div>
</form>
@endsection
