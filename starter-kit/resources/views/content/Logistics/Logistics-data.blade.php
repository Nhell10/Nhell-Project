@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Compliance')

@section('content')
<div class="card-datatable table-responsive pt-0">
  <table class="datatables-basic table">
    <thead>
      <tr>
        <th></th>
        <th></th>
        <th>id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Date</th>
        <th>Salary</th>
        <th>Status</th>
        <th>Action</th>
      </tr>
    </thead>
  </table>
</div>
@endsection
