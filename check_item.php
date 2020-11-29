 <body>
 <br><h2><center> 상품 </center> </h2><hr><br>
 <form method ="POST" value = "form">
 <table align = center width = '600' border = '2' bordercolor = 'blue' cellpadding = '10'>
 <tr>
 <td><B>상품코드</B></td>
 <td><B>상품명</B></td>
 <td><B>가격</B></td>
 <td><B>수량</B></td>
 <td><B></B></td>
 <td><B></B></td>
 <td><B>리뷰보기</B></td>
 </tr>
 <?php
	  $conn = mysqli_connect( 'localhost', 'root', '', 'shop_db' );
      $sql = "SELECT * FROM item;";
      $result = mysqli_query( $conn, $sql);
	  $count = mysqli_num_fields($result);
      while( $row = mysqli_fetch_array( $result ) ) {
        echo "<tr>";
		for($a=0; $a<$count; $a++)
		{
			echo"<td> $row[$a] </td>";
		}
		echo "<td><input type = \"submit\"  value = \"구매 \" formaction=\"purchase.php\"></td>";
		echo "<td><input type = \"submit\"  value = \"담기 \" formaction=\"basket.php\"></td>";
		echo "<td><input type = \"submit\"  value = \"보기 \"></td>";
		echo"</tr>";
      }
	  echo "<td colspan = 4 align = center><input type = \"submit\"  value = \"뒤로가기 \" formaction =\"menu_customer.html\"></td>
            <td colspan = 4 align = center><input type = \"submit\"  value = \"로그아웃 \" formaction =\"menu_customer.html\"></td>";
?>
</table><br>
</body>