@extends('../template/index')

@section('title')
    Users
@endsection

@section('content')
    <div class="container">
        <!--container start-->
        <div class="row">
            <div class="col-md-12">
                @if(Session::has('status'))
                    <div class="alert alert-success">
                        {{ Session::get('status') }}
                    </div>
                @endif
                <!--users start-->
                <div class="panel">
                    <div class="table-responsive">
                        <table class="table table-striped title1">
                            <tr>
                                <td><b>S.N.</b></td>
                                <td><b>Name</b></td>
                                <td><b>Gender</b></td>
                                <td><b>College</b></td>
                                <td><b>Email</b></td>
                                <td><b>Mobile</b></td>
                                <td></td>
                            </tr>
                            <input type="hidden" {{ $increment = 1 }}/>
                            @foreach($developers as $developer)
                                <tr>
                                    <td>{{ $increment }}</td>
                                    <td>{{ $developer->name }}</td>
                                    <td>{{ $developer->gender }}</td>
                                    <td>{{ $developer->college }}</td>
                                    <td>{{ $developer->email }}</td>
                                    <td>{{ $developer->phone }}</td>
                                    <td>
                                        <form action={{route('developers.destroy', $developer->id)}} method="POST">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" value=""> <span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>
                                        </form>
                                       
                                
                                </tr>
                                {{ $increment++ }}
                            @endforeach
                        </table>
                    </div>
                </div>
                <!--user end-->


            </div>
            <!--container closed-->
        @endsection
