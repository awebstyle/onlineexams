@extends('template.index')

@section('title')
    Success
@endsection

@section('content')
    <!-- start content -->
    <div>
        <div class="bg1">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6 panel" style="background-image:url({{asset("assets/image/bg1.jpg")}}); min-height:430px;">
                    <h2 style="font-family:'typo'; color:#000066">Give us your feedback or report a problem</h2>
                    <div style="font-size:14px">
                        <span style="font-size:18px;"><span class="glyphicon glyphicon-ok"
                                aria-hidden="true"></span>&nbsp;Thank you for your valuable feedback</span>
                    </div>
                    <!--col-md-6 end-->
                    <div class="col-md-3"></div>
                </div>
            </div>
        </div>
    </div>

    <!--container end-->
    </div>
@endsection
