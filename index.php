<!DOCTYPE html>
<html>
    <head>
        <title>
            my portfolio
        </title>
        <link rel="stylesheet" href="prc.css"  >
        <script src="https://kit.fontawesome.com/cfc8a6d16b.js" crossorigin="anonymous"></script>
       <!-- <style>
            body {
                background-image: url('thh.jpg');
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-size: cover;}
            
            </style>-->
    </head>
    <body>
        <div class="banner" id="banner">
                <nav>
                    <h2 class="logo">portfo<span>lio</span></h2>
                
                <ul>
                    <li><a href="#banner">Home</a></li>
                    <li><a href="#about">About </a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#portfolio">Skills</a></li>
                    <li><a href="#contact-me">Contact</a></li>
                   <!-- <i class=" fas fa-solid fa-circle-xmark"></i>-->
                </ul>
              <!--<i class=" fas fa-solid fa-bars"></i>-->
                <!--<a href="#" class=" btn">Subscribe</a>-->
             </nav>
            
            <div class="content">
                <h4>Hello I'm</h4>
                <h1>Hiruni <span>Fernando</span></h1>
                <h3>a WEB DEVELOPER.</h3>
        </div>
        </div>
     <section class="about" id="about">
        <div class="main">
            <img src="about.jpg" height="500px" width="300">
            <div class="about-text">
                <h2>About me</h2>
                <h5>Developer & <span>Designer</span></h5>
                <p>I'm a front-end web developer.I can provide clean code and pixel perfect design.I also make the website more and more interactive with web animations.A responsive designe makes your website accesible to all users,regardless of their device.
                </p>
                
                
                
                <div class=" tab-titles">
                    <p class="tab-links active-link" onclick="opentab('skills')">Skills</p>
                    <p class="tab-links" onclick="opentab('Education')">Education</p>

                </div>
                <div class="tab-contents active-tab" id="skills">
                    <ul>
                        <li><span>UI/UX</span><br>Designing web App Interfaces</li>
                        <li><span>Web Development</span><br>Web App Development</li>
                        <li><span>App Development</span><br>Building Android/IOS Apps</li>
                    </ul>
                </div>
               
                <div class="tab-contents" id="Education">
                    <ul>
                        <li><span>2019</span><br>G.C.E. A/L at Holy Family Girls' College Wennappuwa</li>
                        <li><span>2022 - present</span><br>BSc. Information Technology at Rajarata University of Sri Lanka</li>
                        
                    </ul>
                </div>




              <!--<button type="button">let's talk</button>-->
            </div>
        </div>

       <!-- -------SERVICES----------- -->
       
     </section>
     <div class="services" id="services">
        <div class="title">
            <h2>Services</h2>
        </div>
        <div class="box">
            <div class="card">
            
                <h5>Web Design</h5>
                <div class="pra">
                    <p> Encompasses many different skills and disciplines in the production and maintenance of website</p>
                    <p style="text-align: center;">
                        <a class="button" href="#">Read More</a>
                    </p>
                </div>
            </div>
                <div class="card">
    
                    <h5>UI/UX Design</h5>
                    <div class="pra">
                        <p>design products that are both visually appealing and user-friendly</p>
                        <p style="text-align: center;">
                            <a class="button" href="#">Read More</a>
                        </p>
                    </div>
                </div>
                    <div class="card">
                        
                        <h5>App Design</h5>
                        <div class="pra">
                            <p>If you are unsure about what look you want for your app.Here is the best place to design the desired app</p>
                            <p style="text-align: center;">
                                <a class="button" href="#">Read More</a>
                            </p>
                        </div>
                    </div>
        </div>
     </div>
<!-- --------------my work---------------------------- -->
 <div id="portfolio">
    <div class="services">
            <div class="title">
                <h2>My Work</h2>
                <div class="work-list">

                    <div class="work">
                        <img src="s1.jpg" height="300px">
                        <div class="layer">
                            <h3>online shopping App</h3>
                            <p>This App contians various items of number of sellers from all over the world.you can purchase them easily with the help of interactive user intrface</p>
                        </div>
                    </div>

                    <div class="work">
                        <img src="s2.jpg" height="300px">
                        <div class="layer">
                            <h3>social media App</h3>
                            <p>This App connects you with your friends and other people you may know.</p>
                        </div>
                    </div>

                    <div class="work">
                        <img src="s3.jpg" height="300px">
                        <div class="layer">
                            <h3>entertainment App</h3>
                            <p>This App produces different kinds of music on your taste.</p>
                        </div>
                    </div>

                </div>

            </div>

    

      </div>
    </div>


    <!-- <script>
        const toggleButton = document.getElementById('toggleButton');
        const additionalInfo = document.getElementById('additionalInfo');
    
        toggleButton.addEventListener('click', function() {
          additionalInfo.classList.toggle('hidden');
        });
      </script>-->



     <div class="contact-me" id="contact-me">
        <p>Let Me Get You A <span>Beautiful Website.</span></p>

<!-- ----------form ------------ -->
        <?php
        if(isset($_SESSION['status'])){
            echo "<h1>".$_SESSION['status']."</h1>";
            unset($_SESSION['status']);
        }
        ?>

       
      <div class="contact-form">
        <form action="code.php" method="POST">
            <input type="text" name="Name" placeholder="Your Name" required />
            <input type="email" name="email" placeholder="Your Email" required />
            <input type="pno" name="pno" placeholder="Your phone number" required />
            <textarea name="message" rows="6" placeholder="Your Message"></textarea>
            <button type ="submit" name="save_contact">Submit</button>
        </form>
        <span id="msg">
        </span>
      </div>
     </div>
     
     <footer>
        <p>
            Hiruni Fernando
        </p>
        <p>bernadethchristeen@gmail.com<br>+947723456780</p><br>

        <p><span> more details click the link below</span></p>
        <div class="social">
            <a href="https://www.facebook.com/hiruni.malsh.7?mibextid=D4KYlr"><i class="fa-brands fa-facebook"></i></a>
            <a href="https://instagram.com/hirunii_fernando?igshid=NTc4MTIwNjQ2YQ=="><i class="fa-brands fa-instagram"></i></a>
            <a href="#"><i class="fa-brands fa-linkedin"></i></a>
            <a href="https://github.com/hirufer14"><i class="fa-brands fa-github"></i></a>
        </div>
        <p class="end">Copyright by Hiruni Fernando</p>
     </footer>

     <script>
        var tablinks=document.getElementsByClassName("tab-links");
        var tabcontents=document.getElementsByClassName("tab-contents");

        function opentab(tabname){
            for(tablink of tablinks){
                tablink.classList.remove("active-link")
            }
            for(tabcontent of tabcontents){
                tabcontent.classList.remove("active-tab")
            }
            event.currentTarget.classList.add("active-link");
            document.getElementById(tabname).classList.add("active-tab");

        }
     </script>
<script>
    const scriptURL = 'https://script.google.com/macros/s/AKfycbxpf4Ko-oYZ4yWTkjXGbgMzAH4shAKwYMi25LdbRIkTILKQFlAncME2nikeI6uMdA3k/exec'
    const form = document.forms['submit-to-google-sheet']
    const msg= document.getElementById("msg")

    form.addEventListener('submit', e => {
      e.preventDefault()
      fetch(scriptURL, { method: 'POST', body: new FormData(form)})
        .then(response => {
            msg.innerHTML="Message sent successfully"
            setTimeout(function(){
                msg.innerHTML=""
            },5000)

            form.reset()

            })
        
        .catch(error => console.error('Error!', error.message))
    })
  </script>
    </body>
</html>