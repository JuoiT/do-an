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
                <a class="waves-effect waves-light mt-1 ml-1 btn gradient-45deg-green-teal gradient-shadow" href="{{route('ship.create')}}">Add</a>
                <div class="card-content pb-1">
                    <h4 class="card-title mb-0">List shipping</h4>
                </div>
                <table class="subscription-table responsive-table highlight">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($list_ship as $value)
                        <tr>
                            <td>
                                {{$loop->index+1}}
                            </td>
                            <td>
                                {{$value->name}}
                            </td>
                            <td>
                                {{$value->price}}
                            </td>
                            <td>
                                @if($value->status==1)
                                <span class="badge green lighten-5 green-text text-accent-4">Exist</span>
                                @else
                                <span class="badge pink lighten-5 pink-text text-accent-2">Hide</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{route('ship.edit', $value->id)}}"><i class="badge green lighten-5 material-icons green-text">edit_note</i></a>
                                <form style="display: inline-block !important;"
                                    action="{{route('ship.destroy', $value->id)}}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <input type="hidden" value="{{$value->id}}">
                                    <button title="move to trash" style="border: none !important; padding: 0" class="badge pink lighten-5 material-icons pink-text" type="submit">clear</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="dataTables_paginate paging_simple_numbers" id="data-table-contact_paginate">
                    @if($list_ship->currentPage() != 1)
                    <a href="{{$list_ship->previousPageUrl()}}" class=" paginate_button previous" aria-controls="data-table-contact" id="data-table-contact_previous">Previous</a>
                    <span>
                    @endif
                    @for($i=1; $i<=$list_ship->lastpage(); $i++)
                        <a href="{{$list_ship->url($i)}}" class="{{$i == $list_ship->currentPage() ? 'current' : 'd-none'}} paginate_button" aria-controls="data-table-contact" >{{$i}}</a>
                    @endfor
                    @if($list_ship->currentPage() != $list_ship->lastpage())
                    </span>
                    <a href="{{$list_ship->nextPageUrl()}}" class=" paginate_button next" aria-controls="data-table-contact" id="data-table-contact_next">Next</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

@stop
