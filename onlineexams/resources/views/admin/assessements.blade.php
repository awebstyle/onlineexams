@extends('template.index')

@section('title')
    Assessement
@endsection

@section('content')
    <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="panel" style="margin:5%">
              <b>Question &nbsp;{{ Session::get('num') }}&nbsp;::
                
                    <br />{{ $question->question }}</b><br /><br />
                    <form action={{ route('saveanswer', $question->id) }} method="POST"  class="form-horizontal">
                      @csrf
                      <input type="radio" name="ans" value="{{ $question->one }}">{{ $question->one }}<br /><br />
                      <input type="radio" name="ans" value="{{ $question->two }}">{{ $question->two }}<br /><br />
                      <input type="radio" name="ans" value="{{ $question->three }}">{{ $question->three }}<br /><br />
                      <input type="radio" name="ans" value="{{ $question->four }}">{{ $question->four }}<br /><br /><br />
                      <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span>&nbsp;Submit</button>
                    </form>
                
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection