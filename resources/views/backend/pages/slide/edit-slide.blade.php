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
                    <h4 class="card-title">Edit slide</h4>
                    <form action="{{route('slide.update', $slide->id)}}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf

                        <input type="hidden" value="{{$slide->id}}" name="id">
                        <div class="row">
                            <div class="input-field col s12">
                                <input type="text" value="{{$slide->name}}" name="name" placeholder="Name">
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
                                <input type="text" value="{{$slide->content}}" name="content" placeholder="Content">
                                <label class="active">Content</label>
                                @if($errors->has('content'))
                                <span style="color: orangered;">{{$errors->first('content')}}</span>
                                @endif
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12">
                                <input type="text" value="{{$slide->caption}}" name="caption" placeholder="Caption">
                                <label class="active">Caption</label>
                                @if($errors->has('caption'))
                                <span style="color: orangered;">{{$errors->first('caption')}}</span>
                                @endif
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12">
                                <input type="text" value="{{$slide->link}}" name="link" placeholder="Link">
                                <label class="active">Link</label>
                                @if($errors->has('link'))
                                <span style="color: orangered;">{{$errors->first('link')}}</span>
                                @endif
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12">
                                <input type="datetime-local" value="{{$slide->time}}" name="time" placeholder="Time">
                                <label class="active">Time</label>
                                @if($errors->has('time'))
                                <span style="color: orangered;">{{$errors->first('time')}}</span>
                                @endif
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12">
                                <label class="active">Status</label>
                                <p>
                                    <label>
                                        <input name="status" type="radio" value="1" {{((old('status')?old('status'):$slide->status))=='1'?'checked':''}}/>
                                        <span>Exist</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input name="status" type="radio" value="0" {{((old('status')?old('status'):$slide->status))=='0'?'checked':''}}/>
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
