@extends('admin.admin_master')
@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<div class="page-content">
    <div class="container-fluid">
        {{-- Card Start --}}
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">Home Slide Page</h4>
                        <form method="post" action="{{ route('update.slider',$homeslide->id)}}" enctype="multipart/form-data">
                            @csrf

                            <input name="id" type="hidden" value="{{ $homeslide->id }}" id="example-text-input">


                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Title</label>
                            <div class="col-sm-10">
                                <input class="form-control" name="title" type="text" value="{{ $homeslide->title }}" id="example-text-input">
                            </div>
                        </div>
                        <!-- end row -->
                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Short Title</label>
                            <div class="col-sm-10">
                                <input class="form-control" name="short_title" type="text" value="{{ $homeslide->short_title }}" id="example-text-input">
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Video Url</label>
                            <div class="col-sm-10">
                                <input class="form-control" name="video_url" type="text" value="{{ $homeslide->video_url }}" id="example-text-input">
                            </div>
                        </div>
                        <!-- end row -->
                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Slider Image</label>
                            <div class="col-sm-10">
                                <input class="form-control" name="home_slide" type="file" value="{{ $homeslide->home_slide }}" id="image">
                            </div>
                        </div>
                        <!-- end row -->
                     

                        @if(!empty($homeslide->home_slide))
                        <div class="row mb-3">
                            <div class="col-sm-10">
                                <label for="example-text-input" class="col-sm-2 col-form-label"></label>
                                <img id="showImage" class="rounded avatar-lg"  src="{{ url('')}}/{{$homeslide->home_slide}}" alt="Card image cap">
                            </div>
                        </div>
                        @else
                        <div class="row mb-3">
                            <div class="col-sm-10">
                                <label for="example-text-input" class="col-sm-2 col-form-label"></label>
                                <img id="showImage" class="rounded avatar-lg"  src="{{ url('')}}/upload/no_image.jpg" alt="Card image cap">
                            </div>
                        </div>
                        @endif
                        <!-- end row -->
                        <input type="submit" class="btn btn-info btn-rounded waves-effect waves-light" value="Update Slide">
                    </form>
                    </div>
                </div>
            </div> <!-- end col -->
        </div>
        {{-- Card End --}}
    </div>
</div>

<script type="text/javascript">
$(document).ready(function() {
$('#image').change(function() {
    var reader = new FileReader();
    reader.onload = function(event){
        $('#showImage').attr('src',event.target.result);
    }
    reader.readAsDataURL(event.target.files[0]);

});
});




</script>
@endsection