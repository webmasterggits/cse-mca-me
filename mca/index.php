<?php
      $useragent=$_SERVER['HTTP_USER_AGENT'];
      $mobile = false;
    if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|
      iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|
      series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso
      |4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw
      |au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-
      |co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os
          |wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)
      |hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris
      |ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx
      |m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )
      |mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1
      |p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60
        |\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc
        |nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)
      |ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)
      |vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-
      |your|zeto|zte\-/i',substr($useragent,0,4)))
      {
        $mobile = true;
      }
?>
<!DOCTYPE html>
<html>
<head>
  <title>GGITS | CSE Home</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <script src="js/jquery-2.1.3.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/style.css">

  <!-- Slider Files-->
  <?php
    if (!$mobile) {
    echo "<script src="sliderengine/jquery.js"></script>
    <script src="sliderengine/amazingslider.js"></script>
    <link rel="stylesheet" type="text/css" href="sliderengine/amazingslider-1.css">
    <script src="sliderengine/initslider-1.js"></script>";
    }
  ?>
    <!-- Slider Files -->

   <style type="text/css">
   body
   {
    width: 100%;
   }
    @media (max-width: 480px) { 
    .nav-tabs > li {
        float:none;
    }
  }
   </style>
</head>
<body>

<!--Navigation Begin-->
<nav class="navbar navbar-default">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
  	<div class="navbar-header">
      <a class="navbar-brand" href="http://www.ggits.org">
        <img alt="GGITS" src="images/logo.jpg">
      </a>
    </div>
    </div>

     <h3 class="hidden-xs hidden-sm hidden-md" style="color:white;display:inline-block;">Gyan Ganga Institute Of Tecnology And Sciences</h3>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
      <div class="nav navbar-nav" align="center">
        <div class="visible-xs-block" style="padding: 20px;"></div>
        <a href="http://117.239.195.82:8083/gols"><img src="images/moodle.png" alt="Moodle"></a>
        <a href="#"><img src="images/cms.png" alt="CMS"></a>
      </div>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<!--Navigation End-->
<!--Spacing-->

<div class="page-header" align="center">
  <h1>Department of Computer Science</h1>
</div>


<div class="row container" style="margin:auto;padding-bottom:50px;">

<!--Side Navigation-->
<ul class="nav nav-pills nav-stacked col-lg-2 col-md-2 col-sm-3" style="text-align: center">
        <li class="active"><a href="index.php">Home</a></li>
        <li><a href="faculty.html">Faculty</a></li>
        <li><a href="academics.html">Academics</a></li>
        <li><a href="laboratories.html">Laboratories</a></li>
        <li><a href="placements.html">Placements</a></li>
        <li><a href="research.html">Research and Publication</a></li>
        <li><a href="student project designs.html">Student Project Designs</a></li>
        <li><a href="student acheivements.html">Student Acheivements</a></li>
        <li><a>Gallery</a></li>
        <li><a href="dept.news Letter.html">Dept. News Letter</a></li>
        <li><a href="centerofe.html">Center of Technology Excellence</a></li>
</ul>
<!--Side nav Ends-->

<!--Content Division Begin-->
<div class="col-lg-8 col-md-8 col-sm-7 contents" style="text-align: justify;min-height:700px;">
<!--Slider begin-->
<?php
    if (!$mobile) {
echo '<div id="amazingslider-wrapper-1" style="display:block;position:relative;max-width:480px;margin:0px auto 48px;">
        <div id="amazingslider-1" style="display:block;position:relative;margin:0 auto;">
            <ul class="amazingslider-slides" style="display:none;">
                <li><img src="images/l1.jpg" alt="Computer Lab" />
                </li>
                <li><img src="images/Picture7.jpg" alt="CS 6th Sem student" data-description="in Techkriti at IIT Kanpur" />
                </li>
            </ul>
            <ul class="amazingslider-thumbnails" style="display:none;">
                <li><img src="images/l1-tn.jpg" alt="Computer Lab" /></li>
                <li><img src="images/Picture7-tn.jpg" alt="QR-HUBS Model" /></li>
            </ul>
        </div>
    </div>';
  }
