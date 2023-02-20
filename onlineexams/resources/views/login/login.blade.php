@extends('../template/index')

@section('title')
  Login
@endsection

@section('content')
    <div class="bg1">
        <div class="row">

            <div class="col-md-7"></div>
            <div class="col-md-4 panel">
                <!-- sign in form begins -->
                <form class="form-horizontal" name="form" action="sign.php?q=account.php" onSubmit="return validateForm()"
                    method="POST">
                    <fieldset>


                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-12 control-label" for="name"></label>
                            <div class="col-md-12">
                                <input id="name" name="name" placeholder="Enter your name"
                                    class="form-control input-md" type="text">

                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-12 control-label" for="gender"></label>
                            <div class="col-md-12">
                                <select id="gender" name="gender" placeholder="Enter your gender"
                                    class="form-control input-md">
                                    <option value="Male">Select Gender</option>
                                    <option value="M">Male</option>
                                    <option value="F">Female</option>
                                </select>
                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-12 control-label" for="name"></label>
                            <div class="col-md-12">
                                <input id="college" name="college" placeholder="Enter your college name"
                                    class="form-control input-md" type="text">

                            </div>
                        </div>


                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-12 control-label title1" for="email"></label>
                            <div class="col-md-12">
                                <input id="email" name="email" placeholder="Enter your email-id"
                                    class="form-control input-md" type="email">

                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-12 control-label" for="mob"></label>
                            <div class="col-md-12">
                                <input id="mob" name="mob" placeholder="Enter your mobile number"
                                    class="form-control input-md" type="number">

                            </div>
                        </div>


                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-12 control-label" for="password"></label>
                            <div class="col-md-12">
                                <input id="password" name="password" placeholder="Enter your password"
                                    class="form-control input-md" type="password">

                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-12control-label" for="cpassword"></label>
                            <div class="col-md-12">
                                <input id="cpassword" name="cpassword" placeholder="Conform Password"
                                    class="form-control input-md" type="password">

                            </div>
                        </div>
                        <!-- Button -->
                        <div class="form-group">
                            <label class="col-md-12 control-label" for=""></label>
                            <div class="col-md-12">
                                <input type="submit" class="sub" value="sign up" class="btn btn-primary" />
                            </div>
                        </div>

                    </fieldset>
                </form>
            </div>
            <!--col-md-6 end-->
        </div>
    </div>
@endsection
