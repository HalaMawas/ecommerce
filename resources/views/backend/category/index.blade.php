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
                  <th>name </th>
                  <th>parent category</th>
                  <th>image</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach($categories as $category)
                <tr>
                <td>{{$category->name_ar.' - '.$category->name_en}}</td>
                <td>{{$category->parent->name_ar.' '.$category->parent->name_en}}</td>
                  <td><img width="50" src='{{asset("Categoryimage/{$category->image}")}}'></td>
                   <td> 
                                        <a href='{{url("category/{$category->id}/edit")}}' 
                                        class="btn btn-success">update</a>
                                    </td>
                                    <td>
                                        <form method="post" action='{{url("category/$category->id")}}'>
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
                <th>name </th>
                  <th>parent category</th>
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