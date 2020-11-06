<div class="model">
    <!-- Contact Form -->
    <div class="contact-form-two">
        <div class="title-box">
            <h4>Make an Appointment</h4>
            <div class="text">We provide the most full medical services, so every person could have the <br>oportunity to receive qualitative medical help.</div>
        </div>
        <form method="post" action="http://ary-themes.com/html/bold_touch/medicoz/setappointment.php" id="contact-form">
            <div class="row clearfix">
                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                    <input type="text" name="username" placeholder="Your Name" required="">
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                    <input type="text" name="phone" placeholder="Your Phone" required="">
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                    <input type="email" name="email" placeholder="Email Address" required="">
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                    <select name="departments" id="departments" onchange="appointment();" required>
                        <option value="default" selected disabled>Select Departments</option>
                        <option value="Cardiology">Cardiology</option>
                        <option value="Neurology">Neurology</option>
                        <option value="Urology">Urology</option>
                        <option value="Gynecological">Gynecological</option>
                        <option value="Pediatrical">Pediatrical</option>
                        <option value="Laboratory">Laboratory</option>
                    </select>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                    <input type="date" name="date" placeholder="Select Date" required="">
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                    <select name="time" required id="timing">
                        <option value="" selected disabled>Select Time</option>
                        <option value="" data-value="default" disabled>Please select a department</option>
                        <option value="10:00AM - 12:00AM" data-value="Cardiology">10:00AM - 12:00AM</option>
                        <option value="12:00AM - 02:00AM" data-value="Cardiology">12:00AM - 02:00AM</option>
                        <option value="02:00PM - 04:00PM" data-value="Neurology">02:00PM - 04:00PM</option>
                        <option value="04:00PM - 06:00PM" data-value="Neurology">04:00PM - 06:00PM</option>
                        <option value="06:00PM - 08:00PM" data-value="Urology">06:00PM - 08:00PM</option>
                        <option value="10:00AM - 12:00AM" data-value="Urology">10:00AM - 12:00AM</option>
                        <option value="12:00AM - 02:00AM" data-value="Gynecological">12:00AM - 02:00AM</option>
                        <option value="02:00PM - 04:00PM" data-value="Gynecological">02:00PM - 04:00PM</option>
                        <option value="04:00PM - 06:00PM" data-value="Pediatrical">04:00PM - 06:00PM</option>
                        <option value="06:00PM - 08:00PM" data-value="Pediatrical">06:00PM - 08:00PM</option>
                        <option value="10:00AM - 12:00AM" data-value="Laboratory">10:00AM - 12:00AM</option>
                        <option value="12:00AM - 02:00AM" data-value="Laboratory">12:00AM - 02:00AM</option>
                    </select>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                    <textarea name="message" placeholder="Message" required=""></textarea>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                    <button class="theme-btn btn-style-three small" type="submit" name="submit-form"><span class="btn-title">Submit Now</span></button>
                </div>
            </div>

            <script type="text/javascript">
                function appointment() {
                    var departments = jQuery('#departments option:selected').val();
                    jQuery('#timing option').hide();
                    jQuery('#timing option[data-value=' + departments + ']').show();
                }
                appointment();
            </script>
        </form>
    </div>
</div>