<!-- DB connection -->

<?php
ob_start();
session_start();

include("../backend/admin/config.php");
// include("../backend/admin/functions.php");
$error_message = '';
$success_message = '';
?>
<?php
$BASE_URL = 'http://localhost/vasantham-full-project/';
$IMG_URL = 'backend/assets/uploads/';
// Check the page slug is valid or not.
$statement = $pdo->prepare("SELECT * FROM partner ORDER BY id ASC");
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);
$total = $statement->rowCount();
if ($total == 0) {
    header('location: ' . $BASE_URL . 'vasantham-master');
    //echo 'no rows available';
    exit;
} else {
    // echo $result[0]['name'];
}

?>

<?php
include "header.php";

?>
<style>
    .visit-btn {
        background: #1370b5;
        padding: 5px;
        border-radius: 5px;
        color: #fff;
        font-size: 14px;
        font-weight: 150;
        width: 40px;

    }

    .visit-btn:hover {
        background: #1370b5;
        color: white;

    }

    #customers {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 60%;
    }

    #customers td,
    #customers th {
        border: 1px solid #eee;
        padding: 8px;
        text-align: center;
    }


    #customers tr:nth-child(even) {
        background-color: #ECF7E6;
    }

    #customers tr:nth-child(odd) {
        background-color: #FFFFFF;
    }

    #customers tr:hover {
        background-color: #C6D3F3;
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
        <!-- Main Header-->
        <?php
        include "header_main.php"
        ?>
        <!--Page Title -->
        <section class="page-title" style="background-image: url(images/background/c.jpg);">
            <div class="auto-container">
                <div class="title-outer">
                    <h1 style="color:white">Insurance</h1>
                    <ul class="page-breadcrumb">
                        <li><a href="index-2.php" style="color:white">Home</a></li>
                        <li style="color:white">Insurance</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--End Page Title-->

        <section class="contact-section" id="contact">
            <div class="small-container">
                <div class="sec-title text-center">
                    <span class="sub-title">Contact Now</span>

                    <span class="divider"></span>
                </div>

                <!-- Contact box -->
                <div class="contact-box">
                    <div class="row">
                        <div class="contact-info-block col-lg-4 col-md-6 col-sm-12">
                            <div class="inner" style="padding-left: 29px !important;">

                                <h5 style="color: #1370B5;"><strong>Insurance Officer</strong>:</h5>
                                <p style="font-size: 16px;">E. Anburajaraman</p>
                                <p style="font-size: 14px;">+91 88707-06620<br><a href="mailto:anburajaraman.vasatham@gmail.com">anburajaraman.vasatham@gmail.com</a></p>
                            </div>
                        </div>

                        <div class="contact-info-block col-lg-4 col-md-6 col-sm-12">
                            <div class="inner" style="padding-left: 29px !important;">
                                <span class="icon flaticon-car"></span>
                                <h5 style="color: #1370B5;"><strong>Asst. Admin Officer</strong></h5>
                                <p style="font-size: 16px;">Mr. Abinesh</p>
                                <p style="font-size: 14px;">+91 97919 56876<br><a href="mailto:vasanthamhealthcentre@gmail.com">vasanthamhealthcentre@gmail.com</a></p>
                            </div>
                        </div>

                        <div class="contact-info-block col-lg-4 col-md-6 col-sm-12">
                            <div class="inner" style="padding-left: 29px !important;">
                                <span class="icon flaticon-profile"></span>

                                <h5 style="color: #1370B5;"><strong>Public Relation Officer</strong></h5>
                                <p style="font-size: 16px;">Mr. Martin</p>
                                <p style="font-size: 14px;">+91 96293 59594<br>vasanthamhealthcentre@gmail.com</p>
                                <p style="color: red;font-size: 12px;">Only for Health Check up. Please contact</p>
                                <!--<p><a href="mailto:support@example.com">support@example.com</a></p>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </section><br>
