
<div class="btn-toolbar mb-3" role="toolbar" aria-label="Toolbar with button groups">
    <div class="input-group">
        <div class="input-group-text" id="btnGroupAddon">Filter by result</div>
    </div>
    <div class="btn-group me-2" role="group" aria-label="First group">
        <a href="index.php?request=getAllResult&id=[]" class="btn btn-outline-primary">All</a>
        <a href='index.php?request=getAllResult&id=["positive"]' class="btn btn-outline-danger">Positive</a>
        <a href='index.php?request=getAllResult&id=["negative"]' class="btn btn-outline-success">Negative</a>
    </div>
    <div class="input-group">
        <div class="input-group-text" id="btnGroupAddon">Filter by test type</div>
    </div>
    <div class="btn-group me-2" role="group" aria-label="Second group">
        <a href='index.php?request=getAllType&id=["PCR"]' class="btn btn-outline-primary">PCR</a>
        <a href='index.php?request=getAllType&id=["Test%20Antígeno"]' class="btn btn-outline-primary">Test Antígeno</a>
        <a href='index.php?request=getAllType&id=["Test%20Anticuerpo"]' class="btn btn-outline-primary">Test Anticuerpo</a>
    </div>
</div>