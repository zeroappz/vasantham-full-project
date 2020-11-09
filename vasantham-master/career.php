<?php
include "header.php"
?>
<style>
    #customers {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 81%;
        left: 10%
    }

    #customers td,
    #customers th {
        border: none;
        padding: 10px;
        padding-left: 30px;
        text-align: center;
    }


    #customers tr:nth-child(even) {
        background-color: #ECF7E6;
    }

    #customers tr:nth-child(odd) {
        background-color: #FFFFFF;
    }



    /*#customers tr:hover {background-color:#f1f1f1;}*/


    #customers th {

        padding-top: 12px;
        padding-bottom: 12px;
        text-align: center;
        background-color: #1370B5;
        color: white;
    }
</style>


<body>

    <div class="page-wrapper">

        <!-- Preloader -->
        <div class="preloader"></div>
        <?php
        include "header_main.php"
        ?>
        <!--End Main Header -->

        <!--Page Title-->
        <section class="page-title" style="background-image: url(images/background/h.jpg);">
            <div class="auto-container">
                <div class="title-outer">
                    <h1 style="color: white; padding-right:24px;">Career</h1>
                    <ul class="page-breadcrumb">
                        <li><a href="index.php" style="color: white; ">Home</a></li>
                        <li style="color: white; padding-right:24px;">Career</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--End Page Title-->
        <br><br>


        <table id="customers" style="padding-left:20%;width:80%;position:relative;">
            <tr style="text-align:left;">

                <!-- <td style="text-align:center;padding:0px;width:20%;"><h5 style="color: #1370B5;">CONTACT PERSON</h5><br>
    <h4 style="font-size:18px;">Mr. Anburajaraman</h4>
    <h4 style="font-size:16px;">HR & BDO</h4>
    <a href="mailto:vasanthamhealthcentre@gmail.com"><strong>vasanthamhealthcentre@gmail.com</strong></a><br>
    <h6 style="font-size:14px;"><b style="color: #1370B5;">Phone</b>: +91 88707-06620</h4><br>
