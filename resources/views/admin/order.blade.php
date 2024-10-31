@extends('admin.index')
@section('title', 'Quản Lý Đơn Hàng')
@section('content')

<div class="container">
    <h1>Order Management</h1>
    <table class="order-table">
      <thead>
        <tr>
          <th>ID</th>
          <th>User ID</th>
          <th>Product ID</th>
          <th>Discount</th>
          <th>Total Amount</th>
          <th>Shipping Cost</th>
          <th>Discount ID</th>
          <th>Order Status ID</th>
          <th>Created At</th>
          <th>Updated At</th>
        </tr>
      </thead>
      <tbody>
        <!-- Example row -->
        <tr>
          <td>1</td>
          <td>101</td>
          <td>505</td>
          <td>10%</td>
          <td>$500.00</td>
          <td>$15.00</td>
          <td>201</td>
          <td>1</td>
          <td>2024-10-30</td>
          <td>2024-10-30</td>
        </tr>
        <!-- More rows as needed -->
      </tbody>
    </table>
  </div>
@endsection