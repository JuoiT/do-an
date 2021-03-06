@extends('backend.master')

@section('main')
    <div class="section">
        <div class="row">
            <div class="col s12 m6 l8">
                <div class="card subscriber-list-card animate fadeRight">
                    <a class="waves-effect waves-light mt-1 ml-1 btn gradient-45deg-green-teal gradient-shadow"
                        href="{{ route('category.create') }}">Add</a>

                    {{-- Form filter --}}
                    <form class="" action=" {{ route('category.index') }}" method="get">
                        @csrf
                        <div class="card-content pb-1">
                            <h4 class="card-title mt-2">Filter category</h4>
                            <div class="row">
                                <div class="row">
                                    <div class="valign-wrapper col s6">
                                        <div class="pr-3">Sort</div>
                                        <select id="field" class="input-field" name="orderBy">
                                            <option
                                                {{ session('filter.categories.orderBy') == 'created_at' ? 'selected' : '' }}
                                                value="created_at">Created date</option>
                                            <option
                                                {{ session('filter.categories.orderBy') == 'updated_at' ? 'selected' : '' }}
                                                value="updated_at">Updated date</option>
                                            <option {{ session('filter.categories.orderBy') == 'name' ? 'selected' : '' }}
                                                value="name">Name</option>
                                            <option
                                                {{ session('filter.categories.orderBy') == 'products_count' ? 'selected' : '' }}
                                                value="products_count">Quantity product</option>
                                        </select>
                                        <select id="role" class="input-field" name="orderByRole">
                                            <option
                                                {{ session('filter.categories.orderByRole') == 'desc' ? 'selected' : '' }}
                                                value="desc">Decrease</option>
                                            <option
                                                {{ session('filter.categories.orderByRole') == 'asc' ? 'selected' : '' }}
                                                value="asc">Ascending</option>
                                        </select>
                                    </div>
                                    <div class="valign-wrapper col s3 offset-s3 mt-1">
                                        <label class="mt-1">
                                            <input type="checkbox" id="isShowTrash" value="true" name="trashed"
                                                {{ session('filter.categories.trashed') == 'true' ? 'checked' : '' }} />
                                            <span class="list-title">Trash</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="valign-wrapper col s4">
                                        <div class="pr-3">Status</div>
                                        <select id="status" class="input-field" name="status">
                                            <option value="">All</option>
                                            <option {{ session('filter.categories.status') == '1' ? 'selected' : '' }}
                                                value="1">Available
                                            </option>
                                            <option {{ session('filter.categories.status') == '0' ? 'selected' : '' }}
                                                value="0">Unavailable
                                            </option>
                                        </select>
                                    </div>
                                    <div class="valign-wrapper col s8">
                                        <input value="{{ session('filter.categories.name') }}" type="text" name="name"
                                            id="searchValue" placeholder="Search by name" />
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="waves-effect waves-light mt-1 ml-1 btn gradient-45deg-green-teal gradient-shadow">Filter category</button>
                    </form>

                    <div class="card-content pb-1">
                        <h4 class="card-title mb-0">List category</h4>
                    </div>
                    <table class="subscription-table responsive-table highlight">
                        <thead>
                            @if (count($list_category) > 0)
                                <tr>
                                    <th>STT</th>
                                    <th>Name</th>
                                    <th>Status</th>
                                    <th>Quantity product</th>
                                    <th>ACT</th>
                                </tr>
                            @endif
                        </thead>
                        <tbody>
                            @if (count($list_category) > 0)
                                @foreach ($list_category as $value)
                                    <tr>
                                        {{-- 5 l?? s??? b???n ghi tr??n 1 trang --}}
                                        <td>{{ $loop->index + 1 + ($list_category->currentPage() - 1) * 5 }}</td>
                                        <td>
                                        @if (mb_strlen($value->name, "utf-8") > 25)
                                            {{mb_substr($value->name,0,25, "utf-8"); }}...
                                        @else
                                            {{$value->name}}
                                        @endif
                                    </td>
                                        <td>
                                            @if ($value->status == 1)
                                                <span class="badge green lighten-5 green-text text-accent-4">Available</span>
                                            @else
                                                <span class="badge pink lighten-5 pink-text text-accent-2">Unavailable</span>
                                            @endif
                                        </td>
                                        <td>{{ $value->products_count }}</td>
                                        <td>
                                            @if (session('filter.categories.trashed') == 'true')
                                                <a title="restore" href="{{ route('category-restore', $value->id) }}"><i
                                                        class="badge green lighten-5 material-icons green-text">restore</i></a>
                                            @else
                                                <a title="edit" href="{{ route('category.edit', $value->id) }}"><i
                                                        class="badge green lighten-5 material-icons green-text">edit_note</i></a>
                                                <form style="display: inline-block !important;"
                                                    action="{{ route('category.destroy', $value->id) }}" method="POST">
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
                        @if ($list_category->currentPage() != 1)
                            <a href="{{ $list_category->previousPageUrl() }}" class=" paginate_button previous"
                                aria-controls="data-table-contact" id="data-table-contact_previous">Previous</a>
                            <span>
                        @endif
                        @for ($i = 1; $i <= $list_category->lastpage(); $i++)
                            <a href="{{ $list_category->url($i) }}"
                                class="{{ $i == $list_category->currentPage() ? 'current' : 'd-none' }} paginate_button"
                                aria-controls="data-table-contact">{{ $i }}</a>
                        @endfor
                        @if ($list_category->currentPage() != $list_category->lastpage())
                            </span>
                            <a href="{{ $list_category->nextPageUrl() }}" class=" paginate_button next"
                                aria-controls="data-table-contact" id="data-table-contact_next">Next</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop
