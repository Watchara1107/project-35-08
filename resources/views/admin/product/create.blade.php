@extends('layouts.masterbackend')
@section('text')

<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">เพิ่มสินค้า</h4>
        <form class="forms-sample">
          <div class="form-group mt-3">
            <label for="name">ชื่อสินค้า</label>
            <input type="text" class="form-control" name="name" id="name">
          </div>
          <div class="form-group mt-3">
            <label for="price">ราคาสินค้า</label>
            <input type="text" class="form-control" name="price" id="price">
          </div>
          <div class="form-group mt-3">
            <label for="description">รายละเอียดสินค้า</label>
            <input type="text" class="form-control" name="description" id="description">
          </div>
          <div class="form-group mt-3">
            <label for="image">รูปภาพ</label>
            <input type="file" class="form-control" name="image" id="image">
          </div>
          <input type="submit" class="btn btn-gradient-primary me-2" value="บันทึก">
          <a href="{{ route('p.index') }}" class="btn btn-light">Cancel</a>
        </form>
      </div>
    </div>
  </div>

@endsection