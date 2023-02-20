@extends('../template/index')

@section('title')
    View feedback
@endsection

@section('content')
    <!--feedback start-->
    @include('admin.partials._feedbacklist')
    <!--feedback closed-->

    <!--feedback reading portion start-->
    <br />
    <div class="panel"<a title="Back to Archive" href="update.php?q1=2"><b><span class="glyphicon glyphicon-level-up"
                aria-hidden="true"></span></b></a>
        <h2 style="text-align:center; margin-top:-15px;font-family: "Ubuntu", sans-serif;"><b></b></h1>
            <div class="mCustomScrollbar" data-mcs-theme="dark"
                style="margin-left:10px;margin-right:10px; max-height:450px; line-height:35px;padding:5px;"><span
                    style="line-height:35px;padding:5px;">-&nbsp;<b>DATE:</b>&nbsp;10-05-2020</span>
                <span style="line-height:35px;padding:5px;">&nbsp;<b>Time:</b>&nbsp;10:43:31am</span><span
                    style="line-height:35px;padding:5px;">&nbsp;<b>By:</b>&nbsp;Grade 12 - Class 2</span><br />
            </div>
    </div>
    <!--container closed-->
@endsection
