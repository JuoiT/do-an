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
                        href="{{ route('product.create') }}">Thêm mới</a>
                    {{-- <a href="{{ route('product.getTrashed') }}" class="red-text"><i class="badge red lighten-5 material-icons green-text"></i>trashed</a> --}}
                    <form class="" action="{{ route('product.index') }}" method="get">
                        @csrf
                        <div class="card-content pb-1">
                            <h4 class="card-title mt-2">Lọc sản phẩm</h4>
                            <div class="row"">
                                <div class=" row">
                                <div class="valign-wrapper col s6">
                                    <div class="pr-3">Sắp xếp</div>
                                    <select id="field" class="input-field" name="orderBy">
                                        <option {{session('forms.orderBy')=='created_at'?'selected':''}} value="created_at">Ngày thêm</option>
                                        <option {{session('forms.orderBy')=='updated_at'?'selected':''}} value="updated_at">Ngày sửa đổi</option>
                                        <option {{session('forms.orderBy')=='price'?'selected':''}} value="price">Giá bán</option>
                                        <option {{session('forms.orderBy')=='name'?'selected':''}} value="name">Tên sản phẩm</option>
                                        {{-- <option {{session('forms.orderBy')=='sale_quantity'?'selected':''}} value="sale_quantity">Số lượng bán</option> --}}
                                    </select>
                                    <select id="role" class="input-field" name="orderByRole">
                                        <option {{session('forms.orderByRole')=='0'?'selected':''}} value="0">Giảm dần</option>
                                        <option {{session('forms.orderByRole')=='1'?'selected':''}} value="1">Tăng dần</option>
                                    </select>
                                </div>
                                <div class="valign-wrapper col s3 offset-s3 mt-1">
                                    <label class="mt-1">
                                        <input type="checkbox" id="isShowTrash" value="true" name="trashed"
                                            {{ session('forms.trashed') == 'true' ? 'checked' : '' }} />
                                        <span class="list-title">Xem thùng rác</span>
                                    </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="valign-wrapper col s4">
                                    <div class="pr-3">Danh mục</div>
                                    <select id="category_id" class="input-field" name="category_id">
                                        <option value="">Tất cả</option>
                                        @foreach ($categories as $cate)
                                            <option {{session('forms.category_id')==$cate->id?'selected':''}} value="{{ $cate->id }}">{{ $cate->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="valign-wrapper col s4">
                                    <div class="pr-3">Trạng thái</div>
                                    <select id="status" class="input-field" name="status">
                                        <option value="">Tất cả</option>
                                        <option {{session('forms.status')=='1'?'selected':''}} value="1">Còn</option>
                                        <option {{session('forms.status')=='0'?'selected':''}} value="0">Hết</option>
                                    </select>
                                </div>
                                <div class="valign-wrapper col s4">
                                    <input value="{{session('forms.name')}}" type="text" name="name" id="searchValue" placeholder="Search by name" />
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn mt-2 green">Lọc sản phẩm</button>
                    </form>

                    <h4 class="card-title mt-2">Danh sách sản phẩm</h4>
                </div>
                <table class="subscription-table responsive-table highlight" id="datatable">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Price</th>
                            <th>Status</th>
                            <th>Category</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody id="tbody">
                        @foreach ($list_product as $value)
                            <tr>
                                <td>
                                    {{ $loop->index + 1 }}
                                </td>
                                <td>
                                    @if (strlen(" $value->name") > 15)
                                        {{ substr("$value->name", 0, 15) }}...
                                    @else
                                        {{ substr("$value->name", 0, 15) }}
                                    @endif
                                </td>
                                <td>
                                    <img class=" responsive-img" style="width: 150px;"
                                        src="{{ url('product-images') }}/{{ $value->image }}" alt="">
                                </td>
                                <td>
                                    <span>
                                        {{ $value->price }}
                                    </span>
                                    <br>
                                    <span class="green-text" {{ $value->sale_price == 0 ? 'hidden' : '' }}>
                                        {{ $value->sale_price }}
                                    </span>
                                </td>
                                <td>
                                    @if ($value->status == 1)
                                        <span class="badge green lighten-5 green-text text-accent-4">Còn</span>
                                    @else
                                        <span class="badge pink lighten-5 pink-text text-accent-2">Hết</span>
                                    @endif
                                </td>
                                <td>
                                    {{ $value->category->name }}
                                </td>
                                <td>
                                    <a href="{{ route('product.edit', $value->id) }}"><i
                                            class="badge green lighten-5 material-icons green-text">edit_note</i></a>
                                    <form style="display: inline-block !important;"
                                        action="{{ route('product.destroy', $value->id) }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <input type="hidden" value="{{ $value->id }}">
                                        <button style="border: none !important;"
                                            class="badge pink lighten-5 material-icons pink-text"
                                            type="submit">clear</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
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
    </div>

@stop

@section('css')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.1/css/jquery.dataTables.css">
@endsection

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
