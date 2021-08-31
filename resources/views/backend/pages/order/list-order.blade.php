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
                <div class="card-content pb-1">
                    <h4 class="card-title mb-0">Danh sách order</h4>
                </div>
                <table class="subscription-table responsive-table highlight">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Total Amount</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($list_order as $value)
                        <tr>
                            <td>
                                {{$loop->index+1}}
                            </td>
                            <td>
                                {{$value->user->name}}
                            </td>
                            <td>
                                {{$value->phone}}
                            </td>
                            <td>
                                {{$value->address}}
                            </td>
                            <td>
                                {{number_format($value->total_amount)}} đ
                            </td>
                            <td>
                                {{$value->created_at}}
                            </td>
                            <td>
                                @if($value->status==1)
                                <span class="badge green lighten-5 green-text text-accent-4">Đã hoàn thành</span>
                                @else
                                <span class="badge pink lighten-5 pink-text text-accent-2">Chưa hoàn thành</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{route('order.show', $value->id)}}" class="badge green lighten-5 green-text text-accent-4">Detail</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="dataTables_paginate paging_simple_numbers" id="data-table-contact_paginate">
                    @if($list_order->currentPage() != 1)
                    <a href="{{$list_order->previousPageUrl()}}" class=" paginate_button previous" aria-controls="data-table-contact" id="data-table-contact_previous">Previous</a>
                    <span>
                    @endif
                    @for($i=1; $i<=$list_order->lastpage(); $i++)
                        <a href="{{$list_order->url($i)}}" class="{{$i == $list_order->currentPage() ? 'current' : 'd-none'}} paginate_button" aria-controls="data-table-contact" >{{$i}}</a>
                    @endfor
                    @if($list_order->currentPage() != $list_order->lastpage())
                    </span>
                    <a href="{{$list_order->nextPageUrl()}}" class=" paginate_button next" aria-controls="data-table-contact" id="data-table-contact_next">Next</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

@stop
