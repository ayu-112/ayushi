<!-- 25. Complaint Category Routing
Input complaint type (billing, technical, delivery) → forward to respective department. -->



<?php

$complaint_type = 'billing'; 

switch (($complaint_type)) {
    case 'billing':
        $department = "Billing Department";
        $contact_email = "billing@company.com";
        break;

    case 'technical':
        $department = "Technical Support";
        $contact_email = "techsupport@company.com";
        break;

    case 'delivery':
        $department = "Delivery Department";
        $contact_email = "delivery@company.com";
        break;

    default:
        $department = "General Customer Service";
        $contact_email = "support@company.com";
        break;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Complaint Routing</title>
</head>
<body>
    <h1>Complaint Routing</h1>
    <p>Your complaint has been forwarded to the <strong><?php echo $department; ?></strong>.</p>
    <p>Please contact us at: <a href="mailto:<?php echo $contact_email; ?>"><?php echo $contact_email; ?></a></p>
</body>
</html>
