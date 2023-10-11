<?php

include 'autoloader.php';

use app\Classes\Owner;
use app\Classes\LuxuryApartment;
use app\Classes\StandardApartment;


$standardApartment = new StandardApartment("501", 1800, 2);

$luxuryApartment = new LuxuryApartment("502", 3000, 3, ["Swimming Pool", "Gym", "Parking"] );

$standardApartment->setBalcony(true);
$standardApartment->calculateRent();

$owner1 = new Owner("Muhammad", $standardApartment);
$owner2 = new Owner("Ohee", $luxuryApartment);

echo "Standard Apartment Details:\n";
$standardApartment->displayApartmentDetails();

echo "\nLuxury Apartment Details:\n";
$luxuryApartment->displayApartmentDetails();
echo "Amenities: " . $luxuryApartment->getAmenities() . "\n";

echo "\nOwner Details:\n";
$owner1->displayOwnerDetails();
$owner2->displayOwnerDetails();

?>