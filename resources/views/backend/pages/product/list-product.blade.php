@extends('backend.master')

@section('main')

    @if (Session::get('success'))
        <div class="alert alert-success">
            <strong
                class="waves-effect waves-light mt-1 ml-1 btn gradient-45deg-green-teal gradient-shadow">{{ Session::get('success') }}</strong>
        </div>
    @endif

    @if (Session::get('error'))
        <div class="alert alert-danger">
            <strong
                class="waves-effect waves-light mt-1 ml-1 btn gradient-45deg-deep-orange-orange gradient-shadow">{{ Session::get('error') }}</strong>
        </div>
    @endif

    <div class="section">
        <div class="row">
            <div class="col s12 m6 l8">
                <div class="card subscriber-list-card animate fadeRight">
                    <a class="waves-effect waves-light mt-1 ml-1 btn gradient-45deg-green-teal gradient-shadow"
                        href="{{ route('product.create') }}">Add</a>

                    {{-- Form filter --}}
                    <form class="" action=" {{ route('product.index') }}" method="get">
                        @csrf
                        <div class="card-content pb-1">
                            <h4 class="card-title mt-2">Filter product</h4>
                            <div class="row">
                                <div class="row">
                                    <div class="valign-wrapper col s6">
                                        <div class="pr-3">Sort</div>
                                        <select id="field" class="input-field" name="orderBy">
                                            <option {{ session('filter.products.orderBy') == 'created_at' ? 'selected' : '' }}
                                                value="created_at">Created date</option>
                                            <option {{ session('filter.products.orderBy') == 'updated_at' ? 'selected' : '' }}
                                                value="updated_at">Updated date</option>
                                            <option {{ session('filter.products.orderBy') == 'product_price' ? 'selected' : '' }}
                                                value="product_price">Price</option>
                                            <option {{ session('filter.products.orderBy') == 'name' ? 'selected' : '' }}
                                                value="name">Name</option>
                                            <option {{session('filter.products.orderBy')=='order_details_count'?'selected':''}}
                                                value="order_details_count">Quantity order</option>
                                        </select>
                                        <select id="role" class="input-field" name="orderByRole">
                                            <option {{ session('filter.products.orderByRole') == 'desc' ? 'selected' : '' }}
                                                value="desc">Decrease</option>
                                            <option {{ session('filter.products.orderByRole') == 'asc' ? 'selected' : '' }}
                                                value="asc">Ascending</option>
                                        </select>
                                    </div>
                                    <div class="valign-wrapper col s3 offset-s3 mt-1">
                                        <label class="mt-1">
                                            <input type="checkbox" id="isShowTrash" value="true" name="trashed"
                                                {{ session('filter.products.trashed') == 'true' ? 'checked' : '' }} />
                                            <span class="list-title">Trash</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="valign-wrapper col s4">
                                        <div class="pr-3">Category</div>
                                        <select id="category_id" class="input-field" name="category_id">
                                            <option value="">All</option>
                                            @foreach ($categories as $cate)
                                                <option {{ session('filter.products.category_id') == $cate->id ? 'selected' : '' }}
                                                    value="{{ $cate->id }}">{{ $cate->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="valign-wrapper col s4">
                                        <div class="pr-3">Status</div>
                                        <select id="status" class="input-field" name="status">
                                            <option value="">All</option>
                                            <option {{ session('filter.products.status') == '1' ? 'selected' : '' }} value="1">Available</option>
                                            <option {{ session('filter.products.status') == '0' ? 'selected' : '' }} value="0">Unavailable</option>
                                        </select>
                                    </div>
                                    <div class="valign-wrapper col s4">
                                        <input value="{{ session('filter.products.name') }}" type="text" name="name"
                                            id="searchValue" placeholder="Search by name" />
                                    </div>
                                </div>
                            </div>

                        <button type="submit" class="waves-effect waves-light mt-1 ml-1 btn gradient-45deg-green-teal gradient-shadow">Filter product</button>
                    </form>

                    <h4 class="card-title mt-2">List product</h4>
                </div>
                <table class="subscription-table responsive-table highlight" id="datatable">
                    @if (count($list_product) > 0)
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Price</th>
                                <th>Status</th>
                                <th>Category</th>
                                <th>ACT</th>
                            </tr>
                        </thead>
                    @endif
                    <tbody id="tbody">
                        @if (count($list_product) > 0)
                            @foreach ($list_product as $value)
                                <tr>
                                    <td>
                                        {{ $loop->index + 1 + ($list_product->currentPage() - 1) * config("const.records") }}
                                    </td>
                                    <td>
                                        @if (mb_strlen($value->name, "utf-8") > 15)
                                            {{mb_substr($value->name,0,15, "utf-8"); }}...
                                        @else
                                            {{$value->name}}
                                        @endif
                                    </td>
                                    <td>
                                        <img class=" responsive-img" style="width: 150px;"
                                            src="{{ url('upload-images') }}/{{ $value->image }}" alt="">
                                    </td>
                                    <td>
                                        <span>
                                            {{ toUsd($value->price) }}
                                        </span>
                                        <br>
                                        <span class="green-text" {{ $value->sale_price == 0 ? 'hidden' : '' }}>
                                            {{ toUsd($value->sale_price) }}
                                        </span>
                                    </td>
                                    <td>
                                        @if ($value->status == 1)
                                            <span class="badge green lighten-5 green-text text-accent-4">Available</span>
                                        @else
                                            <span class="badge pink lighten-5 pink-text text-accent-2">Unavailable</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if (mb_strlen($value->category->name, "utf-8") > 15)
                                            {{mb_substr($value->category->name,0,15, "utf-8"); }}...
                                        @else
                                            {{ $value->category->name }}
                                        @endif
                                    </td>
                                    <td>
                                        @if (session('filter.products.trashed') == 'true')
                                            <a title="restore" href="{{ route('product-restore', $value->id) }}"><i
                                                    class="badge green lighten-5 material-icons green-text">restore</i></a>
                                        @else
                                            <a title="edit" href="{{ route('product.edit', $value->id) }}"><i
                                                    class="badge green lighten-5 material-icons green-text">edit_note</i></a>
                                            <form style="display: inline-block !important;"
                                                action="{{ route('product.destroy', $value->id) }}" method="POST">
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
                                    Nothing here!
                                </div>
                            </tr>
                        @endif
                    </tbody>
                </table>
                <div class="dataTables_paginate paging_simple_numbers" id="data-table-contact_paginate">
                    @if ($list_product->currentPage() != 1)
                        <a href="{{ $list_product->previousPageUrl() }}" class=" paginate_button previous"
                            aria-controls="data-table-contact" id="data-table-contact_previous">Previous</a>
                        <span>
                    @endif
                    @for ($i = 1; $i <= $list_product->lastpage(); $i++)
                        <a href="{{ $list_product->url($i) }}"
                            class="{{ $i == $list_product->currentPage() ? 'current' : 'd-none' }} paginate_button"
                            aria-controls="data-table-contact">{{ $i }}</a>
                    @endfor
                    @if ($list_product->currentPage() != $list_product->lastpage())
                        </span>
                        <a href="{{ $list_product->nextPageUrl() }}" class=" paginate_button next"
                            aria-controls="data-table-contact" id="data-table-contact_next">Next</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
@stop

@section('script')

    {{-- show Datatable --}}
    {{-- <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.1/js/jquery.dataTables.js"></script> --}}
    {{-- <script>
        $(document).ready(function() {
            $('#datatable').DataTable({
                "paging": false,
                // "ordering": false,
                "info": false
            });
        });
    </script> --}}

    {{-- Ajax --}}
    {{-- <script>
        $(document).ready(function() {

            function callFilter(page) {
                var url = `{{ route('product-filter', '${page}') }}`;

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                jQuery.ajax({
                    url: url,
                    method: 'post',
                    data: {
                        "_token": "{{ csrf_token() }}",
                        "isShowTrash": jQuery('#isShowTrash').is(':checked'),
                        "field": jQuery('#field').val(),
                        "role": jQuery('#role').val(),
                        "category_id": jQuery('#category_id').val(),
                        "status": jQuery('#status').val(),
                        "searchValue": jQuery('#searchValue').val()
                    },
                    success: function(result) {
                        // console.log((result['data']));
                        console.log((result));
                    }
                });
            }

            $('#isShowTrash').click(function() {
                callFilter(1);
            });
        });
    </script> --}}
@endsection
