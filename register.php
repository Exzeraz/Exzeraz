<?php 
    session_start()
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <?php 
        include "link.html";
    ?>
</head>
<body>
    <?php 
        include "navbar/navbar.php";
    ?>

    <div class="form-container">
        <form action="" method="post" autocomplete="off" class="form-control">
            <div class="form-header">
                <p>สมัครสมาชิก</p>
            </div>
                <?php
                    if (isset($_SESSION['error-login'])) {
                        echo '<div class="form-error">';
                        echo $_SESSION['error-login'];
                        echo '</div>';
                        unset ($_SESSION['error-login']);

                    }
                ?>
                <!-- <div class="form-error">error</div> -->
            <div class="form-input-group">
                <div class="input-control">
                    <input type="text" class="form-input" name="username" required autocomplete="off">
                    <label for="username" class="form-label" >ชื่อผู้ใช้</label >
                </div>
                <div class="input-control">
                    <input type="text" class="form-input" required autocomplete="off">
                    <label for="" class="form-label" >อีเมล</label >
                </div>

                    <div class="form-name-control">
                        <div class="input-name-control">
                            <input type="text" class="form-input-name" required autocomplete="off">
                            <label for="" class="form-label-name">ชื่อ</label>
                        </div>
                        <div class="input-name-control">
                            <input type="text" class="form-input-name" required autocomplete="off">
                            <label for="" class="form-label-name">นามสกุล</label>
                        </div>
                    </div>

                <div class="input-control">
                    <input type="password" class="form-input" required autocomplete="off">
                    <label for="" class="form-label" >รหัสผ่าน</label >
                </div>
                <div class="input-control" >
                    <input type="password" class="form-input" required autocomplete="off">
                    <label for="" class="form-label" >ยืนยัน รหัสผ่าน</label >
                </div>
            </div>

            <!-- <div class="form-resetpassword">
                <a href="" class="form-resetpassword-text form-a">ลืมรหัสผ่าน</a>
            </div> -->
            <div class="form-button-control">
                <input type="submit" value="สมัครสมาชิก" class="form-button form-button-1">
                <input type="reset" value="ยกเลิก" class="form-button">
            </div>
            <div class="form-footer">
                <p>หากเป็นสมาชิกแล้ว</p>
                <a href="login.php" class="form-footer-a form-a">ไปหน้าล็อกอิน</a>
            </div>
        </form>
    </div>

</body>
</html>