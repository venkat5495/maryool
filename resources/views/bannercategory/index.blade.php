@extends('layouts.app')

@section('content')

<div class="container-fluid">    
    <div class="row header">
        <div class="col-lg-10">
            <h1>Advert Banner Category</h1>
            <ul class="breadcrumb">
                <li>{{__('Home')}}</li>
                <li><a href="#">{{__('Advert Banner Category')}}</a></li>
            </ul>
        </div>
        <div class="col-sm-2 text-right">
            <a href="{{ route('advertcategory.create')}}" class="btn btn-primary" data-toggle="tooltip" title="Add"><i class="fa fa-plus"></i></a>
            <a href="{{ route('advertcategory.index')}}" class="btn btn-default" data-toggle="tooltip" title="Refresh"><i class="fa fa-refresh"></i></a>
            <a href="#" class="btn btn-danger" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a>
        </div>
    </div>
    <hr>
</div>
<br>

<!-- Basic Data Tables -->
<!--===================================================-->
<div class="panel">
    <div class="panel-heading">
        <h3 class="panel-title"><i class="fa fa-list"></i> {{__('Advert Banner Category')}}</h3>
    </div>
    <div class="panel-body">
        <table class="table table-striped table-bordered demo-dt-basic" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th><input type="checkbox" class="table_checkbox"></th>
                    <th>{{__('Category Name')}}</th> 
					<th>{{__('Status')}}</th>
					<th>{{__('Created By')}}</th>
					<th width="10%">{{__('Options')}}</th>
                </tr>
            </thead>
            <tbody>
                @if(!$bannercategory->isEmpty())
                    @php $index = 1; @endphp
                    @foreach($bannercategory as $bannercategory)
                        <tr>
                            <td><input type="checkbox" class="table_checkbox"></td>
                            <td>{{ $bannercategory->name }}</td>
                            <td>{{ __($bannercategory->status) }}</td>
							<td>{{ $bannercategory->user->name }}</td>
							<td>
							    <a href="{{route('advertcategory.edit', encrypt($bannercategory->id))}}" class="btn btn-primary" data-toggle="tooltip" title="Edit"><i class="fa fa-edit"></i></a>
							</td>
                        </tr>
                        @php $index++; @endphp
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
</div>

@endsection
