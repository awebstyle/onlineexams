@extends('../template/index')

@section('title')
    Quiz details
@endsection

@section('content')
    <div class="container">
        <!--container start-->
        <div class="row">
            <div class="col-md-12">

                <div class="row">
                    <span class="title1" style="margin-left:40%;font-size:30px;"><b>Enter Quiz Details</b></span><br /><br />
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <form class="form-horizontal title1" name="form" action={{ route('quizzes.store') }} method="POST">
                           @csrf
                            <fieldset>


                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-md-12 control-label" for="topic"></label>
                                    <div class="col-md-12">
                                        <input id="topic" name="topic" placeholder="Enter Quiz title"
                                            class="form-control input-md" type="text" required>

                                    </div>
                                </div>



                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-md-12 control-label" for="totalquestions"></label>
                                    <div class="col-md-12">
                                        <input id="totalquestions" name="totalquestions" placeholder="Enter total number of questions"
                                            class="form-control input-md" type="number" required>

                                    </div>
                                </div>

                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-md-12 control-label" for="mark"></label>
                                    <div class="col-md-12">
                                        <input id="mark" name="mark" placeholder="Enter marks on right answer"
                                            class="form-control input-md" min="0" type="number" required>

                                    </div>
                                </div>

                                <!-- Text input-->
                                {{-- <div class="form-group">
                                    <label class="col-md-12 control-label" for="wrong"></label>
                                    <div class="col-md-12">
                                        <input id="wrong" name="wrong"
                                            placeholder="Enter minus marks on wrong answer without sign"
                                            class="form-control input-md" min="0" type="number">

                                    </div>
                                </div> --}}

                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-md-12 control-label" for="timelimit"></label>
                                    <div class="col-md-12">
                                        <input id="timelimit" name="timelimit"
                                            placeholder="Enter time limit for test in minute" class="form-control input-md"
                                            min="1" type="number" required>

                                    </div>
                                </div>

                                <!-- Text input-->
                                {{-- <div class="form-group">
                                    <label class="col-md-12 control-label" for="tag"></label>
                                    <div class="col-md-12">
                                        <input id="tag" name="tag"
                                            placeholder="Enter #tag which is used for searching"
                                            class="form-control input-md" type="text">

                                    </div>
                                </div> --}}


                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-md-12 control-label" for="description"></label>
                                    <div class="col-md-12">
                                        <textarea required rows="8" cols="8" name="description" class="form-control" placeholder="Write description here..."></textarea> 
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label class="col-md-12 control-label" for=""></label>
                                    <div class="col-md-12">
                                        <input type="submit" style="margin-left:45%" class="btn btn-primary" value="Submit"
                                            class="btn btn-primary" />
                                    </div>
                                </div>

                            </fieldset>
                        </form>
                    </div>

                </div>
                <!--container closed-->
            </div>
        </div>
    </div>
@endsection
