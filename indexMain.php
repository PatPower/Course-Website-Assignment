<?php
    session_start();
?>
<!DOCTYPE HTML>
<html>

<head>
  <link rel="stylesheet" type="text/css" href="index.css">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="https://fonts.googleapis.com/css?family=Cabin" rel="stylesheet">
  <script type="text/javascript" src="index.js" ></script>
  <title> CSCB20 </title>
</head>

<body>

  <div id='home' class='firstBlock'>
    <div id="navBar" class="nav">
      <a id="barTitle" href="index.html">CSCB20 Course Website</a>
      <a id="empty" href="index.html"></a>
      <a onclick="smoothScroll('contact')">Contact</a>
      <a onclick="smoothScroll('labs')">Labs</a>
      <a onclick="smoothScroll('assignments')">Assignments</a>
      <a onclick="smoothScroll('lecs')">Lectures</a>
      <a onclick="smoothScroll('links')">Course Resources</a>
      <a onclick="smoothScroll('anouncments')">Anouncments</a>
      <a onclick="smoothScroll('course')">Course Info</a>
      <a onclick="smoothScroll('home')">Home</a>
      <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="navFunct()">&#9776;</a>
    </div>
    <div id='floater'></div>
    <p class='titleName'>CSCB20</p>
    <p>Introduction to Databases and Web Applications | Winter 2018</p>
     <?php
        echo '<div class="center">Welcome '.$_SESSION['name'].'</div>';
    ?>
  </div>
  <div class='innerSecondBlock'>
    <div class='block'>
      <h3>Announcement 1</h3>
      <p id="date">January, 2, 2018</p>
      <a>Assignments are due at 11:59 pm on their due date. Submit early to avoid last minute submission related problems. Email submission will not be be accepted unless markus is down. Email submission at the eleventh hour will be considered as late submission.</a>
    </div>
    <div class='block'>
      <h3>Announcement 2</h3>
      <p id="date">January, 1, 2018</p>
      <a>Assignments are due at 11:58 pm on their due date. Submit early to avoid last minute submission related problems. Email submission will not be be accepted unless markus is down. Email submission at the eleventh hour will be considered as late submission.</a>
      <br>
    </div>
    <div class='block'>
      <h3>Announcement 3</h3>
      <p id="date">December, 25, 2017</p>
      <a>Assignments are due at 11:57 pm on their due date. Submit early to avoid last minute submission related problems. Email submission will not be be accepted unless markus is down. Email submission at the eleventh hour will be considered as late submission.</a>
    </div>
  </div>
  <div class="toAnouncements"><a onclick="smoothScroll('anouncments')"> Click here for more anouncments</a></div>

  <div id="course" class='secondBlock'>
    <div class="courseTitle">Course Information</div>
    <div class = 'courseDes'>
    <p>A practical introduction to Databases and Web app development.
      Databases: terminology and applications; creating querying and updating
      databases; the entity-relationship model for databases design.
      Web documents and applications: static and interactive documents;
      Web server and dynamic server-generated content; Web application
      development and interface with databases.
     </p>
     <span class='prereq'>Prerequisite:</span>
     <span>Some experience in programming in an imperative language
       such as Python, Java or C.</span>
     <div>
       <span class='exclusion'>Exclusion:</span>
       <span>This course may be taken after - or concurrent with
         - any C- or D-level CSC course.</span>
     </div>
     <a id="syl" class= syllabusButton href="#Syllabus">Syllabus</a>
    </div>
  </div>
  <div id="anouncments" class='secondBlockAutoHeight'>
    <div class="courseTitle">Anouncments</div>
    <div class="anouncmentBlock">
      <h3>There will be cheese at 12:10</h3>
      <p id="date">December, 2, 2017</p>
      <p>The cheese will be great quality. Come down to IC 130 to check out the sweet deals. It will be the best cheese you have ever taste. You won't regret it.<p>
    </div>
    <div class="anouncmentBlock">
      <h3>There will be Piazza at 15:10</h3>
      <p id="date">December, 1, 2017</p>
      <p>The cheese will be great quality. Come down to IC 130 to check out the sweet deals. It will be the best cheese you have ever taste. You won't regret it.<p>
    </div>
  </div>
  <div id="links" class='secondBlock'>
    <div class="courseTitle">Course Resources</div>
    <div class="Cweb">
      <div>Click on any of the titles below to be directed to their relative webpages</div>
      <br>
      <div class="divider">
        <hr>
      </div>
      <div id='resource'><a onclick="smoothScroll('course')">Course Website</a></div>
      <p>
      <div>You can find all helpful tools on this page.</div>
      The first resource available to you is the Course website.
        Course information, lecture notes, tutorial material,
        important announcements, etc. will be posted on the course website.
        It is your responsibility to visit it frequently.
      </p>
      <div class="divider">
        <hr>
      </div>
      <div id="resource"><a href='https://code.tutsplus.com/articles/sql-for-beginners--net-8200'>MySQL Tutorial (Online)</a></div>
      <p>Beginner tutorial for MySQL</p>
      <div class="divider">
        <hr>
      </div>
      <div id="resource"><a onclick="smoothScroll('email')">Email</a></div>
      <p>Questions regarding course material, assignments, midterms, etc.
      should be posed on the discussion board. Questions about the
      assignment which you feel you cannot formulate without revealing
      your solution (should be very rare!), as well as questions and
      concerns regarding your personal matters should be directed at
      the instructor.</p>
      <div class="divider">
        <hr>
      </div>
      <div id="resource"><a href='https://www.piazza.com'>Discussion Board
      </a></div>
      <p>You are encouraged to use the discussion board to discuss course
      material, pose questions on assignments, etc. The board will be monitored
      by the course instructor and TAs. Please, be very careful not to
      reveal (parts of) your solution on the discussion board. </p>
      <div class="divider">
        <hr>
      </div>
      <div id="resource"><a href='https://markus.utsc.utoronto.ca/cscb20w18/?locale=en'>Markus
      </a></div>
      <p> All assignments are to be handed in via Markus. </p>
      <div class="divider">
        <hr>
      </div>
      <div id="resource"><a href='http://www.utsc.utoronto.ca/iits/computer-labs'>UTSC Labs
      </a></div>
      <p> The status of all the computers in UTSC. </p>
      <div class="divider">
        <hr>
      </div>
      <div id="resource"><a href="https://docs.google.com/forms/d/e/1FAIpQLSc0_2lybZw9Zwlm3fKtkMDegHrP0dSbH_LUAMaMnx5vhko6Yg/viewform">Anonymous Feedback</a></div>
      <p> Please help improve our website by giving us anonymous feedback. </p>
      <div class="divider">
        <hr>
      </div>
    </div>
  </div>
  </div>


  <div id="lecs" class='secondBlock'>
    <div class="courseTitle">Lectures</div>
    <div class="Table">
      <p>Please print and bring these notes to class.</p>
      <div class="table">
            <div class="TableHeader">
              <span class="Cell" id="Col1head">Week</span>
              <span class="Cell" id="Col2head">Topic</span>
              <span class="Cell" id="Col3head">Reading</span>
              <span class="Cell" id="Col4head">Lecture Material</span>
              <span class="Cell" id="Col5head">In class</span>
            </div>
            <div class="RowEven">
              <span class="Cell">1</span>
              <span class="Cell">Introduction, Databases background</span>
              <span class="Cell">None</span>
              <span class="Cell"><a href='#'>Powerpoint</a> <a href='#'>Powerpoint Handout</a></span>
              <span class="Cell">None</span>
            </div>
            <div class="RowOdd">
              <span class="Cell">3</span>
              <span class="Cell">Schema Diagrams, Relational Algebra</span>
              <span class="Cell">None</span>
              <span class="Cell"><a href='#'>Powerpoint</a> <a href='#'>Worksheet</a> <a href="#">Worksheet Solution</a></span>
              <span class="Cell">None</span>
            </div>
            <div class="RowEven">
              <span class="Cell">4</span>
              <span class="Cell">SQL and MySQL</span>
              <span class="Cell">None</span>
              <span class="Cell"><a href='#'>Powerpoint PDF</a> <a href = '#'>Powerpoint Printable PDF</a>
              <a href="#">MySQL Worksheet</a></span>
              <span class="Cell">In Class MySQL</span>
            </div>
            <div class="RowOdd">
              <span class="Cell">5</span>
              <span class="Cell">MySQL Queries, Creating and Editing Tables</span>
              <span class="Cell">None</span>
              <span class="Cell"><a href="#">Powerpoint Printable</a> <a href="#">Powerpoint</a> <a href="#">More MySQL
              Worksheet Solutions</a></span>
              <span class="Cell">In Class MySQL</span>
            </div>
            <div class="RowEven">
              <span class="Cell">6</span>
              <span class="Cell">SQL Outer Joins, Views, NULL, string
              function HTML</span>
              <span class="Cell">None</span>
              <span class="Cell"><a href='#'>Powerpoint</a> <a href="#">HTML Powerpoint</a> <a href="#">MySQL Views
              Worksheet</a></span>
              <span class="Cell">None</span>
            </div>
            <div class="RowOdd">
              <span class="Cell">7</span>
              <span class="Cell">HTML, CSS</span>
              <span class="Cell">None</span>
              <span class="Cell"><a href='#'>CSS Powerpoint</a></span>
              <span class="Cell">None</span>
            </div>
            <div class="RowEven">
              <span class="Cell">8</span>
              <span class="Cell">PHP</span>
              <span class="Cell">None</span>
              <span class="Cell"><a href="#">Powerpoint</a></span>
              <span class="Cell">None</span>
            </div>
            <div class="RowOdd">
              <span class="Cell">9</span>
              <span class="Cell">PHP and SQL</span>
              <span class="Cell">None</span>
              <span class="Cell"><a href="#">Powerpoint</a></span>
              <span class="Cell">empty starter file: query.php
              To look at text for this file download this PHP
              query.txt</span>
            </div>
            <div class="RowEven">
              <span class="Cell">10</span>
              <span class="Cell">Javascript and jQuery</span>
              <span class="Cell">None</span>
              <span class="Cell"><a href='#'>jQuery Powerpoint</a></span>
              <span class="Cell">None</span>
            </div>
            <div class="RowOdd">
              <span class="Cell">11</span>
              <span class="Cell">jQuery, AJAX, JSON</span>
              <span class="Cell">None</span>
              <span class="Cell"><a href='#'>Powerpoint Printable</a><a href="#"> Powerpoint</a></span>
              <span class="Cell">None</span>
            </div>
            <div class="RowEven">
              <span class="Cell">12</span>
              <span class="Cell">Last Year's Final</span>
              <span class="Cell">None</span>
              <span class="Cell"><a href="#">W16 Final</a> Note that some questions have
              code missing because portions resemble your A3</span>
              <span class="Cell">None</span>
            </div>
          </div>
        </div>
      </div>
  <div id="assignments" class='secondBlock'>
    <div class="courseTitle">Assignments</div>
    <div class="divider">
      <hr>
    </div>
    <div class="assignmentSect">
      <h3> Assignment 1 </h3>
      <p> Due next monday </p>
      <p> Part 1. Wednesday Feb. 1, 11.59pm, Submit to MarkUs
