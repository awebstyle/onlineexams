@extends('../template/index')

@section('title')
    Remove quiz
@endsection

@section('content')
    <div class="container">
        <!--container start-->
        <div class="row">
            <div class="col-md-12">

                <!--remove quiz-->
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
                            <tr>
                                <td>1</td>
                                <td>Laravel</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1&nbsp;min</td>
                                <td><b><a href="update.php?q=rmquiz&eid=62417a169b4a1" class="pull-right btn sub1"
                                            style="margin:0px;background:red"><span class="glyphicon glyphicon-trash"
                                                aria-hidden="true"></span>&nbsp;<span
                                                class="title1"><b>Remove</b></span></a></b></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Ddss</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1&nbsp;min</td>
                                <td><b><a href="update.php?q=rmquiz&eid=6241746792766" class="pull-right btn sub1"
                                            style="margin:0px;background:red"><span class="glyphicon glyphicon-trash"
                                                aria-hidden="true"></span>&nbsp;<span
                                                class="title1"><b>Remove</b></span></a></b></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Linux:startup</td>
                                <td>5</td>
                                <td>10</td>
                                <td>10&nbsp;min</td>
                                <td><b><a href="update.php?q=rmquiz&eid=55897338a6659" class="pull-right btn sub1"
                                            style="margin:0px;background:red"><span class="glyphicon glyphicon-trash"
                                                aria-hidden="true"></span>&nbsp;<span
                                                class="title1"><b>Remove</b></span></a></b></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Networking</td>
                                <td>2</td>
                                <td>4</td>
                                <td>5&nbsp;min</td>
                                <td><b><a href="update.php?q=rmquiz&eid=558922ec03021" class="pull-right btn sub1"
                                            style="margin:0px;background:red"><span class="glyphicon glyphicon-trash"
                                                aria-hidden="true"></span>&nbsp;<span
                                                class="title1"><b>Remove</b></span></a></b></td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>C++ Coding</td>
                                <td>2</td>
                                <td>4</td>
                                <td>5&nbsp;min</td>
                                <td><b><a href="update.php?q=rmquiz&eid=5589222f16b93" class="pull-right btn sub1"
                                            style="margin:0px;background:red"><span class="glyphicon glyphicon-trash"
                                                aria-hidden="true"></span>&nbsp;<span
                                                class="title1"><b>Remove</b></span></a></b></td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Php Coding</td>
                                <td>2</td>
                                <td>4</td>
                                <td>5&nbsp;min</td>
                                <td><b><a href="update.php?q=rmquiz&eid=558921841f1ec" class="pull-right btn sub1"
                                            style="margin:0px;background:red"><span class="glyphicon glyphicon-trash"
                                                aria-hidden="true"></span>&nbsp;<span
                                                class="title1"><b>Remove</b></span></a></b></td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>Linux : File Managment</td>
                                <td>2</td>
                                <td>4</td>
                                <td>5&nbsp;min</td>
                                <td><b><a href="update.php?q=rmquiz&eid=558920ff906b8" class="pull-right btn sub1"
                                            style="margin:0px;background:red"><span class="glyphicon glyphicon-trash"
                                                aria-hidden="true"></span>&nbsp;<span
                                                class="title1"><b>Remove</b></span></a></b></td>
                            </tr>
                        </table>
                    </div>
                </div>

            </div>
            <!--container closed-->
        </div>
    </div>
@endsection
