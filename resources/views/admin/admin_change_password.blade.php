@extends('admin.admin_master')
@section('admin')


<div class="page-content">
    <div class="container-fluid">
        {{-- Card Start --}}
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                      
            <h4 class="card-title">Change Password Page </h4><br><br>


            @if(count($errors))
                @foreach ($errors->all() as $error)
                <p class="alert alert-danger alert-dismissible fade show"> {{ $error}} </p>
                @endforeach

            @endif


            <form method="post" action="{{ route('update.password') }}" >
                @csrf
                            {{-- old password --}}
                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Old Password</label>
                            <div class="col-sm-10">
                                <input class="form-control" name="oldpassword" type="password"  id="oldpassword">
                            </div>
                        </div>
                        <!-- end row -->

                        {{-- New Password --}}

                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">New Password</label>
                            <div class="col-sm-10">
                                <input class="form-control" name="newpassword" type="password"  id="newpassword">
                            </div>
                        </div>
                        <!-- end row -->
                         
                        {{-- Confirm New Password --}}
                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Confirm Password</label>
                            <div class="col-sm-10">
                                <input class="form-control" name="confirm_password" type="password"  id="confirmpassword">
                            </div>
                        </div>
                        <!-- end row -->

                        <!-- end row -->
                        <input type="submit" class="btn btn-info btn-rounded waves-effect waves-light" value="Change Password">
                    </form>
                    </div>
                </div>
            </div> <!-- end col -->
        </div>
        {{-- Card End --}}
    </div>
</div>


@endsection