<?php
// Temporary script to copy the premium client images to the services directory

$source1 = "C:/xampp/htdocs/sssold/surfaceshield.in/wp-content/uploads/2026/03/ultra-realistic-luxury-dining-room-interior-with-imported-marble-dining-table.jpg";
$source2 = "C:/xampp/htdocs/sssold/surfaceshield.in/wp-content/uploads/2026/03/Luxury-modular-kitchen-with-quartz-countertop.jpg";
$source3 = "C:/xampp/htdocs/sssold/surfaceshield.in/wp-content/uploads/2026/03/luxury-modern-living-room-interior-with-backlit-onyx-marble-wall-panel-glowing-softly.jpg";
$source4 = "C:/xampp/htdocs/sssold/surfaceshield.in/wp-content/uploads/2026/03/Luxury-lounge-interior-with-designer-sofa.jpg";

$dest1 = "assets/images/services/ss-service-2-1.avif";
$dest2 = "assets/images/services/ss-service-2-2.avif";
$dest3 = "assets/images/services/ss-service-2-3.avif";
$dest4 = "assets/images/services/ss-service-2-4.avif";

echo "<h3>Copying premium client service images...</h3>";
echo "Copying Dining: " . (copy($source1, $dest1) ? "<strong style='color:green;'>SUCCESS</strong>" : "<strong style='color:red;'>FAILED</strong>") . "<br>";
echo "Copying Kitchen: " . (copy($source2, $dest2) ? "<strong style='color:green;'>SUCCESS</strong>" : "<strong style='color:red;'>FAILED</strong>") . "<br>";
echo "Copying Wall: " . (copy($source3, $dest3) ? "<strong style='color:green;'>SUCCESS</strong>" : "<strong style='color:red;'>FAILED</strong>") . "<br>";
echo "Copying Sofa: " . (copy($source4, $dest4) ? "<strong style='color:green;'>SUCCESS</strong>" : "<strong style='color:red;'>FAILED</strong>") . "<br>";
?>
