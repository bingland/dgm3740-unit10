<?php $ptitle='Cabot Cruises - Index'; include '_header.php'; ?>
    <div class="wrapper1200">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://via.placeholder.com/1200x500" class="d-block w-100" alt="..">
                </div>
                <div class="carousel-item">
                    <img src="https://via.placeholder.com/1200x500" class="d-block w-100" alt="..">
                </div>
                <div class="carousel-item">
                    <img src="https://via.placeholder.com/1200x500" class="d-block w-100" alt="..">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <div class="cardArea">
            <div class="card" style="width: 18rem;">
                <img src="https://via.placeholder.com/286x180" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">About Us</h5>
                    <p class="card-text">Learn more about Dreamer Vacations LLC and about our mission to give everybody a great vacation..</p>
                    <a href="aboutus.php" class="btn btn-primary" style="background-color: #6A66F2;">Learn More</a>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="https://via.placeholder.com/286x180" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Destinations</h5>
                    <p class="card-text">See our large list of destinations, and imagine your ideal vacation for an ideal price. Book before they disappear!</p>
                    <a href="/destinations.php" class="btn btn-primary" style="background-color: #6A66F2;">View Destinations</a>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="https://via.placeholder.com/286x180" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Location</h5>
                    <p class="card-text">Have questions about planning your dream vacation? Drop on by into our office and we'll take care of the hard stuff.</p>
                    <a href="/location.php" class="btn btn-primary" style="background-color: #6A66F2;">View Locations</a>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="https://via.placeholder.com/286x180" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Contact</h5>
                    <p class="card-text">Feel free to contact us if you have any questions about the planning process, or are just plain curious about something.</p>
                    <a href="#" class="btn btn-primary" style="background-color: #6A66F2;">Contact Us</a>
                </div>
            </div>
        </div>
        
    </div>
<?php include '_footer.php'; ?>