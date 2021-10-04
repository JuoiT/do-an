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
                    <h4 class="card-title">Edit Shipping</h4>
                    <form action="{{route('ship.update', $ship->id)}}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf

                        <input type="hidden" value="{{$ship->id}}" name="id">
                        <div class="row">
                            <div class="input-field col s12">
                                <input type="text" value="{{$ship->name}}" name="name" placeholder="Name">
                                <label class="active">Name</label>
                                @if($errors->has('name'))
                                <span style="color: orangered;">{{$errors->first('name')}}</span>
                                @endif
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12">
                                <input type="text" id="price" value="{{$ship->price}}" name="price" placeholder="Price">
                                <label class="active">Price</label>
                                @if($errors->has('price'))
                                <span style="color: orangered;">{{$errors->first('price')}}</span>
                                @endif
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12">
                                <label class="active">Status</label>
                                <p>
                                    <label>
                                        <input name="status" type="radio" value="1" checked />
                                        <span>Exist</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input name="status" type="radio" value="0" />
                                        <span>Hide</span>
                                    </label>
                                </p>
                                @if($errors->has('status'))
                                <span style="color: orangered;">{{$errors->first('status')}}</span>
                                @endif
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12">
                                <input type="text" id="description" value="{{$ship->description}}" name="description" onkeyup="ChangeToSlug()" placeholder="description">
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
