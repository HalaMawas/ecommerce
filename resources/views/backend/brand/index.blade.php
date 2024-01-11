@extends('backend.master')
@section('content')
<div class="card">
            <div class="card-header">
              <h3 class="card-title">DataTable with default features</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>name ar</th>
                  <th>name en</th>
                  <th>image</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach($brands as $brand)
                <tr>
                <td>{{$brand->name_ar}}</td>
                 <td>{{$brand->name_en}}</td>
                  <td><img width="50" src='{{asset("Brandimage/{$brand->image}")}}'></td>
                   <td> 
                                        <a href='{{url("brand/{$brand->id}/edit")}}' 
                                        class="btn btn-success">update</a>
                                    </td>
                                    <td>
                                        <form method="post" action='{{url("brand/$brand->id")}}'>
                                            @method('delete')
                                            @csrf
                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                                    </td>
                </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                   <th>name ar</th>
                  <th>name en</th>
                  <th>image</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
@endsection