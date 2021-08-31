@extends('backend.master')

@section('main')

@if(Session::get('success'))
<div class="alert alert-success">
    <strong
        class="waves-effect waves-light mt-1 ml-1 btn gradient-45deg-green-teal gradient-shadow">{{Session::get('success')}}</strong>
</div>
@endif

@if(Session::get('error'))
<div class="alert alert-danger">
    <strong
        class="waves-effect waves-light mt-1 ml-1 btn gradient-45deg-deep-orange-orange gradient-shadow">{{Session::get('error')}}</strong>
</div>
@endif

<div class="section">
    <div class="row">
        <div class="col s12 m6 l8">
            <div class="card subscriber-list-card animate fadeRight">
                <a class="waves-effect waves-light mt-1 ml-1 btn gradient-45deg-green-teal gradient-shadow"
                    href="{{route('category.create')}}">Thêm mới</a>
                <div class="card-content pb-1">
                    <h4 class="card-title mb-0">Danh sách danh mục</h4>
                </div>
                <table class="subscription-table responsive-table highlight">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Status</th>
                            <th>Slug</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($list_category as $value)
                        <tr>
                            <td>{{$value->name}}</td>
                            <td>@if($value->status==1)<span
                                    class="badge green lighten-5 green-text text-accent-4">Còn</span>
                                @else<span class="badge pink lighten-5 pink-text text-accent-2">Hết</span>
                                @endif</td>
                            <td>{{$value->slug}}</td>
                            <td><a href="{{route('category.edit', $value->id)}}"><i class="badge green lighten-5 material-icons green-text">edit_note</i></a>
                                <form style="display: inline-block !important;" action="{{route('category.destroy', $value->id)}}" method="POST">
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
