@extends('layouts.master')

@section('content')
    <section class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="Wishlist-area">
                        <h2>My Wish List</h2>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <td class="text-center">Image</td>
                                        <td class="text-left">Product Name</td>
                                        <td class="text-left">Model</td>
                                        <td class="text-right">Stock</td>
                                        <td class="text-right">Unit Price</td>
                                        <td class="text-right">Action</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products as $product)
                                        <tr>
                                            <td class="text-center">
                                                <a href="{{ route('product.show', $product->slug) }}">
                                                    <img src="{{ Storage::url('products/'. $product->preview) }}" alt="{{ $product->name }}" />
                                                </a>
                                            </td>
                                            <td class="text-left">
                                                <a href="{{ route('product.show', $product->slug) }}">{{ $product->name }}</a>
                                            </td>
                                            <td class="text-left">{{ $product->category->name }}</td>
                                            <td class="text-right">{{ $product->isAvailable() }}</td>
                                            <td class="text-right">
                                                <div class="price-box">
                                                    <span class="price">{{ currency($product->price / 100, 'USD', currency()->getUserCurrency()) }}</span>
                                                </div>
                                            </td>
                                            <td class="text-right">
                                                <button class="btn btn-primary" data-toggle="tooltip" title="Add to Cart" type="button">
                                                    <i class="fa fa-shopping-cart"></i>
                                                </button>
                                                <a href="#" class="btn btn-danger" data-toggle="tooltip" title="Remove">
                                                    <i class="fa fa-times"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="buttons clearfix pull-right">
                            <a href="#" class="btn btn-primary">Continue</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
