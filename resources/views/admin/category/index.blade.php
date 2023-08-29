@extends('layouts.masterbackend')
@section('text')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">ประเภทสินค้า</h4>
        <a href="{{ route('c.create') }}" class="btn btn-success mt-3">
            <i class="mdi mdi-plus"></i>
            เพิ่มข้อมูลประเภทสินค้า</a>
        <table class="table mt-3">
          <thead>
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>created_at</th>
              <th>updated_at</th>
              <th>action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($category as $cat)
            <tr>
              <td>{{ $cat->category_id }}</td>
              <td>{{ $cat->name }}</td>
              <td>{{ $cat->created_at }}</td>
              <td>{{ $cat->updated_at }}</td>
              <td>
                <a href="{{ url('admin/category/edit/'.$cat->category_id) }}" class="btn btn-warning"><i class="mdi mdi-border-color"></i></a>
                <a href="{{ url('admin/category/delete/'.$cat->category_id) }}" class="btn btn-danger"><i class="mdi mdi-delete"></i></a>
              </td>
            </tr>
            @endforeach

          </tbody>
        </table>
      </div>
    </div>
  </div>

@endsection