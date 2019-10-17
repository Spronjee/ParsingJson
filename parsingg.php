<?php 
class Person
{
    function __construct($ACCOUNT_NUMBER, $CUSTOMER_NAME,$ADDRESS,$CITY,$STATE,$ZIP)
    {
        $this->ACCOUNT_NUMBER = $ACCOUNT_NUMBER;
        $this->CUSTOMER_NAME = $CUSTOMER_NAME;
        $this->ADDRESS = $ADDRESS;
        $this->CITY=$CITY;
        $this->STATE=$STATE;
        $this->ZIP=$ZIP;

    }
	
}

$ACCOUNT_NUMBER="1234567890";
$CUSTOMER_NAME='ACME Products and Services, Inc.';
$ADDRESS="123 Main Street";
$CITY="Albuquerque";
$STATE="NM";
$ZIP="87101-1234";

$person = new Person("1234567890","ACME Products and Services, Inc.","123 Main Street","Albuquerque","NM","87101-1234");
echo json_encode($person);
$data = fopen("Info.txt", "w") or die("не удалось создать файл");
fwrite($data, $_POST['ACCTOUNT_NUMBER'],['CUSTOMER_NAME'],['ADDRESS'],['CITY'],['STATE'],['ZIP']);
fclose($data);


?>

     