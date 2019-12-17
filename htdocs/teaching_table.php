<!DOCTYPE html>
<html lang="en">
    <head>    
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!-- Bootstrap CSS-->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="https://tiny.cc/linkoone">
        <script src="https://tiny.cc/linkotwo"></script>
        <script src="https://tiny.cc/linkothr"></script>
        <title>Classroom Management System</title>
    </head>

    <body>
        <!--first row of website-->
    <div class="container-fluid">
        <div class="row" style="background-color:#ABABBA;">

            <div class="col">
                <h1 style="font-family:Lucida Calligraphy, Sans-Serif;font-size:28px;text-align:center">Classroom management site</h1>
                
                <a href="aaa.php" style="font-size:20px;text-align:center;">
                    <p>
                        >>back to main page
                    </p>
                </a>

            </div>
            <div class="col">

            </div>
            <div class="col"></div>
            <div class="col"></div>
            <div class="col">
                <br>
                <form action="login_page.php">
                    <button style="font-size:20px;border:none;background-color:lightgreen;
padding:10px;border-radius:11px;font-family:Lucida Calligraphy, Sans-Serif;">Logout</button>
                </form>
            </div>

        </div>
        <div class="row" style="background-color:#FFFFFF;padding-bottom:30px;">
            <div class="col-2" style="background-color:rgb(192, 169, 211);padding-bottom:30px;">

                <h2>Welcome</h2><p style="font-size:20px;">Name Surname</p>

                <div class="row" style="padding-left:16px;">
                    <!-- Trigger the modal with a button -->
                    <button type="button" class="btn btn-info btn-lg" 
data-toggle="modal" data-target="#myModal" 
style="font-family:Lucida Calligraphy, sans-serif;">Add assignment</button>
                </div><br>

                <div class="row" style="padding-left:16px;">
                    <!-- Trigger the modal with a button -->
                    <button type="button" class="btn btn-info btn-lg" 
data-toggle="modal" data-target="#NotmyModal" 
style="font-family:Lucida Calligraphy, sans-serif;">Edit Classroom<br>information</button>
                </div><br>

                <div class="row" style="padding-left:16px;">
                    <form action=student.php>

                        <button class="btn btn-info btn-lg" 
style="font-family:Lucida Calligraphy, sans-serif;">Your student</button>
                    
                    </form>
                </div>
                <br>

                <div class="row" style="padding-left:16px;">
                    <form action=teaching_table.php>

                        <button class="btn btn-info btn-lg" 
style="font-family:Lucida Calligraphy, sans-serif;font-size:15px;">Your teaching table</button>
                    
                    </form>
                </div>
                <br>

                <div class="row" style="padding-left:16px;">
                    <form action=contact.php>

                        <button class="btn btn-info btn-lg" 
style="font-family:Lucida Calligraphy, sans-serif;">Contact teacher</button>
                    
                    </form>
                </div>
                <br>

            </div>
            <div class="col">
                <br>
<img src="upload/schedule (1).png">
<img src="upload/schedule (2).png">
<img src="upload/schedule (3).png">
<img src="upload/schedule (4).png">
<img src="upload/schedule (5).png">
<img src="upload/schedule (6).png">
<img src="upload/schedule (7).png">
<img src="upload/schedule (8).png">
<img src="upload/schedule (9).png">
            </div>
        </div>
        
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">

                    <div class="modal-header">
                        <h1>Add assignment</h1>
                        <button type="button" 
class="close" data-dismiss="modal">close</button>
                    </div>

                    <form action="ccc.php" method="post">
                        <div class="modal-body">
                            ชื่อวิชา<br>
                            <input class="form-control" name="subname" type="text" placeholder="วิชา">
                            คะแนน<br>
                            <input class="form-control" name="type" type="text" placeholder="คะแนนเต็ม">
                            คำอธิบาย<br>
                            <textarea class="form-control" name="text" type="text"></textarea>
                            แหล่งอ้างอิง<br>
                            <input class="form-control" name="score" type="text" 
                            placeholder="ลิงค์เพิ่มเติม, ลิงค์ไฟล์/แหล่งความรู้">
                            ประเภท<br>
                            <input class="form-control" name="file" type="text" placeholder="(งานเดี่ยว, งานกลุ่ม/การบ้าน, ใบงาน, ใบความรู้)">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" 
class="btn btn-default">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="NotmyModal" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">

                    <div class="modal-header">
                        <h1>แก้ไขข้อมูล</h1>
                        <button type="button" 
class="close" data-dismiss="modal">close</button>
                    </div>
                    <form action="bbb.php" method="post">
                        <div class="modal-body">
                            <h1>เพิ่มนักเรียน</h1>
                            <input class="form-control" name="uid" type="text" placeholder="รหัสนักเรียน">
                            <input class="form-control" name="mail" type="text" placeholder="ชื่อ">
                            <input class="form-control" name="pwd" type="text" placeholder="นามสกุล">
                            <input class="form-control" name="pwd-repeat" type="text" placeholder="เบอร์โทรศัพท์">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" 
class="btn btn-default">Submit</button>
                        </div>
                    </form> 
                </div>
            </div>
        </div>

    </body>
</html>