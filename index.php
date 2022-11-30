<?php

$conn = mysqli_connect('localhost','root','','contact_db') or die('connection failed');

if(isset($_POST['send'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = mysqli_real_escape_string($conn, $_POST['number']);
   $msg = mysqli_real_escape_string($conn, $_POST['message']);

   $select_message = mysqli_query($conn, "SELECT * FROM `contact_form` WHERE name = '$name' AND email = '$email' AND number = '$number' AND message = '$msg'") or die('query failed');
   
   if(mysqli_num_rows($select_message) > 0){
      $message[] = 'message sent already!';
   }else{
      mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, message) VALUES('$name', '$email', '$number', '$msg')") or die('query failed');
      $message[] = 'message sent successfully!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Complete Responsive Personal Portfolio Website Design</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">

   <!-- aos css link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php

if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message" data-aos="zoom-out">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}

?>

<!-- header section starts  -->

<header class="header">

   <div id="menu-btn" class="fas fa-bars"></div>

   <a href="#home" class="logo">Portfolio</a>

   <nav class="navbar">
      <a href="#home" class="active">home</a>
      <a href="#about">about</a>
      <a href="#services">services</a>
      <a href="#portfolio">portfolio</a>
      <a href="#contact">contact</a>
   </nav>

   <div class="follow">
      <a href="#" class="fab fa-facebook-f"></a>
      <a href="#" class="fab fa-twitter"></a>
      <a href="#" class="fab fa-instagram"></a>
      <a href="#" class="fab fa-linkedin"></a>
      <a href="#" class="fab fa-github"></a>
   </div>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

   <div class="image" data-aos="fade-right">
      <img src="images/Tole.jpg" alt="">
   </div>

   <div class="content">
      <h3 data-aos="fade-up">Hi, I am Tole Fikadu Aga</h3>
      <span data-aos="fade-up">Web designer & Developer</span>
      <p data-aos="fade-up">My name is Tole. I am a website designer and developer. With my skills and background, 
         I am confident that I will quickly surpass the expectations for website development. In my role as Full Stack Developer, 
         
         I have been tasked with developing food ordering website with payment method integration, developing web applications 
         such as front-end user interface, database management, liaising with customers and internal team and assisting with help 
         desk tickets. I have a required skills to website developmet. I have advanced proficiencies in HTML, CSS, 
         JavaScript, PHP, Python, excellent customer service skills and I am  also expert in SQL/MYSQL as well as website deployment skills. I also have a solid 
         foundation in MongoDB, Express, AngularJS, Django, Wordpress and Node.JS. In addition to a year work experience, I am pursuing 
         my Bachelor degree in CSE and ECE in Adama Science and Technology University.
My excellent work ethic has provided me with many opportunities to accomplish goals that have earned me recognition at 
work as a full stack web developer expert. 
</p>
      <a data-aos="fade-up" href="#about" class="btn">About me</a>
   </div>

</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

   <h1 class="heading" data-aos="fade-up"> <span>biography</span> </h1>

   <div class="biography">

      <p data-aos="fade-up">My name is Tole. I am a website designer and developer. With my skills and background, I am confident that I will quickly surpass your expectations for this role. In my role as Full Stack Developer, I have been tasked with developing training materials including Computer Based Training, developing web applications such as front-end user interface, database management, liaising with customers and internal team and assisting with help desk tickets. I have the required skills outlined in the job description. I have advanced proficiencies in HTML, CSS, JavaScript ,PHP, Python, excellent customer service skills and I also am familiar with SQL/MYSQL. I also have a solid foundation in MongoDB, Express, AngularJS, Wordpress and Node.JS. In addition to a year work experience, I am pursuing my Bachelor degree in CSE and ECE.
My excellent work ethic has provided me with many opportunities to accomplish goals that have earned me recognition at work as a full stack web developer. 
My name is Tole. I am a website designer and developer. With my skills and background, I am confident that I will quickly surpass your expectations for this role. In my role as Full Stack Developer, I have been tasked with developing training materials including Computer Based Training, developing web applications such as front-end user interface, database management, liaising with customers and internal team and assisting with help desk tickets. I have the required skills outlined in the job description. I have advanced proficiencies in HTML, CSS, JavaScript ,PHP, Python, excellent customer service skills and I also am familiar with SQL/MYSQL. I also have a solid foundation in MongoDB, Express, AngularJS, Wordpress and Node.JS. In addition to a year work experience, I am pursuing my Bachelor degree in CSE and ECE.
My excellent work ethic has provided me with many opportunities to accomplish goals that have earned me recognition at work as a full stack web developer. 
</p>

      <div class="bio">
         <h3 data-aos="zoom-in"> <span>Name: </span> Tole Fikadu </h3>
         <h3 data-aos="zoom-in"> <span>Email: </span> tolefikadu@gmail.com </h3>
         <h3 data-aos="zoom-in"> <span>Address: </span> Adama,Oromiyaa</h3>
         <h3 data-aos="zoom-in"> <span>Phone: </span> +251924461223 </h3>
         <h3 data-aos="zoom-in"> <span>Age: </span> 23 years </h3>
         <h3 data-aos="zoom-in"> <span>Experience : </span> a year </h3>
      </div>

      <a href="#" class="btn" data-aos="fade-up">Download CV</a>

   </div>
   
   <div class="skills" data-aos="fade-up">

      <h1 class="heading"> <span>Skills</span> </h1>

      <div class="progress">
         <div class="bar" data-aos="fade-left"> <h3><span>HTML</span> <span>97%</span></h3> </div>
         <div class="bar" data-aos="fade-right"> <h3><span>CSS</span> <span>90%</span></h3> </div>
         <div class="bar" data-aos="fade-left"> <h3><span>JavaScript</span> <span>61%</span></h3> </div>
         <div class="bar" data-aos="fade-right"> <h3><span>PHP</span> <span>78%</span></h3> </div>
         <div class="bar" data-aos="fade-right"> <h3><span>MYSQL</span> <span>80%</span></h3> </div>
      </div>

   </div>

   <div class="edu-exp">

      <h1 class="heading" data-aos="fade-up"> <span>Education & Experience</span> </h1>

      <div class="row">

         <div class="box-container">

            <h3 class="title" data-aos="fade-right">Education</h3>

            <div class="box" data-aos="fade-right">
               <span>( 2008 - 2015 )</span>
               <h3>Primary school level</h3>
               <p> I learned my primary level school from grade 1-8 in Sire Primary School.
                  During the mentioned years, I learned many subjects with school curriculum.
                  It was the time I started some social medias such as youtube, Facebook and Twitter. 
                  And also the time, I started adapting myself to technology in general.
                  At the end of grade 8, I scored 96 grade average in Grade 8 Regional Examination.
               </p>
            </div>

            <div class="box" data-aos="fade-right">
               <span>( 2015 - 2019 )</span>
               <h3>High School level</h3>
               <p>I learned my high school level from grade 9-12 in ODA Special Boarding School. While I was in high school,
                   I learned basic computer skills like how to use MS Word, MS Excel, 
                   MS power point as well as creating static web page using old version of HTML.
                    At the time I also learned video editing, photo shopping and simple coding with C languages.
                  Here, in Grade 10 National Examination of Ethiopia, I scored 10As( A straight). Additionally, at the end of grade 12 on Ethiopian University Entrance Examination ,I scored 555 out of 700.  </p>
            </div>

            <div class="box" data-aos="fade-right">
               <span>( 2019 onward )</span>
               <h3>Bachelor Degree</h3>
               <p>I am now pursuing my bachelor degree in CSE and ECE in Adama Science and Technolgy University.
                   I have learned many programming languages such as Python, C++, Java, PHP, JavaScript as well as HTML and CSS.
                  In Addition to these languages, I learned Database management System, 
                  Data structure, Algorithm, introduction to Artificial Intelligence and some other helpful courses. 
                  It has been also the time I dive into website development world. </p>
            </div>

         </div>

         <div class="box-container">

            <h3 class="title" data-aos="fade-left">Experience</h3>

            <div class="box" data-aos="fade-left">
               <span>( 2016 -2019 )</span>
               <h3>School Projects</h3>
               <p> It was the time I was working projects by myself and with my classmates. Those projects were video editing with WonderShare Pro and  developing static web pages with old version of HTML. 
                    </p> 

                 
            </div>

            <div class="box" data-aos="fade-left">
               <span>( 2019 -2021 )</span>
               <h3>University Projects</h3>
               <p>At this time had been working subjective projects like Clinical Management System using OOP(Java) and MYSQL,
                   School Management System using C++ and SQL, simple calculator using Python programming language, Semester project on database management system by integrating with Java programming language with different outlooks.
                   In addition to this, I had been working simple personal websites that were dynamic
                   and responsive using HTML, CSS and PHP programming language. What makes this time special is I learned how  to integrate the frontend and  backend part of the websites-learned to make my websites very dynamic and responsive to any devices.  </p>
            </div>

            <div class="box" data-aos="fade-left">
               <span>( 2021 - 2022 )</span>
               <h3>full-stack developer</h3>
               <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quaerat assumenda, eaque sequi repellat natus quia.</p>
            </div>

         </div>

      </div>

   </div>

</section>

<!-- about section ends -->

<!-- services section starts  -->

<section class="services" id="services">

   <h1 class="heading" data-aos="fade-up"> <span>services</span> </h1>

   <div class="box-container">

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-code"></i>
         <h3>web development</h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, placeat veritatis accusantium nostrum rem ipsa.</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-paint-brush"></i>
         <h3>graphic design</h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, placeat veritatis accusantium nostrum rem ipsa.</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fab fa-bootstrap"></i>
         <h3>bootstrap</h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, placeat veritatis accusantium nostrum rem ipsa.</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-chart-line"></i>
         <h3>seo marketing</h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, placeat veritatis accusantium nostrum rem ipsa.</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-bullhorn"></i>
         <h3>digital marketing</h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, placeat veritatis accusantium nostrum rem ipsa.</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fab fa-wordpress"></i>
         <h3>wordpress</h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, placeat veritatis accusantium nostrum rem ipsa.</p>
      </div>

   </div>

</section>

<!-- services section ends -->

<!-- portfolio section starts  -->

<section class="portfolio" id="portfolio">

   <h1 class="heading" data-aos="fade-up"> <span>portfolio</span> </h1>

   <div class="box-container">

      <div class="box" data-aos="zoom-in">
         <img src="images/img-1.jpg" alt="">
         <h3>web development</h3>
         <span>( 2020 - 2022 )</span>
      </div>

      <div class="box" data-aos="zoom-in">
         <img src="images/img-2.jpg" alt="">
         <h3>web development</h3>
         <span>( 2020 - 2022 )</span>
      </div>

      <div class="box" data-aos="zoom-in">
         <img src="images/img-3.jpg" alt="">
         <h3>web development</h3>
         <span>( 2020 - 2022 )</span>
      </div>

      <div class="box" data-aos="zoom-in">
         <img src="images/img-4.jpg" alt="">
         <h3>web development</h3>
         <span>( 2020 - 2022 )</span>
      </div>

      <div class="box" data-aos="zoom-in">
         <img src="images/img-5.jpg" alt="">
         <h3>web development</h3>
         <span>( 2020 - 2022 )</span>
      </div>

      <div class="box" data-aos="zoom-in">
         <img src="images/img-6.jpg" alt="">
         <h3>web development</h3>
         <span>( 2020 - 2022 )</span>
      </div>

   </div>

</section>

<!-- portfolio section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">

   <h1 class="heading" data-aos="fade-up"> <span>contact me</span> </h1>

   <form action="" method="post">
      <div class="flex">
         <input data-aos="fade-right" type="text" name="name" placeholder="enter your name" class="box" required>
         <input data-aos="fade-left" type="email" name="email" placeholder="enter your email" class="box" required>
      </div>
      <input data-aos="fade-up" type="number" min="0" name="number" placeholder="enter your number" class="box" required>
      <textarea data-aos="fade-up" name="message" class="box" required placeholder="enter your message" cols="30" rows="10"></textarea>
      <input type="submit" data-aos="zoom-in" value="send message" name="send" class="btn">
   </form>

   <div class="box-container">

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-phone"></i>
         <h3>phone</h3>
         <p>+123-456-7890</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-envelope"></i>
         <h3>email</h3>
         <p>sanashaikh@gmail.com</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-map-marker-alt"></i>
         <h3>address</h3>
         <p>mumbai, india - 400104</p>
      </div>

   </div>

</section>

<!-- contact section ends -->

<div class="credit"> &copy; copyright @ <?php echo date('Y'); ?> by <span>Tole Fikadu</span> </div>












<!-- custom js file link  -->
<script src="js/script.js"></script>

<!-- aos js link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

<script>

   AOS.init({
      duration:800,
      delay:300
   });

</script>
   
</body>
</html>