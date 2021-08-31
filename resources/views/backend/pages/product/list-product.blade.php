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
                <a class="waves-effect waves-light mt-1 ml-1 btn gradient-45deg-green-teal gradient-shadow" href="{{route('product.create')}}">Thêm mới</a>
                <div class="card-content pb-1">
                    <h4 class="card-title mb-0">Danh sách sản phẩm</h4>
                </div>
                <table class="subscription-table responsive-table highlight">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Price</th>
                            <th>Sale Price</th>
                            <th>Status</th>
                            <th>Famous</th>
                            <th>Category</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($list_product as $value)
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
                                <img style="width: 150px;" src="{{url('upload')}}/{{$value->image}}" alt="">
                            </td>
                            <td>
                                {{$value->price}}
                            </td>
                            <td>
                                {{$value->sale_price}}
                            </td>
                            <td>
                                @if($value->status==1)
                                <span class="badge green lighten-5 green-text text-accent-4">Còn</span>
                                @else
                                <span class="badge pink lighten-5 pink-text text-accent-2">Hết</span>
                                @endif
                            </td>
                            <td>
                                @if($value->famous==1)
                                <span class="badge green lighten-5 green-text text-accent-4">Có</span>
                                @else
                                <span class="badge pink lighten-5 pink-text text-accent-2">Không</span>
                                @endif
                            </td>
                            <td>
                                {{$value->category->name}}
                            </td>
                            <td>
                                <a href="{{route('product.edit', $value->id)}}"><i class="badge green lighten-5 material-icons green-text">edit_note</i></a>
                                <form style="display: inline-block !important;"
                                    action="{{route('product.destroy', $value->id)}}" method="POST">
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
                <!-- <div class="dataTables_paginate paging_simple_numbers" id="data-table-contact_paginate">
                    if($list_product->currentPage() != 1)
                    <a href="($list_product->previousPageUrl())" class=" paginate_button previous" aria-controls="data-table-contact" id="data-table-contact_previous">Previous</a>
                    <span>
                    endif
                    for($i=1; $i<=$list_product->lastpage(); $i++)
                        <a href="($list_product->url($i))" class="($i == $list_product->currentPage() ? 'current' : 'd-none') paginate_button" aria-controls="data-table-contact" >($i)</a>
                    endfor
                    if($list_product->currentPage() != $list_product->lastpage())
                    </span>
                    <a href="($list_product->nextPageUrl())" class=" paginate_button next" aria-controls="data-table-contact" id="data-table-contact_next">Next</a>
                    endif
                </div> -->
            </div>
        </div>
    </div>
</div>

@stop