UPDATED Part 2 and 3. For 5% bonus Saturday Feb. 11, 11.59pm or Friday Feb. 17, 11.59 Submit to MarkUs You can download a dumpfile for IMDB_SMALL here.
To use it type mysql -u utorid -p < IMDB_SMALL.sql </p>
    <div class="assignButton"><a href""> Assignment 1 PDF</a></div>
    <div class="divider">
      <hr>
    </div>
    <h3> Assignment 2 </h3>
    <p> Due next monday </p>
    <p> Part 1. Wednesday Feb. 1, 11.59pm, Submit to MarkUs
UPDATED Part 2 and 3. For 5% bonus Saturday Feb. 11, 11.59pm or Friday Feb. 17, 11.59 Submit to MarkUs You can download a dumpfile for IMDB_SMALL here.
To use it type mysql -u utorid -p < IMDB_SMALL.sql </p>
    <div class="assignButton"><a href""> Assignment 2 PDF</a></div>
    <div class="divider">
      <hr>
    </div>
    <h3> Assignment 3 </h3>
    <p> Due next monday </p>
    <p> Part 1. Wednesday Feb. 1, 11.59pm, Submit to MarkUs
UPDATED Part 2 and 3. For 5% bonus Saturday Feb. 11, 11.59pm or Friday Feb. 17, 11.59 Submit to MarkUs You can download a dumpfile for IMDB_SMALL here.
To use it type mysql -u utorid -p < IMDB_SMALL.sql </p>
    <div class="assignButton"><a href""> Assignment 3 PDF</a></div>
    </div>
    <div class="divider">
      <hr>
    </div>
  </div>


  <div id="labs" class='secondBlock'>
    <div class="courseTitle">Labs</div>
    <div class="Table">
    <p>Please go to the tutorial section you signed up for on ROSI</p>
    <p>Tutorials are held every week. The first tutorial week is
    week 2. Please make use of this valuable resource!</p>
