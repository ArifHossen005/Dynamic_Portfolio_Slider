@extends('admin.master')

@section('body')
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h4 class="text-themecolor">Dashboard 1</h4>
        </div>
        <div class="col-md-7 align-self-center text-end">
            <div class="d-flex justify-content-end align-items-center">
                <ol class="breadcrumb justify-content-end">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">About</a></li>
                    <li class="breadcrumb-item active">Dashboard 1</li>
                </ol>
                <button type="button" class="btn btn-info d-none d-lg-block m-l-15 text-white"><i class="fa fa-plus-circle"></i> Create New</button>
            </div>
        </div>
    </div>

    <div class="row mt-3">

        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title" align="center">Add About page Form </h4>
                    <hr/>
                    <h1 class="text-center text-dark">{{Session::has('success') ? Session::get('success') : ''}}</h1>

                    <form class="form-horizontal p-t-20" action="{{route('about.update',['id'=>$abouts->id])}}" method="post" enctype="multipart/form-data">
                        @csrf




                        <div class="form-group row">
                            <label for="exampleInputuname3" class="col-sm-3 control-label">Add Title<span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="title" value="{{$abouts->title}}" placeholder="write a title">
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="exampleInputEmail3" class="col-sm-3 control-label">Write Description<span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <textarea  class="form-control" name="description"  placeholder="Description"> value="{{$abouts->description}}"</textarea>
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="exampleInputuname3" class="col-sm-3 control-label">Add Name<span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="name" value="{{$abouts->name}}" placeholder="Name">
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="exampleInputuname3" class="col-sm-3 control-label">Add age<span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control" name="age" value="{{$abouts->age}}" placeholder="age">
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="exampleInputuname3" class="col-sm-3 control-label">Add Mobile<span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control" name="mobile" value="{{$abouts->mobile}}" placeholder="mobile">
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="exampleInputuname3" class="col-sm-3 control-label">Add Country<span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="country" value="{{$abouts->country}}" placeholder="country">
                            </div>
                        </div>





                        <div class="form-group row">
                            <label for="exampleInputuname3" class="col-sm-3 control-label">Add Email<span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control" name="email" value="{{$abouts->email}}" placeholder="email">
                            </div>
                        </div>




                        <div class="form-group row">
                            <label for="exampleInputuname3" class="col-sm-3 control-label">Add University<span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="university" value="{{$abouts->university}}" placeholder="University">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="form-label col-sm-3 control-label" for="web">Your Image </label>
                            <div class="col-sm-9">
                                <input type="file" name="image" class="dropify" />
                                <img src="{{asset($abouts->image)}}" alt="{{$abouts->title}}" width="60" height="60">
                            </div>
                        </div>




                        <div class="form-group row m-b-0">
                            <div class="offset-sm-3 col-sm-9">
                                <button type="submit" class="btn btn-success waves-effect waves-light text-white">Create New About page</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
