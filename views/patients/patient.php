<div class="patient">
    <div class="patient-avatar">
        <img src="https://avatars.dicebear.com/4.5/api/<?php echo $patient->gender . '/'. $patient->first_name ?>.svg?w=100&h=100&mood[]=happy" alt="">
    </div>
    <p class="patient-name"><?php echo $patient->first_name ?></p>
    <p class="patient-last_name"><?php echo $patient->last_name ?></p>
    <p class="patient-email"><?php echo $patient->email ?></p>
    <p class="patient-gender"><?php echo $patient->gender ?></p>
    <p class="patient-age"><?php echo $patient->age ?></p>
    <p class="patient-city"><?php echo $patient->city ?></p>
</div>
