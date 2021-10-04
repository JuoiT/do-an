@extends('backend.master')

@section('main')

@if(Session::get('error'))
<div class="alert alert-danger">
    <strong
        class="waves-effect waves-light mt-1 ml-1 btn gradient-45deg-deep-orange-orange gradient-shadow">{{Session::get('error')}}</strong>
</div>
@endif

<div class="section">
    <div class="row">
        <div class="col s12 m6 l8">
            <div id="placeholder" class="card card card-default scrollspy">
                <div class="card-content">
                    <h4 class="card-title">Add coupon</h4>
                    <form action="{{route('coupon.index')}}" method="POST">
                        @csrf

                        <div class="row">
                            <div class="input-field col s12">
                                <input type="text" id="name" value="{{old('name')}}" name="name" placeholder="Name">
                                <label class="active">Name</label>
                                @if($errors->has('name'))
                                <span style="color: orangered;">{{$errors->first('name')}}</span>
                                @endif
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12">
                                <input type="text" id="description" value="{{old('description')}}" name="description" placeholder="Description">
                                <label class="active">Description</label>
                                @if($errors->has('description'))
                                <span style="color: orangered;">{{$errors->first('description')}}</span>
                                @endif
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12">
                                <label class="active">Status</label>
                                <p>
                                    <label>
                                        <input name="status" type="radio" value="1"/>
                                        <span>Available</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input name="status" type="radio" value="0" checked/>
                                        <span>Unavailable</span>
                                    </label>
                                </p>
                                @if($errors->has('status'))
                                <span style="color: orangered;">{{$errors->first('status')}}</span>
                                @endif
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12">
                                <input type="number" min="0" id="value" value="{{ old('value') }}" name="value" placeholder="Value">
                                <label class="active">Value</label>
                                @if ($errors->has('value'))
                                    <span style="color: orangered;">{{ $errors->first('value') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12">
                                <input type="number" min="0" id="apply" value="{{ old('apply') }}" name="apply" placeholder="Apply">
                                <label class="active">Apply</label>
                                @if ($errors->has('apply'))
                                    <span style="color: orangered;">{{ $errors->first('apply') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12">
                                <input type="number" min="0" id="limit" value="{{ old('limit') }}" name="limit" placeholder="Limit">
                                <label class="active">Limit</label>
                                @if ($errors->has('limit'))
                                    <span style="color: orangered;">{{ $errors->first('limit') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12">
                                <input type="text" id="code" value="{{old('code')}}" name="code" placeholder="Code">
                                <label class="active">Code</label>
                                @if($errors->has('code'))
                                <span style="color: orangered;">{{$errors->first('code')}}</span>
                                @endif
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12">
                                <input type="datetime-local" value="{{old('start_at')?old('start_at):date('Y-m-d\TH:i')}}" name="start_at" placeholder="Start date">
                                <label class="active">Start date</label>
                                @if($errors->has('start_at'))
                                <span style="color: orangered;">{{$errors->first('start_at')}}</span>
                                @endif
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12">
                                <input type="datetime-local" value="{{old('end_at')}}" name="end_at" placeholder="End date">
                                <label class="active">End date</label>
                                @if($errors->has('end_at'))
                                <span style="color: orangered;">{{$errors->first('end_at')}}</span>
                                @endif
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12">
                                <button
                                    class="btn waves-effect waves-light gradient-45deg-green-teal gradient-shadow right"
                                    type="submit" name="action">Submit
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
