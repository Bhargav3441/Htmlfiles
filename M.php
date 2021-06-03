<html>
<body>
<h1 style="text-align: center; background-color:chartreuse"> Enter Students Detail</h1>
<form action="t.php" method="POST" >
<table style="margin-left:40%; " border='10'  >
<tr> 
<td>FIRST-NAME : </td>
<td> <input type="text" name="txty1" required /> </td>
</tr>
<tr> 
<td>LAST-NAME : </td>
<td> <input type="text" name="txty2" required /> </td>
</tr>
<tr> 
<td>Contact-Number : </td>
<td> <input type="tel" name="txty3" maxlength="10" required /> </td>
</tr>
<tr> 
<td>E-MAIL : </td>
<td> <input type="email" name="txyt4"  required /> </td>
</tr>
<tr> 
<td>STD : </td>
<td> <input type="number" name="txty5"  min='1' max='12'  required /> </td>
</tr>
<td> Roll No : </td>
<td> <input type="number" name="ni"  min='1' max='120'  required /> </td>
</tr>

</table>

<h1 style="text-align: center; background-color:chartreuse"> Enter Marks</h1>

<table style="margin-left:43%;"  border='10' >
<tr> 
<td>1. English    : </td>
<td> <input type="number" name="txt7"  min='1' max='100'  required /> </td>
</tr>
<tr> 
<td>2. Maths : </td>
<td> <input type="number" name="txt8"   min='1' max='100' required /> </td>
</tr>
<tr> 
<td>3. Science : </td>
<td> <input type="number" name="txt9"   min='1' max='100'   required /> </td>
</tr>
<tr> 
<td>4. Computer : </td>
<td> <input type="number" name="txt10"   min='1' max='100'  required /> </td>
</tr>
<tr> 
<td>5. S.S : </td>
<td> <input type="number" name="txt11"  min='1' max='100'  required /> </td>
</tr>
<table style="margin-left:36%; ">
 <tr >
 <td>
 <button style="margin-left: 177%; text-align:center; padding: 3px; background-color: #4CAF50">
 <input type="submit" value="Submit">
 </td>
 <td>
 <button style="margin-left: 278%; text-align:center; padding: 3px; background-color: #4CAF50">
 <input type="Reset" value="Reset">
</td>
 </button>
 </button>
</tr>
</table>
</form>
</body>
</html> 
 27  loops.php 
@@ -0,0 +1,27 @@
<?php
echo"<h1>LOOPS:<br/></h1>";
echo"<h1>1 for Loop:<br/></h1>";
echo"<table border='5'>";
for($i=0;$i<10;$i++){
echo"<tr>";
if($i%2==0){
    echo"<td bgcolor='orange'>$i</td>";
}else{
    echo"<td bgcolor='red'>$i</td>";
}
echo " </tr>";
}
echo " </table>";
echo"<h1><br/>2 while Loop:<br/></h1>";
$i=1;
while($i<20){
    echo"$i";
    $i++;
}
echo"<h1><br/>3 DO..while Loop:<br/></h1>";
$j=0;
DO{
echo"$j";
$j++;
}while($j<30)
?> 