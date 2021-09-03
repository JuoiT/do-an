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
                    href="{{route('payment.create')}}">Thêm mới</a>
                <div class="card-content pb-1">
                    <h4 class="card-title mb-0">Danh sách phương thức thanh toán</h4>
                </div>
                <table class="subscription-table responsive-table highlight">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($list_payment as $value)
                        <tr>
                            <td>{{$value->name}}</td>
                            <td>
                                @if($value->status==1)
                                <span class="badge green lighten-5 green-text text-accent-4">Còn</span>
                                @else
                                <span class="badge pink lighten-5 pink-text text-accent-2">Hết</span>
                                @endif
                            </td>
                            <td><a href="{{route('payment.edit', $value->id)}}"><i class="badge green lighten-5 material-icons green-text">edit_note</i></a>
                                <form style="display: inline-block !important;" action="{{route('payment.destroy', $value->id)}}" method="POST">
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
                <div class="dataTables_paginate paging_simple_numbers" id="data-table-contact_paginate">
                    @if($list_payment->currentPage() != 1)
                    <a href="{{$list_payment->previousPageUrl()}}" class=" paginate_button previous" aria-controls="data-table-contact" id="data-table-contact_previous">Previous</a>
                    <span>
                    @endif
                    @for($i=1; $i<=$list_payment->lastpage(); $i++)
                        <a href="{{$list_payment->url($i)}}" class="{{$i == $list_payment->currentPage() ? 'current' : 'd-none'}} paginate_button" aria-controls="data-table-contact" >{{$i}}</a>
                    @endfor
                    @if($list_payment->currentPage() != $list_payment->lastpage())
                    </span>
                    <a href="{{$list_payment->nextPageUrl()}}" class=" paginate_button next" aria-controls="data-table-contact" id="data-table-contact_next">Next</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

@stop
