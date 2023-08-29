@extends('layouts.masterbackend')
@section('text')

<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">แก้ไขข้อมูลประเภทสินค้า</h4>
        <form class="forms-sample" method="POST" action="{{ url('admin/category/update/'.$category->category_id) }}">
          @csrf
          <div class="form-group mt-3">
            <label for="name">ชื่อประเภทสินค้า</label>
            <input value="{{ $category->name }}" type="text" class="form-control" name="name" id="name">
          </div>
          <input type="submit" class="btn btn-gradient-primary me-2" value="บันทึก">
          <a href="{{ route('c.index') }}" class="btn btn-light">Cancel</a>
        </form>
      </div>
    </div>
  </div>

@endsection