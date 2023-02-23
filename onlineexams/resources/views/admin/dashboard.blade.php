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
                            <input type="hidden" {{ $increment = 1 }}>
                            
                            @foreach ($quizzes as $quiz)
                                <input type="hidden" {{ $restart = 0 }}>
                                @foreach ($scores as $score)
                                    @if ($score->email == Session::get('admin')->email && $score->topic == $quiz->topic)
                                        <input type="hidden" {{ $restart++ }}>
                                    @endif
                                @endforeach
                                <tr>
                                    <td>{{ $increment }}</td>
                                    <td>{{ $quiz->topic }}</td>
                                    <td>{{ $quiz->totalquestions }}</td>
                                    <td>{{ $quiz->mark * $quiz->totalquestions }}</td>
                                    <td>{{ $quiz->timelimit }} min</td>
                                    @if($restart === 0)
                                    <td><a href={{ route('startquiz', $quiz->topic) }} class="pull-right btn sub1"
                                                style="margin:0px;background:#99cc32"><span
                                                    class="glyphicon glyphicon-new-window"
                                                    aria-hidden="true"></span>&nbsp;<span
                                                    class="title1"><b>Start</b></span>
                                        </a>
                                    </td>
                                    @else
                                        <td><a href={{ route('startquiz', $quiz->topic) }} class="pull-right btn sub1"
                                                style="margin:0px;background:red"><span
                                                    class="glyphicon glyphicon-new-window"
                                                    aria-hidden="true"></span>&nbsp;<span
                                                    class="title1"><b>Restart</b></span>
                                        </a>
                                    </td>
                                    @endif

                                </tr>
                                <input type="hidden" {{ $increment++ }}>
                            @endforeach
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
