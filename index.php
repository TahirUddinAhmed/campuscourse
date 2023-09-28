<?php 
include("includes/header.php");
include("reg.inc.php");
?>


<?php
if(isset($success_msg)) {
?>
<div class="alert alert-success" role="alert">
  <h4 class="alert-heading">Congratulations</h4>
  <p><?php echo $success_msg ?? null ?></p>
  <hr>
  <a href="https://chat.whatsapp.com/BJJvWbJvuoDJHnoKNyvu9o" class="btn bt-sm btn-primary">Join our What's app Group</a>
</div>
<?php
}

?>

    <div class="container-fluid justify-center align-center main">
        <div class="row">
            <div class="col-md-6">
                <div class="course-about">
                    <h3>C Programming for BCA 1st Sem</h3>
                    <p>In this course, you'll learn everything you need to know to master the C programming language, from basic concepts to advanced techniques</p>
                    <div class="instructor my-3">
                        <img src="./assets/profile/tahir.jpg" width="30" class="img-fluid mx-2" style="border-radius: 15px;" alt="">
                        <span>Instructor: Tahir Uddin Ahmed</span>
                    </div>
                    <div class="enroll-btn">
                        <!-- Button trigger modal -->
                        <button type="button" class="enroll" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Entroll Now
                        </button>
                        <p>3 days free class</p>
  
                        <!-- registration form -->
                        <?php include("register.php"); ?>
                    </div> 
                    
                    <?php
                    if($no_of_st == 1) {
                      echo '<p>' . $no_of_st .' Student already enrolled</p>';
                    } else if($no_of_st > 1) {
                      echo '<p>' . $no_of_st .' Students already enrolled</p>';
                    }

                    ?>
                    
                </div>
            </div>
            <div class="col-md-6 text-center">
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
          Welcome to the C programming course! By the end of this comprehensive course, you will have a solid foundation in C programming. 
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
                  Module 1: Introduction to C Programming
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <ul>
                    <li>Overview of the C language</li>
                    <li>Setting up the development environment</li>
                    <li>Writing and running a simple C program</li>
                    <li>Basic input and output functions (printf and scanf)</li>
                    <li>Assignments</li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNew" aria-expanded="false" aria-controls="collapseTwo">
                  Module 2: Variables and Data Types
                </button>
              </h2>
              <div id="collapseNew" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <ul>
                    <li>Understanding variables and data types</li>
                    <li>Integer and floating-point data types</li>
                    <li>Character data type</li>
                    <li>Variable declaration and initialization</li>
                    <li>Operators</li>
                    <li>Operators Precedence</li>
                    <li>Assignments</li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  Module 3: Control Flow and Decision Making
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <ul>
                    <li>Conditional statements: if, if-else, switch</li>
                    <li>Looping constructs: for, while, do-while</li>
                    <li>Control flow manipulation: break, continue, and return statements</li>
                    <li>Assignment</li>
                    <li>Porject - Calculator</li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  Module 4: Functions
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <ul>
                    <li>Why we need functions ?</li>
                    <li>Function definition and declaration</li>
                    <li>Function parameters and return values</li>
                    <li>Create your own Math.pow() function</li>
                    <li>Assignment</li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header" id="headingFour">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapsFive">
                  Module 5: Arrays
                </button>
              </h2>
              <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <ul>
                    <li>Why we need Arrays?</li>
                    <li>Introduction to arrays: declaration, initialization, and accessing elements</li>
                    <li>Multi-dimensional arrays</li>
                    <li>Assignment</li>
                  </ul>
                </div>
              </div>
            </div>


            <div class="accordion-item">
              <h2 class="accordion-header" id="headingFive">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                  Module 6: Pointers and Memory Management
                </button>
              </h2>
              <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <ul>
                    <li>Introduction to pointers</li>
                    <li>Pointer arithmetic</li>
                    <li>Dynamic memory allocation (malloc, calloc, free)</li>
                    <li>Pointers and arrays</li>
                    <li>Strings in C</li>
                    <li>Assignment</li>
                  </ul>
                </div>
              </div>
            </div>


            <div class="accordion-item">
              <h2 class="accordion-header" id="headingSix">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                  Module 7: Structures and Unions
                </button>
              </h2>
              <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <ul>
                    <li>Defining structures</li>
                    <li>Accessing structure members</li>
                    <li>Arrays of structures</li>
                    <li>ntroduction to unions</li>
                    <li>Asssignment</li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header" id="headingtto/button>">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsetto/button>" aria-expanded="false" aria-controls="collapsetto/button>">
                  Module 8: File Handling
                </button>
              </h2>
              <div id="collapsetto/button>" class="accordion-collapse collapse" aria-labelledby="headingtto/button>" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <ul>
                    <li>File input and output operations</li>
                    <li>Opening, closing, and reading/writing files</li>
                    <li>Error handling with file operations</li>
                    <li>Assignment</li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header" id="headingEight">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                  Module 9: Solve Previous Year Question Papers
                </button>
              </h2>
              <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <ul>
                    <li>Solve - 2022 Question Paper</li>
                    <li>Solve - 2021 Question Paper</li>
                    <li>Online Test - (Theory + Practical)</li>
                  </ul>
                </div>
              </div>
        </div>

        <!-- <div class="accordion-item">
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
        </div> -->




          </div>
        </div>

        
        
        
      </div>
    </div>


<?php include("includes/footer.php") ?>