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
$BASE_URL = 'http://localhost/vasantham/';
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
        <h3 style="border: black; text-align:center;color:#1370B5"> Our Empanelment</h3><br>
        <center>
            <?php foreach ($result as $row) { ?>
                <table id="customers" style="align-self: center;">
                    <tr>
                        <td style="width: 9%;"><?php echo $row['id']; ?></td>
                        <td style="text-align: left; width: 71%;">
                            <img src="<?php echo $BASE_URL . $IMG_URL . $row['photo'] ?>" style="width: 100px;height: 70px;' ">&nbsp;&nbsp;&nbsp;<?php echo $row['name']; ?>
                        </td>
                        <td style="width: 20%;"><a class="visit-btn" href="<?php echo $row['url']; ?>">Visit page</a></td>
                    </tr>
                </table>
            <?php } ?>
        </center>
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