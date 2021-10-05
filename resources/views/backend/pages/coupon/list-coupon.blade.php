@extends('backend.master')

@section('main')
    <div class="section">
        <div class="row">
            <div class="col s12 m6 l8">
                <div class="card subscriber-list-card animate fadeRight">
                    <a class="waves-effect waves-light mt-1 ml-1 btn gradient-45deg-green-teal gradient-shadow"
                        href="{{ route('coupon.create') }}">Add new</a>

                    {{-- Form filter --}}
                    <form class="" action=" {{ route('coupon.index') }}" method="get">
                        @csrf
                        <div class="card-content pb-1">
                            <h4 class="card-title mt-2">Filter coupon</h4>
                            <div class="row">
                                <div class="row">
                                    <div class="valign-wrapper col s6">
                                        <div class="pr-3">Sort</div>
                                        <select id="field" class="input-field" name="orderBy">
                                            <option {{ session('filter.coupons.orderBy') == 'created_at' ? 'selected' : '' }}
                                                value="created_at">Created date</option>
                                            <option {{ session('filter.coupons.orderBy') == 'start_at' ? 'selected' : '' }}
                                                value="start_at">Start date</option>
                                            <option {{ session('filter.coupons.orderBy') == 'end_at' ? 'selected' : '' }}
                                                value="end_at">End date</option>
                                            <option {{ session('filter.coupons.orderBy') == 'value' ? 'selected' : '' }}
                                                value="value">Money</option>
                                            <option {{ session('filter.coupons.orderBy') == 'apply' ? 'selected' : '' }}
                                                value="apply">Apply</option>
                                            <option {{ session('filter.coupons.orderBy') == 'limit' ? 'selected' : '' }}
                                                value="limit">Quantity</option>
                                        </select>
                                        <select id="role" class="input-field" name="orderByRole">
                                            <option {{ session('filter.coupons.orderByRole') == 'desc' ? 'selected' : '' }}
                                                value="desc">Reduced</option>
                                            <option {{ session('filter.coupons.orderByRole') == 'asc' ? 'selected' : '' }}
                                                value="asc">Increase</option>
                                        </select>
                                    </div>
                                    <div class="valign-wrapper col s3 offset-s3 mt-1">
                                        <label class="mt-1">
                                            <input type="checkbox" id="isShowTrash" value="true" name="trashed"
                                                {{ session('filter.coupons.trashed') == 'true' ? 'checked' : '' }} />
                                            <span class="list-title">See trash</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="valign-wrapper col s4">
                                        <div class="pr-3">Status</div>
                                        <select id="status" class="input-field" name="status">
                                            <option value="">All</option>
                                            <option {{ session('filter.coupons.status') == '1' ? 'selected' : '' }}
                                                value="1">Available
                                            </option>
                                            <option {{ session('filter.coupons.status') == '0' ? 'selected' : '' }}
                                                value="0">Unavailable
                                            </option>
                                        </select>
                                    </div>
                                    <div class="valign-wrapper col s8">
                                        <input value="{{ session('filter.coupons.name') }}" type="text" name="name"
                                            id="searchValue" placeholder="Search by name"/>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="waves-effect waves-light mt-1 ml-1 btn gradient-45deg-green-teal gradient-shadow">Filter</button>
                    </form>

                    <div class="card-content pb-1">
                        <h4 class="card-title mb-0">List coupon</h4>
                    </div>
                    <table class="subscription-table responsive-table highlight">
                        <thead>
                            @if (count($list_coupon) > 0)
                                <tr>
                                    <th>Ordinal</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Status</th>
                                    <th>Value</th>
                                    <th>Apply</th>
                                    <th>Limit</th>
                                    <th>Code</th>
                                    <th>Start</th>
                                    <th>End</th>
                                    <th>ACT</th>
                                </tr>
                            @endif
                        </thead>
                        <tbody>
                            @if (count($list_coupon) > 0)
                                @foreach ($list_coupon as $value)
                                    <tr>
                                        {{-- 5 là số bản ghi trên 1 trang --}}
                                        <td>{{ $loop->index + 1 + ($list_coupon->currentPage() - 1) * 5 }}</td>
                                        <td>
                                        @if (mb_strlen($value->name, "utf-8") > 25)
                                            {{mb_substr($value->name,0,25, "utf-8"); }}...
                                        @else
                                            {{$value->name}}
                                        @endif
                                        </td>
                                        <td>{{ $value->description }}</td>
                                        <td>
                                            @if ($value->status == 1)
                                                <span class="badge green lighten-5 green-text text-accent-4">Available</span>
                                            @else
                                                <span class="badge pink lighten-5 pink-text text-accent-2">Unavailable</span>
                                            @endif
                                        </td>
                                        <td>${{$value->value}}</td>
                                        <td>${{$value->apply}}</td>
                                        <td>{{$value->limit}}</td>
                                        <td>{{$value->code}}</td>
                                        <td>{{$value->start_at}}</td>
                                        <td>{{$value->end_at}}</td>
                                        <td>
                                            @if (session('filter.coupons.trashed') == 'true')
                                                <a title="restore" href="{{ route('coupon-restore', $value->id) }}"><i
                                                        class="badge green lighten-5 material-icons green-text">restore</i></a>
                                            @else
                                                <a title="edit" href="{{ route('coupon.edit', $value->id) }}"><i
                                                        class="badge green lighten-5 material-icons green-text">edit_note</i></a>
                                                <form style="display: inline-block !important;"
                                                    action="{{ route('coupon.destroy', $value->id) }}" method="POST">
                                                    @method('DELETE')
                                                    @csrf
                                                    <input type="hidden" value="{{ $value->id }}">
                                                    <button title="move to trash" style="border: none !important; padding: 0"
                                                        class="badge pink lighten-5 material-icons pink-text"
                                                        type="submit">clear</button>
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
                        @if ($list_coupon->currentPage() != 1)
                            <a href="{{ $list_coupon->previousPageUrl() }}" class=" paginate_button previous"
                                aria-controls="data-table-contact" id="data-table-contact_previous">Previous</a>
                            <span>
                        @endif
                        @for ($i = 1; $i <= $list_coupon->lastpage(); $i++)
                            <a href="{{ $list_coupon->url($i) }}"
                                class="{{ $i == $list_coupon->currentPage() ? 'current' : 'd-none' }} paginate_button"
                                aria-controls="data-table-contact">{{ $i }}</a>
                        @endfor
                        @if ($list_coupon->currentPage() != $list_coupon->lastpage())
                            </span>
                            <a href="{{ $list_coupon->nextPageUrl() }}" class=" paginate_button next"
                                aria-controls="data-table-contact" id="data-table-contact_next">Next</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop
