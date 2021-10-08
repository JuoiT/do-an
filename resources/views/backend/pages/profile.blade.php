@extends('backend.master')

@section('main')
<div class="section users-edit">
    <div class="card">
        <div class="card-content">

            <!-- <ul class="tabs mb-2 row">
                <li class="tab">
                    <a class="display-flex align-items-center active" id="account-tab" href="#account">
                        <i class="material-icons mr-1">person_outline</i><span>Account</span>
                    </a>
                </li>
                <li class="tab">
                    <a class="display-flex align-items-center" id="information-tab" href="#information">
                        <i class="material-icons mr-2">error_outline</i><span>Information</span>
                    </a>
                </li>
            </ul> -->
            <!-- <div class="divider mb-3"></div> -->
            <div class="row">
                <div class="col s12" id="account">

                    <div class="media display-flex align-items-center mb-2">
                        <a class="mr-2" href="#">
                            <img src="{{url('upload-avatars')}}/{{Auth::user()->avatar}}" alt="users avatar" class="z-depth-4 circle" height="64" width="64">
                        </a>
                        <div class="media-body">
                            <h5 class="media-heading mt-0" style="float: left; width: 55%;">{{Auth::user()->name}}</h5>
                            <h6 style="float: right; width: 45%;">Email: {{Auth::user()->email}}</h6>
                            <div class="user-edit-btns display-flex" style="width: 100%;">
                                <form method="POST" action="{{route('update_user')}}" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="id" value="{{Auth::user()->id}}"/>
                                    <input style="display: none;" type="file" name="avatar" id="avatar">
                                    <label for="avatar" class="btn-small btn-light-pink">New Avatar</label>
                                    <button type="submit" class="btn-small indigo">Change</button>
                                </form>
                            </div>
                        </div>
                    </div>


                    <form id="accountForm" action="{{route('update_user')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col s12 m12">
                                <div class="row">

                                    <input type="hidden" name="id" value="{{Auth::user()->id}}"/>

                                    <div class="col s12 input-field">
                                        <input id="name" name="name" type="text" class="validate"
                                            value="{{Auth::user()->name}}" data-error=".errorTxt1">
                                        <label for="name">Name</label>
                                        <small class="errorTxt1"></small>
                                        @if ($errors->has('name'))
                                            <span style="color: orangered;">{{ $errors->first('name') }}</span>
                                        @endif
                                    </div>

                                    <input id="email" name="email" type="hidden" class="validate" value="{{Auth::user()->email}}"
                                        data-error=".errorTxt2">

                                    <div class="col s12 input-field">
                                        <input id="phone" name="phone" type="text" class="validate"
                                            value="{{Auth::user()->phone}}" data-error=".errorTxt3">
                                        <label for="phone">Phone</label>
                                        <small class="errorTxt3"></small>
                                        @if ($errors->has('phone'))
                                            <span style="color: orangered;">{{ $errors->first('phone') }}</span>
                                        @endif
                                    </div>

                                    <div class="col s12 input-field">
                                        <input id="address" name="address" type="text" class="validate"
                                            value="{{Auth::user()->address}}" data-error=".errorTxt3">
                                        <label for="address">Address</label>
                                        <small class="errorTxt3"></small>
                                        @if ($errors->has('address'))
                                            <span style="color: orangered;">{{ $errors->first('address') }}</span>
                                        @endif
                                    </div>

                                    <div class="col s12 input-field">
                                        <input id="password" name="password" type="password" class="validate" data-error=".errorTxt3" placeholder="Enter pasword to change!">
                                        <label for="password">Password</label>
                                        <small class="errorTxt3"></small>
                                        @if ($errors->has('password'))
                                            <span style="color: orangered;">{{ $errors->first('password') }}</span>
                                        @endif
                                    </div>

                                </div>
                            </div>
                            <div class="col s12 display-flex justify-content-end mt-3">
                                <button type="submit" class="btn indigo">Save changes</button>
                                <!-- <button type="button" class="btn btn-light">Cancel</button> -->
                            </div>
                        </div>
                    </form>

                </div>
                <!-- <div class="col s12" id="information">

                    <form id="infotabForm">
                        <div class="row">
                            <div class="col s12 m6">
                                <div class="row">
                                    <div class="col s12">
                                        <h6 class="mb-2"><i class="material-icons mr-1">link</i>Social Links</h6>
                                    </div>
                                    <div class="col s12 input-field">
                                        <input class="validate" type="text" value="https://www.twitter.com/">
                                        <label>Twitter</label>
                                    </div>
                                    <div class="col s12 input-field">
                                        <input class="validate" type="text" value="https://www.facebook.com/">
                                        <label>Facebook</label>
                                    </div>
                                    <div class="col s12 input-field">
                                        <input class="validate" type="text">
                                        <label>Google+</label>
                                    </div>
                                    <div class="col s12 input-field">
                                        <input id="linkedin" name="linkedin" class="validate" type="text">
                                        <label for="linkedin">LinkedIn</label>
                                    </div>
                                    <div class="col s12 input-field">
                                        <input class="validate" type="text" value="https://www.instagram.com/">
                                        <label>Instagram</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col s12 m6">
                                <div class="row">
                                    <div class="col s12">
                                        <h6 class="mb-4"><i class="material-icons mr-1">person_outline</i>Personal Info
                                        </h6>
                                    </div>
                                    <div class="col s12 input-field">
                                        <input id="datepicker" name="datepicker" type="text"
                                            class="birthdate-picker datepicker" placeholder="Pick a birthday"
                                            data-error=".errorTxt4">
                                        <label for="datepicker">Birth date</label>
                                        <small class="errorTxt4"></small>
                                    </div>
                                    <div class="col s12 input-field">
                                        <select id="accountSelect">
                                            <option>USA</option>
                                            <option>India</option>
                                            <option>Canada</option>
                                        </select>
                                        <label>Country</label>
                                    </div>
                                    <div class="col s12">
                                        <label>Languages</label>
                                        <select class="browser-default" id="users-language-select2" multiple="multiple">
                                            <option value="English" selected>English</option>
                                            <option value="Spanish">Spanish</option>
                                            <option value="French">French</option>
                                            <option value="Russian">Russian</option>
                                            <option value="German">German</option>
                                            <option value="Arabic" selected>Arabic</option>
                                            <option value="Sanskrit">Sanskrit</option>
                                        </select>
                                    </div>
                                    <div class="col s12 input-field">
                                        <input id="phonenumber" type="text" class="validate" value="(+656) 254 2568">
                                        <label for="phonenumber">Phone</label>
                                    </div>
                                    <div class="col s12 input-field">
                                        <input id="address" name="address" type="text" class="validate"
                                            data-error=".errorTxt5">
                                        <label for="address">Address</label>
                                        <small class="errorTxt5"></small>
                                    </div>
                                </div>
                            </div>
                            <div class="col s12">
                                <div class="input-field">
                                    <input id="websitelink" name="websitelink" type="text" class="validate">
                                    <label for="websitelink">Website</label>
                                </div>
                                <label>Favourite Music</label>
                                <div class="input-field">
                                    <select class="browser-default" id="users-music-select2" multiple="multiple">
                                        <option value="Rock">Rock</option>
                                        <option value="Jazz" selected>Jazz</option>
                                        <option value="Disco">Disco</option>
                                        <option value="Pop">Pop</option>
                                        <option value="Techno">Techno</option>
                                        <option value="Folk" selected>Folk</option>
                                        <option value="Hip hop">Hip hop</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col s12">
                                <label>Favourite movies</label>
                                <div class="input-field">
                                    <select class="browser-default" id="users-movies-select2" multiple="multiple">
                                        <option value="The Dark Knight" selected>The Dark Knight
                                        </option>
                                        <option value="Harry Potter" selected>Harry Potter</option>
                                        <option value="Airplane!">Airplane!</option>
                                        <option value="Perl Harbour">Perl Harbour</option>
                                        <option value="Spider Man">Spider Man</option>
                                        <option value="Iron Man" selected>Iron Man</option>
                                        <option value="Avatar">Avatar</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col s12 display-flex justify-content-end mt-1">
                                <button type="submit" class="btn indigo">
                                    Save changes</button>
                                <button type="button" class="btn btn-light">Cancel</button>
                            </div>
                        </div>
                    </form>

                </div> -->
            </div>

        </div>
    </div>
</div>
@stop
