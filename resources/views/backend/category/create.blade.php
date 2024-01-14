@extends('backend.master')
@section('content')
<div class="col-md-12">
  <!-- general form elements -->
  <div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Create Category</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form" method="POST" action="{{url('category')}}" enctype="multipart/form-data">
      @csrf
      @if(session()->has('success'))
      <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h5><i class="icon fas fa-check"></i> Alert!</h5>
        {{session()->get('success')}}
      </div>


      @endif
      @if ($errors->any())
      <div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h5><i class="icon fas fa-ban"></i> Alert!</h5>
        <ul>
          @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>

      @endif

      <div class="card-body">
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="exampleInputEmail1">Category name ar </label>
              <input type="text" class="form-control" id="exampleInputEmail1" name="name_ar" placeholder="Enter " value="{{old('name_ar')}}">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="exampleInputEmail1">Category name en </label>
              <input type="text" class="form-control" id="exampleInputEmail1" name="name_en" placeholder="Enter " value="{{old('name_en')}}">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="exampleInputEmail3">parent of Category</label>
              <select class="form-control" id="exampleInputEmail3" name="parent_id">
              <option value="">Main Category</option>

                @foreach($categories as $category)
                <option value="{{$category->id}}" @if(old('parent_id')==$category->id) selected @endif>{{$category->name_en}}</option>
                @endforeach
                </select>
            </div>
          </div>
          <div class="col-md-6">

            <div class="form-group">
              <label for="exampleInputFile">File input</label>
              <div class="input-group">
                <div class="custom-file">
                  <input type="file" name="image" class="custom-file-input" id="exampleInputFile">
                  <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                </div>
                <div class="input-group-append">
                  <span class="input-group-text" id="">Upload</span>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>
  <!-- /.card -->




  <!-- /.card -->


</div>
@endsection