@extends('layouts.masterbackend')
@section('text')

<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">เพิ่มประเภทสินค้า</h4>
        <form class="forms-sample">
          <div class="form-group mt-3">
            <label for="name">ชื่อประเภทสินค้า</label>
            <input type="text" class="form-control" name="name" id="name">
          </div>
          <input type="submit" class="btn btn-gradient-primary me-2" value="บันทึก">
          <a href="{{ route('c.index') }}" class="btn btn-light">Cancel</a>
        </form>
      </div>
    </div>
  </div>

@endsection