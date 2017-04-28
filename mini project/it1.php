
<link rel = "stylesheet" href = "http://www.skcet.ac.in/css/header.css">
<link rel = "stylesheet" href = "http://www.skcet.ac.in/css/superfish.css">
<script src = "http://www.skcet.ac.in/script/superfish.js"></script>
<script src = "http://www.skcet.ac.in/script/jquery.js"></script>


<script>
    $(document).ready(function(){
        
        $(".mobile .fa-bars").on('click', function(){
            $("#mobile_menu").fadeIn();
            $("#mobile_menu").css("display", "flex");
        });
        
        $("#mobile_menu .fa-close").on('click', function(){
            $("#mobile_menu").fadeOut();   
        });


    });
    
</script>

<header>
    <div id = "topbar">
        <a href = "http://www.skcet.ac.in/admissions.php" class = "remove">Prospective Students</a>
        <a href = "http://www.skcet.ac.in/students.php">Students</a>
        <a href = "http://www.skcet.ac.in/faculty.php">Faculty</a>
        <a href = "#" class = "remove">Alumni</a>
        <a href = "http://www.skcet.ac.in/parents.php">Parents</a>
        <a href = "http://www.skcet.ac.in/visit.php">Schedule a Visit</a>
    </div>
    
    <div id = "content" class = "desktop">
        <ul class = "sf-menu" id = "example">
            <a href = "http://www.skcet.ac.in/">
                <img src = "http://www.skcet.ac.in/images/logo.png" height = "85px">
            </a>
            <li style = "text-align: center;">
                <a href = "http://www.skcet.ac.in/index.php">Home</a>
            </li>
            <li style = "text-align: center;">
                <a href = "http://www.skcet.ac.in/about.php">About</a>
            </li>
            <li style = "text-align: center;">
                <a href = "http://www.skcet.ac.in/admissions.php">Admissions</a>
            </li>
            <li style = "text-align: center;">
                <a href = "http://www.skcet.ac.in/departments">Departments</a> 
            </li>
            <li style = "text-align: center;">
                <a href = "http://www.skcet.ac.in/placement.php">Placements</a>
            </li>

           
            <li style = "text-align: center;">
                <a href = "http://www.skcet.ac.in/exams.php">Exams</a>
            </li>
            <li style = "text-align: center;">
                <a href = "http://www.skcet.ac.in/research.php">Research</a>
            </li>
            <li style = "text-align: center;">
                <a href = "http://www.skcet.ac.in/campus1.php">Campus Life</a>
            </li>
            <div style = "clear: both;"></div>
        </ul>
    </div>
    
    <div id = "content" class = "mobile">
        <div>
            <a href = "http://www.skcet.ac.in/">
                <img class = "mobile_logo" src = "http://www.skcet.ac.in/images/logo.png" height = "60px">
            </a>
        </div>
        <span class = "fa fa-bars"></span>
    </div>
    
    <div id = "mobile_menu">
        <span class = "fa fa-close"></span>
        <div>
            <a href = "http://www.skcet.ac.in/">
                <img src = "http://www.skcet.ac.in/images/logo.png" height = "90px">
            </a>
        </div>
        <ul>
            <a href = "http://www.skcet.ac.in/index.php">
                <li style = "text-align: center;">
                    Home
                </li>
            </a>
            <a href = "http://www.skcet.ac.in/about.php">
                <li style = "text-align: center;">
                    About
                </li>
            </a>
            <a href = "http://www.skcet.ac.in/admissions.php">
                <li style = "text-align: center;">
                    Admissions
                </li>
            </a>
            <a href = "http://www.skcet.ac.in/departments.php">
                <li style = "text-align: center;">
                    Departments
                </li>
            </a>
           
            <a href = "http://www.skcet.ac.in/research.php">
                <li style = "text-align: center;">
                    Research
                </li>
            </a>
            <a href = "http://www.skcet.ac.in/exams.php">
                <li style = "text-align: center;">
                    Exams
                </li>
            </a>
            <a href = "http://www.skcet.ac.in/life.php">
                <li style = "text-align: center;">
                    Campus Life
                </li>
            </a>
        </ul>
    </div>
    
