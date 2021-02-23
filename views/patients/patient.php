<?php
?>

<div class="card text-white bg-dark mb-3 modal-main ">
  <div class="row g-0">
    <div class="modal-img-div col-md-4">
        <img class="card-img modal-img" src="https://avatars.dicebear.com/4.5/api/<?php echo $patient->gender . '/'. $patient->first_name ?>.svg?b=%23e6e6e6&mood[]=happy" alt="">
    </div>
    <div class="col-md-8">
      <div class="card-body">
      <h5 class="card-title"><?php echo $patient->first_name .' '. $patient->last_name ?></h5>
        <p class="card-text patient-email">📧 <?php echo $patient->email ?></p>
        <p class="card-text patient-gender">⚥ <?php echo $patient->gender ?></p>
        <p class="card-text patient-age">🎂 <?php echo $patient->age ?></p>
        <p class="card-text patient-city">🏙️ <?php echo $patient->city ?></p>
      </div>
    </div>
  </div>
  <?php
  require_once VIEWS . 'tests/patientTest.php';
  ?>
  <div class="flex">
  <a class="btn btn-danger float-right" href="index.php?request=deletePatient&id=[<?php echo $patient->id_pat; ?>]">REMOVE</a>
  <a class="btn btn-light float-right" href="index.php?request=getAllPatients&id=">BACK</a>
  </div>
</div>


