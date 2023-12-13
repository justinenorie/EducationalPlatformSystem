<?php
session_start();
    if(!isset($_SESSION['userlogin'])){
        header ("Location: ../User-interface/Login_form/login.php");
    }
    if(isset($_GET['logout'])){
        sleep(2);
        session_destroy();
        unset($_SESSION);
        header("Location: ../User-interface/Login_form/login.php");
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDUCATIVO Courses</title>
    <link rel="stylesheet" href="../Content/css/courses-panel.css">
    <script src="../js/courses.js"></script>
</head>
<body>
    <div class="background">
        <div class="banner">
            <div class="banner-title">
                    <!-- <img src="" alt=""> -->
                    <h1>EDUCATIVO</h1>
            </div>
            <nav>
                <div class="banner-selection">
                    <a id="home" href="">Home</a>
                    <a href="#">Courses</a>
                    <a id="aboutus" href="">About Us</a>
                </div>
            </nav>
            <div class="users">
                <a href="../User-interface/Login_form/index.php?logout=true"><button>Logout</button></a>
            </div>
        </div>

        <div class="courses">
            <h1 class ="featured-courses">Featured Courses</h1>
            <div class="course math">
                <h1>MATHEMATICS</h1>
                <p>General Mathematics encompasses a diverse array of fundamental concepts that form the bedrock of quantitative reasoning. Our journey begins with Arithmetic, the building blocks of mathematics, where we explore the operations of addition, subtraction, multiplication, and division. With a solid foundation in arithmetic, we delve into Algebra, unraveling the mysteries of equations, inequalities, and variables.
                </p>
                <p>
                Next, we venture into the world of Geometry, where shapes, sizes, and spatial relationships take center stage. From basic geometric principles to advanced theorems, we navigate through the geometric landscape. The journey continues with Statistics and Probability, enabling us to make informed decisions in the face of uncertainty.
                </p>
                <p>
                As we progress, we encounter Calculus, a powerful tool for understanding change and motion. Differentiation and integration become our allies in solving real-world problems. Our exploration concludes with Number Theory, the study of integers and their properties, tying together the various threads of mathematical thought.
                </p>
                <div id="math" class="learn-button"><button onclick="mathematics()">LEARN NOW</button></div> 
            </div>

            <div class="course english">
                <h1>ENGLISH</h1>
                <p>English for Academic and Professional Purposes is a course that aims to develop communication skills and is designed to help students acquire knowledge of appropriate reading strategies for a better understanding of academic texts, produce a detailed abstract of information gathered from the various academic texts read, determine the structure of a specific academic text, differentiate language used in academic texts from various disciplines, explain the specific ideas contained in various academic texts, use knowledge of text structure to glean the information he/she needs, use various techniques in summarizing a variety of academic texts, and state the thesis statement of an academic text.
                </p>
                <p>
                21st-century literature is used to describe a shift in education from the traditional methods of the past to a more modern approach. This new approach focuses on preparing students for the future by teaching them the skills they need to be successful in a global economy. 21st-century learning is not memorization or recitation but critical thinking, creativity, and collaboration. It is about preparing students for the real world, not just for a test. The skills that students need to learn in the 21st century include communication, critical thinking, creativity, collaboration, and character traits that are believed to be critically important to success in today’s world, particularly in contemporary careers and workplaces.
                </p>
                <p>
                Oral Communication is designed to develop listening and speaking skills and strategies for effective communication in various situations. The subject covers the nature and elements of communication, the process of communication, communication models, verbal and nonverbal communication, effective communication skills, intercultural communication, and communicative competence strategies in various speech situations. It also includes the study of different types of speech context, speech style, speech act, and communicative strategy. While studying, students will be asked to demonstrate what they have learned by participating in class activities that may include explaining the nature and process of communication, differentiating the various models of communication, exhibiting appropriate verbal and nonverbal behavior based on a given context, writing speeches based on the principles of speech writing, delivering speeches based on the principles of effective speech delivery, and evaluating speakers and the way they deliver speeches.
                </p>
                <div id="eng" class="learn-button"> <button onclick="english()">LEARN NOW</button></div>
            
            </div>

            <div class="course science">
                <h1>SCIENCE</h1>
                <p>The realm of science is a vast and interconnected tapestry that unravels the mysteries of our existence. Earth Science invites us to explore the dynamic processes shaping our planet, from the geological forces molding landscapes to the atmospheric interactions governing weather patterns. It delves into the intricate ecosystems sustaining life and the interconnectedness of Earth's spheres, fostering a holistic understanding of our environment.</p>
                <p>
                Turning our gaze to the cosmos, Physics unveils the fundamental laws governing the universe. It probes the nature of matter, energy, and the forces that propel celestial bodies through space. From the infinitesimally small to the astronomically large, physics seeks to decipher the underlying principles that govern the cosmos.
                </p>
                <p>
                Chemistry delves into the intricate dance of atoms and molecules, elucidating the composition, structure, and properties of matter. It explores the alchemy of reactions, from the microscopic interactions within cells to the chemical processes that sustain life and fuel technological advancements.
                </p>
                <p>
                Lastly, Biology takes us on a journey into the living world, unraveling the complexities of life from the cellular level to ecosystems. It examines the diversity of species, the mechanisms of evolution, and the intricacies of biological systems, offering insights into the interconnected web of life.
                </p>
                <div id="sci" class="learn-button"> <button onclick="science()">LEARN NOW</button></div>
            </div>    
        </div>
    </div>
</body>
</html>