</header>
<html>
    <head>
        <title>Information Technology</title>
        <link rel = "stylesheet" href = "../css/header.css">
        <link rel = "stylesheet" href = "../css/bootstrap.css">
        <link rel = "stylesheet" href = "../css/font-awesome.css">
        <link rel = "stylesheet" href = "../css/departments/cse.css">
        <link rel = "stylesheet" href = "../css/slide.css">
        <link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
        <script src="../script/jquery.js"></script>
        <script src="../script/script.js"></script>
        <script src="../script/department.js"></script>
        <script>
            $(window).load(function(){
    
                $(".quick_links").css("height", $("#slider").height());
                $(".news_container").css("height", $(".about_dept").height());
                $(".vision_dept").css("height", $(".mission_dept").height());
                $("#dept_dashboard_video").css("height", $("#dept_dashboard_dashboard").height() + 20);
                
            });
            $(document).ready(function(){
                
                
                $(".dept_hero").css("margin-top", $("header #content").height());
                
                
                
                var images = [
                    "url('../departments/it_events/1.jpg')",
                    "url('../departments/it_events/2.jpg')",
                    "url('../departments/it_events/3.jpg')",
                    "url('../departments/it_events/4.jpg')"
                ];
                
                i = 1;
                
                function event_slider(){
                    $("#slider").css("background-image", images[i]);
                    $("#slider .title_p").html(title[i]);
                    $("#slider .excerpt").html(excerpt[i]);
                    i = (i + 1) % 4;
                }
                
                setInterval(event_slider, 2000);
                
            });
        </script>
    </head>
    
    <body id = "departments_page">
        
        <div id = "dept_hero" class = "dept_hero">
            <div class = "overlay">
                <p>Department of Information Technology</p>
            </div>
        </div>
        
        <div id = "strip" class = "strip">
            <div class = "row">
                <div class = "home">
                    <a class = "dept_home_page" href = "#strip">
                        <div class = "overlay">
                            <p>Home</p><br>
                            <p>Get to know more about the department</p>
                        </div>
                    </a>
                </div>
                <div class = "peo">
                    <a href = "#strip" class = "dept_peo">
                        <div class = "overlay">
                            <p>PO and PEO's</p><br>
                            <p>Get to know about our Programme Objectives</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class = "row">
                <div class = "curriculum">
                    <a href = "#strip" class = "dept_syllabus">
                        <div class = "overlay">
                            <p>Curriculum</p><br>
                            <p>Get to know more about what you'll learn once you enter the department</p>
                        </div>
                    </a>
                </div>
                 
                <div class = "placements">
                    <a href = "#strip" class = "dept_placement">
                        <div class = "overlay">
                            <p>Placements</p><br>
                            <p>Get to know about our Department's placements</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class = "row">
                <div class = "faculty">
                    <a href = "#strip" class = "dept_faculty">
                        <div class = "overlay">
                            <p>Faculty</p><br>
                            <p>Get to know more about the people holding down the fort</p>
                        </div>
                    </a>
                </div>
                <div class = "infrastructure">
                    <a class = "dept_lab" href = "#strip">
                        <div class = "overlay">
                            <p>Infrastructure</p><br>
                            <p>Get to know more about our state of the art faculties and laboratories</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        
        <div class = "content">
            <div class = "main">
                
                <div id = "dept_home_page">
                    
                    <div id = "dept_details">
                        <div class = "row">
                            <div class = "col-md-7 col_content_parent">
                                <div id = "slider" class = "col_content" style = "background-image: url('../departments/it_events/1.jpg'); height: 400px;">
                                   
                                </div>
                            </div>
                            
                            <div class = "col-md-5 col_content_parent quick_links" id = "strip" style = "padding-left: 20px;">
                                <div class = "col_content" id="strip"style = "height: 100%;">
                                    <p class = "title">Quick Links</p>
                                    
                                     <a href = "http://www.skcet.ac.in/departments/index.php" class="dept_highlights"><div class = "quick_link_button">Department Home</div></a>
                                    <a href = "http://www.skcet.ac.in/departments/ithigh.php" class="dept_highlights"><div class = "quick_link_button">Department Highlights</div></a>
                                    <a href = "http://www.skcet.ac.in/departments/pdf/itstudent.pdf"><div class = "quick_link_button">Student Achievement</div></a>
                                    <a href = "http://www.skcet.ac.in/departments/pdf/itvac.pdf"><div class = "quick_link_button">Value Added Courses</div></a>
                                    <a href = "http://www.skcet.ac.in/departments/pdf/itmou.pdf"><div class = "quick_link_button">MOU's Signed</div></a>
                                    <a href = "http://www.skcet.ac.in/researchdoc/it.pdf"><div class = "dept_peo quick_link_button">Research and Development</div></a>
                                </div>
                            </div>

                        </div>
                    </div>


                    <div id = "dept_details">
                        <div class = "row">
                            <div class = "col-md-7 col_content_parent about_dept">
                                <div class = "col_content">
                                    <p class = "title">About</p>
                                    <br>
                                    <p>The Department of Information Technology is committed to provide the state-of-art technical education to the tomorrow’s technocrats and software professionals through dedicated quality teaching. The Department is also accredited by NBA-AICTE and it strives to provide ample opportunity to the students for exploring and exploiting new avenues in the field of IT. The Department has excellent Infrastructure facilities with 39 highly qualified and devoted faculty members having specialization in the areas like Data Mining and Warehousing, Wireless networks, Mobile Computing, Distributed Computing, and Web Technologies etc. Students have continuously secured highest number of ranks and good marks in both Anna University as well as autonomous results. The placement record of the department is phenomenal. Our Students are recruited by companies like Amazon, Zoho, Vuram, CTS, Accenture, Infosys, WIPRO etc.,</p>
                                </div>
                            </div>
                            
                            <div class = "col-md-5 col_content_parent news_container" style = "padding-left: 20px;">
                                <div id = "news" class = "col_content" style = "height: 100%;">
                                    <p class = "title">News and Events</p>
                                    <br>
                                    <marquee direction = "up">
                                        <ul>
                                            <li>
                                                <div class = "date">
                                                    <p class = "month">JAN</p>
                                                    <p class = "day">20</p>
                                                </div>
                                                <p>Association Guest Lecture on Overseas Eye-Opener</p>
                                                <div class = "clear"></div>
                                            </li>
                                            <li><div class = "date">
                                                    <p class = "month">FEB</p>
                                                    <p class = "day">10-11</p>
                                                </div>
                                                <p>National Conference on Computing, Communication and Information Systems</p>
                                                <div class = "clear"></div>
                                            </li>
                                            <li>
                                                <div class = "date">
                                                    <p class = "month">FEB</p>
                                                    <p class = "day">24</p>
                                                </div>
                                                <p>One Day Workshop on Internet of Things and Cloud Computing</p>
                                                <div class = "clear"></div>
                                            </li>
                                            <li>
                                                <div class = "date">
                                                    <p class = "month">MAR</p>
                                                    <p class = "day">16</p>
                                                </div>
                                                <p>CSI Lecture Series 4</p>
                                                <div class = "clear"></div>
                                            </li>
                                        </ul>
                                    </marquee>
                                </div>
                            </div>

                        </div>
                    </div>
                
                    <div id = "dept_details">
                        <div class = "row">
                            <div class = "col-md-7 col_content_parent mission_dept">
                                <div class = "col_content">
                                    <p class = "title">Mission</p>
                                    <br>
                                    <p>1. To provide state of art computer education.</p><br>
                                    <p>2. To equip staff and students with the latest skills in the field.</p><br>
                                    <p>3. To keep pace with new invention and technology development thereby set the trend for the futuristic information technology education and research with ethical and moral values.</p>
                                </div>
                            </div>
                            
                            <div class = "col-md-5 col_content_parent vision_dept" style = "padding-left: 20px;">
                                <div class = "col_content" style = "height:100%;">
                                    <p class = "title">Vision</p>
                                    <br>
                                    <p>To impart quality education by providing opportunities for shaping and transforming students into eminent and ethical IT professionals, researchers, innovators and entrepreneurs with requisite skill set to excel in the dynamic field of IT.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                   <div id = "dept_dashboard" class = "row">
                        <div id = "dept_dashboard_dashboard" class = "col-md-7">
                            <div>
                                <p>Dashboard</p>
                                <br>
                                <table class = "table table-striped table-bordered">
                                    <tr>
                                        <td>Programme</td>
                                        <td>B.Tech IT</td>
                                        
                                    </tr>
                                    <tr>
                                        <td>Year of Starting</td>
                                        <td>1998</td>
                                        
                                    </tr>
                                    <tr>
                                        <td>Sanctioned Intake</td>
                                        <td>180</td>
                                        
                                    </tr>
                                    <tr>
                                        <td>Student Strength</td>
                                        <td>745</td>
                                        
                                    </tr>
                                    <tr>
                                        <td>Faculty Strength</td>
                                        <td>39</td>
                                        
                                    </tr>
                                    <tr>
                                        <td>Number of Labs</td>
                                        <td>6</td>
                                        
                                    </tr>
                                    <tr>
                                        <td>Top Recruiters</td>
                                        <td colspan = "3">Amazon, Zoho, Infosys, Accenture, Cognizant, WIPRO</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        
                        <div id = "dept_dashboard_events" class = "col-md-5">
                            <div>
                                <p>Video</p><br>
                                <iframe width="100%" height="300" src="https://www.youtube.com/embed/gx1PWcS0P3Q" frameborder="0" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div id = "dept_peo">
                    <p class = "title">Programme Educational Objectives</p>
                    <br>
                    <table class = "table table-striped table-bordered">
                        <tr>
                            <td>PEO1</td>
                            <td>Graduates will have a profound knowledge in the various programming languages and possess globally competent skill sets by inculcating continuous upgradation of their technical skills and personality traits.</td>
                        </tr>
                        <tr>
                            <td>PEO2</td>
                            <td>Graduates will be able to analyze and find solutions to various applications and reconcile the dynamic trends in the field of Information Technology.</td>
                        </tr>
                        <tr>
                            <td>PEO3</td>
                            <td>Graduates will contribute to the society by their ethical behavior and effective teamwork.</td>
                        </tr>
                        <tr>
                            <td>PEO4</td>
                            <td>Graduates will excel with different skills like effective communication, leadership qualities, and provide smart solutions in business environment.</td>
                        </tr>
                      
                    </table>
                    <br><br>
                    <p class = "title">Programme Outcomes</p>
                    <br>
                    <table class = "table table-striped table-bordered">
                        <tr>
                            <td>PO-A</td>
                            <td>Graduates will demonstrate knowledge of mathematical, scientific and multidisciplinary approach for problem solving.</td>
                        </tr>
                        <tr>
                            <td>PO-B</td>
                            <td>Graduates will be able to apply their knowledge in various programming skills to create solutions for product based and application based software.</td>
                        </tr>
                        <tr>
                            <td>PO-C</td>
                            <td>Graduates will possess the ability to create real time solutions for different projects by using modern tools prevailing in the current trends.</td>
                        </tr>
                        <tr>
                            <td>PO-D</td>
                            <td>Graduates attain job related skills such as improved oral and written communications and experience in working in teams at a number of levels.</td>
                        </tr>
                        <tr>
                            <td>PO-E</td>
                            <td>Graduates attain advanced knowledge in the stream of Information Technology and basic knowledge in Electronics and Communication Engineering to develop and maintain the simple and complex information systems.</td>
                        </tr>
                        <tr>
                            <td>PO-F</td>
                            <td>Graduates will demonstrate state of the art technologies by choosing suitable electives that encourages lifelong learning.</td>
                        </tr>
                        <tr>
                            <td>PO-G</td>
                            <td>Graduates will possess effective leadership qualities and help the society with their social responsibility, ethical and moral values.</td>
                        </tr>
                        <tr>
                            <td>PO-H</td>
                            <td>Graduate perceive the attire to keep on upgrading themselves in both hardware and software to develop and manage projects in multi disciplines so as to survive in the latest IT field.</td>
                        </tr>
                        <tr>
                            <td>PO-I</td>
                            <td>Graduates possess the knowledge to consider the impact of engineering solutions to the environment and the demand for sustainable development.</td>
                        </tr>
                        <tr>
                            
                    </table>
                </div>
                
                <div id = "dept_syllabus">
                    <p class = "title">Syllabus</p>
                    <br>
                    <p class = "paragraph">
                        1. <a href = "http://www.skcet.ac.in/departments/syllabus/r2016it.pdf">R2016 - B.Tech Information Technology</a><br>
                         2. <a href = "http://www.skcet.ac.in/departments/syllabus/r2015it.pdf">R2015 - B.Tech Information Technology</a><br>
                        
                    </p>
                </div>
                
                <div id = "dept_lab">
                    <p class = "title">Laboratory Details</p>
                    <br>
                    <table class = "table table-striped table-bordered">
                        <tr>
                            <td>S.No.</td>
                            <td>Name</td>
                            <td>Configuration</td>
                            <td> No. of Systems</td>
                        </tr>
                        <tr>
                            <td>1.</td>
                            <td>Donald Knuth Lab</td>
                            <td>INTEL Core i3 4th Gen 4130 Processor,Intel H3 Express chipset Motherboard, 4 GB DDR3 RAM, 500 GB Hard disk, 18.5" wide Hot Panel Monitor, Gigabit LAN/104 Keys keyboard/ Optical Mouse</td>
                            <td>75</td>
                        </tr>
                        <tr>
                            <td>2.</td>
                            <td>Edsger Dijkstra Lab</td>
                            <td>Lenovo Think Centre M72e ( Core i3 3rd Gen), Intel Core i3 3rd Gen 3220 Processor, Intel H61 Express Chipset Motherboard, 4 GB DDR3 RAM @ 133 MHz, ISB 500 Gb SATA-II HDD, 7200 RPM, Integrated HD Graphic Controller, 18.5’’ wide Lenovo Flat Panel Monitor, Gigabit LAN/104 Keys keyboard/ Optical Mouse</td>
                            <td>75</td>
                        </tr>
                        <tr>
                            <td>3.</td>
                            <td>Digital Lab -1</td>
                            <td>Lenovo Think Center M72e,Intel Core i3 3rd Gen 3220 Processor,Intel H61 Express Chipset Motherboard,4GB DDR3 RAM @ 133 Mhz,500GB HDD@7200 RPM, 18.5"Flat Panel Monitor</td>
                            <td>80</td>
                        </tr>
                        <tr>
                            <td>4.</td>
                            <td>Dennis Ritchie Lab</td>
                            <td>Dell Optiplex 320 Intel core 2cpu 4400 @2.00GHz, 160GB HDD, DDR2 1GB*2RAM, 17.5” ultra sharp flat panel Digital LCD Monitor, Optical mouse & 104 Keys Keyboard</td>
                            <td>75</td>
                        </tr>

                        <tr>
                            <td>5.</td>
                            <td>IT Research Lab </td>
                            <td>Lenovo Think Center M72e, Intel Core i3 3rd Gen 3220 Processor, Intel H61 Express Chipset Motherboard, 4GB DDR3 RAM @ 133 Mhz, 500GB HDD@7200 RPM, 18.5"Flat Panel Monitor  </td>
                            <td>30</td>
                        </tr>


                        <tr>
                            <td>6.</td>
                            <td>IoT  Lab </td>
                            <td>LenovoS510 Disktop(10K*A0041H)Intelcore i3-6100  6th gen Processors  intel H110 chipset Motherboard 8GB DDR4 Ram 500GB@7200Rpm Sata HDD keyboard/Optical Mouse  </td>
                            <td>30</td>
                        </tr>
                        
                    </table>
                </div>
                <div id = "dept_highlights">
                    <p class = "title">Department Highlights</p>
                    <br>
                    <ul style=disc>
                    <li>Effective Utilization of Google Apps</li>
                    <li>Slow Learner Coaching</li>
                    <li>Mobile App Club</li>
                    <li>Daily Quotes, Vocabulary, Motivational videos for students.</li>
                    <li>Special coaching for placement</li>
                    <li>Snap talk</li>
                    <li>Language Club</li>
                    <li>Effective organization of association</li>
                    <li>Alumni talk to motivate students</li>
                    <li>Computer Society of India Club</li>
                    <li>National Conference – NCCCIS with the financial support from external agencies for the past 8 years</li>
                    <li>Releasing of Department Magazine : IT INFO for the past 7 years</li>
                    <li>Out Reach Programs – Computer Literacy for women, Green IT</li>
                    <li>Staff Seminars, Technical training for pre final years</li>
                    </ul>
                </div>
                <div id = "dept_placement">
                    <p class = "title">Placements Record</p>
                    <br>
                    <table class = "table table-striped table-bordered">
                        <tr>
                            <td>Year</td>
                            <td>2015-16</td>
                            <td>2014-15</td>
                            <td>2013-14</td>
                            <td>2012-13</td>
                            <td>2011-12</td>
                        </tr>
                        <tr>
                            <td>Number of Eligible Students</td>
                            <td>114</td>
                            <td>115</td>
                            <td>118</td>
                            <td>98</td>
                            <td>118</td>
                        </tr>
                        <tr>
                            <td>Number of Students Placed</td>
                            <td>87</td>
                            <td>103</td>
                            <td>102</td>
                            <td>66</td>
                            <td>109</td>
                        </tr>
                        <tr>
                            <td>Number of Students Self Employed / Higher Studies</td>
                            <td>24</td>
                            <td>23</td>
                            <td>14</td>
                            <td>12</td>
                            <td>05</td>
                        </tr>
                    </table>
                </div>
                
                <!--<div id = "dept_faculty">
                    <p class = "title">Faculty</p>
                    <br>
                    <div class = "teachers">
                        <div class = "row">
                            <div class = "image" style = "background-image: url('images/it/1.jpg');"></div>
                            <div class = "details">
                                <p class = "teacher_title"><a href = "http://www.skcet.ac.in/departments/images/it/1.pdf">Dr. S.Shankar</a></p><br>
                                <p class = "teacher_designation">Associate Professor and Head</p>
                                <p class = "working_on"><b>Area of Specialization  : </b>Data Mining, Big Data Analytics</p>
                            </div>
                            <div class = "contact">
                                <br><br>
                               
                                <p><span class = "fa fa-phone"></span> 7402601495
