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

                        <h4 class="card-title">Portfolio Page</h4>
                        <form method="post" id="myForm" action="{{ route('store.portfolio')}}" enctype="multipart/form-data">
                            @csrf

                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Portfolio Name</label>
                            <div class="col-sm-10 form-group">
                                <input class="form-control" name="portfolio_name" type="text" id="example-text-input">
                               
                            </div>
                        </div>
                        <!-- end row -->
                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Portfolio Title</label>
                            <div class="col-sm-10 form-group">
                                <input class="form-control" name="portfolio_title" type="text"  id="example-text-input">
                                
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Portfolio Description</label>
                            <div class="col-sm-10 form-group">
                                <textarea id="elm1" name="portfolio_description"></textarea>
                            </div>
                        </div>
                        <!-- end row -->
                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Portfolio Image</label>
                            <div class="col-sm-10">
                                <input class="form-control" name="portfolio_image" type="file"  id="image">
                            </div>
                        </div>
                        <!-- end row -->
                     

                        @if(!empty($aboutpage->about_image))
                        <div class="row mb-3">
                            <div class="col-sm-10">
                                <label for="example-text-input" class="col-sm-2 col-form-label"></label>
                                <img id="showImage" class="rounded avatar-lg"  src="{{ url('')}}/{{$aboutpage->about_image}}" alt="Card image cap">
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
                        <input type="submit" class="btn btn-info btn-rounded waves-effect waves-light" value="Update Portfolio Page">
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
<script type="text/javascript">
   $(document).ready(function (){
        $('#myForm').validate({
            rules: {
                blog_category: {
                    required : true,
                }, 
            },
            messages :{
                blog_category: {
                    required : 'Please Enter Blog Category',
                },
            },
            errorElement : 'span', 
            errorPlacement: function (error,element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight : function(element, errorClass, validClass){
                $(element).addClass('is-invalid');
            },
            unhighlight : function(element, errorClass, validClass){
                $(element).removeClass('is-invalid');
            },
            
        });
    });

    

</script>



</script>
@endsection