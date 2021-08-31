@extends('backend.master')

@section('main')

@if(Session::get('error'))
<div class="alert alert-danger">
    <strong
        class="waves-effect waves-light mt-1 ml-1 btn gradient-45deg-deep-orange-orange gradient-shadow">{{Session::get('error')}}</strong>
</div>
@endif

<div class="section">
    <div class="row">
        <div class="col s12 m6 l8">
            <div id="placeholder" class="card card card-default scrollspy">
                <div class="card-content">
                    <h4 class="card-title">Thêm mới danh mục</h4>
                    <form action="{{route('category.update', $category->id)}}" method="POST">
                        @method('PUT')
                        @csrf
                        <input type="hidden" value="{{$category->id}}" name="id">
                        <div class="row">
                            <div class="input-field col s12">
                                <input type="text" id="name" value="{{$category->name}}" name="name"
                                    onkeyup="ChangeToSlug()" placeholder="Name">
                                <label class="active">Name</label>
                                @if($errors->has('name'))
                                <span style="color: orangered;">{{$errors->first('name')}}</span>
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <label class="active">Status</label>
                                <p>
                                    <label>
                                        <input name="status" type="radio" value="1" checked />
                                        <span>Còn</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input name="status" type="radio" value="0" />
                                        <span>Hết</span>
                                    </label>
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input type="text" id="slug" value="{{$category->slug}}" name="slug"
                                    onkeyup="ChangeToSlug()" placeholder="Slug">
                                <label class="active">Slug</label>
                                @if($errors->has('slug'))
                                <span style="color: orangered;">{{$errors->first('slug')}}</span>
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <button
                                    class="btn waves-effect waves-light gradient-45deg-green-teal gradient-shadow right"
                                    type="submit" name="action">Submit
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

<script>
function ChangeToSlug() {
    var title, slug;

    //Lấy text từ thẻ input title
    title = document.getElementById("name").value;

    //Đổi chữ hoa thành chữ thường
    slug = title.toLowerCase();

    //Đổi ký tự có dấu thành không dấu
    slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
    slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
    slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
    slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
    slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
    slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
    slug = slug.replace(/đ/gi, 'd');
    //Xóa các ký tự đặt biệt
    slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
    //Đổi khoảng trắng thành ký tự gạch ngang
    slug = slug.replace(/ /gi, "-");
    //Đổi nhiều ký tự gạch ngang liên tiếp thành 1 ký tự gạch ngang
    //Phòng trường hợp người nhập vào quá nhiều ký tự trắng
    slug = slug.replace(/\-\-\-\-\-/gi, '-');
    slug = slug.replace(/\-\-\-\-/gi, '-');
    slug = slug.replace(/\-\-\-/gi, '-');
    slug = slug.replace(/\-\-/gi, '-');
    //Xóa các ký tự gạch ngang ở đầu và cuối
    slug = '@' + slug + '@';
    slug = slug.replace(/\@\-|\-\@|\@/gi, '');
    //In slug ra textbox có id “slug”
    document.getElementById('slug').value = slug;
}
</script>

@stop
