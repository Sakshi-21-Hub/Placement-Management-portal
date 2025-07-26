<?php
include('db_connection.php');

$inputFileName = 'uploads/' . $_FILES['file']['name'];

if (file_exists($inputFileName)) {
    require_once 'PHPExcel/IOFactory.php';

    $objPHPExcel = PHPExcel_IOFactory::load($inputFileName);

    $sheet = $objPHPExcel->getSheet(0);
    $highestRow = $sheet->getHighestRow();
    $highestColumn = $sheet->getHighestColumn();

    for ($row = 2; $row <= $highestRow; $row++) {
        $rowData = $sheet->rangeToArray('A' . $row . ':' . $highestColumn . $row, NULL, TRUE, FALSE);

        $name = $rowData[0][0]; // Assuming the name is in column A

        $query ="INSERT INTO company (uname, companyname, pwd,  managerfname, managerlname,address,phone,email,website,status,secque,secans) VALUES ('$uname', '$companyname','$pwd','$managerfname','$managerlname','$address',  '$phone','$email','$website','$status','$secque','$secans');";

        mysqli_query($conn, $query);
    }

    unlink($inputFileName); // Remove the uploaded file after processing
}
