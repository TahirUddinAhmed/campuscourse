<!-- Modal -->
<div class="modal fade register" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">C Programming || CampusCourse</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="fill-empty"></p>
                <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
                    <!-- 2 column grid layout with text inputs for the first and last names -->
                    <div class="row mb-4">
                        <div class="col">
                            <div class="form-outline">
                                <input type="text" id="fname" name="first_name" class="form-control" placeholder="Enter first name"/>
                                <label class="form-label" for="fname">First name</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-outline">
                                <input type="text" id="lname" name="last_name" class="form-control" placeholder="Enter last name"/>
                                <label class="form-label" for="lname">Last name</label>
                            </div>
                        </div>
                    </div>

                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <input type="email" id="email" name="email" class="form-control" placeholder="example@gmail.com"/>
                        <label class="form-label" for="email">Email address</label>
                        <p><span class="email-check"></span></p>
                    </div>

                    <p class="text-muted text-light">Are You a Morigaon College Student ?</p>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="college" id="inlineRadio1" value="Morigaon College" checked/>
                        <label class="form-check-label" for="inlineRadio1">Yes</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="college" id="inlineRadio2" value="Not" />
                        <label class="form-check-label" for="inlineRadio2">No</label>
                    </div>

                    <div class="form-outline mt-4 mb-4">
                        <input type="text" id="class" name="class" class="form-control" placeholder="class"/>
                        <label class="form-label" for="class">Class</label>
                    </div>

                    <div class="form-outline mb-4">
                        <input type="phone" id="phone" name="phone" class="form-control" maxlength="10" placeholder="Enter your phone number"/>
                        <label class="form-label" for="phone">Phone</label>
                    </div>


                    <input type="submit" id="reg" name="enroll" value="Enroll" class="btn btn-primary btn-block w-100 mb-4">
                    <!-- Submit button -->


                    <!-- Register buttons -->
                    <hr>
                    <div class="info">
                        <p class="text-center text-muted">Only Morigaon College Students can take this course</p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>