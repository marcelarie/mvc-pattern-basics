<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a href="index.php?request=getAllPatients&id=" class="navbar-brand">COVID MANAGER</a>
        <div class="" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php?request=getAllPatients&id=">Patients</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="index.php?request=getAllResult&id=[]">Tests</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Map</a>
                </li>
            </ul>
        </div>
        <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
    </div>
</nav>
