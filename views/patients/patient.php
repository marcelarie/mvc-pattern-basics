<div class="card text-white bg-dark mb-3 modal-main ">
  <div class="row g-0">
    <div class="modal-img-div">
        <img class="card-img modal-img" src="https://avatars.dicebear.com/4.5/api/<?php echo $patient->gender . '/'. $patient->first_name ?>.svg?b=%23e6e6e6&mood[]=happy" alt="">
    </div>
    <div class="">
      <div class="card-body">
      <h5 class="card-title"><?php echo $patient->first_name .' '. $patient->last_name ?></h5>
        <p class="card-text patient-email">📧 <?php echo $patient->email ?></p>
        <p class="card-text patient-gender">⚥ <?php echo $patient->gender ?></p>
        <p class="card-text patient-age">🎂 <?php echo $patient->age ?></p>
        <button class="btn btn-light float-right"><a href="index.php?request=getAllPatients&id=">BACK</a></button>
        <p class="card-text patient-city">🏙️ <?php echo $patient->city ?></p>
      </div>
    </div>
  </div>
</div>