<!--create a table but,
cannot use table element -->
<div class="table">
  <div class="TableHeader">
    <span class="Cell" id="Col1head">Week</span>
    <span class="Cell" id="Col2head">Lab</span>
    <span class="Cell" id="Col3head">Solutions</span>
  </div>
  <div class="RowOdd">
    <span class="Cell">2</span>
    <span class="Cell"><a href='#'>Python , Command Line</a></span>
    <span class="Cell">None</span>
  </div>
  <div class="RowEven">
    <span class="Cell">3</span>
    <span class="Cell"><a href='#'>Handout</a></span>
    <span class="Cell">None</span>
  </div>
  <div class="RowOdd">
    <span class="Cell">4</span>
    <span class="Cell"><a href=#>Handout university.sql</a></span>
    <span class="Cell"><a href='#'>query_soln</a></span>
  </div>
  <div class="RowEven">
    <span class="Cell">5</span>
    <span class="Cell"><a href='#'>Handout</a></span>
    <span class="Cell"><a href='#'>Solns</a></span>
  </div>
  <div class="RowOdd">
    <span class="Cell">6</span>
    <span class="Cell"><a href="#">Handout</a></span>
    <span class="Cell"><a href='#'>Solns</a></span>
  </div>
  <div class="RowEven">
    <span class="Cell">7</span>
    <span class="Cell"><a href='#'>Handout</a></span>
    <span class="Cell">None</span>
  </div>
  <div class="RowOdd">
    <span class="Cell">8</span>
    <span class="Cell"><a href='#'>Handout</a></span>
    <span class="Cell">None</span>
  </div>
  <div class="RowEven">
    <span class="Cell">9</span>
    <span class="Cell"><a href='#'>Handout</a></span>
    <span class="Cell">None</span>
  </div>
  <div class="RowOdd">
    <span class="Cell">10</span>
    <span class="Cell"><a href='#'>W3 tutorial</a> work through the tutorial for jQuery
       up to until jQuery Remove </span>
    <span class="Cell">None</span>
  </div>
