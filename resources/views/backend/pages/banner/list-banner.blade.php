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
                    @if (count($list_banner) > 0)
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Link</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                    @endif
                    <tbody>
                        @if (count($list_banner) > 0)
                            @foreach($list_banner as $value)
                            <tr>
                                <td>
                                    {{$loop->index+1}}
                                </td>
                                <td>
                                    {{$value->name}}
                                </td>
                                <td>
                                    <img style="width: 250px;" src="{{url('upload-banner')}}/{{$value->image}}" alt="">
                                </td>
                                <td>
                                    {{$value->link}}
                                </td>
                                <td>
                                    @if($value->status==1)
                                    <span class="badge green lighten-5 green-text text-accent-4">Hiện</span>
                                    @else
                                    <span class="badge pink lighten-5 pink-text text-accent-2">Ẩn</span>
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
                        @else
                            <tr>
                                <div style="padding: 10px; text-align: center; font-size: 20px; color:rgb(155, 0, 0)">
                                    Không tìm thấy bản ghi nào!
                                </div>
                            </tr>
                        @endif
                    </tbody>
                </table>
                <div class="dataTables_paginate paging_simple_numbers" id="data-table-contact_paginate">
                    @if($list_banner->currentPage() != 1)
                    <a href="{{$list_banner->previousPageUrl()}}" class=" paginate_button previous" aria-controls="data-table-contact" id="data-table-contact_previous">Previous</a>
                    <span>
                    @endif
                    @for($i=1; $i<=$list_banner->lastpage(); $i++)
                        <a href="{{$list_banner->url($i)}}" class="{{$i == $list_banner->currentPage() ? 'current' : 'd-none'}} paginate_button" aria-controls="data-table-contact" >{{$i}}</a>
                    @endfor
                    @if($list_banner->currentPage() != $list_banner->lastpage())
                    </span>
                    <a href="{{$list_banner->nextPageUrl()}}" class=" paginate_button next" aria-controls="data-table-contact" id="data-table-contact_next">Next</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

@stop
