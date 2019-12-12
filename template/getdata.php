<?php
        /*
                เป็นการเชื่อมต่อกับฐานข้อมูลเเละดึงข้อมูลจากฐานข้อมูลนักเรียน
        */
        $connect=mysqli_connect("localhost", "root", "", "studentdata") or die("ไม่สามารถเชื่อมต่อฐานข้อมูลนักเรียนได้");
        $sql ="select * from student";

        mysqli_set_charset($connect, "utf8");
        //ใช้งานคำสั่ง sql
        $result=mysqli_query($connect, $sql); // ตัวเเปรที่เก็บผลการเชื่อมต่อ
        $record= mysqli_fetch_array($result, MYSQLI_NUM) //ข้อมูลที่เชื่อมต่อ เป็นอาร์เรย์
?>

<?php
        /*
                เป็นการเชื่อมต่อกับฐานข้อมูลเเละดึงข้อมูลจากฐานข้อมูลอาจาร์ย
        */
        $connectteach=mysqli_connect("localhost", "root", "", "teacherdb") or die("ไม่สามารถเชื่อมต่อฐานข้อมูลนักเรียนได้");
        $sqlteach ="select * from teacherdb";

        mysqli_set_charset($connectteach, "utf8");
        //ใช้งานคำสั่ง sql
        $resultteacher=mysqli_query($connectteach, $sqlteach); // ตัวเเปรที่เก็บผลการเชื่อมต่อ
        $recordteacher= mysqli_fetch_array($resultteacher, MYSQLI_NUM); //ข้อมูลที่เชื่อมต่อ เป็นอาร์เรย์
?>