</div>
    <!--end of table-->
    </div>
  </div>

  <div id="contact" class="secondBlock">
    <div class="courseTitle">About Instructors</div>
    <div class="contactInfo">
      <div class="ProfInfo">
        <div id='instructorName'>Anna Bretscher</div>
        Email:
        <span id="email">bretscher@utsc.utoronto.ca</span><br>
        Office:
        <span id='office'>IC493</span><br>
        Phone:
        <span id='phone'>(416)208-4745</span><br>
        Lectures:
        <span id='lecTime'>Mon 9:15-11 AM in HW216</span><br>
        Office Hours:
        <span id='officeHrs'>Wed 11-12</span>
      </div>
    <div class="ProfInfo">
      <div id='instructorName'>Abbas Attarwala</div>
      Email:
      <span id="email">Abbas.Attarwala@utoronto.ca</span><br>
      Office:
      <span id='office'>IC478</span><br>
      Lectures:
      <span id='lecTime'> Mondays 9am to 11am in SW 319</span><br>
      Office Hours:
      <span id='officeHrs'>Monday 11:30am - 1:15pm, Friday 11:30am - 1:15pm</span><br>
    </div>
  </div>
  </div>
  <footer>
    <div class="left">
      <br>
      <br>
      <h2>CSCB20</h2>
      <h2>Course Website</h2>
    </div>
    <div class="vline"></div>
    <div class="vline"></div>
    <div class="middle">
      <p> Navigation</p>
      <a onclick="smoothScroll('course')">Course Info</a><br>
      <a onclick="smoothScroll('anouncments')">Anouncments</a><br>
      <a onclick="smoothScroll('links')">Course Resources</a><br>
      <a onclick="smoothScroll('lecs')">Lectures</a><br>
      <a onclick="smoothScroll('assignments')">Assignments</a><br>
      <a onclick="smoothScroll('labs')">Labs</a><br>
      <a onclick="smoothScroll('contact')">Contact</a><br>
    </div>
    <div class="middle">
      <p class="bold"> Course Resources</p class="bold">
      <a href="#Syllabus">Syllabus</a><<br>
      <a href='https://code.tutsplus.com/articles/sql-for-beginners--net-8200'>MySQL Tutorial (Online)</a><br>
      <a href='https://www.piazza.com'>Piazza</a><br>
      <a href='https://markus.utsc.utoronto.ca/cscb20w18/?locale=en'>Markus</a><br>
      <a href='http://www.utsc.utoronto.ca/iits/computer-labs'>UTSC Labs</a><br>
      <a href="https://docs.google.com/forms/d/e/1FAIpQLSc0_2lybZw9Zwlm3fKtkMDegHrP0dSbH_LUAMaMnx5vhko6Yg/viewform">Anonymous Feedback</a>
    </div>
    <br>
    <div class="vline"></div>
    <div class="vline"></div>
    <div class="right">
      <p> Created by </p>
      <h2> Patent </h2>
      <h2> & </h2>
      <h2> Dwight </h2>
    </div>
  </footer>
</body>
