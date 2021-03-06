<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>TA/PLA Application Form</title>

    <!-- Bootstrap Core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- link to incorporate css with framework
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet"> 
    -->

    <!-- Custom CSS -->
    <link href="/css/agency.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">TA/PLA Application</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#apply">Apply</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in">Welcome To The TA/PLA Application Form!</div>
                <a href="#apply" class="page-scroll btn btn-xl">Apply Now!</a>
            </div>
        </div>
    </header>

    <!-- Application Section -->
    <section id="apply">
        <div class="container">
                <!--mutli level columns-->
                  <div class="col-md-8 col-md-offset-2 text-center">
                            <h2>COMPUTER SCIENCE DEPARTMENT</h2>
                        <div class="col-md-8 col-md-offset-2 text-center">
                               <h4> GRADUATE TEACHING ASSISTANT APPLICATION</h4>
                            <div class="col-md-8 col-md-offset-2 text-center">
                                        <u>Deadline:</u> Put Date Here     
                            </div>
                        </div>
                 </div>
        </div>
        <div>
            <br>
        </div>
    <form class="form-inline">
        <div class="container">
            <!--radio buttons to pick school standing option-->
                 <div class="form-group text-center">
                        <div class="radio">
                            <label>
                                <input type="radio" name="schoolStandingOption" id="graduateStudent" value="gradStudent">
                                        TA(Graduate Student)
                                 </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="schoolStandingOption" id="undergraduteStudnet" value="undergrad">
                                    PLA(Undergradute Student)
                            </label>
                        </div>                 
                </div>
        </div>

        <div>
            <br>
        </div>

        <div class="container"> <!--text inputs for name, ID, GPA -->       
                <div class="form-group">
                    <label for="applicantName">Name </label>
                    <input type="text" class="form-control" id="applicantName" placeholder="Put Name Here">
                </div>

                <div class="form-group">
                    <label for="applicantID">ID </label>
                    <input type="text" class="form-control" id="applicantID" placeholder="Student ID">
                </div>

                <div class="form-group">
                    <label for="applicantGPA">GPA </label>
                    <input type="text" class="form-control" id="applicantGPA" placeholder="#.##">  
                </div>
        </div>

        <div>
            <br>
        </div>

        <div class="container"> <!--text input for undergrad student applicant to put in program and level -->
                <div class="form-group">
                    <label for="undergradApplicantStanding"><u>If Undergraduate</u> applying for PLA, indicate program and level </label>
                    <input type="text" class="form-control" id="undergradApplicantStanding" placeholder="CS BS sr">
                </div>
            
        </div>

        <div>
            <br>
        </div>

        <div class="container"> <!--radio button and text input for graduate student applicant to put in level and advisor's name -->
            <div class="form-group">
                <div class="radio">
                    <label>
                            <i>If Graduate</i>
                        <input type="radio" name="gradStudentProgram" id="graduateProgramMS" value="MS">
                            MS 
                    </label>
                    <label> 
                        <input class="col-md-offset-2" type="radio" name="gradStudentProgram" id="graduateProgramPHD" value="Phd">
                            Phd
                    </label>
                </div>
            </div>
            
            <div class="form-group col-md-offset-1">
                <label for="gradAdvisor">Advisor: </label>
                <input type="text" class="form-control" id="gradAdvisor" placeholder="Advisor Name Here">
            </div>
        </div>

     </form>   
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; SWE Group F 2015</span>
                </div>
            </div>
        </div>
    </footer>


    <!-- jQuery -->
    <script src="/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/js/bootstrap.min.js"></script>

    <!-- script tag to integrate js with framework
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    -->

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="/js/classie.js"></script>
    <script src="/js/cbpAnimatedHeader.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="/js/agency.js"></script>

</body>

</html>
