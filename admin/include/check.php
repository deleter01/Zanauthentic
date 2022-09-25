
<?php

      // Dashboard Status
    $sql1 ="SELECT count(id) As total FROM enquiry";
      $result1=mysqli_query($conn,$sql1);
      $values=mysqli_fetch_assoc($result1);
      $enquiry=$values['total'];
    $sql2 ="SELECT count(TourId) As total1 FROM tour ";
      $result2=mysqli_query($conn,$sql2);
      $values=mysqli_fetch_assoc($result2);
      $tour=$values['total1'];
    $sql3 ="SELECT count(PackageId) As total2 FROM packages";
      $result3=mysqli_query($conn,$sql3);
      $values=mysqli_fetch_assoc($result3);
      $package=$values['total2'];
    $sql4 ="SELECT count(BookingId) As total3 FROM booking";
      $result4=mysqli_query($conn,$sql4);
      $values=mysqli_fetch_assoc($result4);
      $booking=$values['total3'];

      // Tour Status

    $sql5 ="SELECT count(TourId) As total4 FROM enquiry";
      $result5=mysqli_query($conn,$sql5);
      $values=mysqli_fetch_assoc($result5);
      $Ttotal=$values['total4'];
    $sql6 ="SELECT count(TourId) As total5 FROM tour ";
      $result6=mysqli_query($conn,$sql6);
      $values=mysqli_fetch_assoc($result2);
      $Tend=$values['total5'];
    $sql7 ="SELECT count(PackageId) As total6 FROM packages";
      $result7=mysqli_query($conn,$sql7);
      $values=mysqli_fetch_assoc($result7);
      $Tactive=$values['total6'];
    $sql8 ="SELECT count(BookingId) As total7 FROM booking";
      $result8=mysqli_query($conn,$sql8);
      $values=mysqli_fetch_assoc($result8);
      $Tinactive=$values['total7'];
      // Package Status
      // Booking Status
      // Enquiry Status
      // Gallary Status
?>

