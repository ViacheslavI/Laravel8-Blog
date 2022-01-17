@extends('personal.layouts.main')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Comment</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard v1</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="row">
                        <div class="col-12">

                            <form action="{{route('personal.comment.update',$comment->id) }}" method="POST"
                                  class="w-50">
                                @csrf
                                @method('PATCH')
                                <div class="form-group">
                                    <label>Name</label>
                                    <textatea class="form-control" name="message" cols="30" row="10">{{$comment->message}}  </textatea>
                                    @error('message')
                                    <div class="text-danger">
                                        This field is required
                                    </div>
                                    @enderror
                                </div>
                                <input type="submit" class="btn btn-primary" value="Refresh">
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
    </div>
@endsection
