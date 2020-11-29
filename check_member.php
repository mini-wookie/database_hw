 <body>
 <br><h2><center> 회원현황 </center> </h2><hr><br>
 <table align = center width = '600' border = '2' bordercolor = 'blue' cellpadding = '10'>
 <tr>
 <td><B>아이디</B></td>
 <td><B>이름</B></td>
 <td><B>닉네임</B></td>
 <td><B>성별</B></td>
 <td><B>전화번호</B></td>
 <td><B>주소</B></td>
 <td><B>생년월일</B></td>
 <td><B>등급</B></td>
 </tr>
 <?php
	  $conn = mysqli_connect( 'localhost', 'root', '', 'shop_db' );
      $sql = "SELECT * FROM guest;";
      $result = mysqli_query( $conn, $sql);
	  $count = mysqli_num_fields($result);
      while( $row = mysqli_fetch_array( $result ) ) {
        echo "<tr>";
		for($a=0; $a<$count; $a++)
		{
			echo"<td> $row[$a] </td>";
		}
		echo "</tr>";
      }
	  echo "<td colspan = 8 align = center><input type = \"button\"  value = \"뒤로가기 \" onClick=\"history.go(-1)\"></td>";
?>
</table><br>
</body>