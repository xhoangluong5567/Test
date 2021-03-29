@extends('backend.admin')
@yield('title')


@include('backend.partials.header')

@include('backend.partials.sidebar')


<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Sản phẩm</h1>
        </div>
    </div>
    <!--/.row-->

    <div class="row">
        <div class="col-xs-12 col-md-12 col-lg-12">

            <div class="panel panel-primary">
                <div class="panel-heading">Danh sách sản phẩm</div>
                <div class="panel-body">
                    <div class="bootstrap-table">
                        <div class="table-responsive">
                            <a href="{{asset('products/create')}}" class="btn btn-primary">Thêm sản phẩm</a>
                            <table class="table table-bordered" style="margin-top:20px;">
                                <thead>
                                    <tr class="bg-primary">
                                        <td>ID</td>
                                        <td>Product Name</td>
                                        <td>Ảnh sản phẩm</td>
                                        <td>Price</td>
                                        <td>Description</td>
                                        <td>Brand</td>
                                        @foreach($products as $products)
                                    <tr>
                                        <td> {{$products->id}}</td>
                                        <td> {{$products->name}}</td>
                                        <td><img width="200px" src="{{url('upload')}}/{{$products->images}}" class="thumbnail"></td>
                                        <td> {{number_format($products->price)}} VND</td>
                                        <td> {{ $products->desc }} </td>
                                        <td><?php $categories = App\Category::find($products->categories_id) ?>
                                            {{ $categories->name }}
                                        </td>
                                        <td> <a class="btn btn-success" href="{{ route('products.edit', $products->id) }}">Edit</a> </td>
                                        <td>
                                            <form action="{{ route('products.destroy', $products->id) }}" method="POST">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                                <button class="btn btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
    <!--/.row-->
</div>