</p>
                                <p><span class = "fa fa-envelope"></span> shankars@skcet.ac.in
</p>
                            </div>
                        </div>
                        <div class = "row">
                            <div class = "image" style = "background-image: url('images/it/2.jpg');"></div>
                            <div class = "details">
                                <p class = "teacher_title"><a href = "http://www.skcet.ac.in/departments/images/it/2.pdf">Dr. T.Senthilnathan</a></p><br>
                                <p class = "teacher_designation">Associate Professor</p>
                                <p class = "working_on"><b>Area of Specialization  : </b>Mobile Grid Computing</p>
                            </div>
                            <div class = "contact">
                                <br><br>
                              
                                <p><span class = "fa fa-phone"></span> 7402601496</p>
                                <p><span class = "fa fa-envelope"></span> senthilnathan@skcet.ac.in</p>
                            </div>
                        </div>
                        <div class = "row">
                            <div class = "image" style = "background-image: url('images/it/3.jpg');"></div>
                            <div class = "details">
                                <p class = "teacher_title"><a href = "http://www.skcet.ac.in/departments/images/it/3.pdf">Dr. M.Rajkumar</a></p><br>
                                <p class = "teacher_designation">Associate Professor</p>
                                <p class = "working_on"><b>Area of Specialization  : </b>MANET, Network Security
