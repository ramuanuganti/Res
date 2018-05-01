<html>
<body><table cellpadding="6" cellspacing="0"> 
<tr> 
<td width="160">Base Price:</td> 
<td name="price" id="baseprice"><?php echo $row_products['product_price']; ?></td> 
</tr> 
<tr> 
<td width="160">Size Variation:</td> 
<td name="sizeprice" id="sizeprice"></td> 
</tr> 
<tr><td> 
<select name="size" class="small" id ="size" onChange="changePrice()"> 
<option value="25.00">12 size</option> 
<option value="30.00">14 size(+30.00 per unit)</option> 
<option value="40.00">18 size(+40.00 per unit)</option> 
<option value="45.00">20 size(+45.00 per unit)</option> 
<option value="80.00">28 size(+80.00 per unit)</option> 
</select> 
</td><td></td></tr> 
<tr> 
<td width="160">Colour Variation:</td> 
<td name="colourprice" id="colourprice"></td> 
</tr> 
<tr><td> 
<select name="colour" class="small" id ="colour" onChange="changeColour()"> 
  <option value="">Please Select...</option> 
  <?php 
do {   
?><option value="<?php echo $row_colours['variation_price']?>"><?php echo $row_colours['colour_name']?> (+<?php echo $row_colours['variation_price']?>)</option> 
  <?php 
} while ($row_colours = mysql_fetch_assoc($colours)); 
  $rows = mysql_num_rows($colours); 
  if($rows > 0) { 
      mysql_data_seek($colours, 0); 
      $row_colours = mysql_fetch_assoc($colours); 
  } 
?> 
</select> 
</td><td></td></tr> 

<tr> 
<td width="160">Qty:</td> 
<td name="qtyprice" id="qtyprice"></td> 
</tr> 
<tr><td> 
<select name="qty" class="small" id ="qty" onChange="changeQty()"> 
  <option value="">Please Select...</option> 
  <?php 
do {   
?> 
  <option value="<?php echo $row_quantity['product_price']?>"><?php echo $row_quantity['product_qty']?></option> 
  <?php 
} while ($row_quantity = mysql_fetch_assoc($quantity)); 
  $rows = mysql_num_rows($quantity); 
  if($rows > 0) { 
      mysql_data_seek($quantity, 0); 
      $row_quantity = mysql_fetch_assoc($quantity); 
  } 
?> 
</select> 
</td><td></td></tr> 
<tr> 
<td width="160" height="50"><div align="center"><strong>Total Price:</strong></div></td>
<td name="totalprice" id="totalprice"><div align="center"> 
<?php  
$totalprice=$row_products['product_price'] + $sizeprice + $colourprice * $qtyprice;  
?> 

<?php echo $totalprice; ?> 

</div></td> 
</tr> 


</table> 
<script> 
    function changePrice() { 
        document.getElementById('sizeprice').innerHTML=document.getElementById('size').value; 
    } 

    function changeColour() { 
        document.getElementById('colourprice').innerHTML=document.getElementById('colour').value; 
    } 
     
    function changeQty() { 
        document.getElementById('qtyprice').innerHTML=document.getElementById('qty').value; 
    } 
</script>
</body>
</html>