</td>-->
                <td>
                    <!--  <h5 style="text-align: left;padding-left:155px;">RECRUITMENTS</h5><br>-->
                    <p style="font-size:16px;text-align:justify;padding:10px;padding-left:30px;">
                        Vasantham has a rigorous recruitment policy, to maintain and retain its quality standards and accreditation
                        protocols.At Vasantham Health Care, we pay complete attention to our employees and their dependants by offering
                        them unique healthcare benefits. We ensure regular health check-ups for all our employees to ensure a healthy
                        and productive workforce. Our employee benefits are designed to make life healthier and happier.
                        <br><br>
                        Human Resource Department in Vasantham Health Care, do follow the labor norms and policies as per the
                        government guidelines of PF, ESI, Accident Coverage and Health Insurance Coverage to all the associated staff
                        after completing their 3 Month probation period with Vasantham Health Centre.<br><br>
                        <h5 style="text-align: center;">Candidates seeking a career with Vasantham Health Centre (P) Ltd., can forward their CV to</h5><br> <a href="mailto:vasanthamhealthcentre@gmail.com"><strong>vasanthamhealthcentre@gmail.com</strong></a><br>

                </td>
            </tr>



        </table>.
        <!--     <section class="terms-and-condition" style="padding: 15px;">
            <div class="auto-container" >
                <div class="tnc-tabs tabs-box" >
                    <div class="row" >
                        <div class="column col-xl-3 col-lg-4 col-md-12 col-sm-12">
                            <!--Tab Btns
                            <ul class="tab-buttons" style="color: #1370B5;">
                                <li data-tab="#tab-a" class="tab-btn active-btn"><p style="color: #1370B5;">Insurance Agents</p></li>
                                <li data-tab="#tab-b" class="tab-btn"><p style="color: #1370B5;">Receptionist</p></li>
                                <li data-tab="#tab-c" class="tab-btn"><p style="color: #1370B5;">Nurses</p></li>
                               
                            </ul>
                        </div>

                        <div class="column col-xl-9 col-lg-8 col-md-12 col-sm-12">
                            <!--Tabs Container
                            <div class="tabs-content">
                                <!--Tab
                                <div class="tab" id="tab-a">
                                    <h4 style="color: #1370B5;">JOB DESCRIPTION</h4>
                                   <p>This mission of the position Manager (HLM- Sales) is to maintain the current Hospital 
                                       Laboraotry (HLMs)relationships, grow the revenue from current HLM relationships and aquire
                                        new HLM to expand the business network into new geographies for the organization. A person
                                         in this role will identify the business opportunity and build longterm relationship with 
                                         prospects and convert them to customer towards increase in organizations revenue and maximizing profit.</p>
                                         <h4 style="color: #1370B5;">REQUIREMENTS</h4>
                                    <ul>
                                    <li>Education: MBA (Sales and Marketing) from a recognized university</li>
                                    <li>Experience: 3-6 years of relevant experience in a premium company.</li>
                                    <li>Skills: Business Planning </li>
                                    <li>Performance: ManagementAttitude and Behavior Empathetic</li>
                                    </ul>
                                </div>

                                <!--Tab
                                <div class="tab" id="tab-b">
                                <h4 style="color: #1370B5;">  AssistantJOB DESCRIPTION</h4>
                                    <p>Keep front desk tidy and presentable with all necessary material 
                                        (pens, forms, paper etc.), Receive letters, packages etc. and distribute them, Answer all incoming calls and redirect them or keep messages, Prepare outgoing mail 
                                        by drafting correspondence, securing parcels etc., Monitor office supplies and place orders
                                         when necessary, Keep updated records and files, Take up other duties as assigned.</p>
                                         <h4 style="color: #1370B5;">REQUIREMENTS</h4>
                                    <ul>
                                    <li> Visitor Management</li>
                                    <li>Cleanliness audit</li>
                                    <li>Client relationship management </li>
                                    <li>Purchase order placement</li>
                                    <li>Delivery management </li>
                                    <li>Purchase order placement</li>
                                    </ul>
                                </div>

                                <!--Tab
                                <div class="tab" id="tab-c">
                                    <h4 style="color: #1370B5;">Conditions</h4>
                                    <p>To provide the highest quality tertiary (super specialty) medical care exceptional service and best value to all its local and global patrons through dedicated highly skilled and compassionate doctors and staff using state of the art technology.</p>
                                    <p>We are committed to the growth development and welfare of our people and creation of value for our stakeholders upon whom we rely to make the mission to our patient happen.</p>
                                    <h5 style="color: #1370B5;">Our Terms</h5>
                                    <p>To provide the highest quality tertiary (super specialty) medical care exceptional service and best value to all its local and global patrons through dedicated highly skilled and compassionate doctors and staff using state of the art technology.</p>
                                    <p>Increased in patient admission by 20% every year. Increased the surgeries by 20% over the previous year. Reduction in infection rates to 015from the present 0.5%.</p>
                                </div>

                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>-->
        <!-- End Terms And Conditions -->



        <!-- Clients Section
        <?php
        //include "clients_section.php"
        ?>
        End Clients Section -->

        <!-- Main Footer -->
        <?php
        include "footer.php"
        ?>
        <!--End Main Footer -->

    </div><!-- End Page Wrapper -->
    <!----------------------------------------------------->
    <!----------------------------------------------------->
    <!----------------------------------------------------->


    >



    <script>
        function myFunction(id) {
            var x = document.getElementById(id);
            if (x.className.indexOf("w3-show") == -1) {
                x.className += " w3-show";
            } else {
                x.className = x.className.replace(" w3-show", "");
            }
        }
    </script>



    <?php
    // include "color-switcher.php";
    include "script_includes.php";
    ?>
</body>

</html>