<!------------------------------------------------------------------------------------------------------------->
<h3 style="border: black; text-align:center;color:#1370B5"> Our Empanelment - Government</h3><br>
<section class="contact-section" id="contact" style="padding-left:170px;">
        <div class="row" style="margin-left: 0px;margin-right: 0px;">
           
                <!-- Feature BLock-->
                <div class="feature-block-two col-lg-3 col-md-6 col-sm-9" style="width: 150px;">
                    <a class="ins" href="" target="_blank">
                        <div class="inner-box">
                            <figure class="thumb-box">
                                <img src="images\clients\1.png" style="width: 70%;left: 15%;position: relative; height:144px;"  alt="">
                            </figure>
                            <div class="insurance-list" style="text-align: center;">Chief Ministers Comprehensive Health Insurance Scheme</div>
                        </div>
                    </a>
                </div>
                 <!-- Feature BLock-->
                 <div class="feature-block-two col-lg-3 col-md-6 col-sm-9" style="width: 150px;margin-left:64px;" >
                    <a class="ins" href="" target="_blank">
                        <div class="inner-box">
                            <figure class="thumb-box">
                                <img src="images\clients\2.png" style="width: 70%;left: 15%;position: relative; height:144px;"  alt="">
                            </figure>
                            <div class="insurance-list"  style="text-align: center;">TNNHIS MidIndia Health Services</div>
                        </div>
                    </a>
                </div>
                 <!-- Feature BLock -->
                 <div class="feature-block-two col-lg-3 col-md-6 col-sm-9" style="width: 150px;margin-left:50px;">
                    <a class="ins" href="" target="_blank">
                        <div class="inner-box">
                            <figure class="thumb-box">
                                <img src="images\clients\3.jpg" style="width: 70%;left: 15%;position: relative; height:144px;"  alt="">
                            </figure>
                            <div class="insurance-list"  style="text-align: center;">Rashtriya Swasthya Bima Yojana</div>
                        </div>
                    </a>
                </div>

         </div>
</section>



<!--------------------------------------------------------------------------------------------------->
<!-----------------------------------Our Empanelment-------------------------------------------------->
h3 style="border: black; text-align:center;color:#1370B5"> Our Empanelment - Government</h3><br>


    <!--<table id="customers" style="align-self: center;">
                <tr>
                    <td style="width: 9%;"><?php echo $row['id']; ?></td>
                    <td style="text-align: left; width: 71%; >
                        <img src="<?php echo $BASE_URL . $IMG_URL . $row['photo'] ?>" style="width: 100px;height: 70px;' ">&nbsp;&nbsp;&nbsp;<?php echo $row['name']; ?>
                    </td>
                    <td style="width: 20%;"><a class="visit-btn" href="<?php echo $row['url']; ?>">Visit page</a></td>
                </tr>
            </table>-->
    <section class="contact-section" id="contact">
        <div class="row" style="margin-left: 0px;margin-right: 0px;">
            <?php foreach ($result as $row) { ?>
                <!-- Feature BLock -->
                <div class="feature-block-two col-lg-3 col-md-6 col-sm-9">
                    <a class="ins" href="<?php echo $row['url']; ?>" target="_blank">
                        <div class="inner-box">
                            <figure class="thumb-box">
                                <img style="width: 70%;left: 15%;position: relative; height:144px;" src="<?php echo $BASE_URL . $IMG_URL . $row['photo'] ?>" alt="">
                            </figure>
                            <div class="insurance-list">
                                <?php echo $row['name']; ?>
                            </div>
                        </div>
                    </a>
                </div>

            <?php } ?>
        </div>
    </section>

    <!-- Main Footer------------------------------------------------------------------------------ -->
    <?php
    include "footer.php";
    ?>
    <!--End Main Footer -->

    </div><!-- End Page Wrapper -->
    <?php
    include "script_includes.php";
    ?>
</body>

</html>






    