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

                        <h4 class="card-title">Edit Profile Page</h4>
                        <form method="post" action="{{ route('store.profile')}}" enctype="multipart/form-data">
                            @csrf
                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                                <input class="form-control" name="name" type="text" value="{{ $editData->name }}" id="example-text-input">
                            </div>
                        </div>
                        <!-- end row -->
                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">User Email</label>
                            <div class="col-sm-10">
                                <input class="form-control" name="email" type="text" value="{{ $editData->email }}" id="example-text-input">
                            </div>
                        </div>
                        <!-- end row -->
                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">User Name</label>
                            <div class="col-sm-10">
                                <input class="form-control" name="username" type="text" value="{{ $editData->username }}" id="example-text-input">
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Profile Image</label>
                            <div class="col-sm-10">
                                <input class="form-control" name="profile_image" type="file" id="image">
                            </div>
                        </div>
                        <!-- end row -->

                        @if(!empty($editData->profile_image))
                        <div class="row mb-3">
                            <div class="col-sm-10">
                                <label for="example-text-input" class="col-sm-2 col-form-label"></label>
                                <img id="showImage" class="rounded avatar-lg"  src="{{ url('')}}/upload/admin_image/{{$editData->profile_image}}" alt="Card image cap">
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
                        <input type="submit" class="btn btn-info btn-rounded waves-effect waves-light" value="Update Profile">
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