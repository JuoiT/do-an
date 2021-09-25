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
                <a class="waves-effect waves-light mt-1 ml-1 btn gradient-45deg-green-teal gradient-shadow"
                href="{{route('slide.create')}}">Thêm mới</a>
                <div class="card-content pb-1">

                    {{-- Form filter --}}
                    <form class="" action=" {{ route('slide.index') }}" method="get">
                        @csrf
                        <div class="card-content pb-1">
                            <h4 class="card-title mt-2">Lọc slide</h4>
                            <div class="row">
                                <div class="row">
                                    <div class="valign-wrapper col s6">
                                        <div class="pr-3">Sắp xếp</div>
                                        <select id="field" class="input-field" name="orderBy">
                                            <option {{ session('filter.slides.orderBy') == 'created_at' ? 'selected' : '' }}
                                                value="created_at">Ngày thêm</option>
                                            <option {{ session('filter.slides.orderBy') == 'time' ? 'selected' : '' }}
                                                value="time">Ngày hết hạn</option>
                                            <option {{ session('filter.slides.orderBy') == 'name' ? 'selected' : '' }}
                                                value="name">Tên sản phẩm</option>
                                            <option {{session('filter.slides.orderBy')=='order_details_count'?'selected':''}}
                                                value="order_details_count">Số lượng bán</option>
                                        </select>
                                        <select id="role" class="input-field" name="orderByRole">
                                            <option {{ session('filter.slides.orderByRole') == 'desc' ? 'selected' : '' }}
                                                value="desc">Giảm dần</option>
                                            <option {{ session('filter.slides.orderByRole') == 'asc' ? 'selected' : '' }}
                                                value="asc">Tăng dần</option>
                                        </select>
                                    </div>
                                    <div class="valign-wrapper col s3 offset-s3 mt-1">
                                        <label class="mt-1">
                                            <input type="checkbox" id="isShowTrash" value="true" name="trashed"
                                                {{ session('filter.slides.trashed') == 'true' ? 'checked' : '' }} />
                                            <span class="list-title">Xem thùng rác</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="valign-wrapper col s4">
                                        <div class="pr-3">Trạng thái</div>
                                        <select id="status" class="input-field" name="status">
                                            <option value="">Tất cả</option>
                                            <option {{ session('filter.slides.status') == '1' ? 'selected' : '' }} value="1">Hiện</option>
                                            <option {{ session('filter.slides.status') == '0' ? 'selected' : '' }} value="0">Ẩn</option>
                                        </select>
                                    </div>
                                    <div class="valign-wrapper col s8">
                                        <input value="{{ session('filter.slides.name') }}" type="text" name="name" id="searchValue" placeholder="Search by name"/>
                                    </div>
                                </div>
                            </div>

                        <button type="submit" class="waves-effect waves-light mt-1 ml-1 btn gradient-45deg-green-teal gradient-shadow">Lọc slide</button>
                    </form>
                    <h4 class="card-title mb-0">Danh sách slide</h4>
                </div>
                <table class="subscription-table responsive-table highlight">
                    @if (count($list_slide) > 0)
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Content</th>
                                <th>Caption</th>
                                <th>Time</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                    @endif
                    <tbody>
                        @if (count($list_slide) > 0)
                            @foreach($list_slide as $value)
                            <tr>
                                <td>
                                    {{$loop->index+1}}
                                </td>
                                <td>
                                    {{$value->name}}
                                </td>
                                <td>
                                    <img style="width: 250px;" src="{{url('upload-slide')}}/{{$value->image}}" alt="">
                                </td>
                                <td>
                                    {{$value->content}}
                                </td>
                                <td>
                                    {{$value->caption}}
                                </td>
                                <td>
                                    {{$value->time}}
                                </td>
                                <td>
                                    @if($value->status==1)
                                    <span class="badge green lighten-5 green-text text-accent-4">Hiện</span>
                                    @else
                                    <span class="badge pink lighten-5 pink-text text-accent-2">Ẩn</span>
                                    @endif
                                </td>
                                <td>
                                    @if (session('filter.slides.trashed') == 'true')
                                        <a title="restore" href="{{ route('slide-restore', $value->id) }}">
                                            <i class="badge green lighten-5 material-icons green-text">restore</i>
                                        </a>
                                    @else
                                        <a href="{{route('slide.edit', $value->id)}}"><i class="badge green lighten-5 material-icons green-text">edit_note</i></a>
                                        <form style="display: inline-block !important;"
                                            action="{{route('slide.destroy', $value->id)}}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <input type="hidden" value="{{$value->id}}">
                                            <button style="border: none !important;" class="badge pink lighten-5 material-icons pink-text" type="submit">clear</button>
                                        </form>
                                    @endif
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
                    @if($list_slide->currentPage() != 1)
                    <a href="{{$list_slide->previousPageUrl()}}" class=" paginate_button previous" aria-controls="data-table-contact" id="data-table-contact_previous">Previous</a>
                    <span>
                    @endif
                    @for($i=1; $i<=$list_slide->lastpage(); $i++)
                        <a href="{{$list_slide->url($i)}}" class="{{$i == $list_slide->currentPage() ? 'current' : 'd-none'}} paginate_button" aria-controls="data-table-contact" >{{$i}}</a>
                    @endfor
                    @if($list_slide->currentPage() != $list_slide->lastpage())
                    </span>
                    <a href="{{$list_slide->nextPageUrl()}}" class=" paginate_button next" aria-controls="data-table-contact" id="data-table-contact_next">Next</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

@stop
