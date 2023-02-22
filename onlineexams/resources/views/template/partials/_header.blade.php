@if( Request::is('/') )
    <div class="header">
        <div class="row">
            <div class="col-lg-6">
                <span class="logo">Test Your Skills</span>
            </div>
            <div class="col-md-2 col-md-offset-4">
                <a href="#" class="pull-right btn sub1" data-toggle="modal" data-target="#myModal"><span
                        class="glyphicon glyphicon-log-in" aria-hidden="true"></span>&nbsp;<span
                        class="title1"><b>Signin</b></span></a>
            </div>
            <!--sign in modal start-->
            <div class="modal fade" id="myModal">
                <div class="modal-dialog">
                    <div class="modal-content title1">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title title1"><span style="color:orange">Log In</span></h4>
                        </div>
                        <div class="modal-body">
                            <form class="form-horizontal" action="login.php?q=index.php" method="POST">
                                <fieldset>


                                    <!-- Text input-->
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="email"></label>
                                        <div class="col-md-6">
                                            <input id="email" name="email" placeholder="Enter your email-id"
                                                class="form-control input-md" type="email">

                                        </div>
                                    </div>


                                    <!-- Password input-->
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="password"></label>
                                        <div class="col-md-6">
                                            <input id="password" name="password" placeholder="Enter your Password"
                                                class="form-control input-md" type="password">

                                        </div>
                                    </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Log in</button>
                            </fieldset>
                            </form>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
            <!--sign in modal closed-->

        </div>
        <!--header row closed-->
    </div>

@elseif((Request::is('admin/*')))
    {{-- si admin --}}

    <div class="header">
        <div class="row">
            <div class="col-lg-6">
                <span class="logo">Test Your Skills</span>
            </div>
            <span class="pull-right top title1"><span class="log1"><span class="glyphicon glyphicon-user"
                        aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;&nbsp;Hello,</span> <a href="account.php"
                    class="log log1">Admin</a>&nbsp;|&nbsp;<a href="logout.php?q=account.php" class="log"><span
                        class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp;Signout</button></a></span>
        </div>
    </div>
    <!-- admin start-->

    <!--navigation menu-->
    <nav class="navbar navbar-default title1">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href={{ route('adminhome') }}><b>Dashboard</b></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="{{ Request::is('admin/dashboard') ? 'active' : '' }}"><a href={{ route('adminhome') }}>Home<span class="sr-only">(current)</span></a></li>
                    <li class="{{ Request::is('admin/users') ? 'active' : '' }}"><a href={{ route('usersindex') }}>Users</a></li>
                    <li class="{{ Request::is('admin/ranking') ? 'active' : '' }}"><a href={{ route('adminranking') }}>Ranking</a></li>
                    <li class="{{ Request::is('admin/feedback') || Request::is('admin/feedback/*') ? 'active' : '' }}"><a href={{ route('adminfeedback') }}>Feedback</a></li>
                    <li class="{{ Request::is('admin/quiz/*') ? 'active' : '' }} dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                            aria-haspopup="true" aria-expanded="false">Quiz<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href={{ route('quizdetails') }}>Add Quiz</a></li>
                            <li><a href={{ route('quizdestroy') }}>Remove Quiz</a></li>

                        </ul>
                    </li>
                    <li class="pull-right"> <a href="logout.php?q=account.php"><span class="glyphicon glyphicon-log-out"
                                aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;&nbsp;Signout</a></li>

                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
    <!--navigation menu closed-->
    @else
    {{-- si user --}}
    <div class="header">
      <div class="row">
        <div class="col-lg-6">
          <span class="logo">Test Your Skill</span>
        </div>
        <div class="col-md-4 col-md-offset-2">
          <span class="pull-right top title1" ><span class="log1"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;&nbsp;Hello,</span> <a href="" class="log log1">Héritier</a>&nbsp;|&nbsp;<a href="" class="log"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp;Signout</button></a></span>
        </div>
      </div>
    </div>

    <div class="bg">
      <!-- start navigation menu-->
      <nav class="navbar navbar-default title1">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand {{ Request::is('user/home') ? 'active' : '' }}" href={{ route('userhome') }}><b>Netcamp</b></a>
          </div>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <li class="{{ Request::is('user/home') ? 'active' : '' }}" ><a href={{ route('userhome') }}><span class="glyphicon glyphicon-home" aria-hidden="true"></span>&nbsp;Home<span class="sr-only">(current)</span></a></li>
              <li class="{{ Request::is('user/history') ? 'active' : '' }}"><a href={{ route('userhistory') }}><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>&nbsp;History</a></li>
              <li class="{{ Request::is('user/ranking') ? 'active' : '' }}"><a href={{ route('userranking')}}><span class="glyphicon glyphicon-stats" aria-hidden="true"></span>&nbsp;Ranking</a></li>
              <li class="pull-right"> <a href=""><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;&nbsp;Signout</a></li>
            </ul>
            <form class="navbar-form navbar-left" role="search">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Enter tag ">
              </div>
              <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search" aria-hidden="true"></span>&nbsp;Search</button>
            </form>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
      <!--end navigation menu-->
@endif