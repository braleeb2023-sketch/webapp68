<?php
    echo "<h2>ผลการคำนวณราคา</h2>";

    $price1 = $_POST['price'];
    echo "ราคาสินค้าต่อชิ้น = $price1<br>";
 
    $values1 = $_POST['values'];
    echo "ราคาสินค้าต่อชิ้น = $values1<br>";
 
    $total = $price1 * $values1;
    echo "ราคารวม = $total<br>";
 
    $vat = $total * (7/100);
    echo "ภาษีมูลค่าเพิ่ม = $vat<br>";
 
    $atotal = $total + $vat;
    echo "ราคาสุทธิ = $atotal";
 
?>