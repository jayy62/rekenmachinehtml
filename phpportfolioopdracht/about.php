<?php include 'header.php'; ?>

<div class="container mt-4">
    <h1>Over Mij</h1>
    <div class="row">
        <div class="col-md-4">
            <ul class="list-group mt-3">
                <li class="list-group-item">Naam: Jayden Klaverweide</li>
                <li class="list-group-item">E-mail: jay@gmail.com</li>
                <li class="list-group-item">Telefoon: 06123456789</li>
                <li class="list-group-item">Leeftijd: 16 jaar</li>
                <li class="list-group-item"></li>
            </ul>
        </div>
        <div class="col-md-8">
            <h3>Over mij</h3>
            <p>Ik ben Jayden ik studeer momenteel software developer</p>
            <h3>Opleiding</h3>
            <p>vmbo-TL</p>
            <h3>Werkervaring</h3>
            <p>Vakkenvuller, kassa</p>
            <h3>Vaardigheden</h3>
            <ul>
                <li>Programmeertalen: HTML, CSS, JavaScript</li>
                <li>VScode, chatgpt, copilot</li>
            </ul>
            <h3>Hobby’s en interesses</h3>
            <p>Fitness, Gamen, Reizen</p>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>
 
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="home.php">Mijn Portfolio</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="header.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Opdrachten
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="opdracht1.php">Opdracht 1</a></li>
                        <li><a class="dropdown-item" href="opdracht2.php">Opdracht 2</a></li>
                        <li><a class="dropdown-item" href="php3.php">Opdracht 3</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>