</p>
                            </div>
                            <div class = "contact">
                                <br><br>
                                
                                <p><span class = "fa fa-phone"></span> 7402601500
</p>
                                <p><span class = "fa fa-envelope"></span> rajkumarm@skcet.ac.in
</p>
                            </div>
                        </div>

                        <div class = "row">
                            <div class = "image" style = "background-image: url('images/it/4.jpg');"></div>
                            <div class = "details">
                                <p class = "teacher_title"><a href = "http://www.skcet.ac.in/departments/images/it/4.pdf">Mr. V.Anandkumar</a></p><br>
                                <p class = "teacher_designation">Assistant Professor</p>
                                <p class = "working_on"><b>Area of Specialization  : </b>ADHOC Networks</p>
                            </div>
                            <div class = "contact">
                                <br><br>
                                
                                <p><span class = "fa fa-phone"></span> 7402601497</p>
                                <p><span class = "fa fa-envelope"></span> anandkumar@skcet.ac.in</p>
                            </div>
                        </div>

                        <div class = "row">
                            <div class = "image" style = "background-image: url('images/it/5.jpg');"></div>
                            <div class = "details">
                                <p class = "teacher_title"><a href = "http://www.skcet.ac.in/departments/images/it/5.pdf">Ms. N.Susila</a></p><br>
                                <p class = "teacher_designation">Assistant Professor</p>
                                <p class = "working_on"><b>Area of Specialization  : </b>Cloud Computing, Theory of Computation, Distributed Computing</p>
                            </div>
                            <div class = "contact">
                                <br><br>
                                
                                <p><span class = "fa fa-phone"></span> 7402601498</p>
                                <p><span class = "fa fa-envelope"></span> susila@skcet.ac.in</p>
                            </div>
                        </div>

                        <div class = "row">
                            <div class = "image" style = "background-image: url('images/it/6.jpg');"></div>
                            <div class = "details">
                                <p class = "teacher_title"><a href = "http://www.skcet.ac.in/departments/images/it/6.pdf">Ms. S.Kalpana</a></p><br>
                                <p class = "teacher_designation">Assistant Professor</p>
                                <p class = "working_on"><b>Area of Specialization  : </b>Wireless Networks</p>
                            </div>
                            <div class = "contact">
                                <br><br>
                                
                                <p><span class = "fa fa-phone"></span> 7402601501</p>
                                <p><span class = "fa fa-envelope"></span> kalpanas@skcet.ac.in</p>
                            </div>
                        </div>

                        <div class = "row">
                            <div class = "image" style = "background-image: url('images/it/7.jpg');"></div>
                            <div class = "details">
                                <p class = "teacher_title"><a href = "http://www.skcet.ac.in/departments/images/it/7.pdf">Mr. K. Venkatachalam</a></p><br>
                                <p class = "teacher_designation">Assistant Professor</p>
                                <p class = "working_on"><b>Area of Specialization  : </b>Distributed Computing</p>
                            </div>
                            <div class = "contact">
                                <br><br>
                                
                                <p><span class = "fa fa-phone"></span> 7402601502</p>
                                <p><span class = "fa fa-envelope"></span> venkatachalam@skcet.ac.in</p>
                            </div>
                        </div>

                        <div class = "row">
                            <div class = "image" style = "background-image: url('images/it/8.jpg');"></div>
                            <div class = "details">
                                <p class = "teacher_title"><a href = "http://www.skcet.ac.in/departments/images/it/8.pdf">Ms. K. S. Sangeetha</a></p><br>
                                <p class = "teacher_designation">Assistant Professor</p>
                                <p class = "working_on"><b>Area of Specialization  : </b>Data Analytics, Big data, Cloud Computing</p>
                            </div>
                            <div class = "contact">
                                <br><br>
                                
                                <p><span class = "fa fa-phone"></span> 7402601503</p>
                                <p><span class = "fa fa-envelope"></span> sangeethaks@skcet.ac.in</p>
                            </div>
                        </div>

                        <div class = "row">
                            <div class = "image" style = "background-image: url('images/it/9.jpg');"></div>
                            <div class = "details">
                                <p class = "teacher_title"><a href = "http://www.skcet.ac.in/departments/images/it/9.pdf">Ms. T. Sujatha</a></p><br>
                                <p class = "teacher_designation">Assistant Professor</p>
                                <p class = "working_on"><b>Area of Specialization  : </b>Network Security, Image Processing</p>
                            </div>
                            <div class = "contact">
                                <br><br>
                                
                                <p><span class = "fa fa-phone"></span> 7402601504</p>
                                <p><span class = "fa fa-envelope"></span> sujatha@skcet.ac.in</p>
                            </div>
                        </div>

                        <div class = "row">
                            <div class = "image" style = "background-image: url('images/it/10.jpg');"></div>
                            <div class = "details">
                                <p class = "teacher_title"><a href = "http://www.skcet.ac.in/departments/images/it/11.pdf">Ms. G Shobana</a></p><br>
                                <p class = "teacher_designation">Assistant Professor</p>
                                <p class = "working_on"><b>Area of Specialization  : </b>Data Analytics, Big data</p>
                            </div>
                            <div class = "contact">
                                <br><br>
                                
                                <p><span class = "fa fa-phone"></span> 7402601505</p>
                                <p><span class = "fa fa-envelope"></span> shobanag@skcet.ac.in</p>
                            </div>
                        </div>

                        <div class = "row">
                            <div class = "image" style = "background-image: url('images/it/11.jpg');"></div>
                            <div class = "details">
                                <p class = "teacher_title"><a href = "http://www.skcet.ac.in/departments/images/it/11.pdf">Ms V Saranya</a></p><br>
                                <p class = "teacher_designation">Assistant Professor</p>
                                <p class = "working_on"><b>Area of Specialization  : </b>Network Security, Software Engineering, WSN</p>
                            </div>
                            <div class = "contact">
                                <br><br>
                                
                                <p><span class = "fa fa-phone"></span> 7402601507</p>
                                <p><span class = "fa fa-envelope"></span> saranyav@skcet.ac.in</p>
                            </div>
                        </div>

                        <div class = "row">
                            <div class = "image" style = "background-image: url('images/it/12.jpg');"></div>
                            <div class = "details">
                                <p class = "teacher_title"><a href = "http://www.skcet.ac.in/departments/images/it/12.pdf">Mr. A.M.Ratheesh Kumar</a></p><br>
                                <p class = "teacher_designation">Assistant Professor</p>
                                <p class = "working_on"><b>Area of Specialization  : </b>Mobile Adhoc Networks</p>
                            </div>
                            <div class = "contact">
                                <br><br>
                                
                                <p><span class = "fa fa-phone"></span> 7402601509</p>
                                <p><span class = "fa fa-envelope"></span> ratheeshkumar@skcet.ac.in</p>
                            </div>
                        </div>

                        <div class = "row">
                            <div class = "image" style = "background-image: url('images/it/13.jpg');"></div>
                            <div class = "details">
                                <p class = "teacher_title"><a href = "http://www.skcet.ac.in/departments/images/it/13.pdf">Ms. M. P. Geetha</a></p><br>
                                <p class = "teacher_designation">Assistant Professor</p>
                                <p class = "working_on"><b>Area of Specialization  : </b>Data Mining, Big Data</p>
                            </div>
                            <div class = "contact">
                                <br><br>
                                
                                <p><span class = "fa fa-phone"></span> 7402601510</p>
                                <p><span class = "fa fa-envelope"></span> geethamp@skcet.ac.in</p>
                            </div>
                        </div>

                        <div class = "row">
                            <div class = "image" style = "background-image: url('images/it/14.jpg');"></div>
                            <div class = "details">
                                <p class = "teacher_title"><a href = "http://www.skcet.ac.in/departments/images/it/14.pdf">Ms T Keerthika</a></p><br>
                                <p class = "teacher_designation">Assistant Professor</p>
                                <p class = "working_on"><b>Area of Specialization  : </b>Data Mining</p>
                            </div>
                            <div class = "contact">
                                <br><br>
                                
                                <p><span class = "fa fa-phone"></span> 7402601514</p>
                                <p><span class = "fa fa-envelope"></span> keerthika@skcet.ac.in </p>
                            </div>
                        </div>

                        <div class = "row">
                            <div class = "image" style = "background-image: url('images/it/15.jpg');"></div>
                            <div class = "details">
                                <p class = "teacher_title"><a href = "http://www.skcet.ac.in/departments/images/it/15.pdf">Mr.T. R. Kalaiarasan</a></p><br>
                                <p class = "teacher_designation">Assistant Professor</p>
                                <p class = "working_on"><b>Area of Specialization  : </b>Network Security</p>
                            </div>
                            <div class = "contact">
                                <br><br>
                                
                                <p><span class = "fa fa-phone"></span>7402601513</p>
                                <p><span class = "fa fa-envelope"></span> kalaiarasan@skcet.ac.in</p>
                            </div>
                        </div>

                        <div class = "row">
                            <div class = "image" style = "background-image: url('images/it/16.jpg');"></div>
                            <div class = "details">
                                <p class = "teacher_title"><a href = "http://www.skcet.ac.in/departments/images/it/16.pdf">Ms T. Eswari</a></p><br>
                                <p class = "teacher_designation">Assistant Professor</p>
                                <p class = "working_on"><b>Area of Specialization  : </b>Cloud Computing and Big Data</p>
                            </div>
                            <div class = "contact">
                                <br><br>
                                
                                <p><span class = "fa fa-phone"></span> 7402601515</p>
                                <p><span class = "fa fa-envelope"></span> eswarit@skcet.ac.in</p>
                            </div>
                        </div>

                        <div class = "row">
                            <div class = "image" style = "background-image: url('images/it/17.jpg');"></div>
                            <div class = "details">
                                <p class = "teacher_title"><a href = "http://www.skcet.ac.in/departments/images/it/17.pdf">Ms D Ramya</a></p><br>
                                <p class = "teacher_designation">Assistant Professor</p>
                                <p class = "working_on"><b>Area of Specialization  : </b>Data Mining</p>
                            </div>
                            <div class = "contact">
                                <br><br>
                                
                                <p><span class = "fa fa-phone"></span> 7402601516
