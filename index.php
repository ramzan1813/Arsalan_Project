<!DOCTYPE html>
<html>

<head>
    <title>Marqueee</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    include 'connection.php';

    ?>

    <!-- Navbar (sit on top) -->
    <div class=" w3-top">
        <div class="w3-bar w3-red w3-wide w3-padding ">
            <a href="./" class="w3-bar-item w3-button"><b>MARQUEE</b>&nbsp;Estimator</a>
            <!-- Float links to the right. Hide them on small screens -->
            <div class="w3-right w3-hide-small">
                <a href="#" class="w3-bar-item w3-button">Home</a>
                <a href="#Estimator" class="w3-bar-item w3-button">Estiamtor</a>
                <a href="about.html" class="w3-bar-item w3-button">About</a>
                <a href="contact.html" class="w3-bar-item w3-button">Contact</a>
                <a href="admin.php" class="w3-bar-item w3-button">Login </a>
            </div>
        </div>

    </div>

    <!-- Header -->


    <header class="w3-display-container w3-content w3-wide" style="max-width:1500px;" id="home">
        <img class="marqueee-image" src="./pexels-fu-zhichao-587741.jpg" alt="Marquee" width="1500" height="800">
        <div class="w3-display-middle w3-margin-top w3-center">
            <h1 class="w3-xxlarge w3-text-white"><span class="w3-padding w3-black w3-opacity-min"><b>MARQUEEE</b></span>
                <span class="w3-padding w3-black w3-opacity-min">Estimator</span>
            </h1>
        </div>
    </header>

    <!-- Estimator -->
    <div class=" w3-container w3-padding-32" id="Estimator">
        <h3 class=" w3-center w3-light-gray w3-border-bottom w3-border-light-grey ">Estimator</h3>
    </div>
    <!-- City -->
    <div class="w3-center w3-margin-top">
        <label for="city"> CITY: </label>
        <select class="custom-select col-3" id="city" name="city">
            <option selected value=""> Choose one</option>
            <?php
            $_string = "select DISTINCT City  from City ";
            $_result = mysqli_query($conn, $_string);
            while ($_row = mysqli_fetch_array($_result)) {
            ?>
            <option value="<?php echo $_row["City"] ?> "><?php echo $_row["City"] ?></option>
            <?php
            }
            ?>
        </select>


        <script>
        // Fetching data from databese city table and display in dropdown menu
        async function fetchData(value) {
            const response = await fetch(`http://localhost/FRONtEND/marquee_dropdown.php?value=${value}`);
            const data = await response.json();

            const marquee = document.getElementById('marquee');
            marquee.innerHTML = '<option selected value=""> Choose one</option>';

            data.forEach(item => {
                const option = document.createElement('option');
                option.value = item.value;
                option.text = item.text;
                marquee.appendChild(option);
            });

        }
        // get the value of city dropdown menu and pass it to the function fetchData
        function handleChange(event) {
            const value = event.target.value;
            if (value) {

                fetchData(value);
            }
        }
        // Adding the event listener to the city dropdown menu
        const City = document.getElementById('city');
        City.addEventListener('change', handleChange);
        </script>
        <!-- Marquee Name -->
        <label for="marquee"> MARQUEE: </label>
        <select class="custom-select col-3" id="marquee" name="marquee">
            <option selected value=""> Choose one</option>
        </select>
        <!-- capacity -->
        <label for="Capacity">SITTING CAPACITY</label>
        <select class="custom-select col-3" id="capacity" name="Capacity">
            <option selected value="200">200</option>
            <option value="300">300</option>
            <option value="400"> 400</option>
            <option value="500"> 500</option>
            <option value="600"> 600</option>
            <option value="700"> 700</option>
            <option value="800"> 800</option>
            <option value="900"> 900</option>
            <option value="1000"> 1000</option>

        </select>

        <!-- Menu section -->
        <div class="w3-margin w3-center w3-border-bottom ">
            <p><b>SELECT MENU</b>
            <p>
        </div>

        <!-- CURRY -->
        <div class="w3-margin-bottom w3-center ">
            <label for="CURRY ">CURRY</label>
            <select class="custom-select col-3 " id="curry" name="Curry ">
                <option selected value="0"> Choose one</option>
                <?php
                $_string = "SELECT Price, Dish, Type FROM curry_table";
                $_result = mysqli_query($conn, $_string);
                while ($_row = mysqli_fetch_array($_result)) {
                ?>
                <option value="<?php echo $_row['Price'] ?> "> <?php echo $_row['Dish']; ?></option>

                <?php
                }

                ?>
            </select>

            <!-- RICE -->
            <label for="RICE ">RICE</label>
            <select class="custom-select col-3 " id="rice" name="RICE ">
                <option selected value="0"> Choose one</option>

                <?php
                $_string = "SELECT Price, Dish, Type FROM rice_table";
                $_result = mysqli_query($conn, $_string);
                while ($_row = mysqli_fetch_array($_result)) {
                ?>
                <option value="<?php echo $_row['Price'] ?> "> <?php echo $_row['Dish']; ?></option>

                <?php
                }
                ?>
            </select>

            <div class="w3-center w3-margin-top ">

                <!-- SALAD -->
                <label for="SALAD ">SALAD</label>
                <select class="custom-select col-3 " id="salad" name="SALAD ">
                    <option selected value="0"> Choose one</option>

                    <?php
                    $_string = "SELECT Price, Dish, Type FROM salad_table";
                    $_result = mysqli_query($conn, $_string);
                    while ($_row = mysqli_fetch_array($_result)) {
                    ?>
                    <option value="<?php echo $_row['Price']; ?> "> <?php echo $_row['Dish']; ?></option>

                    <?php
                    }

                    ?>
                </select>

                <!-- SWEET -->
                <label for="Sweet ">SWEET</label>
                <select class="custom-select col-3 " id="Sweet" name="Sweet ">
                    <option selected value="0"> Choose one</option>
                    <?php
                    $_string = "SELECT Price, Dish, Type FROM sweet";
                    $_result = mysqli_query($conn, $_string);
                    while ($_row = mysqli_fetch_array($_result)) {
                    ?>
                    <option value="<?php echo $_row['Price']; ?> "> <?php echo $_row['Dish']; ?></option>

                    <?php
                    }

                    ?>
                </select>

                <!-- BEVERAGE -->
                <label for="BEVERAGE ">BEVERAGE</label>
                <select class="custom-select col-3 " id="baverage" name="BEVERAGE ">
                    <option selected value="0"> Choose one</option>

                    <?php
                    $_string = "SELECT Price, Drink, Type FROM BEVERAGE_table";
                    $_result = mysqli_query($conn, $_string);
                    while ($_row = mysqli_fetch_array($_result)) {
                    ?>
                    <option value="<?php echo $_row['Price']; ?> "> <?php echo $_row['Drink']; ?></option>

                    <?php
                    }

                    ?>
                </select>

                <div class="w3-margin w3-center w3-border-bottom ">
                    <p><b> Select Services</b>
                    <p>
                </div>

                <!-- STAGE DECORACTION -->
                <div class="w3-center w3-margin ">
                    <label for="STAGE DECORACTION ">STAGE DECORACTION</label>
                    <select class="custom-select col-3 " id="stagedecoration" name="stage decoration ">
                        <option selected value="0"> Choose one</option>
                        <?php
                        $_string = "SELECT Price, Service FROM stage_decoraction";
                        $_result = mysqli_query($conn, $_string);
                        while ($_row = mysqli_fetch_array($_result)) {
                        ?>
                        <option value="<?php echo $_row['Price']; ?> "> <?php echo $_row['Service']; ?></option>

                        <?php
                        }

                        ?>
                    </select>

                    <!-- PHOTOGRAPHER -->
                    <label for="PHOTOGRAPHER ">PHOTOGRAPHER</label>
                    <select class="custom-select col-3 " id="PHOTOGRAPHER" name="PHOTOGRAPHER ">
                        <option selected value="0"> Choose one</option>
                        <?php
                        $_string = "SELECT Price, Name FROM photographer";
                        $_result = mysqli_query($conn, $_string);
                        while ($_row = mysqli_fetch_array($_result)) {
                        ?>
                        <option value="<?php echo $_row['Price']; ?> "> <?php echo $_row['Name']; ?></option>

                        <?php
                        }

                        ?>
                    </select>
                </div>

                <!-- BRIDAL DRESS -->
                <div class=" w3-center w3-margin-bottom ">
                    <label for="BRIDAL DRESS ">BRIDAL DRESS</label>
                    <select class="custom-select col-3 " id="BRIDAL_DRESS" name="BRIDAL DRESS ">
                        <option selected value="0"> Choose one</option>
                        <?php
                        $_string = "SELECT Price, Dress FROM bridal_dress";
                        $_result = mysqli_query($conn, $_string);
                        while ($_row = mysqli_fetch_array($_result)) {
                        ?>
                        <option value="<?php echo $_row['Price']; ?> "> <?php echo $_row['Dress']; ?></option>

                        <?php
                        }

                        ?>
                    </select>

                    <!-- RENTAL CAR -->
                    <label for="RENTAL CAR ">RENTAL CAR</label>
                    <select class="custom-select col-3 " id="RENTAL_CAR" name="RENTAL CAR ">
                        <option selected value="0"> Choose one</option>
                        <?php
                        $_string = "SELECT Price, Car FROM rental_car";
                        $_result = mysqli_query($conn, $_string);
                        while ($_row = mysqli_fetch_array($_result)) {
                        ?>
                        <option value="<?php echo $_row['Price']; ?> "> <?php echo $_row['Car']; ?></option>

                        <?php
                        }

                        ?>
                    </select>

                    <button href="javascript:void(0)"
                        onclick="document.getElementById('userprofile').style.display='block'; price()"
                        class=" w3-margin-bottom w3-button w3-right mt-3 btn-primary w3-black ">Check
                        Price</button>

                </div>

            </div>
        </div>
    </div>


    <!-- check price -->
    <div id="userprofile" class="w3-modal">
        <div class="w3-modal-content w3-animate-zoom" style="padding: 32px">
            <div class="w3-container w3-white w3-center">
                <i onclick="document.getElementById('userprofile').style.display='none'"
                    class="fa fa-remove w3-right w3-button w3-transparent w3-xxlarge"></i>
                <br />
                <div class="w3-auto ">


                    <h3 class="display"><b>City : </b>
                        <p id="city_re" class="sub-display"></p>
                    </h3>
                    <h3 class="display"><b>Marquee : </b>
                        <p id="marquee_re" class="sub-display"></p>
                    </h3>
                    <h3 class="display"><b>Siting Capacity : </b>
                        <p id="capacity_re" class="sub-display"></p>
                    </h3>
                    <h3 class="display"><b>Curry : </b>
                        <p id="curry_re" class="sub-display"></p>
                    </h3>
                    <h3 class="display"><b>Rice : </b>
                        <p id="rice_re" class="sub-display"></p>
                    </h3>
                    <h3 class="display"><b>Salad : </b>
                        <p id="salad_re" class="sub-display"></p>
                    </h3>
                    <h3 class="display"><b>Sweet : </b>
                        <p id="sweet_re" class="sub-display"></p>
                    </h3>
                    <h3 class="display"><b>Beverage : </b>
                        <p id="baverage_re" class="sub-display"></p>
                    </h3>
                    <h3 class="display"><b>STAGE DECORACTION : </b>
                        <p id="STAGE_re" class="sub-display"></p>
                    </h3>
                    <h3 class="display"><b>PHOTOGRAPHER : </b>
                        <p id="PHOTOGRAPHER_re" class="sub-display"></p>
                    </h3>
                    <h3 class="display"><b>BRIDAL DRESS : </b>
                        <p id="BRIDAL_re" class="sub-display"></p>
                    </h3>
                    <h3 class="display"><b>RENTAL CAR : </b>
                        <p id="RENTAL_re" class="sub-display"></p>
                    </h3>

                    <h3 class="display"><b>GST : </b>
                        <p id="Tax_re" class="sub-display"></p>
                    </h3>

                    <h3 class="display"><b>Total Price : </b>
                        <p id="price_re" class="sub-display"></p>
                    </h3>
                </div>
                <div>

                </div>
            </div>
        </div>
    </div>

    <!-- Project Section -->
    <!-- Jumbotron -->

    <hr class="my-5 ">

    <!--Carousel Wrapper-->
    <div id="multi-item-example " class="carousel slide carousel-multi-item " data-ride="carousel ">


        <ol class="carousel-indicators ">

            <li data-target="#multi-item-example " data-slide-to="1 " class="active ">
            </li>
            <li data-target="#multi-item-example " data-slide-to="2 "></li>

        </ol>
        <!--/.Indicators-->

        <!--Slides-->
        <div class="carousel-inner " role="listbox ">

            <!--First slide-->
            <div class="carousel-item active ">

                <div class="col-md-3 " style="float:left ">
                    <div class="card mb-2 ">
                        <img class="card-img-top " src="./pexels-nasir-javed-11717790.jpg " alt="Card image cap ">
                        <div class="card-body ">
                            <h4 class="card-title ">Marque to be added</h4>
                            <p class="card-text ">info about marque</p>

                        </div>
                    </div>
                </div>

                <div class="col-md-3 " style="float:left ">
                    <div class="card mb-2 ">
                        <img class="card-img-top " src="./pexels-erik-mclean-9738252.jpg " alt="Card image cap ">
                        <div class="card-body ">
                            <h4 class="card-title ">Marque to be added</h4>
                            <p class="card-text ">info about marque</p>

                        </div>
                    </div>
                </div>

                <div class="col-md-3 " style="float:left ">
                    <div class="card mb-2 ">
                        <img class="card-img " src="./pexels-fu-zhichao-587741.jpg " alt="Card image cap ">
                        <div class="card-body ">
                            <h4 class="card-title ">Marque to be added</h4>
                            <p class="card-text ">info about marque</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 " style="float:left ">
                    <div class="card mb-2 ">
                        <img class="card-img-top " src="./pexels-luis-quintero-13938285.jpg " alt="Card image cap ">
                        <div class="card-body ">
                            <h4 class="card-title ">Marque to be added</h4>
                            <p class="card-text ">info about marque</p>

                        </div>
                    </div>
                </div>

            </div>
            <!--/.First slide-->

            <!--Second slide-->
            <div class="carousel-item ">

                <div class="col-md-3 " style="float:left ">
                    <div class="card mb-2 ">
                        <img class="card-img-top " src="./ss/pexels-andrea-piacquadio-3755706.jpg "
                            alt="Card image cap ">
                        <div class="card-body ">
                            <h4 class="card-title ">Marque to be added</h4>
                            <p class="card-text ">info about marque</p>

                        </div>
                    </div>
                </div>

                <div class="col-md-3 " style="float:left ">
                    <div class="card mb-2 ">
                        <img class="card-img-top " src="./ss/pexels-craig-adderley-2306281.jpg " alt="Card image cap ">
                        <div class="card-body ">
                            <h4 class="card-title ">Marque to be added</h4>
                            <p class="card-text ">info about marque</p>

                        </div>
                    </div>
                </div>

                <div class="col-md-3 " style="float:left ">
                    <div class="card mb-2 ">
                        <img class="card-img-top " src="./ss/pexels-jeremy-wong-1035665.jpg " alt="Card image cap ">
                        <div class="card-body ">
                            <h4 class="card-title ">Marque to be added</h4>
                            <p class="card-text ">info about marque</p>

                        </div>
                    </div>
                </div>

                <div class="col-md-3 " style="float:left ">
                    <div class="card mb-2 ">
                        <img class="card-img-top " src="./ss/pexels-jonathan-borba-9703865.jpg " alt="Card image cap ">
                        <div class="card-body ">
                            <h4 class="card-title ">Marque to be added</h4>
                            <p class="card-text ">info about marque</p>
                        </div>
                    </div>
                </div>

            </div>
            <!--/.Second slide-->



        </div>
        <!--/.Slides-->

    </div>
    <div id="carouselExampleIndicators " class="carousel slide " data-ride="carousel ">
        <ol class="carousel-indicators ">
            <li data-target="#carouselExampleIndicators " data-slide-to="0 " class="active "></li>
            <li data-target="#carouselExampleIndicators " data-slide-to="1 "></li>
            <li data-target="#carouselExampleIndicators " data-slide-to="2 "></li>
        </ol>
        <div class="carousel-inner ">
            <div class="carousel-item active ">
                <img class="d-block w-100 " src="./ss/pexels-tara-winstead-6479595.jpg " width="1480 " height="620 "
                    alt="First slide ">

            </div>
            <div class="carousel-item ">
                <img class="d-block w-100 " src="./images/michu-dang-quang-unItqGJIlRY-unsplash.jpg " width="1480 "
                    height="620 " alt="Second slide ">
            </div>
            <div class="carousel-item ">
                <img class="d-block w-100 " src="./ss/pexels-lukas-574011.jpg " width="1480 " height="620 "
                    alt="Third slide ">
            </div>
        </div>
        <a class="carousel-control-prev " href="#carouselExampleIndicators " role="button " data-slide="prev ">
            <span class="carousel-control-prev-icon " aria-hidden="true "></span>
            <span class="sr-only ">Previous</span>
        </a>
        <a class="carousel-control-next " href="#carouselExampleIndicators " role="button " data-slide="next ">
            <span class="carousel-control-next-icon " aria-hidden="true "></span>
            <span class="sr-only ">Next</span>
        </a>

    </div>

    <!-- Footer -->
    <div>
        <footer class="w3-center w3-red mt-3 padding ">
            <p>Powered by In-TeCh</p>
        </footer>
    </div>

    <!-- Price Calculating -->
    <script>
    function price() {

        var city = document.getElementById('city')
        var marquee = document.getElementById('marquee')
        var capacity = document.getElementById('capacity')
        var curry = document.getElementById('curry')
        var rice = document.getElementById('rice')
        var salad = document.getElementById('salad')
        var sweet = document.getElementById('Sweet')
        var baverage = document.getElementById('baverage')
        var stage = document.getElementById('stagedecoration')
        var PHOTOGRAPHER = document.getElementById('PHOTOGRAPHER')
        var BRIDAL = document.getElementById('BRIDAL_DRESS')
        var RENTAL_CAR = document.getElementById('RENTAL_CAR')
        // city = 'ramxan'
        var city_re = document.getElementById('city_re')
        var marquee_re = document.getElementById('marquee_re')
        var tax_re = document.getElementById('Tax_re')
        var capacity_re = document.getElementById('capacity_re')
        var curry_re = document.getElementById('curry_re')
        var rice_re = document.getElementById('rice_re')
        var salad_re = document.getElementById('salad_re')
        var sweet_re = document.getElementById('sweet_re')
        var baverage_re = document.getElementById('baverage_re')
        var STAGE_re = document.getElementById('STAGE_re')
        var PHOTOGRAPHER_re = document.getElementById('PHOTOGRAPHER_re')
        var BRIDAL_re = document.getElementById('BRIDAL_re')
        var RENTAL_re = document.getElementById('RENTAL_re')
        var price_re = document.getElementById('price_re')
        // console.log(city)
        // converting string to integer
        var price = parseInt(capacity.value) * (parseInt(curry.value) + parseInt(rice.value) + parseInt(salad
            .value) + parseInt(baverage.value) + parseInt(sweet.value))

        // Tax calculation
        let tax = (price * parseFloat(marquee.value)) / 100
        // Additional services price calculation
        price = price + (parseInt(stage.value) + parseInt(BRIDAL.value) + parseInt(RENTAL_CAR.value) + parseInt(
            PHOTOGRAPHER.value))

        // console.log("Price total " + price)

        // console.log("Price total " + price + (price * (paresInet(marquee.value))))
        price_re.innerText = price + tax

        city_re.innerText = city.value
        marquee_re.innerText = marquee.options[marquee.selectedIndex].text
        tax_re.innerText = tax
        capacity_re.innerText = capacity.value
        curry_re.innerText = curry.options[curry.selectedIndex].text
        rice_re.innerText = rice.options[rice.selectedIndex].text
        salad_re.innerText = salad.options[salad.selectedIndex].text
        sweet_re.innerText = sweet.options[sweet.selectedIndex].text
        baverage_re.innerText = baverage.options[baverage.selectedIndex].text
        STAGE_re.innerText = stage.options[stage.selectedIndex].text
        PHOTOGRAPHER_re.innerText = PHOTOGRAPHER.options[PHOTOGRAPHER.selectedIndex].text
        BRIDAL_re.innerText = BRIDAL.options[BRIDAL.selectedIndex].text
        RENTAL_re.innerText = RENTAL_CAR.options[RENTAL_CAR.selectedIndex].text
        //options[city.selectedIndex].text;

    }
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js "
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo " crossorigin="anonymous ">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js "
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1 " crossorigin="anonymous ">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js "
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM " crossorigin="anonymous ">
    </script>

</body>

</html>