@extends('backend.master')

@section('main')

@if(Session::get('success'))
<div class="alert alert-success">
    <strong class="waves-effect waves-light mt-1 ml-1 btn gradient-45deg-green-teal gradient-shadow">{{Session::get('success')}}</strong>
</div>
@endif

@if(Session::get('error'))
<div class="alert alert-danger">
    <strong class="waves-effect waves-light mt-1 ml-1 btn gradient-45deg-deep-orange-orange gradient-shadow">{{Session::get('error')}}</strong>
</div>
@endif

<div class="section">
    <div class="row">
        <div class="col s12 m6 l8">
            <div class="card subscriber-list-card animate fadeRight">
                <a class="waves-effect waves-light mt-1 ml-1 btn gradient-45deg-green-teal gradient-shadow" href="{{route('banner.create')}}">Thêm mới</a>
                <div class="card-content pb-1">
                    <h4 class="card-title mb-0">Danh sách banner</h4>
                </div>
                <table class="subscription-table responsive-table highlight">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Sale off</th>
                            <th>Proviso</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($list_banner as $value)
                        <tr>
                            <td>
                                {{$loop->index+1}}
                            </td>
                            <td>
                                @if(strlen("$value->name")>15)
                                {{substr("$value->name", 0, 15)}}...
                                @else
                                {{substr("$value->name", 0, 15)}}
                                @endif
                            </td>
                            <td>
                                <img style="width: 250px;" src="{{url('upload-banner')}}/{{$value->image}}" alt="">
                            </td>
                            <td>
                                {{$value->sale_off}}%
                            </td>
                            <td>
                                @if(strlen("$value->proviso")>25)
                                {{substr("$value->proviso", 0, 25)}}...
                                @else
                                {{substr("$value->proviso", 0, 25)}}
                                @endif
                            </td>
                            <td>
                                <a href="{{route('banner.edit', $value->id)}}"><i class="badge green lighten-5 material-icons green-text">edit_note</i></a>
                                <form style="display: inline-block !important;"
                                    action="{{route('banner.destroy', $value->id)}}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <input type="hidden" value="{{$value->id}}">
                                    <button style="border: none !important;" class="badge pink lighten-5 material-icons pink-text" type="submit">clear</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@stop