?>
<!--Slider end-->
  <!--Tabs-->
  <ul class="nav nav-tabs">
    <li role="presentation" class="active"><a href="#about" aria-controls="about" role="tab" data-toggle="tab">About</a></li>
    <li role="presentation"><a href="#mission" aria-controls="mission" role="tab" data-toggle="tab">Mission</a></li>
    <li role="presentation"><a href="#vision" aria-controls="vision" role="tab" data-toggle="tab">Vision</a></li>
    <li role="presentation"><a href="#Objective" aria-controls="Objective" role="tab" data-toggle="tab">Program Educational Objective</a></li>
    <li role="presentation"><a href="#ProgramOutcome" aria-controls="ProgramOutcome" role="tab" data-toggle="tab">Program Outcome</a></li>
  </ul>

  <!--Tabs Content-->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane fade in active" id="about">
      <p>
Since its inception in 2003(AICTE &#45; Approval Date:12/05/2003, Ref. No.: 06/01/MP/DEG/2003/006), the Department of Computer Science and Engineering has been continuously making progress in teaching and R&amp;D activities. Started with an intake of 60 students, the sanctioned intake was increased to 120 seats in 2006(AICTE Ref. No.: 06/01/MP/ENGG/2003/006) and further the intake is increased to 180 in the year 2012. In 2010, the department started a PG Program in &ldquo;Computer Science and Engineering (CSE)&rdquo; with an intake of 18 students and the intake increased to 36 in the year 2013. In 2012, the department started one more PG Program in &ldquo;Software System (SS)&rdquo; with an intake of 18 students and the intake increased to 36 in the year 2013.</p>


<P>Over the period, student with good score have got admission in the department. A Large number of companies visit us for recruitment/ training. The Department has entered into an MoU with HCL,IBM, Microsoft, Oracle, Zensar Technologies, Hexaware Centre Of Excellence &amp; GTT for software training and Faculty Development Programmes.</p>
    </div>
    <div role="tabpanel" class="tab-pane fade" id="mission">
      <ul>
        <li>To be a leading centre of technical education in computer science in India.</li>
        <li>To produce future citizens of the country to meet the upcoming global challenges.</li>
      </ul>
    </div>
    <div role="tabpanel" class="tab-pane fade" id="vision">
      <ul>
        <li>Empowering students with the state of art facilities and knowledge for the welfare of the society and the nation. </li>
        <li>Prepare students as per the ever changing need of the industry.</li>
        <li>To inculcate ethical values in the minds of emerging engineers.</li>
      </ul>
    </div>
    <div role="tabpanel" class="tab-pane fade" id="Objective">
    <p>PEO 1. Graduates will practice their profession with confidence and global Competitiveness and make intellectual contributions to it.</p>
    <p>PEO 2. Graduates will work as teams on multidisciplinary projects with effective communication skills and leadership qualities.</p>
    <p>PEO 3. Graduates will adapt in their profession with social awareness, ethics and responsibility.
    PEO 4. Graduates will pursue advanced study and research.</p>
    </div>
    <div role="tabpanel" class="tab-pane fade" id="ProgramOutcome">
      <p>
        <b>PO1:</b> apply knowledge of computing and mathematics to computer science problems. <br><b>PO2:</b>  analyze a problem and identify and define the computing requirements appropriate to its solution.<br><b>PO3:</b>  design, implement, and evaluate a computer-based system, process, component, or program to meet desired needs.<br><b>PO4:</b>  function effectively on teams to accomplish a common goal.<br><b>PO5:</b>  function to understand professional, ethical, legal, security and social issues and responsibilities.<br><b>PO6:</b>  communicate effectively with a range of audiences.<br><b>PO7:</b> analyze the local and global impact of computing on individuals, organizations and society.<br><b>PO8:</b> engage in continuing professional development.<br><b>PO9:</b> use current techniques, skills and tools necessary for computing practices.
      <br><b>PO10:</b> apply mathematical foundations, algorithmic principles, and computer science theory in the modeling and design of computer-based systems that demonstrate comprehension of the tradeoffs involved in design choices.<br><b>PO11:</b> apply design and development principles in the construction of software systems of varying complexity.
      </p>
    </div>
  </div>
</div>
<!--Content Division End-->
<!--News Section -->
<ul class="nav nav-pills nav-stacked col-lg-2 col-md-2 col-sm-2" style="text-align: center">
  <li class="nav-header" style="padding: 7px;color: #3399FF;font-size: 1.5em;border-bottom-color: red;border-bottom-width: 3px;">News</li>
  <li>No News Yet</li>
</ul>
</div>
<!--Content Division End-->


<!--Footer-->
<nav class="nav navbar-default" style="color:white;height: 50px;">
    <p style="text-align: center;padding: 10px;">&copy; Gyan Ganga Institute Of Tecnology And Sciences</p>
</nav>
</body>
</html>