</p>
                                <p><span class = "fa fa-envelope"></span> ramyad@skcet.ac.in 
</p>
                            </div>
                        </div>

                        <div class = "row">
                            <div class = "image" style = "background-image: url('images/it/18.jpg');"></div>
                            <div class = "details">
                                <p class = "teacher_title"><a href = "http://www.skcet.ac.in/departments/images/it/18.pdf">Ms S Lavanya</a></p><br>
                                <p class = "teacher_designation">Assistant Professor</p>
                                <p class = "working_on"><b>Area of Specialization  : </b>Wirless networks and Network Security</p>
                            </div>
                            <div class = "contact">
                                <br><br>
                                
                                <p><span class = "fa fa-phone"></span> 7402601517</p>
                                <p><span class = "fa fa-envelope"></span> lavanyas@skcet.ac.in</p>
                            </div>
                        </div>

                        <div class = "row">
                            <div class = "image" style = "background-image: url('images/it/19.jpg');"></div>
                            <div class = "details">
                                <p class = "teacher_title"><a href = "http://www.skcet.ac.in/departments/images/it/19.pdf">Ms G Sasiniveda</a></p><br>
                                <p class = "teacher_designation">Assistant Professor</p>
                                <p class = "working_on"><b>Area of Specialization  : </b>Cloud Computing and Big Data Management and Analytics</p>
                            </div>
                            <div class = "contact">
                                <br><br>
                                
                                <p><span class = "fa fa-phone"></span> 7402601518</p>
                                <p><span class = "fa fa-envelope"></span> sasinivedag@skcet.ac.in</p>
                            </div>
                        </div>

                        <div class = "row">
                            <div class = "image" style = "background-image: url('images/it/20.jpg');"></div>
                            <div class = "details">
                                <p class = "teacher_title"><a href = "http://www.skcet.ac.in/departments/images/it/20.pdf">Mr D Sudharson</a></p><br>
                                <p class = "teacher_designation">Assistant Professor</p>
                                <p class = "working_on"><b>Area of Specialization  : </b>Software Testing, Software Engineering</p>
                            </div>
                            <div class = "contact">
                                <br><br>
                                
                                <p><span class = "fa fa-phone"></span> 7402601520</p>
                                <p><span class = "fa fa-envelope"></span> sudharsond@skcet.ac.in</p>
                            </div>
                        </div>
                        <div class = "row">
                            <div class = "image" style = "background-image: url('images/it/21.jpg');"></div>
                            <div class = "details">
                                <p class = "teacher_title"><a href = "http://www.skcet.ac.in/departments/images/it/21.pdf">Mr M Diwakaran</a></p><br>
                                <p class = "teacher_designation">Assistant Professor</p>
                                <p class = "working_on"><b>Area of Specialization  : </b>Wirless networks and cloud computing</p>
                            </div>
                            <div class = "contact">
                                <br><br>
                                
                                <p><span class = "fa fa-phone"></span> 7402601521</p>
                                <p><span class = "fa fa-envelope"></span> diwakaranm@skcet.ac.in</p>
                            </div>
                        </div>
                        <div class = "row">
                            <div class = "image" style = "background-image: url('images/it/22.jpg');"></div>
                            <div class = "details">
                                <p class = "teacher_title"><a href = "http://www.skcet.ac.in/departments/images/it/22.pdf">Ms G V Saranya</a></p><br>
                                <p class = "teacher_designation">Assistant Professor</p>
                                <p class = "working_on"><b>Area of Specialization  : </b>Network security</p>
                            </div>
                            <div class = "contact">
                                <br><br>
                                
                                <p><span class = "fa fa-phone"></span> 7402601522</p>
                                <p><span class = "fa fa-envelope"></span> saranyagv@skcet.ac.in </p>
                            </div>
                        </div>
                        <div class = "row">
                            <div class = "image" style = "background-image: url('images/it/23.jpg');"></div>
                            <div class = "details">
                                <p class = "teacher_title"><a href = "http://www.skcet.ac.in/departments/images/it/23.pdf">Ms P Ramalakshmi</a></p><br>
                                <p class = "teacher_designation">Assistant Professor</p>
                                <p class = "working_on"><b>Area of Specialization  : </b>Data Mining</p>
                            </div>
                            <div class = "contact">
                                <br><br>
                                
                                <p><span class = "fa fa-phone"></span> 7402601524</p>
                                <p><span class = "fa fa-envelope"></span> ramalakshmip@skcet.ac.in </p>
                            </div>
                        </div>
                        <div class = "row">
                            <div class = "image" style = "background-image: url('images/it/24.jpg');"></div>
                            <div class = "details">
                                <p class = "teacher_title"><a href = "http://www.skcet.ac.in/departments/images/it/24.pdf">Ms T Sangeetha</a></p><br>
                                <p class = "teacher_designation">Assistant Professor</p>
                                <p class = "working_on"><b>Area of Specialization  : </b>Data mining and Cloud Computing</p>
                            </div>
                            <div class = "contact">
                                <br><br>
                                
                                <p><span class = "fa fa-phone"></span> 7402601525</p>
                                <p><span class = "fa fa-envelope"></span> sangeethat@skcet.ac.in</p>
                            </div>
                        </div>
                        <div class = "row">
                            <div class = "image" style = "background-image: url('images/it/25.jpg');"></div>
                            <div class = "details">
                                <p class = "teacher_title"><a href = "http://www.skcet.ac.in/departments/images/it/25.pdf">Ms Kripa Sekaran</a></p><br>
                                <p class = "teacher_designation">Assistant Professor</p>
                                <p class = "working_on"><b>Area of Specialization  : </b>Software Engineering and cloud computing</p>
                            </div>
                            <div class = "contact">
                                <br><br>
                                
                                <p><span class = "fa fa-phone"></span> 7402601849</p>
                                <p><span class = "fa fa-envelope"></span> kripasekaran@skcet.ac.in</p>
                            </div>
                        </div>
                        <div class = "row">
                            <div class = "image" style = "background-image: url('images/it/26.jpg');"></div>
                            <div class = "details">
                                <p class = "teacher_title"><a href = "http://www.skcet.ac.in/departments/images/it/26.pdf">Ms Granty Regina Elwin</a></p><br>
                                <p class = "teacher_designation">Assistant Professor</p>
                                <p class = "working_on"><b>Area of Specialization  : </b>Image Processing</p>
                            </div>
                            <div class = "contact">
                                <br><br>
                                
                                <p><span class = "fa fa-phone"></span> 7402601838</p>
                                <p><span class = "fa fa-envelope"></span> grantyreginaelwinj@skcet.ac.in</p>
                            </div>
                        </div>
                        <div class = "row">
                            <div class = "image" style = "background-image: url('images/it/27.jpg');"></div>
                            <div class = "details">
                                <p class = "teacher_title"><a href = "http://www.skcet.ac.in/departments/images/it/27.pdf">Ms Logeswari Saranya</a></p><br>
                                <p class = "teacher_designation">Assistant Professor</p>
                                <p class = "working_on"><b>Area of Specialization  : </b>Image Processing , Web Mining, DBMS</p>
                            </div>
                            <div class = "contact">
                                <br><br>
                                
                                <p><span class = "fa fa-phone"></span> 7402601855</p>
                                <p><span class = "fa fa-envelope"></span> logeswarisaranyar@skcet.ac.in</p>
                            </div>
                        </div>
                        <div class = "row">
                            <div class = "image" style = "background-image: url('images/it/28.jpg');"></div>
                            <div class = "details">
                                <p class = "teacher_title"><a href = "http://www.skcet.ac.in/departments/images/it/28.pdf">Ms Sruthi Anand</p><br>
                                <p class = "teacher_designation">Assistant Professor</p>
                                <p class = "working_on"><b>Area of Specialization  : </b>Cloud computing,Big Data Analytics</p>
                            </div>
                            <div class = "contact">
                                <br><br>
                                
                                <p><span class = "fa fa-phone"></span> 7402601851</p>
                                <p><span class = "fa fa-envelope"></span> sruthianand@skcet.ac.in</p>
                            </div>
                        </div>
                        <div class = "row">
                            <div class = "image" style = "background-image: url('images/it/29.jpg');"></div>
                            <div class = "details">
                                <p class = "teacher_title"><a href = "http://www.skcet.ac.in/departments/images/it/29.pdf">Mr D Winston Paul</p><br>
                                <p class = "teacher_designation">Assistant Professor</p>
                                <p class = "working_on"><b>Area of Specialization  : </b>IoT and Data analytics </p>
                            </div>
                            <div class = "contact">
                                <br><br>
                                
                                <p><span class = "fa fa-phone"></span> 7402601982</p>
                                <p><span class = "fa fa-envelope"></span> winstonpauld@skcet.ac.in </p>
                            </div>
                        </div>
                        <div class = "row">
                            <div class = "image" style = "background-image: url('images/it/30.jpg');"></div>
                            <div class = "details">
                                <p class = "teacher_title"><a href = "http://www.skcet.ac.in/departments/images/it/30.pdf">Ms Kosala Devi</a></p><br>
                                <p class = "teacher_designation">Assistant Professor</p>
                                <p class = "working_on"><b>Area of Specialization  : </b>Image Processing,  DBMS</p>
                            </div>
                            <div class = "contact">
                                <br><br>
                                
                                <p><span class = "fa fa-phone"></span> 7402604022</p>
                                <p><span class = "fa fa-envelope"></span> kosaladevikr@skcet.ac.in</p>
                            </div>
                        </div>
                        <div class = "row">
                            <div class = "image" style = "background-image: url('images/it/31.jpg');"></div>
                            <div class = "details">
                                <p class = "teacher_title"><a href = "http://www.skcet.ac.in/departments/images/it/31.pdf">Ms Ranjeethapriya</a></p><br>
                                <p class = "teacher_designation">Assistant Professor</p>
                                <p class = "working_on"><b>Area of Specialization  : </b>Networking</p>
                            </div>
                            <div class = "contact">
                                <br><br>
                                
                                <p><span class = "fa fa-phone"></span> 7402604027</p>
                                <p><span class = "fa fa-envelope"></span> ranjeethapriyak@skcet.ac.in</p>
                            </div>
                        </div>
                        
                    </div>
                </div> -->

                <div id="dept_faculty">
