<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <link
            rel="stylesheet"
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
            crossorigin="anonymous"
        />
        <link
            href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600"
            rel="stylesheet"
        />
        <link rel="stylesheet" href="assets/css/style.css" />

        <title>ExploreHelix</title>
    </head>

    <body>
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <div class="row jumbo-top">
                    <div class="col-sm text-center main-jumbo">
                        <img
                            src="assets/imgs/Helix logo3.png"
                            alt="logo"
                            width="150"
                            height="150"
                        />
                        <h1 class="display-4">
                            <span class="caps">E</span>xplore<span
                                class="caps mobile-split"
                                >H</span
                            >elix
                        </h1>
                        <p class="lead">
                            Familiarise yourself with the Urban Sciences
                            Building by taking a tour of the building or get
                            directions to specific rooms using directions that
                            are easy to follow.
                        </p>
                    </div>

                    <div class="col-sm jumbo-img images">
                        <img
                            src="assets/imgs/homepage_mockup.png"
                            alt="homepage"
                            class="image"
                        />
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 empty-container text-center"></div>
                    <div class="col-sm dld text-center">
                        <button type="button" class="btn btn-light btn-lg">
                            Download
                        </button>
                    </div>
                </div>
            </div>

            <nav
                class="navbar navbar-expand-lg navbar-dark"
                id="navigation-bar"
            >
                <button
                    class="navbar-toggler"
                    type="button"
                    data-toggle="collapse"
                    data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                >
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div
                    class="collapse navbar-collapse navigation"
                    id="navbarSupportedContent"
                >
                    <ul
                        class="navbar-nav mx-auto flex-column-reverse flex-md-row"
                    >
                        <li class="nav-item active">
                            <a class="nav-link" href="#"
                                >App
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="buildingInfo.html"
                                >Urban Sciences Building</a
                            >
                        </li>
                    </ul>
                </div>
            </nav>
        </div>

        <div class="container section-1">
            <div class="row">
                <h4>Tour</h4>
            </div>
            <div class="row tour-feature">
                <div class="col-sm-12 col-md-6">
                    <p>
                        The tour feature allows you to see the important parts
                        of the buildings. The tour starts at the entrance and
                        you will be guided to the finish.
                    </p>
                    <p>
                        You can end the tour whenever and you can also take the
                        tour multiple times.
                    </p>
                </div>
                <div class="col-sm-6 col-md-3 images">
                    <img
                        src="assets/imgs/placeholder.jpg"
                        alt="placeholder"
                        class="image"
                    />
                </div>
                <div class="col-sm-6 col-md-3 images">
                    <img
                        src="assets/imgs/placeholder.jpg"
                        alt="placeholder"
                        class="image"
                    />
                </div>
            </div>
        </div>

        <div class="container section-2">
            <div class="row">
                <h4>Search</h4>
            </div>
            <div class="row search-feature">
                <div class="col-sm-12 col-md-6">
                    <p>
                        Using this feature, you can search for a room in the
                        building or select one of the suggested locations.
                    </p>
                    <p>
                        Selecting a room will allow you to see where the room is
                        on the map, further details about the room and get
                        directions to that room.
                    </p>
                </div>
                <div class="col-sm-6 col-md-3 images">
                    <img
                        src="assets/imgs/search-1-mockup.png"
                        alt="search-image"
                        class="image"
                    />
                </div>
                <div class="col-sm-6 col-md-3 images">
                    <img
                        src="assets/imgs/search-2-mockup.png"
                        alt="search-image"
                        class="image"
                    />
                </div>
            </div>
        </div>

        <div class="container section-3">
            <div class="row">
                <h4>Directions</h4>
            </div>
            <div class="row">
                <div class="col-sm">
                    <p>
                        The directions will take you from the entrance of the
                        USB to the selected destination.
                    </p>
                </div>
                <div class="col-sm">
                    <p>
                        You can then set your own start location simply by
                        dropping a pin where you are or by using the locate me
                        feature.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm">
                    <p>
                        The directions will be displayed on the map using a line
                        and an arrow guiding you to the final location.
                    </p>
                </div>
                <div class="col-sm">
                    <p>
                        The directions will always be the shortest path from the
                        start location to the finish.
                    </p>
                </div>
            </div>
            <div class="row images">
                <img
                    src="assets/imgs/direction-1-mockup.png"
                    alt="directions-image"
                    class="image"
                />
                <img
                    src="assets/imgs/direction-3-mockup.png"
                    alt="directions-image"
                    class="image"
                />
                <img
                    src="assets/imgs/direction-2-mockup.png"
                    alt="directions-image"
                    class="image"
                />
            </div>
        </div>

        <script
            src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"
        ></script>
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"
        ></script>
        <script
            src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"
        ></script>
        <script src="assets/js/app.js"></script>
    </body>
</html>
