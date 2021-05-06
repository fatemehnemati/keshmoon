<!--CREATE TABLE store (-->
<!--id int AUTO_INCREMENT PRIMARY key not null,-->
<!--cityName varchar(255),-->
<!--StoreName varchar(255),-->
<!--Address varchar(255)-->
<!--);-->
<!---->
<!--CREATE TABLE product (-->
<!--id int AUTO_INCREMENT PRIMARY key not null,-->
<!--pName varchar(255),-->
<!--pQuantity int-->
<!--);-->
<!---->
<!--CREATE TABLE connector (-->
<!--id int AUTO_INCREMENT PRIMARY key not null,-->
<!--proId int,-->
<!--FOREIGN KEY (proId) REFERENCES product(id),-->
<!--storeId int,-->
<!--FOREIGN KEY (storeId) REFERENCES store(id)-->
<!--);-->
<?php
$con=mysqli_connect("localhost","root","","keshmoon");

// Check connection
if (mysqli_connect_errno()){
    echo "به دلیل مشکل زیر، اتصال برقرار نشد : <br />" . mysqli_connect_error();
}

// Create table
$sql="CREATE TABLE store(
id int AUTO_INCREMENT PRIMARY key not null,
cityName varchar(255),
StoreName varchar(255),
Address varchar(255)
);";

// Execute query
if (mysqli_query($con,$sql)){
    echo " جدول انبار ساخته شد";
}
else{
    echo "به دلیل مشکل زیر، جدول انبار ساخته نشد : <br />" . mysqli_error($con);
}

// Create table
$sql="CREATE TABLE product (
id int AUTO_INCREMENT PRIMARY key not null,
pName varchar(255),
pQuantity int
);";

// Execute query
if (mysqli_query($con,$sql)){
    echo " جدول محصول ساخته شد";
}
else{
    echo "به دلیل مشکل زیر، جدول محصول ساخته نشد : <br />" . mysqli_error($con);
}

// Create table
$sql="CREATE TABLE connector (
id int AUTO_INCREMENT PRIMARY key not null,
proId int,
FOREIGN KEY (proId) REFERENCES product(id),
storeId int,
FOREIGN KEY (storeId) REFERENCES store(id)
);";

// Execute query

if (mysqli_query($con,$sql)){
    header("location:../index.php?error=success");
}
else{
    echo "به دلیل مشکل زیر، جدول رابط ساخته نشد : <br />" . mysqli_error($con);
}


mysqli_close($con);