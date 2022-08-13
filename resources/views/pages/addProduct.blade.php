@extends('layouts.admin')
@section('main-content')

<div class="row">
    <div class="col-xs-12 col-md-12 col-lg-12">
        
        <div class="panel panel-primary">
            <div class="panel-heading"><h1>Add Product</h1></div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input!
                    <br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="panel-body">
                <form action="{{route('products.add')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row" style="margin-bottom:40px">
                        <div class="col-xs-8">
                            <div class="form-group" >
                                <label>Name Product</label>
                                <input required type="text" name="name" class="form-control">
                            </div>
                            <div class="form-group" >
                                <label>Images</label>
                                <input required id="img" type="file" name="image" class="form-control hidden" >
                            </div>
                            <div class="form-group" >
                                <label>Price</label>
                                <input required type="number" name="price" class="form-control">
                            </div>
                            <div class="form-group" >
                                <label>Description</label>
                                <textarea required name="description"></textarea>
                            </div>
                            <div class="form-group" >
                                <label>Category</label>
                                <select required name="category_id" class="form-control">
                                    @foreach($categories as $cat)
                                        
                                        <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                        
                                    @endforeach
                                    
                                </select>
                            </div>
                            
                            <input type="submit" name="submit" value="Add New" class="btn btn-primary">
                            <a href="{{route('products.index')}}" class="btn btn-danger">Cancel</a>
                        </div>
                    </div>
                </form>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
@endsection