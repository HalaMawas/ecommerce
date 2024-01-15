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
                  <th>category</th>
                  <th>Brand</th>
                  <th>image</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach($products as $product)
                <tr>
                <td>{{$product->name_ar.' - '.$product->name_en}}</td>
                <td>{{$product->category->name_en}}</td>
                <td>{{$product->brand->name_en}}</td>
                  <td><img width="50" src='{{asset("Productimage/{$product->image}")}}'></td>
                   <td> 
                                        <a href='{{url("product/{$product->id}/edit")}}' 
                                        class="btn btn-success">update</a>
                                    </td>
                                    <td>
                                        <form method="post" action='{{url("product/$product->id")}}'>
                                            @method('delete')
                                            @csrf
                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                                    </td>
                </tr>
                @endforeach
                </tbody>
                
              </table>
            </div>
            <!-- /.card-body -->
          </div>
@endsection