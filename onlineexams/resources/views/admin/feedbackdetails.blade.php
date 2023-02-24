@extends('../template/index')

@section('title')
Feedback
@endsection

@section('content')
<div class="panel">
        <div class="table-responsive">
            <table class="table table-striped title1">
                <tr>
                    
                    <td><b>Subject</b></td>
                    <td><b>Email</b></td>
                    <td><b>Name</b></td>
                    <td><b>Content</b></td>
                    
                </tr>
                
               
                    @inject('carbon', 'Carbon\Carbon')
                    <tr>
                        
                        <td>{{$feedback->subject}}</td>
                        <td>{{$feedback->email}}</td>
                        <td>{{ $feedback->name}}</td>
                        <td>{{ $feedback->content }}</td>

                    </tr>
               
                
            </table>
        </div>
    </div>
@endsection