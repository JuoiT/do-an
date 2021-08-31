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
                    <h4 class="card-title">Sửa banner</h4>
                    <form action="{{route('banner.update', $banner->id)}}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf

                        <input type="hidden" value="{{$banner->id}}" name="id">
                        <div class="row">
                            <div class="input-field col s12">
                                <input type="text" value="{{$banner->name}}" name="name" placeholder="Name">
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
                                <input type="number" value="{{$banner->sale_off}}" name="sale_off" placeholder="Sale off">
                                <label class="active">Sale off</label>
                                @if($errors->has('sale_off'))
                                <span style="color: orangered;">{{$errors->first('sale_off')}}</span>
                                @endif
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12">
                                <input type="text" value="{{$banner->proviso}}" name="proviso" placeholder="Proviso">
                                <label class="active">Proviso</label>
                                @if($errors->has('proviso'))
                                <span style="color: orangered;">{{$errors->first('proviso')}}</span>
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
