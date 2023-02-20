@extends('../template.index')

@section('title')
    Question
@endsection

@section('content')
    <div class="container">
        <!--container start-->
        <div class="row">
            <div class="col-md-12">

                <div class="row">
                    <span class="title1" style="margin-left:40%;font-size:30px;"><b>Enter Question
                            Details</b></span><br /><br />
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <form class="form-horizontal title1" name="form"
                            action="update.php?q=addqns&n=1&eid=62417a169b4a1&ch=4 " method="POST">
                            <fieldset>
                                <b>Question number&nbsp;1&nbsp;:</><br /><!-- Text input-->
                                    <div class="form-group">
                                        <label class="col-md-12 control-label" for="qns1 "></label>
                                        <div class="col-md-12">
                                            <textarea rows="3" cols="5" name="qns1" class="form-control"
                                                placeholder="Write question number 1 here..."></textarea>
                                        </div>
                                    </div>
                                    <!-- Text input-->
                                    <div class="form-group">
                                        <label class="col-md-12 control-label" for="11"></label>
                                        <div class="col-md-12">
                                            <input id="11" name="11" placeholder="Enter option a"
                                                class="form-control input-md" type="text">

                                        </div>
                                    </div>
                                    <!-- Text input-->
                                    <div class="form-group">
                                        <label class="col-md-12 control-label" for="12"></label>
                                        <div class="col-md-12">
                                            <input id="12" name="12" placeholder="Enter option b"
                                                class="form-control input-md" type="text">

                                        </div>
                                    </div>
                                    <!-- Text input-->
                                    <div class="form-group">
                                        <label class="col-md-12 control-label" for="13"></label>
                                        <div class="col-md-12">
                                            <input id="13" name="13" placeholder="Enter option c"
                                                class="form-control input-md" type="text">

                                        </div>
                                    </div>
                                    <!-- Text input-->
                                    <div class="form-group">
                                        <label class="col-md-12 control-label" for="14"></label>
                                        <div class="col-md-12">
                                            <input id="14" name="14" placeholder="Enter option d"
                                                class="form-control input-md" type="text">

                                        </div>
                                    </div>
                                    <br />
                                    <b>Correct answer</b>:<br />
                                    <select id="ans1" name="ans1" placeholder="Choose correct answer "
                                        class="form-control input-md">
                                        <option value="a">Select answer for question 1</option>
                                        <option value="a">option a</option>
                                        <option value="b">option b</option>
                                        <option value="c">option c</option>
                                        <option value="d">option d</option>
                                    </select><br /><br />
                                    <div class="form-group">
                                        <label class="col-md-12 control-label" for=""></label>
                                        <div class="col-md-12">
                                            <input type="submit" style="margin-left:45%" class="btn btn-primary"
                                                value="Submit" class="btn btn-primary" />
                                        </div>
                                    </div>

                            </fieldset>
                        </form>
                    </div>
                    <!--add quiz step 2 end-->

                    <!--remove quiz-->


                </div>
                <!--container closed-->
            </div>
        </div>
    </div>
@endsection
