@extends('backend.master')

@section('main')

    @if (Session::get('error'))
        <div class="alert alert-danger">
            <strong
                class="waves-effect waves-light mt-1 ml-1 btn gradient-45deg-deep-orange-orange gradient-shadow">{{ Session::get('error') }}</strong>
        </div>
    @endif

    <div class="section">
        <div class="row">
            <div class="col s12 m6 l8">
                <div id="placeholder" class="card card card-default scrollspy">
                    <div class="card-content">
                        <h4 class="card-title">Add blog</h4>
                        <form action="{{ route('blog.index') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="row">
                                <div class="input-field col s12">
                                    <input type="text" id="title" value="{{ old('title') }}" name="title" placeholder="Title">
                                    <label class="active">Title</label>
                                    @if ($errors->has('title'))
                                        <span style="color: orangered;">{{ $errors->first('title') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="row">
                                <div class="input-field col s12 m7">
                                    <label class="active">Avatar</label>
                                    <input type="file" name="avatar" id="input-file-now" class="dropify" />
                                    @if ($errors->has('avatar'))
                                        <span style="color: orangered;">{{ $errors->first('avatar') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="row">
                                <div class="input-field col s12">
                                    <input type="text" id="author" value="{{old('author')?old('author'):Auth::user()->name}}" name="author" placeholder="Author">
                                    <label class="active">Author</label>
                                    @if ($errors->has('author'))
                                        <span style="color: orangered;">{{ $errors->first('author') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="row">
                                <div class="input-field col s12">
                                    <textarea id="editor" name="content" placeholder="Content">
                                        {{ old('content') }}
                                    </textarea>
                                    <label class="active">Content</label>
                                    @if ($errors->has('content'))
                                        <span style="color: orangered;">{{ $errors->first('content') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="row">
                                <div class="input-field col s12">
                                    <label class="active">Status</label>
                                    <p>
                                        <label>
                                            <input name="status" type="radio" value="1" {{(old('status')?old('status'):'1')=='1'?'checked':''}} />
                                            <span>Available</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input name="status" type="radio" value="0" {{old('status')=='0'?'checked':''}}/>
                                            <span>Unavailable</span>
                                        </label>
                                    </p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="input-field col s12">
                                    <button
                                        class="btn waves-effect waves-light gradient-45deg-green-teal gradient-shadow right"
                                        type="submit">Submit
                                        <i class="material-icons right">send</i>
                                    </button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

@stop
@section('script')
    <script src="https://cdn.ckeditor.com/ckeditor5/29.2.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .then(editor => {
                console.log(editor);
            })
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#editor2'))
            .then(editor => {
                console.log(editor);
            })
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
