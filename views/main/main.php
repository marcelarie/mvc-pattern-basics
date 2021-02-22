<!-- This is the main generic view of your application, it's not required to use it -->
<header>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand">Navbar</a>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php?request=getAllPatients&id=">Patients</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="index.php?request=getAllTests&id=">Tests</a>
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
</header>
<form>
    <label>GET ALL EMPLOYEES</label>
    <input name="request" type="text"></input>
    <input name="id" type="text"></input>
    <button type="submit">GET</button>
</form>