<div class="container">
  <div class="page-title clearfix">
    <div class="row">
      <div class="col-md-12">
        <h3 align="center" class="cb">Faculty Details</h3>
      </div>
    </div>
  </div>
</div>

<table class = "table table-striped table-bordered">
<tr>
<td>S.No.</td>
<td>Name</td>
<td>Designation</td>
</tr>

<tr>
<td>1</td>
<td>Dr. J. Janet</td>
<td>Principal </td>
</tr>

<tr>
<td>2</td>
<td>Dr. S. Shankar</td>
<td>Professor & Head </td>
</tr>

<tr>
<td>3</td>
<td>Dr. T. Senthil Nathan</td>
<td>Professor </td>
</tr>

<tr>
<td>4</td>
<td>Dr. K.N. Sivabalan</td>
<td>Professor </td>
</tr>
       
<tr>
<td>5</td>
<td>Dr. M. Rajkumar</td>
<td>Associate Professor </td>
</tr>

<tr>
<td>6</td>
<td>Dr. Granty Regina Elwin.J</td>
<td>Associate Professor</td>
</tr>

<tr>
<td>7</td>
<td>Mr. S. Balakrishnan</td>
<td>Associate Professor</td>
</tr>

<tr>
<td>8</td>
<td>Mr. V. Anandkumar</td>
<td>Associate Professor</td>
</tr>

