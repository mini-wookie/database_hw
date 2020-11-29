<?php
   echo "<h3> mysqli_query() 함수를 이용한 테이블 생성</h3>";
   echo "<hr><br>"; 

   $connect = mysqli_connect('localhost', 'root', '');
   $db = mysqli_select_db ($connect, 'shop_db'); 


   
$sql1 = "CREATE TABLE guest ( ";
   $sql1 = $sql1. "user_id varchar(255) NOT NULL PRIMARY KEY, ";
   $sql1 = $sql1. "user_name varchar(255) NULL, ";
   $sql1 = $sql1. "user_nick varchar(255) NULL, ";
   $sql1 = $sql1. "user_sex varchar(255) NULL, ";
   $sql1 = $sql1. "user_pn int NULL, ";
   $sql1 = $sql1. "user_addr varchar(255) NULL, ";
   $sql1 = $sql1. "user_num int NULL, ";
   $sql1 = $sql1. "user_birth int NULL, ";
   $sql1 = $sql1. "user_purch varchar(255) NULL) ";
   $sql1 = $sql1. "default charset = utf8 "; 

   $result = mysqli_query($connect, $sql1); 

$sql2 = "CREATE TABLE satisfaction ( ";
   $sql2 = $sql2. "review_num int NOT NULL PRIMARY KEY, ";
   $sql2 = $sql2. "review_date int NULL, ";
   $sql2 = $sql2. "review_star_pt int NULL, ";
   $sql2 = $sql2. "review_txt varchar(255) NULL) ";
   $sql2 = $sql2. "default charset = utf8"; 

   $result = mysqli_query($connect, $sql2); 

$sql3 = "CREATE TABLE order  ( ";
   $sql3 = $sql3. "order_num int NOT NULL PRIMARY KEY, ";
   $sql3 = $sql3. "user_id varchar(255) NOT NULL, ";
   $sql3 = $sql3. "item_code int NOT NULL, ";
   $sql3 = $sql3. "order_date int NULL, ";
   $sql3 = $sql3. "order_cost int NULL, ";
   $sql3 = $sql3. "order_quantity int NULL, ";
   $sql3 = $sql3. "order_payment varchar(255) NULL, ";
   $sql3 = $sql3. "Foreign Key (user_id) References guest(user_id) ON UPDATE CASCADE, ";
   $sql3 = $sql3. "Foreign Key (item_code) References item(item_code) ON UPDATE CASCADE) ";
   $sql3 = $sql3. "default charset = utf8 "; 

   $result = mysqli_query($connect, $sql3); 

$sql4 = "CREATE TABLE item  ( ";
   $sql4 = $sql4. "item_code int NOT NULL PRIMARY KEY, ";
   $sql4 = $sql4. "item_quantity int NULL, ";
   $sql4 = $sql4. "item_cost int NULL, ";
   $sql4 = $sql4. "item_name varchar(255) NULL) ";
   $sql4 = $sql4. "default charset = utf8 "; 

   $result = mysqli_query($connect, $sql4); 

$sql5 = "CREATE TABLE supply_comp  ( ";
   $sql5 = $sql5. "supply_comp_num int NOT NULL PRIMARY KEY, ";
   $sql5 = $sql5. "supply_comp_bankcode int NULL, ";
   $sql5 = $sql5. "supply_comp_holder varchar(255) NULL, ";
   $sql5 = $sql5. "supply_comp_pn int NULL, ";
   $sql5 = $sql5. "supply_comp_name varchar(255) NULL, ";
   $sql5 = $sql5. "supply_comp_trnum int NULL, ";
   $sql5 = $sql5. "supply_comp_businessnum int NULL, ";
   $sql5 = $sql5. "supply_comp_addr varchar(255) NULL) ";
   $sql5 = $sql5. "default charset = utf8 ";
   $result = mysqli_query($connect, $sql5); 

