@extends('../template/index')

@section('title')
    Admin Dashboard
@endsection

@section('content')
    <div class="container">
        <!--container start-->
        <div class="row">
            <div class="col-md-12">
                <!--home start-->

                <div class="panel">
                    <div class="table-responsive">
                        <table class="table table-striped title1">
                            <tr>
                                <td><b>S.N.</b></td>
                                <td><b>Topic</b></td>
                                <td><b>Total question</b></td>
                                <td><b>Marks</b></td>
                                <td><b>Time limit</b></td>
                                <td></td>
                            </tr>
                            <tr style="color:#99cc32">
                                <td>1</td>
                                <td>Ddss&nbsp;<span title="This quiz is already solve by you" class="glyphicon glyphicon-ok"
                                        aria-hidden="true"></span></td>
                                <td>1</td>
                                <td>1</td>
                                <td>1&nbsp;min</td>
                                <td><b><a href="update.php?q=quizre&step=25&eid=6241746792766&n=1&t=1"
                                            class="pull-right btn sub1" style="margin:0px;background:red"><span
                                                class="glyphicon glyphicon-repeat" aria-hidden="true"></span>&nbsp;<span
                                                class="title1"><b>Restart</b></span></a></b></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Linux:startup</td>
                                <td>5</td>
                                <td>10</td>
                                <td>10&nbsp;min</td>
                                <td><b><a href="account.php?q=quiz&step=2&eid=55897338a6659&n=1&t=5"
                                            class="pull-right btn sub1" style="margin:0px;background:#99cc32"><span
                                                class="glyphicon glyphicon-new-window" aria-hidden="true"></span>&nbsp;<span
                                                class="title1"><b>Start</b></span></a></b></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Networking</td>
                                <td>2</td>
                                <td>4</td>
                                <td>5&nbsp;min</td>
                                <td><b><a href="account.php?q=quiz&step=2&eid=558922ec03021&n=1&t=2"
                                            class="pull-right btn sub1" style="margin:0px;background:#99cc32"><span
                                                class="glyphicon glyphicon-new-window" aria-hidden="true"></span>&nbsp;<span
                                                class="title1"><b>Start</b></span></a></b></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>C++ Coding</td>
                                <td>2</td>
                                <td>4</td>
                                <td>5&nbsp;min</td>
                                <td><b><a href="account.php?q=quiz&step=2&eid=5589222f16b93&n=1&t=2"
                                            class="pull-right btn sub1" style="margin:0px;background:#99cc32"><span
                                                class="glyphicon glyphicon-new-window" aria-hidden="true"></span>&nbsp;<span
                                                class="title1"><b>Start</b></span></a></b></td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Php Coding</td>
                                <td>2</td>
                                <td>4</td>
                                <td>5&nbsp;min</td>
                                <td><b><a href="account.php?q=quiz&step=2&eid=558921841f1ec&n=1&t=2"
                                            class="pull-right btn sub1" style="margin:0px;background:#99cc32"><span
                                                class="glyphicon glyphicon-new-window" aria-hidden="true"></span>&nbsp;<span
                                                class="title1"><b>Start</b></span></a></b></td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Linux : File Managment</td>
                                <td>2</td>
                                <td>4</td>
                                <td>5&nbsp;min</td>
                                <td><b><a href="account.php?q=quiz&step=2&eid=558920ff906b8&n=1&t=2"
                                            class="pull-right btn sub1" style="margin:0px;background:#99cc32"><span
                                                class="glyphicon glyphicon-new-window" aria-hidden="true"></span>&nbsp;<span
                                                class="title1"><b>Start</b></span></a></b></td>
                            </tr>
                        </table>
                    </div>
                </div>

                <!--home closed-->
                <!--users start-->
                <!--user end-->

                <!--feedback start-->
                <!--feedback closed-->

                <!--feedback reading portion start-->
                <!--Feedback reading portion closed-->

                <!--add quiz start-->
                <!--add quiz end-->

                <!--add quiz step2 start-->
                <!--add quiz step 2 end-->

                <!--remove quiz-->


            </div>
            <!--container closed-->
        </div>
    </div>
@endsection
