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
                    <h4 class="card-title mb-0">List custommer</h4>
                </div>
                <table class="subscription-table responsive-table highlight">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Infomation</th>
                            <th>Total Amount</th>
                            <th>Role</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($list_user as $value)
                        <tr>
                            <td>
                                {{$loop->index+1}}
                            </td>
                            <td>
                                {{$value->name}}
                                <br>
                                {{$value->phone}}
                                <br>
                                {{$value->address}}
                            </td>
                            <td>
                                {{toUsd($value->total_amount)}}
                            </td>
                            <td>
                                {{$value->role}}
                            </td>
                            <td>
                                @if($value->status==1)
<<<<<<< HEAD
                                <span class="badge green lighten-5 green-text text-accent-4">Activate</span>
                                @else
                                <span class="badge pink lighten-5 pink-text text-accent-2">Inactivate</span>
=======
                                <span class="badge green lighten-5 green-text text-accent-4">Active</span>
                                @else
                                <span class="badge pink lighten-5 pink-text text-accent-2">Inactive</span>
>>>>>>> 94aa2b2076858aa675fcfd89267398ee5964a8db
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="dataTables_paginate paging_simple_numbers" id="data-table-contact_paginate">
                    @if($list_user->currentPage() != 1)
                    <a href="{{$list_user->previousPageUrl()}}" class=" paginate_button previous" aria-controls="data-table-contact" id="data-table-contact_previous">Previous</a>
                    <span>
                    @endif
                    @for($i=1; $i<=$list_user->lastpage(); $i++)
                        <a href="{{$list_user->url($i)}}" class="{{$i == $list_user->currentPage() ? 'current' : 'd-none'}} paginate_button" aria-controls="data-table-contact" >{{$i}}</a>
                    @endfor
                    @if($list_user->currentPage() != $list_user->lastpage())
                    </span>
                    <a href="{{$list_user->nextPageUrl()}}" class=" paginate_button next" aria-controls="data-table-contact" id="data-table-contact_next">Next</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

@stop
