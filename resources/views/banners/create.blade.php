<div class="panel">
    <div class="panel-heading">
        <h3 class="panel-title">{{__('Banner Information')}}</h3>
    </div>

    <!--Horizontal Form-->
    <!--===================================================-->
    <form class="form-horizontal" action="{{ route('home_banners.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{$banners->id}}">
        <div class="panel-body">
            <div class="form-group">
                <label class="col-sm-3" for="url">{{__('URL')}}</label>
                <div class="col-sm-9">
                    <input type="text" placeholder="{{__('URL')}}" id="url" name="url" class="form-control" value="{{$banners->url}}" required>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-3">
                    <label class="control-label">{{__('Banner Images')}}</label>
                    <strong>(850px*420px)</strong>
                </div>
                <div class="col-sm-9">
                    <div id="photos">
                        @if(!empty($banners->photo))
                            <img src="{{ asset($banners->photo) }}" height="100px" width="200px;">
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="panel-footer text-right">
            <button class="btn btn-info js_cancel" type="button">{{__('Cancel')}}</button>
            <button class="btn btn-purple" type="submit">{{__('Save')}}</button>
        </div>
    </form>
    <!--===================================================-->
    <!--End Horizontal Form-->

</div>
<script type="text/javascript">

    $(document).ready(function(){
        $("#photos").spartanMultiImagePicker({
            fieldName:        'photos',
            maxCount:         1,
            rowHeight:        '200px',
            groupClassName:   'col-md-4 col-sm-9 col-xs-6',
            maxFileSize:      '',
            dropFileLabel : "Drop Here",
            onExtensionErr : function(index, file){
                console.log(index, file,  'extension err');
                alert('Please only input png or jpg type file')
            },
            onSizeErr : function(index, file){
                console.log(index, file,  'file size too big');
                alert('File size too big');
            }
        });
    });

</script>
