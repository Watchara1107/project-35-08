@extends('layouts.masterbackend')
@section('text')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">ผู่ใช้งานระบบ</h4>
        <table class="table">
          <thead>
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Email</th>
              <th>created_at</th>
              <th>updated_at</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Jacob</td>
              <td>53275531</td>
              <td>12 May 2017</td>
              <td>12 May 2017</td>
              <td><label class="badge badge-danger">Pending</label></td>
            </tr>

          </tbody>
        </table>
      </div>
    </div>
  </div>

@endsection