<tr>
<td>9</td>
<td>Ms. N. Susila</td>
<td>Associate Professor </td>
</tr>

<tr>
<td>10</td>
<td>Ms. R. Thilagavathi</td>
<td>Associate Professor </td>
</tr>

<tr>
<td>11</td>
<td>Ms. S. Kalpana</td>
<td>Associate Professor </td>
</tr>

<tr>
<td>12</td>
<td>Mr. K. Venkatachalam</td>
<td>Associate Professor </td>
</tr>

<tr>
<td>13</td>
<td>Ms. K. S. Sangeetha</td>
<td>Associate Professor </td>
</tr>

<tr>
<td>14</td>
<td>Ms. T. Sujatha</td>
<td>Associate Professor </td>
</tr>

<tr>
<td>15</td>
<td>Ms. G. Shobana</td>
<td>Associate Professor </td>
</tr>

<tr>
<td>16</td>
<td>Mr. A. Velusamy</td>
<td>Asst. Professor </td>
</tr>

<tr>
<td>17</td>
<td>Ms. V. Saranya</td>
<td>Asst. Professor </td>
</tr>

<tr>
<td>18</td>
<td>Ms. G. Deivanai</td>
<td>Asst. Professor </td>
</tr>

<tr>
<td>19</td>
<td>Mr. A. M. Ratheesh Kumar</td>
<td>Asst. Professor </td>
</tr>

<tr>
<td>20</td>
<td>Ms. T. Keerthika</td>
<td>Asst. Professor </td>
</tr>

<tr>
<td>21</td>
<td>Ms. M. P. Geetha</td>
<td>Asst. Professor </td>
</tr>

<tr>
<td>22</td>
<td>Ms. C. Jaya Bharathi</td>
<td>Asst. Professor </td>
</tr>

<tr>
<td>23</td>
<td>Mr. T. R. Kalaiarasan</td>
<td>Asst. Professor </td>
</tr>

<tr>
<td>24</td>
<td>Ms. T. Eswari</td>
<td>Asst. Professor </td>
</tr>
 
<tr>
<td>25</td>
<td>Ms. S. Lavanya</td>
<td>Asst. Professor </td>
</tr>

