@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Home')

@section('content')
<div class="card-datatable table-responsive pt-0">
  <table class="datatables-basic table">
    <thead>
      <tr>
        <th></th>
        <th></th>
        <th>Document_Type</th>
        <th>Document_Number</th>
        <th>Issue_Date</th>
        <th>Expiration_Date</th>
        <th>Description</th>
      </tr>
    </thead>
  </table>
</div>
@endsection
