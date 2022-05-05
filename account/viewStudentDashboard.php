<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Welcome to <b>Silicon Review Portal</b></h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="timeline">
                        <!-- timeline time label -->
                        <div class="time-label">
                            <?php
                                if($profileRow['surveyCompleted'] == 0){
                                    echo "<span class='bg-red'>Step 1</span>";
                                }else{
                                    echo "<span class='bg-green'>Step 1</span>";
                                }
                            ?>
                        </div>
                        <!-- /.timeline-label -->
                        <!-- timeline item -->
                        <div>
                            <?php
                                if($profileRow['surveyCompleted'] == 0){
                                    echo "<i class='fas fa-exclamation bg-red'></i>";
                                }else{
                                    echo "<i class='fas fa-check bg-green'></i>";
                                }
                            ?>
                            <div class="timeline-item">
                                <h3 class="timeline-header"><a href="#">Initial Rating of Silicon Institute of Technology, Bhubaneswar</a></h3>
                                <div class="timeline-body">
                                    <?php
                                        if($profileRow['surveyCompleted'] == 0){
                                            echo "<i>You haven't yet completed this step</i>";
                                        }else{
                                            echo "<i>You have completed this step</i>";
                                        }
                                    ?>
                                </div>
                                <?php
                                    if($profileRow['surveyCompleted'] == 0){
                                ?>
                                <div class="timeline-footer">
                                    <a class="btn btn-warning btn-sm" href="initSurvey">Complete Initial Review</a>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                        <!-- END timeline item -->
                        <!-- timeline time label -->
                        <div class="time-label">
                            <?php
                                if($profileRow['probQuesRead'] == 0){
                                    echo "<span class='bg-red'>Step 2</span>";
                                }else{
                                    echo "<span class='bg-green'>Step 2</span>";
                                }
                            ?>
                        </div>
                        <!-- /.timeline-label -->
                        <!-- timeline item -->
                        <div>
                            <?php
                                if($profileRow['probQuesRead'] == 0){
                                    echo "<i class='fas fa-exclamation bg-red'></i>";
                                }else{
                                    echo "<i class='fas fa-check bg-green'></i>";
                                }
                            ?>
                            <div class="timeline-item">
                                <span class="time"><?php if($profileRow['publishConsent'] == 1){ echo "You have consented to publish your review"; } ?></span>
                                <h3 class="timeline-header"><a href="#">Read all guidelines</a></h3>
                                <div class="timeline-body">
                                    <?php
                                        if($profileRow['surveyCompleted'] == 1){
                                            echo "<i>Please read all the guidelines carefully.</i>";
                                        }else{
                                            echo "<i>You haven't completed the previous steps</i>";
                                        }
                                    ?>
                                </div>
                                <?php
                                    if($profileRow['surveyCompleted'] == 1){
                                ?>
                                <div class="timeline-footer">
                                    <a class="btn btn-primary btn-sm" href="#" data-toggle="modal" data-target="#modalGuidelines">Read Guidelines</a>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                        <!-- END timeline item -->
                        <!-- timeline time label -->
                        <div class="time-label">
                            <?php
                                if($profileRow['probQuesRead'] == 0){
                                    echo "<span class='bg-red'>Step 3</span>";
                                }else{
                                    echo "<span class='bg-blue'>Step 3</span>";
                                }
                            ?>
                        </div>
                        <!-- /.timeline-label -->
                        <!-- timeline item -->
                        <div>
                            <?php
                                if($profileRow['probQuesRead'] == 0){
                                    echo "<i class='fas fa-exclamation bg-red'></i>";
                                }else{
                                    echo "<i class='fas fa-check bg-blue'></i>";
                                }
                            ?>
                            <div class="timeline-item">
                                <h3 class="timeline-header"><a href="#">Review on College Dunia</a></h3>
                                <div class="timeline-body">
                                    <?php
                                        if($profileRow['probQuesRead'] == 1){
                                            echo "<a href='https://www.collegedunia.com' target='_blank'>College Dunia</a> is an extensive search engine for the students, parents, and education industry players who are seeking information on higher education sector in India and abroad.";
                                        }else{
                                            echo "<i>You haven't completed the previous steps</i>";
                                        }
                                    ?>
                                </div>
                                <?php
                                    if($profileRow['probQuesRead'] == 1){
                                        ?>
                                        <div class="timeline-footer">
                                            <a class="btn btn-primary btn-sm" href="https://collegedunia.com/write-review" target="_blank">Review on College Dunia</a>
                                        </div>
                                        <?php
                                    }else{

                                    }
                                ?>
                            </div>
                        </div>
                        <!-- END timeline item -->
                        <div>
                            <i class="fas fa-star bg-green"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->

        <div class="modal fade" id="modalGuidelines">
            <div class="modal-dialog modal-xl">
                <div class="modal-content bg-default">
                    <div class="modal-header">
                        <h4 class="modal-title">Guidelines</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h1><b>COMENTARIO 2022</b></h1>
                        <ul>
                            <li>Participants must be an existing student of Silicon Institute of Technology.</li>
                            <li>Interested participants can register for this event by visiting the given link.</li>
                            <li>Participants have to then visit 'collegedunia.com' and post their reviews for the college based on the various parameters on the site.</li>
                            <li>Constructive criticism in your feedback is welcome.</li>
                            <li>The reviews will be shared with the institute and analysed by the panel of judges, based on the content and language of the feedback.</li>
                            <li>As per the decision of the judges, the winner's of this contest will be rewarded with cash prizes.</li>
                        </ul>
                        <br>
                        <h3>Judging Points based on Questions</h3>
                        <b>Q1. How was the admission process? If you took any entrance exam, discuss application process and cut off</b>
                        <ul>
                            <li>Eligibility of the Course</li>
                            <li>Where to find the application form, application fees and application dates</li>
                            <li>Details of Reservation Benefits (if availed)</li>
                            <li>Any improvement you want to see in the admission process</li>
                        </ul>
                        <b>Q2. How is the course curriculum & faculty members?</b>
                        <ul>
                            <li>Mention why did you choose this course</li>
                            <li>A brief about faculty: student ratio</li>
                            <li>Qualification of the faculty & review teaching method</li>
                            <li>How timely were term exams and how difficult was to pass?</li>
                        </ul>
                        <b>Q3. How is the fees structure & discuss the opportunity of scholarship, financial assistance or campus jobs?</b>
                        <ul>
                            <li>Discuss the fees hike policy and cost to study</li>
                            <li>Name of Scholarship, Financial Assistance &a Job you got on campus with stipend</li>
                        </ul>
                        <b>Q4. How is life at the Campus? Discuss about Social Life, Clubs & Infrastructure.</b>
                        <ul>
                            <li>Name the annual fest & tech fest and month in which they are conducted</li>
                            <li>Availability of books & journals in the library</li>
                            <li>Amenities in classrooms</li>
                            <li>Brief of sports & extra-curricular activities on the campus</li>
                            <li>Mention any social group, clubs or website for students run by students</li>
                        </ul>
                        <b>Q5. Did you face any Group Discussion, Interview or Written Test for the admission?</b>
                        <ul>
                            <li>What were the topics of GD, Interview questions or test pattern?</li>
                            <li>Discuss the process and other criteria for admission</li>
                            <li>How did you prepare for these rounds?</li>
                        </ul>
                        <b>Q6. How is the Hostel Facility or give details of your rented accommodation?</b>
                        <ul>
                            <li>Give details of facilities provided in the room</li>
                            <li>Review of meal quality & menu</li>
                            <li>Registration Process for Hostel & Affordability</li>
                            <li>Mention the locality if you rented a room or PG</li>
                        </ul>
                        <b>Q7. How are the Placements of Your College? If No Campus Placement is offered discuss about employability or plans after completing the course</b>
                        <ul>
                            <li>From which semester students become eligible for campus placements</li>
                            <li>Name of the Companies visited & no of offers made</li>
                            <li>Give details of highest and average package as per company and profiles offered</li>
                            <li>Percentage of students getting placements</li>
                            <li>Your plans after the getting the degree</li>
                        </ul>
                        <b>Q8. Give details of the internship opportunities available with your college</b>
                        <ul>
                            <li>Name of the companies and roles offered under internships with stipend</li>
                            <li>Mention projects and outcomes to clarify the tasks</li>
                        </ul>
                        <?php
                            if($profileRow['probQuesRead'] == 0){
                        ?>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" name="probQuesRead" id="probQuesReadBox">
                          <label class="form-check-label"><strong>I confirm that I have read all guidelines carefully, and am ready to review Silicon Insitute of Technology, on College Dunia</strong></label>
                        </div>
                        <?php } ?>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" name="publishConsent" id="publishConsent" <?php if($profileRow['publishConsent'] == 1){ echo "checked"; } ?> >
                          <label class="form-check-label"><strong>I consent that, Silicon Institute of Technology, and College Dunia can publish my review, publicly on their respective websites.</strong></label>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>

    </section>
    <!-- /.content -->
</div>

<script>
    // BS-Stepper Init
    document.addEventListener('DOMContentLoaded', function () {
        window.stepper = new Stepper(document.querySelector('.bs-stepper'))
    })
</script>