<tr>
<td>26</td>
<td>Ms. D. Ramya</td>
<td>Asst. Professor </td>
</tr>

<tr>
<td>27</td>
<td>Ms. G Sasiniveda</td>
<td>Asst. Professor </td>
</tr>

<tr>
<td>28</td>
<td>Ms. V Priya</td>
<td>Asst. Professor </td>
</tr>

<tr>
<td>29</td>
<td>Mr. D Sudharson</td>
<td>Asst. Professor </td>
</tr>

<tr>
<td>30</td>
<td>Mr. M. Diwakaran</td>
<td>Asst. Professor </td>
</tr>

<tr>
<td>31</td>
<td>Ms. G.V. Saranya</td>
<td>Asst. Professor </td>
</tr>

<tr>
<td>32</td>
<td>Ms. P. Ramalakshmi</td>
<td>Asst. Professor </td>
</tr>

<tr>
<td>33</td>
<td>Ms. T. Sangeetha</td>
<td>Asst. Professor </td>
</tr>    

<tr>
<td>34</td>
<td>Ms. Kripa Sekaran</td>
<td>Asst. Professor </td>
</tr>    

<tr>
<td>35</td>
<td>Ms. Sruthi Anand</td>
<td>Asst. Professor </td>
</tr>    

<tr>
<td>36</td>
<td>Ms. R. Logeswari Saranya</td>
<td>Asst. Professor </td>
</tr>    

<tr>
<td>37</td>
<td>Mr. D. Winston Paul</td>
<td>Asst. Professor </td>
</tr>    

<tr>
<td>38</td>
<td>Ms. K.R. Kosala Devi</td>
<td>Asst. Professor </td>
</tr>    

<tr>
<td>39</td>
<td>Ms. K. Ranjeethapriya</td>
<td>Asst. Professor </td>
</tr>       

</table>
</div>
                
                <div id = "dept_student_achievements">
                    <p class = "title">Student Achievements</p>
                    <br>
                    <table class = "table table-striped table-bordered">
                        <tr>
                            <td>S.No.</td>
                            <td>Student Name</td>
                            <td>Class</td>
                            <td>Event</td>
                        </tr>
                        <tr>
                            <td>1.</td>
                            <td>Sai Daya Shankar G</td>
                            <td>III CSE C</td>
                            <td>Coding Contest - Sri Eashwar College</td>
                        </tr>
                        <tr>
                            <td>2.</td>
                            <td>Shiv Ashwath</td>
                            <td>III CSE C</td>
                            <td>Coding Contest - Sri Eashwar College</td>
                        </tr>
                        <tr>
                            <td>3.</td>
                            <td>Sangamithra A.K, Sandhya S</td>
                            <td>III CSE C</td>
                            <td>Paper Presentation - CIT</td>
                        </tr>
                    </table>
                </div>
                
                <div id = "dept_symposium">
                    <p class = "title">Symposium and Conferences</p>
                    <br>
                    
                </div>
                
                <div id = "dept_contact">
                    <p class = "title">Contact</p>
                    <br>
                    <p class = "paragraph">
                        Dr SJK Jagadeesh Kumar,<br>
                        Professor and Head,<br>
                        Department of Computer Science and Engineering,<br>
                        Sri Krishna College of Engineering and Technology,<br>
                        Kuniamuthur,<br>
                        Coimbatore - 641 008,<br>
                        TamilNadu, India.<br>

                        Office Working Hours : 08.45 AM to 05.30 PM<br><br>
                        
                        <span class = "fa fa-phone"></span> 0422 2678015<br>
                        <span class = "fa fa-phone"></span> 0422 2678001 - (7 Lines)<br>
                        <span class = "fa fa-envelope"></span> sjkjk@skcet.ac.in<br>
                    </p>
                </div>
                
            </div>
        </div>
        
        

<link rel = "stylesheet" href = "http://www.skcet.ac.in/css/footer.css">

<footer>
    <div class = "flex">

        <div class = "border first">
            <img src = "http://www.skcet.ac.in/images/footer%20logo.png" width = "80%"><br><br>
            
            <p><span class = "fa fa-map-marker"></span>Coimbatore, Tamil Nadu.</p><br>
            <p><span class = "fa fa-phone"></span>0422-2678001 (7 Lines)</p><br><br>
            <a href = "https://www.facebook.com/skcetofficial/"><img src = "http://www.skcet.ac.in/images/social/fb.png" width = "32px"></a>
            <a href = "#"><img src = "http://www.skcet.ac.in/images/social/twitter.png" width = "32px"></a>
            <a href = "mailto:info@skcet.ac.in"><img src = "http://www.skcet.ac.in/images/social/gmail.png" width = "32px"></a>
            <a href = "https://www.instagram.com/skcet.official/"><img src = "http://www.skcet.ac.in/images/social/insta.png" width = "32px"></a>
        </div>

        <div class = "links border">
            <p>Sri Krishna Institutions</p>
            <p><a href = "http://skct.edu.in">Sri Krishna College of Technology</a></p>
            <p><a href = "http://skasc.ac.in">Sri Krishna Arts and Science College</a></p>
            <p><a href = "http://skacas.ac.in">Sri Krishna Adithya College of Arts and Science</a></p>
            <p><a href = "http://skptc.srikrishna.ac.in">Sri Krishna Polytechnic College</a></p>
        </div>

        <div class = "links border">
            <p>Links</p>
            <p><a href = "http://naac.gov.in">NAAC</a></p>
            <p><a href = "http://nbaind.org">NBA</a></p>
            <p><a href = "http://aicte-india.org">AICTE</a></p>
            <p><a href = "http://ugc.ac.in">UGC</a></p>
            <p><a href = "http://annauniv.edu">Anna University</a></p>
        </div>

        <div class = "links last">
            <p>Links</p>
            
            <p><a href = "http://www.skcet.ac.in/pdf/skcetib2016.pdf">College Brochure</a></p>
            <p><a href = "http://www.skcet.ac.in/pdf/placerec.jpg">Placement Record</a></p>
            <p><a href = "http://www.skcet.ac.in/pdf/servicerules.pdf">Service Rule Book</a></p>
            <p><a href = "http://www.skcet.ac.in/pdf/leaverules.pdf">Leave Rules</a></p>
            <p><a href = "http://www.skcet.ac.in/pdf/aqar_report_15_16.pdf">AQAR Report 2015-16</a></p>
            <p><a href = "http://www.skcet.ac.in/nirf.php">NIRF Data Sheet</a></p>
            <p><a href = "https://skcet.almaconnect.com/signin">SKCET-Alma Connect</a></p>
            
        </div>

    </div>
</footer>
<div class = "bottom_bar">
    <p>&copy; 2017. All Rights Reserved. SKCET. Designed and Maintained by <a href = "http://www.skcet.ac.in/team.php">Web Team</a>, SKCET.</p>
</div>    </body>
    
</html>