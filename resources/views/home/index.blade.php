@extends('layout')

@section('navigation')
    @include('partials/navbar', $user = session()->get('user'))
@endsection

@section('sidebar')
    @include('partials/sidebar', $user = session()->get('user'))
@endsection

@section('content')
<div class="row">
    <div class="col-xs-12 col-md-10 col-md-offset-2 col-lg-8 col-lg-offset-2">
        <div class="box box-primary" style="background-color:white !important; opacity: 1 !important;">
                <div class="box-header with-border">
                    <h3 class="box-title">Quick Example</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">File input</label>
                            <input type="file" id="exampleInputFile">
            
                            <p class="help-block">Example block-level help text here.</p>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Check me out
                            </label>
                        </div>
                    </div>
                    <!-- /.box-body -->
            
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
    </div>
</div>
@endsection
