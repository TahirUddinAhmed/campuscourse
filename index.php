<?php 
include("includes/header.php");
include("reg.inc.php");
?>


<?php
if($success_msg != '') {
?>
<div class="alert alert-success" role="alert">
  <h4 class="alert-heading">Congratulations</h4>
  <p><?php echo $success_msg ?? null ?></p>
  <hr>
  <a href="https://chat.whatsapp.com/EbbgpvOmnkLLBZL74p9lq5" class="btn bt-sm btn-primary">Join our What's app Group</a>
</div>
<?php
}

?>

    <div class="container-fluid justify-center align-center main">
        <div class="row">
            <div class="col-md-6">
                <div class="course-about">
                    <h3>Object-Oriented Programming in C++</h3>
                    <p>In this course, you'll learn everything you need to know to master the C++ programming language, from basic concepts to advanced techniques</p>
                    <div class="instructor">
                        <img src="#" alt="">
                        <p>Instructor: Tahir Uddin Ahmed</p>
                    </div>
                    <div class="enroll-btn">
                        <!-- Button trigger modal -->
                        <button type="button" class="enroll" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Entroll Now
                        </button>
                        <p>2 days free class</p>
  
                        <!-- registration form -->
                        <?php include("register.php"); ?>
                    </div> 

                    <p><?= $no_of_st ?? null ?> Students already enrolled</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="course-image">
                    <h3>Offered by CampusCourse</h3>
                    <p>Only for Morigaon College Students</p>
                </div>
            </div>
        </div>
        
                
    </div>

    <div class="containet-fluid course-content">
      <nav id="navbar-example2" class="navbar bg-light px-3">
       
        <ul class="nav nav-pills">
          <li class="nav-item">
            <a class="nav-link" href="#scrollspyHeading1">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#scrollspyHeading2">Curiculam</a>
          </li>
        </ul>
      </nav>
      <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true" class="scrollspy-example  p-3 content" tabindex="0">
        <h4 id="scrollspyHeading1">About this Specialization</h4>
        <p>
          Welcome to the C++ programming course! By the end of this comprehensive course, you will have a solid foundation in object-oriented programming with C++ and be equipped with the skills to design and implement robust, scalable, and maintainable software systems. 
        </p>
        <p>
          This course includes a free introductory session that provides an overview of the course curriculum and a chance to ask any questions you may have. After the introductory session, students can choose to enroll in the full course for a fee.
        </p>
        <div id="scrollspyHeading2" class="mt-4">
          <h4>Course curriculum</h4>
          
          
          <!-- // items goes here -->
          <div class="accordion mt-4" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  Module 1: Introduction to C++
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <ul>
                    <li>Getting started with C++: Installing compilers and development environments</li>
                    <li>Basic structure of a C++ program: Syntax and components</li>
                    <li>Writing and running your first C++ program</li>
                    <li>Understanding variables, data types, and basic input/output operations</li>
                    <li>Assignments</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  Module 2: Control Flow and Decision Making
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <ul>
                    <li>Conditional statements: if, if-else, switch</li>
                    <li>Looping constructs: for, while, do-while</li>
                    <li>Control flow manipulation: break, continue, and return statements</li>
                    <li>Handling user input and validating data</li>
                    <li>Porject</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  Module 3: Functions and Modular Programming
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <ul>
                    <li>Understanding functions: declaration, definition, and invocation</li>
                    <li>Passing arguments to functions: by value, by reference, and by pointer</li>
                    <li>Function overloading and default arguments</li>
                    <li>Modular programming: creating and using header files and libraries</li>
                    <li>Assignment</li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header" id="headingFour">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapsFive">
                  Module 4: Arrays and Strings
                </button>
              </h2>
              <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <ul>
                    <li>Introduction to arrays: declaration, initialization, and accessing elements</li>
                    <li>Working with multi-dimensional arrays</li>
                    <li>Manipulating strings: string literals, string class, and string functions</li>
                    <li>String manipulation and searching techniques</li>
                    <li>Assignment</li>
                  </ul>
                </div>
              </div>
            </div>


            <div class="accordion-item">
              <h2 class="accordion-header" id="headingFive">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                  Module 5: Object-Oriented Programming (OOP) Basics
                </button>
              </h2>
              <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <ul>
                    <li>Fundamentals of OOP: classes, objects, and encapsulation</li>
                    <li>Defining and implementing classes: member variables and member functions</li>
                    <li>Constructors and destructors</li>
                    <li>Access specifiers: public, private, and protected</li>
                    <li>Assignment</li>
                  </ul>
                </div>
              </div>
            </div>


            <div class="accordion-item">
              <h2 class="accordion-header" id="headingSix">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                  Module 6: Inheritance and Polymorphism
                </button>
              </h2>
              <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <ul>
                    <li>Inheritance: deriving classes, base class, and derived class</li>
                    <li>Access control and inheritance</li>
                    <li>Polymorphism: function overriding and virtual functions</li>
                    <li>Abstract classes and pure virtual functions</li>
                    <li>Asssignment</li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header" id="headingtto/button>">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsetto/button>" aria-expanded="false" aria-controls="collapsetto/button>">
                  Module 7: Pointers and Dynamic Memory Allocation
                </button>
              </h2>
              <div id="collapsetto/button>" class="accordion-collapse collapse" aria-labelledby="headingtto/button>" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <ul>
                    <li>Understanding pointers: declaration, dereferencing, and pointer arithmetic</li>
                    <li>Dynamic memory allocation: <b>new</b> and <b>delete</b> operators</li>
                    <li>Pointers and arrays</li>
                    <li>Assignment</li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header" id="headingEight">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                  Module 8: File Handling and Input/Output
                </button>
              </h2>
              <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <ul>
                    <li>Working with files: opening, reading, writing, and closing files</li>
                    <li>File input/output operations: text files and binary files</li>
                    <li>Asssignment</li>
                  </ul>
                </div>
              </div>
        </div>

        <div class="accordion-item">
              <h2 class="accordion-header" id="headingNine">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                  Module 9: Solve Previous Year Question paper
                </button>
              </h2>
              <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <ul>
                    <li>Solve 2022 Question paper</li>
                    <li>Solve 2019 Question paper</li>
                    <li>Online Test (mark 60)</li>
                  </ul>
                </div>
              </div>
        </div>




          </div>
        </div>

        
        
        
      </div>
    </div>


<?php include("includes/footer.php") ?>