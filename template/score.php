<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!--My CSS-->
    <link rel="stylesheet" href="\assets\style.css">
    <title>Class Management</title>
</head>

<body>
    <?php
    require "./getdata.php";
    ?>
    <!--Header-->
    <div class="container-fluid">
        <div class="row" id="header">
            <div class="col-3 bc">
                <h2>Funny class</h2>
            </div>
            <div class="col">
                <div class="row">
                    <div class="col-9 bc">
                        <h2>Segment</h2>
                    </div>
                    <div class="col">
                        <div class="row align-items-center" id="loginpanel">
                            <div class="col">
                                Your id is : <?php
                                echo $record[0];
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Left bar-->
    <div class="row page menu">
        <div class="col-2 page">
            <h2>Welcome</h2>
            <div class="idblock inner_left_bar">
            <?php
                echo $record[1]." ".$record[2];
            ?>
            </div>
            <hr>
            <a href="\template\main.php" class="inner_left_bar btn btn-secondary menubutton">Home</a>
            <hr>
            <a href="\template\member.php" class="inner_left_bar btn btn-secondary menubutton">สมาชิกในห้องของคุณ</a>
            <hr>
            <a href="\template\tarang.php" class="inner_left_bar btn btn-secondary menubutton">ตารางสอนของคุณ</a>
            <hr>
            <a href="\template\score.php" class="inner_left_bar btn btn-secondary menubutton">คะเเนน</a>
            <hr>    
            <button type="button" class="inner_left_bar btn btn-secondary menubutton" data-toggle="modal" data-target="#homeworkmodal">เพิ่มข้อมูล</button>
            <hr>
            <button type="button" class="btn btn-secondary menubutton">ค้นหา</button>
            <hr>
            <button type="button" class="btn btn-secondary menubutton">ติดต่ออาจารย์</button>
        </div>
        <div class="col" id="blankp">
            <div class="container contentbox" id="headertop">
                <h1>This is your score</h1>
                <div class="row">
                    <div class="col-6">
                    <?php
                        echo "<h4>".$record[1]." ".$record[2]."</h4>";
                        ?>
                    </div>
                    <div class="col-6">
                        <h4>ID : <?php
                        echo $record[0];?></h4>
                    </div>
                </div>
                <table class="table">
                    <thead>
                        <th  scope="col" class="headtable"> รหัสวิชา</th>
                        <th  scope="col" class="headtable"> ชื่อวิชา</th>
                        <th  scope="col" class="headtable"> ครูผู้สอน</th>
                    </thead>
                    <?php
                    if($result){
                        while($recordsub= mysqli_fetch_array($resultsub, MYSQLI_NUM)){
                            echo "
                            <tbody>
                            <th>$recordsub[0]</th>
                            <th>$recordsub[1]</th>
                            <th>$recordsub[2]</th>
                            </tbody>";
                        }
                    }else{
                        echo "ERROR!";
                    }    
                    ?>
                </table>
            </div>
            <div class="container contentbox bc" id="headerbot">
                <h1>Welcome to Classroom management</h1>
            </div>
        </div>
    </div>

<!-- Modal -->
<div class="modal fade" id="homeworkmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">เพิ่มข้อมูล</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="adddata.php" method="post" action="main.php">
        ชื่อวิชา <br>
        <input class="form-control" type="text" placeholder="วิชา" name="subname">
        ประเภท <br>
        <input class="form-control" type="text" placeholder="งานกลุ่ม, ใบงาน, การบ้าน, ใบความรู้" name="type">
        คะเเนน <br>
        <input class="form-control" type="text" placeholder="คะเเนน" name="score">
        คำอธิบาย <br>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="text"></textarea>
        <div class="form-group">
        <label for="exampleFormControlFile1" name="file">ลิ้งค์เพิ่มเติม</label>
        <input class="form-control" type="text" placeholder="ลิ้งค์ไฟล์ หรือ เเหล่งอ้างอิงอื่นๆ" name="reference">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
        <button type="submit" class="btn btn-primary">เพิ่มการบ้าน</button>
      </div>
      </form>
    </div>
  </div>

    <!--Javascript-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>