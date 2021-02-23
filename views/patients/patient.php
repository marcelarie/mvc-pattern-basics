<?php
    $tag = $edit ? 'button' : 'a';
    $submit = $edit ? 'type=submit' : '';
    
?>

<div class="card text-white bg-dark mb-3 modal-main ">
  <div class="row g-0">
    <div class="modal-img-div col-md-4">
        <img class="card-img modal-img" src="https://avatars.dicebear.com/4.5/api/<?php echo $patient->gender . '/'. $patient->first_name ?>.svg?b=%23e6e6e6&mood[]=happy" alt="">
    </div>
    <div class="col-md-8">
      <div class="card-body modal-patient">
        <form action="../../index.php" id="update-patient" method="POST">
        <<?php echo $tag ?> <?php echo $submit ?> form='update-patient' class="btn btn-success modal-patient__edit float-right" href="index.php?request=getPatient&id=[<?php echo $patient->id_pat . ',' . 1?>]">EDIT</<?php echo $tag; ?>>
            <input name="first_name" class="card-title modal-patient__inputs" value="<?php echo $patient->first_name .' '. $patient->last_name ?>" <?php echo $edit ? '' : 'disabled'; ?>></input><br>
            <span>📧 </span><input name="email"  class="card-text modal-patient__inputs patient-email" value="<?php echo $patient->email ?>" <?php echo $edit ? '' : 'disabled'; ?>></input><br>
            <span>⚥ </span><input name="gender" class="card-text modal-patient__inputs patient-gender" value="<?php echo $patient->gender ?>" <?php echo $edit ? '' : 'disabled'; ?>></input><br>
            <span>🎂 </span><input name="age" class="card-text modal-patient__inputs patient-age" value="<?php echo $patient->age ?>" <?php echo $edit ? '' : 'disabled'; ?>></input><br>
            <span>🏙️ </span><input name="city" class="card-text modal-patient__inputs patient-city" value="<?php echo $patient->city ?>" <?php echo $edit ? '' : 'disabled'; ?>></input>
        </form>
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


