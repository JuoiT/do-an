@extends('backend.master')

@section('main')

    <div class="section">
        <div class="row">
            <div class="col s12 m6 l8">
                <div id="placeholder" class="card card card-default scrollspy">
                    <div class="card-content">
                        <h4 class="card-title">Add product</h4>
                        <form action="{{ route('product.index') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="row">
                                <div class="input-field col s12">
                                    <input type="text" id="name" value="{{ old('name') }}" name="name" placeholder="Name">
                                    <label class="active">Name</label>
                                    @if ($errors->has('name'))
                                        <span style="color: orangered;">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="row">
                                <div class="input-field col s12 m7">
                                    <label class="active">Image</label>
                                    <input type="file" name="image" id="input-file-now" class="dropify" />
                                    @if ($errors->has('image'))
                                        <span style="color: orangered;">{{ $errors->first('image') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="row">
                                <div class="input-field col s12 m7">
                                    <label class="active">Description Image</label>
                                    <input type="file" name="des_image[]" id="input-file-now" class="dropify" multiple="multiple"/>
                                    @if ($errors->has('des_image'))
                                        <span style="color: orangered;">{{ $errors->first('des_image') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="row">
                                <div class="input-field col s12">
                                    <input type="number" min="0" id="price" value="{{ old('price') }}" name="price"
                                        placeholder="Price">
                                    <label class="active">Price</label>
                                    @if ($errors->has('price'))
                                        <span style="color: orangered;">{{ $errors->first('price') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="row">
                                <div class="input-field col s12">
                                    <input type="number" min="0" id="sale_price"  value="{{ old('sale_price')?old('sale_price'):0 }}" name="sale_price" placeholder="Sale Price">
                                    <label class="active">Sale Price</label>
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
                                    <label class="active">Category</label>
                                    <div class="select-wrapper">
                                        <select name="category_id" id="input">
                                            {{-- <option value="" disabled="" selected>Choose category</option> --}}
                                            @foreach ($categories as $cate)
                                                <option {{old('category_id')==$cate->id?'selected':''}} value="{{ $cate->id }}">{{ $cate->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @if ($errors->has('category_id'))
                                        <span style="color: orangered;">{{ $errors->first('category_id') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="row">
                                <div class="input-field col s12">
                                    <textarea id="editor" name="description" placeholder="Description">
                                        {{ old('description') }}
                                    </textarea>
                                    <label class="active">Description</label>
                                    @if ($errors->has('description'))
                                        <span style="color: orangered;">{{ $errors->first('description') }}</span>
                                    @endif
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
    </script>
@endsection