$sql6 = "CREATE TABLE ship_comp  ( ";
   $sql6 = $sql6. "ship_comp_num int NOT NULL PRIMARY KEY, ";
   $sql6 = $sql6. "ship_comp_bankcode int NULL, ";
   $sql6 = $sql6. "ship_comp_name varchar(255) NULL, ";
   $sql6 = $sql6. "ship_comp_addr varchar(255) NULL, ";
   $sql6 = $sql6. "ship_comp_pn int NULL, ";
   $sql6 = $sql6. "ship_comp_account int NULL, ";
   $sql6 = $sql6. "ship_comp_holder varchar(255) NULL) ";
   $sql6 = $sql6. "default charset = utf8 ";
   $result = mysqli_query($connect, $sql6); 

$sql7 = "CREATE TABLE ship_guest  ( ";
   $sql7 = $sql7. "ship_guest_pn int NULL, ";
   $sql7 = $sql7. "ship_guest_addr varchar(255) NULL, ";
   $sql7 = $sql7. "ship_guest_name varchar(255) NULL, ";
   $sql7 = $sql7. "default charset = utf8 ";
   $result = mysqli_query($connect, $sql7); 

$sql8 = "CREATE TABLE warehouse  ( ";
   $sql8 = $sql8. "ware_code int NOT NULL PRIMARY KEY) ";
   $sql8 = $sql8. "default charset = utf8 "; 

$sql9 = "CREATE TABLE storage  ( ";
   $sql9 = $sql9. "item_code int NOT NULL, ";
   $sql9 = $sql9. "ware_code int NOT NULL, ";
   $sql9 = $sql9. "Foreign Key (item_code) References item(item_code) ON UPDATE CASCADE, ";
   $sql9 = $sql9. "Foreign Key (ware_code) References warehouse(ware_code) ON UPDATE CASCADE) ";
   $sql9 = $sql9. "default charset = utf8 "; 

$sql10 = "CREATE TABLE supply  ( ";
   $sql10 = $sql10. "item_code int NOT NULL, ";
   $sql10 = $sql10. "supply_comp_num int NOT NULL, ";
   $sql10 = $sql10. "supply_date int NULL, ";
   $sql10 = $sql10. "supply_quantity int NULL, ";
   $sql10 = $sql10. "Foreign Key (item_code) References item(item_code) ON UPDATE CASCADE, ";
   $sql10 = $sql10. "Foreign Key (supply_comp_num) References supply_comp(supply_comp_num) ON UPDATE CASCADE) ";
   $sql10 = $sql10. "default charset = utf8 "; 

$sql11 = "CREATE TABLE ship  ( ";
   $sql11 = $sql11. "ship_comp_num int NOT NULL, ";
   $sql11 = $sql11. "item_code int NOT NULL, ";
   $sql11 = $sql11. "ship_start int NULL, ";
   $sql11 = $sql11. "ship_arrival int NULL, ";
   $sql11 = $sql11. "Foreign Key (ship_comp_num) References ship_comp(ship_comp_num) ON UPDATE CASCADE, ";
   $sql11 = $sql11. "Foreign Key (item_code) References item(item_code) ON UPDATE CASCADE) ";
   $sql11 = $sql11. "default charset = utf8 "; 

$sql12 = "CREATE TABLE box  ( ";
   $sql12 = $sql12. "user_id varchar(255) NOT NULL, ";
   $sql12 = $sql12. "item_code int NOT NULL, ";
   $sql12 = $sql12. "box_cost int NULL, ";
   $sql12 = $sql12. "box_quantity int NULL, ";
   $sql12 = $sql12. "Foreign Key (user_id) References guest(user_id) ON UPDATE CASCADE, ";
   $sql12 = $sql12. "Foreign Key (item_code) References item(item_code) ON UPDATE CASCADE) ";
   $sql12 = $sql12. "default charset = utf8 "; 

$sql13 = "CREATE TABLE offer  ( ";
   $sql13 = $sql13. "order_num int NOT NULL, ";
   $sql13 = $sql13. "review_num int NOT NULL, ";
   $sql13 = $sql13. "Foreign Key (order_num) References order(order_num) ON UPDATE CASCADE, ";
   $sql13 = $sql13. "Foreign Key (review_num) References satisfaction(review_num) ON UPDATE CASCADE) ";
   $sql13 = $sql13. "default charset = utf8 "; 

?>