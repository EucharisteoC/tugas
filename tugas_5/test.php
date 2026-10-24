<?php
require_once "GymMembership.php";

try {
    $member = new GymMembership("", "Premium", 3);

    echo "Member created successfully!";
} catch (InvalidArgumentException $e) {
    echo "Error: " . $e->getMessage();
}
?>