@extends('layout')

@section('title', 'products')

@section('content')
<div class="overflow-x-auto rounded-box border border-base-content/5 bg-base-100 flex-auto mx-10 my-5 max-h-fit">
    <table class="table table-zebra text-xl">
      <!-- head -->
      <thead>
        <tr>
          <th>PRODUCT NAME</th>
          <th>COLOR</th>
          <th>CATEGORY</th>
          <th>PRICE</th>
          <th>ACTION</th>
        </tr>
      </thead>
      <tbody>
        <!-- row 1 -->
        @foreach ($products as $product)
        <tr>
          <td>{{ $product['name'] }}</td>
          <td>{{ $product['color'] }}</td>
          <td>{{ $product['category'] }}</td>
          <td>{{ $product['price'] }}</td>
          <td>
            <a href="#">✏️</a>
            <a href="#">🗑️</a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection