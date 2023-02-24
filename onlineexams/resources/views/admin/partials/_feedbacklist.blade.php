<div class="panel">
        <div class="table-responsive">
            @if(Session::has('status'))
                <div class="alert alert-success">
                    {{Session::get('status')}}
                </div>
            @endif
            <table class="table table-striped title1">
                <tr>
                    <td><b>S.N.</b></td>
                    <td><b>Subject</b></td>
                    <td><b>Email</b></td>
                    <td><b>Date</b></td>
                    <td><b>Time</b></td>
                    <td><b>By</b></td>
                    <td></td>
                    <td></td>
                </tr>
                <input type="hidden" {{$increment = 1}}/>
                @foreach($feedbacks as $feedback)
                    @inject('carbon', 'Carbon\Carbon')
                    <tr>
                        <td>{{$increment}}</td>
                        <td><a title="Click to open feedback" href={{ route('feedbacks.show', $feedback->id)}}>{{$feedback->subject}}</a></td>
                        <td>{{$feedback->email}}</td>
                        <td>{{ $carbon::parse($feedback->created_at)->translatedFormat('F d') }}</td>
                        <td>{{ $carbon::parse($feedback->created_at)->translatedFormat('H') }} h</td>
                        <td>{{ $feedback->name}}</td>
                        <td><a title="Open Feedback" href={{ route('feedbacks.show', $feedback->id)}}><b><span
                                        class="glyphicon glyphicon-folder-open" aria-hidden="true"></span></b></a></td>
                        <td>
                            <form method="POST" action={{ route('feedbacks.destroy', $feedback->id)}}>
                                @csrf
                                @method('delete')
                                <button type="sumit"><span
                                        class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>
                            
                            </form>            
                        </td>

                    </tr>
                @endforeach
                
            </table>
        </div>
    </div>