<form method=post name=f1 action='insert.php'>
<input type=hidden name=todo value=submit>

<table align=center border="0" cellspacing="0" >

<tr><td  align=left  >   

Tanggal Lahir: Tanggal<select name=dt >
<?php
for($c=1; $c<31; $c+=1){
echo "<option value='$c'>$c</option>";
}
?>

</select>


</td><td  align=left  >   
Bulan
<select name=month value=''>Select Month</option>
<option value='01'>January</option>
<option value='02'>February</option>
<option value='03'>March</option>
<option value='04'>April</option>
<option value='05'>May</option>
<option value='06'>June</option>
<option value='07'>July</option>
<option value='08'>August</option>
<option value='09'>September</option>
<option value='10'>October</option>
<option value='11'>November</option>
<option value='12'>December</option>
</select>
</td>

<td  align=left  >   
Tahun
<select name=year>
<?php
$d=getdate();
for($b=1990; $b<$d['year']; $b+=1){
echo "<option value='$b'>$b</option>";
}
?>
</select>


<input type=submit value=Submit>
</table>
</form>