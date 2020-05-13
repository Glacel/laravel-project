<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            body{
                text-align:center;
                width:100%;
                margin:0 auto;
                padding:0px;
                font-family:"lucida grande",tahoma,verdana,arial,sans-serif;
                background: linear-gradient(white, #e6faff);
            }
            #header_wrapper{
                width:100%;
                min-width:980px;
                background-color:#ffb3b3;
            }
            #header{
                width:980px;
                margin:0px auto;
                padding:0px;
                height:85px;
            }
            #header li{
                list-style-type:none;
                float:left;
                text-align:left;
                color:white;
            }
            #header #sitename{
                margin-top:25px;
            }
            #header #sitename a{
                color:white;
                text-decoration:none;
                font-size:30px;
                font-weight:900;
            }
            #header form{
                margin-top:15px;
                float:right;
            }
            #header form li{
                font-size:13px;
                margin-left:15px;
            }
            #header form li a
            {
                color:#A9BCF5;
                text-decoration:none;
            }
            #header form input[type="text"]{
                margin-top:3px;
                margin-bottom:3px;
                width:150px;
                border:1px solid #08298A;
                height:25px;
                padding-left:3px;
            }
            #header form input[type="password"]{
                margin-top:3px;
                margin-bottom:3px;
                width:150px;
                border:1px solid #08298A;
                height:25px;
                padding-left:3px;
            }
            #header form input[type="submit"]{
                height:25px;
                margin-top:20px;
                background-color:#084B8A;
                color:white;
                border:1px solid #08298A;
            }
            #wrapper{
                margin:0 auto;
                padding:0px;
                text-align:center;
                width:980px;
            }
            #wrapper div{
                float:left;
                font-family: helvetica, arial, sans-serif;
            }
            #wrapper #div1{
            margin-top:30px;
            width:590px;
            text-align:left;
            }
            #wrapper #div1 p{
                font-size:20px;
                font-family:arial;
                font-weight:bold;
                margin:0px;
                color:#0e385f;
            }
            #wrapper #div2{
                margin-top:10px;
                width:390px;
                text-align:left;
            }
            #wrapper #div2 h1{
                margin:0px;
                font-size:37px;
                color:#2E2E2E;
            }
            #wrapper #div2 p{
                font-size:18px;
                color:#2E2E2E;
            }
            #wrapper #div2 li{
                list-style-type:none;
                margin-top:10px;
            }
            #wrapper #div2 li #firstname{
                width:49%;
            }
            #wrapper #div2 li #lastname{
                width:49%;
            }
            #wrapper #div2 li input[type="text"]{
                width:100%;
                height:40px;
                border-radius:5px;
                padding-left:10px;
                font-size:18px;
                border:1px solid #BDBDBD;
            }
            #wrapper #div2 li input[type="password"]{
                width:100%;
                height:40px;
                border-radius:5px;
                padding-left:10px;
                font-size:18px;
                border:1px solid #BDBDBD;
            }
            #wrapper #div2 li select{
                padding:4px;
                float:left;
            }
            #wrapper #div2 li a{
                margin-left:10px;
                width:150px;
                color:#045FB4;
                text-decoration:none;
                font-size:11px;
                display: inline-block;
                vertical-align: middle;
                line-height:15px;
            }
            #wrapper #div2 li a:hover{
                text-decoration:underline;
            }
            #wrapper #div2 li{
                color:#2E2E2E;
                font-size:18px;
            }
            #wrapper #div2 #terms{
                color:#424242;
                font-size:11px;
            }
            #wrapper #div2 #terms a{
                display:inline;
                margin:0px;
            }
            #wrapper #div2 li input[type="submit"]{
                width:205px;
                height:45px;
                text-align:center;
                font-size:19px;
                margin-top: 10px;
                margin-bottom: 10px;
                font-family: 'Freight Sans Bold', helvetica, arial, sans-serif !important;
                font-weight: bold !important;
                background: linear-gradient(#67ae55, #578843);
                background-color: #69a74e;
                box-shadow: inset 0 1px 1px #a4e388;
                border-color: #3b6e22 #3b6e22 #2c5115;
                border: 1px solid;
                border-radius: 5px;
                color: #fff;
                cursor: pointer;
                display: inline-block;
                position: relative;
                text-shadow: 0 1px 2px rgba(0,0,0,.5);
            }
            #wrapper #div2 #create_page{
                color:#424242;
                font-size:13px;
                font-weight:bold;
            }
            #wrapper #div2 #create_page a{
                display:inline;
                margin:0px;
                font-size:13px;
            }
            #footer_wrapper{
                width:100%;
                clear:both;
                float:left;
                margin-top:30px;
                min-width:995px;
                background-color:white;
                text-align:left;
            }
            #footer1{
                width:980px;
                margin:0px auto;
                padding:0px;
                border-bottom:1px solid #E6E6E6;
                height:30px;
                line-height:30px;
                font-size:12px;
                color:#848484;
            }
            #footer1 a{
                color:#365899;
                display:inline;
                margin-left:10px;
                text-decoration:none;
            }
            #footer1 a:hover{
                text-decoration:underline;
            }
            #footer2{
                width:980px;
                margin:0px auto;
                padding:0px;
                font-size:12px;
                color:#848484;
            }
            #footer2 a{
                color:#365899;
                display:inline-block;
                margin:5px;
                margin-left:0px;
                min-width:80px;
                text-decoration:none;
            }
            #footer2 a:hover{
                text-decoration:underline;
            }
        </style>
    </head>
    <body>
        <div id="header_wrapper">
            <div id="header">
                <!-- <li id="sitename"><a href="">BABE</a></li>
                <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
                    Email<br>
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                        @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif 
                    Password<br>
                    <input id="password" type="password" class="form-control" name="password" required><br>
                    @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                    <li> -->
                    <!-- <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>
                </form>
            </div>
        </div> -->
                <li id="sitename"><a href="">BABE</a></li>
                <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
                    <li>Email or Phone<br><input type="text" name="email"></li>
                    <li>Password<br><input type="password" name="password"><br><a href="">Forgotten account?</a></li>
                    <li><input type="submit" name="login" value="Log In"></li>
                </form>
            </div>
        </div>
        <div id="wrapper">
            <div id="div1">
                <p><Talkerscode helps you connect and share with the </p>
                <img src="{{url('/images/programmer.jpg')}}" height="300" width="400">
            </div>
            <div id="div2">
                <form class="form-horizontal" method="POST" action="{{ route('register') }}"    >
                    {{ csrf_field() }}
                    <h1>Create an account</h1>
                    <p>It's free and always will be.</p>
                    <div class="form-group{{ $errors->has('firstname') ? ' has-error' : '' }}">
                        <div class="col-md-6">
                        <li>
                            <input placeholder="First Name"id="firstname" type="text" class="form-control" name="firstname" value="{{ old('firstname') }}" required autofocus>
                            @if ($errors->has('firstname'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('firstname') }}</strong>
                                </span>
                            @endif
                        </li>
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">
                        <div class="col-md-6">
                        <li>
                            <input placeholder="Last Name" id="lastname" type="text" class="form-control" name="lastname" value="{{ old('lastname') }}" required autofocus>
                            @if ($errors->has('lastname'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('lastname') }}</strong>
                                </span>
                            @endif
                        </li>
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <div class="col-md-6">
                        <li>
                            <input placeholder="email" id="email" type="text" class="form-control" name="email" value="{{ old('email') }}" required>
                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </li>
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                        <div class="col-md-6">
                            <li>
                                <input placeholder="username" id="username" type="text" class="form-control" name="username" value="{{ old('username') }}" required>
                                @if ($errors->has('username'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            <li>
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <div class="col-md-6">
                            <li>
                                <input placeholder="Password"id="password" type="password" class="form-control" name="password" required>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            <li>
                        </div>
                    </div>
                    <div class="form-group">                       
                        <div class="col-md-6">
                            <li>
                                <input placeholder="Confirm Password"id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </li>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="birthday" class="col-md-4 control-label">Birthday</label>
                        <li>
                            <div class="form-group{{ $errors->has('birthdayDate') ? ' has-error' : '' }}">
                                <div class="col-md-6">
                                    <input placeholder="Date"id="birthdayDate" type="text" class="form-control" name="birthdayDate" value="{{ old('birthdayDate') }}" required autofocus>

                                    @if ($errors->has('birthdayDate'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('birthdayDate') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('birthdayMonth') ? ' has-error' : '' }}">
                                <div class="col-md-6">
                                    <input placeholder="Month"id="birthdayMonth" type="text" class="form-control" name="birthdayMonth" value="{{ old('birthdayMonth') }}" required autofocus>
                                    @if ($errors->has('birthdayMonth'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('birthdayMonth') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('birthdayYear') ? ' has-error' : '' }}">
                                <div class="col-md-6">
                                    <input placeholder="Year"id="birthdayYear" type="text" class="form-control" name="birthdayYear" value="{{ old('birthdayYear') }}" required autofocus>
                                    @if ($errors->has('birthdayYear'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('birthdayYear') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </li>
                    </div>
                    
                    <div class="form-group{{ $errors->has('contactnumber') ? ' has-error' : '' }}">
                        <div class="col-md-6">
                            <li>
                                <input placeholder="Contact Number" id="contactnumber" type="text" class="form-control" name="contactnumber" required>
                                @if ($errors->has('contactnumber'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('contactnumber') }}</strong>
                                    </span>
                                @endif
                            <li>
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('streetaddress') ? ' has-error' : '' }}">
                            <label for="streetaddress" class="col-md-4 control-label">Address</label>
                            <div class="col-md-6">
                                <input placeholder="Street Address" id="streetaddress" type="text" class="form-control" name="streetaddress" value="{{ old('streetaddress') }}" required>
                                <input placeholder="City Address" id="cityaddress" type="text" class="form-control" name="cityaddress" value="{{ old('cityaddress') }}" required>
                                <input placeholder="Province Address" id="provinceaddress" type="text" class="form-control" name="provinceaddress" value="{{ old('provinceaddress') }}" required>
                                @if ($errors->has('streetaddress'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('streetaddress') }}</strong>
                                    </span>
                                @endif
                            </div>
                    </div>
                    <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Sign Up
                                </button>
                            </div>
                        </div>
                    </form>
            </div>

        </div>
        <div id="footer_wrapper">
            <div id="footer1">
                English (UK) <a href="">हिन्दी</a><a href="">ਪੰਜਾਬੀ</a><a href=""> اردو</a><a href="">தமிழ்</a><a href="">বাংলা</a><a href="">मराठी</a><a href="">తెలుగు</a><a href="">ગુજરાતી</a><a href="">ಕನ್ನಡ</a><a href="">മലയാളം</a>
            </div>
            <div id="footer2">
                <a href="">Sign Up</a><a href="">Log In</a><a href="">Messenger</a><a href="">Talkerscode</a><a href="">Mobile</a><a href="">Find Friends</a><a href="">Badges</a><a href="">People</a><a href="">Pages</a><a href="">Places</a><a href="">Games</a><a href="">Locations</a><a href="">Celebrities</a><a href="">Groups</a><a href="">Moments</a><a href="">About</a><a href="">Create Advert</a><a href="">Create Page</a><a href="">Developers</a><a href="">Careers</a><a href="">Privacy</a><a href="">Cookies</a><a href="">Ads</a><a href="">Terms</a><a href="">Help</a>
            </div>
    </body>
</html>
