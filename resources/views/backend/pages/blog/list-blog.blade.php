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
                    href="{{route('blog.create')}}">Add</a>
                {{-- Form filter --}}
                <form class="" action=" {{ route('blog.index') }}" method="get">
                    @csrf
                    <div class="card-content pb-1">
                        <h4 class="card-title mt-2">Filter blog</h4>
                        <div class="row">
                            <div class="row">
                                <div class="valign-wrapper col s6">
                                    <div class="pr-3">Sort</div>
                                    <select id="field" class="input-field" name="orderBy">
                                        <option
                                            {{ session('filter.blogs.orderBy') == 'created_at' ? 'selected' : '' }}
                                            value="created_at">Created date</option>
                                        <option
                                            {{ session('filter.blogs.orderBy') == 'author' ? 'selected' : '' }}
                                            value="author">Author</option>
                                        <option
                                            {{ session('filter.blogs.orderBy') == 'title' ? 'selected' : '' }}
                                            value="title">Title</option>
                                    </select>
                                    <select id="role" class="input-field" name="orderByRole">
                                        <option {{ session('filter.blogs.orderByRole') == 'desc' ? 'selected' : '' }}
                                            value="desc">Decrease</option>
                                        <option {{ session('filter.blogs.orderByRole') == 'asc' ? 'selected' : '' }}
                                            value="asc">Ascending</option>
                                    </select>
                                </div>
                                <div class="valign-wrapper col s3 offset-s3 mt-1">
                                    <label class="mt-1">
                                        <input type="checkbox" id="isShowTrash" value="true" name="trashed"
                                            {{ session('filter.blogs.trashed') == 'true' ? 'checked' : '' }} />
                                        <span class="list-title">Trash</span>
                                    </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="valign-wrapper col s4">
                                    <div class="pr-3">Status</div>
                                    <select id="status" class="input-field" name="status">
                                        <option value="">All</option>
                                        <option {{ session('filter.blogs.status') == '1' ? 'selected' : '' }}
                                            value="1">Available</option>
                                        <option {{ session('filter.blogs.status') == '0' ? 'selected' : '' }}
                                            value="0">Unavailable</option>
                                    </select>
                                </div>
                                <div class="valign-wrapper col s4">
                                    <input value="{{ session('filter.blogs.name') }}" type="text" name="name"
                                        id="searchValue" placeholder="Search by name"/>
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="waves-effect waves-light mt-1 ml-1 btn gradient-45deg-green-teal gradient-shadow">Filter blog</button>
                    </div>
                </form>
                <div class="card-content pb-1">
                    <h4 class="card-title mb-0">List blog</h4>
                </div>
                <table class="subscription-table responsive-table highlight">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Title</th>
                            <th>Avatar</th>
                            <th>Author</th>
                            <th>Status</th>
                            <th>Act</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($list_blog as $value)
                        <tr>
                            <td>
                            {{ $loop->index + 1 + ($list_blog->currentPage() - 1) * config("const.records") }}
                            </td>
                            <td>
                                @if(strlen("$value->title")>15)
                                {{substr("$value->title", 0, 15)}}...
                                @else
                                {{substr("$value->title", 0, 15)}}
                                @endif
                            </td>
                            <td>
                                <img class=" responsive-img" style="width: 150px;"
                                    src="{{url('upload-blogs')}}/{{$value->avatar}}" alt="">
                            </td>
                            <td>
                                {{$value->author}}
                            </td>
                            <td>
                                @if($value->status==1)
                                <span class="badge green lighten-5 green-text text-accent-4">Available</span>
                                @else
                                <span class="badge pink lighten-5 pink-text text-accent-2">Unavailable</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{route('blog.edit', $value->id)}}"><i
                                        class="badge green lighten-5 material-icons green-text">edit_note</i></a>
                                <form style="display: inline-block !important;"
                                    action="{{route('blog.destroy', $value->id)}}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <input type="hidden" value="{{$value->id}}">
                                    <button title="move to trash" style="border: none !important; padding: 0"
                                        class="badge pink lighten-5 material-icons pink-text"
                                        type="submit">clear</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="dataTables_paginate paging_simple_numbers" id="data-table-contact_paginate">
                    @if ($list_blog->currentPage() != 1)
                    <a href="{{ $list_blog->previousPageUrl() }}" class=" paginate_button previous"
                        aria-controls="data-table-contact" id="data-table-contact_previous">Previous</a>
                    <span>
                        @endif
                        @for ($i = 1; $i <= $list_blog->lastpage(); $i++)
                            <a href="{{ $list_blog->url($i) }}"
                                class="{{ $i == $list_blog->currentPage() ? 'current' : 'd-none' }} paginate_button"
                                aria-controls="data-table-contact">{{ $i }}</a>
                            @endfor
                            @if ($list_blog->currentPage() != $list_blog->lastpage())
                    </span>
                    <a href="{{ $list_blog->nextPageUrl() }}" class=" paginate_button next"
                        aria-controls="data-table-contact" id="data-table-contact_next">Next</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

@stop
