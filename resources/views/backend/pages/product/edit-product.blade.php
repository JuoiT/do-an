@extends('backend.master')

@section('main')

@if(Session::get('error'))
<div class="alert alert-danger">
    <strong class="waves-effect waves-light mt-1 ml-1 btn gradient-45deg-deep-orange-orange gradient-shadow">{{Session::get('error')}}</strong>
</div>
@endif

<div class="section">
    <div class="row">
        <div class="col s12 m6 l8">
            <div id="placeholder" class="card card card-default scrollspy">
                <div class="card-content">
                    <h4 class="card-title">Sửa sản phẩm</h4>
                    <form action="{{route('product.update', $product->id)}}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf

                        <input type="hidden" value="{{$product->id}}" name="id">
                        <div class="row">
                            <div class="input-field col s12">
                                <input type="text" id="name" value="{{$product->name}}" name="name" onkeyup="ChangeToSlug()" placeholder="Name">
                                <label class="active">Name</label>
                                @if($errors->has('name'))
                                <span style="color: orangered;">{{$errors->first('name')}}</span>
                                @endif
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12 m7">
                                <label class="active">Image</label>
                                <input type="file" name="image" id="input-file-now" class="dropify" />
                                @if($errors->has('image'))
                                <span style="color: orangered;">{{$errors->first('image')}}</span>
                                @endif
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12">
                                <input type="text" id="price" value="{{$product->price}}" name="price" placeholder="Price">
                                <label class="active">Price</label>
                                @if($errors->has('price'))
                                <span style="color: orangered;">{{$errors->first('price')}}</span>
                                @endif
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12">
                                <input type="text" id="sale_price" value="{{$product->sale_price}}" name="sale_price" placeholder="Sale Price">
                                <label class="active">Sale Price</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12">
                                <input type="text" id="slug" value="{{$product->slug}}" name="slug" onkeyup="ChangeToSlug()" placeholder="Slug">
                                <label class="active">Slug</label>
                                @if($errors->has('slug'))
                                <span style="color: orangered;">{{$errors->first('slug')}}</span>
                                @endif
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12">
                                <label class="active">Status</label>
                                <p>
                                    <label>
                                        @if($product->status == 1)
                                        <input name="status" type="radio" value="1" checked />
                                        @else
                                        <input name="status" type="radio" value="1" />
                                        @endif
                                        <span>Còn</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        @if($product->status == 0)
                                        <input name="status" type="radio" value="0" checked />
                                        @else
                                        <input name="status" type="radio" value="0" />
                                        @endif
                                        <span>Hết</span>
                                    </label>
                                </p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12">
                                <label class="active">Famous</label>
                                <p>
                                    <label>
                                        @if($product->famous == 1)
                                        <input name="famous" type="radio" value="1" checked />
                                        @else
                                        <input name="famous" type="radio" value="1" />
                                        @endif
                                        <span>Có</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        @if($product->famous == 0)
                                        <input name="famous" type="radio" value="0" checked />
                                        @else
                                        <input name="famous" type="radio" value="0" />
                                        @endif
                                        <span>Không</span>
                                    </label>
                                </p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12">
                                <label class="active">Category</label>
                                <div class="select-wrapper">
                                    <select name="category_id" id="input">
                                        @foreach($category as $value)
                                        @if($product->category_id == $value->id)
                                        <option value="{{$value->id}}" selected>{{$value->name}}</option>
                                        @else
                                        <option value="{{$value->id}}">{{$value->name}}</option>
                                        @endif
                                        @endforeach
                                    </select>
                                </div>
                                @if($errors->has('category_id'))
                                <span style="color: orangered;">{{$errors->first('category_id')}}</span>
                                @endif
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12">
                                <input type="text" id="description" value="{{$product->description}}" name="description" onkeyup="ChangeToSlug()" placeholder="description">
                                <label class="active">Description</label>
                                @if($errors->has('description'))
                                <span style="color: orangered;">{{$errors->first('description')}}</span>
                                @endif
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12">
                                <button class="btn waves-effect waves-light gradient-45deg-green-teal gradient-shadow right" type="submit">Submit
                                    <i class="material-icons right">send</i>
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@stop
