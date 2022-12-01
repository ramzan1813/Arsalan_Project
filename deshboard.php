<!doctype html>
<html lang="en">

    <head>
        <title>Desboard</title>
        <link rel="stylesheet" href="style.css">
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    </head>

    <body>
        <?php
    require('connection.php');
    require('session.php');

    ?>
        <div class=" w3-top">
            <div class="w3-bar w3-red w3-wide w3-padding ">
                <a href="./" class="w3-bar-item w3-button"><b>MARQUEE</b>&nbsp;Estimator</a>
                <!-- Float links to the right. Hide them on small screens -->
                <div class="w3-right w3-hide-small">
                    <a href="index.php" class="w3-bar-item w3-button">Home</a>
                    <a href="index.php" class="w3-bar-item w3-button">Estiamtor</a>
                    <a href="about.html" class="w3-bar-item w3-button">About</a>
                    <a href="contact.html" class="w3-bar-item w3-button">Contact</a>
                    <a href="logout.php" class="w3-bar-item w3-button">
                        <div class="w3-col s4">
                            <img src="images/kkj.png" class="w3-circle " style="width:20px">
                        </div>
                    </a>
                </div>
            </div>

        </div>

        <div class="w3-padding">

            <!-- Left -->
            <div class="w3-half w3-padding-64 w3-margin-top w3-white w3-container">

                <!-- beverage_table     -->

                <div class="w3-padding ">
                    <h3 class="w3-">Beverage</h3>

                    <table class="w3-table w3-table-all w3-hoverable w3-margin-top w3-centered w3-striped ">
                        <thead>
                            <tr class="w3-dark-gray">
                                <th> Id</th>
                                <th> Drink</th>
                                <th> Price</th>
                                <th> Type</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <?php
                    $query = "select *from beverage_table";

                    $result = mysqli_query($conn, $query);

                    while ($row = mysqli_fetch_array($result)) {
                    ?>
                        <tr>
                            <td><?php echo $row['Id'] ?></td>
                            <td><?php echo $row['Drink'] ?></td>
                            <td><?php echo $row['Price'] ?></td>
                            <td><?php echo $row['Type'] ?></td>
                            <td><button href="javascript:void(0)"
                                    onclick="document.getElementById('userprofile').style.display='block'; changed('<?php echo $row['Drink']; ?>','<?php echo $row['Id'] ?>','Beverage','<?php echo $row['Price'] ?>','beverage_table')"
                                    class="w3-blue w3-button ">Edit</button></td>
                            <td>
                                <button href="javascript:void(0)"
                                    onclick="document.getElementById('delete_record').style.display='block'; deleteRecond('<?php echo $row['Id'] ?>','beverage_table')"
                                    class="w3-red w3-button ">Delete</button>
                            </td>
                        </tr>
                        <?php
                    }

                    ?>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><button href="javascript:void(0)"
                                onclick="document.getElementById('newrecord').style.display='block'; newrecord('beverage_table')"
                                class="w3-green w3-button ">Add New</i></button></td>
                    </table>
                </div>

                <!-- City -->

                <div class="w3-padding">
                    <h3>City</h3>

                    <table class="w3-table w3-table-all w3-hoverable w3-margin-top w3-centered w3-striped ">
                        <thead>
                            <tr class="w3-dark-gray">
                                <th> Id</th>
                                <th> City</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <?php
                    $query = "select *from city";

                    $result = mysqli_query($conn, $query);

                    while ($row = mysqli_fetch_array($result)) {
                    ?>
                        <tr>
                            <td><?php echo $row['Id'] ?></td>
                            <td><?php echo $row['City'] ?></td>
                            <td><button href="javascript:void(0)"
                                    onclick="document.getElementById('userprofile').style.display='block'; change('<?php echo $row['City']; ?>','<?php echo $row['Id'] ?>','City')"
                                    class="w3-blue w3-button ">Edit</i></button></td>
                            <td>
                                <button href="javascript:void(0)"
                                    onclick="document.getElementById('delete_record').style.display='block'; deleteRecond('<?php echo $row['Id'] ?>','city')"
                                    class="w3-red w3-button ">Delete</button>
                            </td>
                        </tr>
                        <?php
                    }

                    ?>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><button href="javascript:void(0)"
                                onclick="document.getElementById('newrecord').style.display='block'; newrecord('City')"
                                class="w3-green w3-button ">Add New</i></button></td>

                    </table>
                </div>
                <!-- bridal_dress -->

                <div class="w3-padding">
                    <h3>Bridal Dress</h3>
                    <table class="w3-table w3-table-all w3-hoverable w3-margin-top w3-centered w3-striped ">
                        <thead>
                            <tr class="w3-dark-gray">
                                <th> Id</th>
                                <th> Dress</th>
                                <th> Price</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <?php
                    $query = "select *from bridal_dress";

                    $result = mysqli_query($conn, $query);

                    while ($row = mysqli_fetch_array($result)) {
                    ?>
                        <tr>
                            <td><?php echo $row['Id'] ?></td>
                            <td><?php echo $row['Dress'] ?></td>
                            <td><?php echo $row['Price'] ?></td>
                            <td><button href="javascript:void(0)"
                                    onclick="document.getElementById('userprofile').style.display='block'; changed('<?php echo $row['Dress']; ?>','<?php echo $row['Id'] ?>','Dress','<?php echo $row['Price'] ?>','bridal_dress')"
                                    class="w3-blue w3-button ">Edit</button></td>
                            <td>
                                <button href="javascript:void(0)"
                                    onclick="document.getElementById('delete_record').style.display='block'; deleteRecond('<?php echo $row['Id'] ?>','bridal_dress')"
                                    class="w3-red w3-button ">Delete</button>
                            </td>
                        </tr>
                        <?php
                    }

                    ?>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><button href="javascript:void(0)"
                                onclick="document.getElementById('newrecord').style.display='block'; newrecord('bridal_dress')"
                                class="w3-green w3-button ">Add New</i></button></td>
                    </table>
                </div>

                <!-- photographer -->

                <div class="w3-padding">
                    <h3>Photographer</h3>
                    <table class="w3-table w3-table-all w3-hoverable w3-margin-top w3-centered w3-striped ">
                        <thead>
                            <tr class="w3-dark-gray">
                                <th> Id</th>
                                <th> Name</th>
                                <th> Price</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <?php
                    $query = "select *from photographer";

                    $result = mysqli_query($conn, $query);

                    while ($row = mysqli_fetch_array($result)) {
                    ?>
                        <tr>
                            <td><?php echo $row['Id'] ?></td>
                            <td><?php echo $row['Name'] ?></td>
                            <td><?php echo $row['Price'] ?></td>
                            <td><button href="javascript:void(0)"
                                    onclick="document.getElementById('userprofile').style.display='block'; changed('<?php echo $row['Name']; ?>','<?php echo $row['Id'] ?>','Name','<?php echo $row['Price'] ?>','photographer')"
                                    class="w3-blue w3-button ">Edit</button></td>
                            <td>
                                <button href="javascript:void(0)"
                                    onclick="document.getElementById('delete_record').style.display='block'; deleteRecond('<?php echo $row['Id'] ?>','photographer')"
                                    class="w3-red w3-button ">Delete</button>
                            </td>
                        </tr>
                        <?php
                    }

                    ?>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><button href="javascript:void(0)"
                                onclick="document.getElementById('newrecord').style.display='block'; newrecord('photographer')"
                                class="w3-green w3-button ">Add New</i></button></td>

                    </table>
                </div>

                <!-- stage_decoraction -->

                <div class="w3-padding">
                    <h3>Stage Decoraction</h3>
                    <table class="w3-table w3-table-all w3-hoverable w3-margin-top w3-centered w3-striped ">
                        <thead>
                            <tr class="w3-dark-gray">
                                <th> Id</th>
                                <th> Service</th>
                                <th> Price</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <?php
                    $query = "select *from stage_decoraction";

                    $result = mysqli_query($conn, $query);

                    while ($row = mysqli_fetch_array($result)) {
                    ?>
                        <tr>
                            <td><?php echo $row['Id'] ?></td>
                            <td><?php echo $row['Service'] ?></td>
                            <td><?php echo $row['Price'] ?></td>
                            <td><button href="javascript:void(0)"
                                    onclick="document.getElementById('userprofile').style.display='block'; changed('<?php echo $row['Service']; ?>','<?php echo $row['Id'] ?>','Service','<?php echo $row['Price'] ?>','stage_decoraction')"
                                    class="w3-blue w3-button ">Edit</button></td>
                            <td>
                                <button href="javascript:void(0)"
                                    onclick="document.getElementById('delete_record').style.display='block'; deleteRecond('<?php echo $row['Id'] ?>','stage_decoraction')"
                                    class="w3-red w3-button ">Delete</button>
                            </td>
                        </tr>
                        <?php
                    }

                    ?>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><button href="javascript:void(0)"
                                onclick="document.getElementById('newrecord').style.display='block'; newrecord('stage_decoraction')"
                                class="w3-green w3-button ">Add New</i></button></td>
                    </table>
                </div>

                <!-- rental_car -->

                <div class="w3-padding">
                    <h3>Rental Car</h3>
                    <table class="w3-table w3-table-all w3-hoverable w3-margin-top w3-centered w3-striped ">
                        <thead>
                            <tr class="w3-dark-gray">
                                <th> Id</th>
                                <th> Car</th>
                                <th> Price</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <?php
                    $query = "select *from rental_car";

                    $result = mysqli_query($conn, $query);

                    while ($row = mysqli_fetch_array($result)) {
                    ?>
                        <tr>
                            <td><?php echo $row['Id'] ?></td>
                            <td><?php echo $row['Car'] ?></td>
                            <td><?php echo $row['Price'] ?></td>
                            <td><button href="javascript:void(0)"
                                    onclick="document.getElementById('userprofile').style.display='block'; changed('<?php echo $row['Car']; ?>','<?php echo $row['Id'] ?>','Car','<?php echo $row['Price'] ?>','rental_car')"
                                    class="w3-blue w3-button ">Edit</button></td>
                            <td>
                                <button href="javascript:void(0)"
                                    onclick="document.getElementById('delete_record').style.display='block'; deleteRecond('<?php echo $row['Id'] ?>','rental_car')"
                                    class="w3-red w3-button ">Delete</button>
                            </td>
                        </tr>
                        <?php
                    }

                    ?>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><button href="javascript:void(0)"
                                onclick="document.getElementById('newrecord').style.display='block'; newrecord('rental_car')"
                                class="w3-green w3-button ">Add New</i></button></td>
                    </table>
                </div>

            </div>

            <!-- Right -->

            <div class="w3-half w3-padding-64 w3-margin-top w3-container ">

                <!-- Rice -->

                <div class="w3-padding">
                    <h3>Rice</h3>
                    <table class="w3-table w3-table-all w3-hoverable w3-margin-top w3-centered w3-striped ">
                        <thead>
                            <tr class="w3-dark-gray">
                                <th> Id</th>
                                <th> Dish</th>
                                <th> Price</th>
                                <th> Type</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <?php
                    $query = "select *from rice_table";

                    $result = mysqli_query($conn, $query);

                    while ($row = mysqli_fetch_array($result)) {
                    ?>
                        <tr>
                            <td><?php echo $row['Id'] ?></td>
                            <td><?php echo $row['Dish'] ?></td>
                            <td><?php echo $row['Price'] ?></td>
                            <td><?php echo $row['Type'] ?></td>
                            <td><button href="javascript:void(0)"
                                    onclick="document.getElementById('userprofile').style.display='block'; changed('<?php echo $row['Dish']; ?>','<?php echo $row['Id'] ?>','Dish','<?php echo $row['Price'] ?>','rice_table')"
                                    class="w3-blue w3-button ">Edit</button></td>
                            <td>
                                <button href="javascript:void(0)"
                                    onclick="document.getElementById('delete_record').style.display='block'; deleteRecond('<?php echo $row['Id'] ?>','rice_table')"
                                    class="w3-red w3-button ">Delete</button>
                            </td>
                        </tr>
                        <?php
                    }

                    ?>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><button href="javascript:void(0)"
                                onclick="document.getElementById('newrecord').style.display='block'; newrecord('rice_table')"
                                class="w3-green w3-button ">Add New</i></button></td>
                    </table>
                </div>

                <!-- Salad -->

                <div class="w3-padding">
                    <h3>Salad</h3>

                    <table class="w3-table w3-table-all w3-hoverable w3-margin-top w3-centered w3-striped ">
                        <thead>
                            <tr class="w3-dark-gray">
                                <th> Id</th>
                                <th> Dish</th>
                                <th> Price</th>
                                <th> Type</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <?php
                    $query = "select *from salad_table";

                    $result = mysqli_query($conn, $query);

                    while ($row = mysqli_fetch_array($result)) {
                    ?>
                        <tr>
                            <td><?php echo $row['Id'] ?></td>
                            <td><?php echo $row['Dish'] ?></td>
                            <td><?php echo $row['Price'] ?></td>
                            <td><?php echo $row['Type'] ?></td>
                            <td><button href="javascript:void(0)"
                                    onclick="document.getElementById('userprofile').style.display='block'; changed('<?php echo $row['Dish']; ?>','<?php echo $row['Id'] ?>','Dish','<?php echo $row['Price'] ?>','salad_table')"
                                    class="w3-blue w3-button ">Edit</button></td>
                            <td>
                                <button href=" javascript:void(0)"
                                    onclick="document.getElementById('delete_record').style.display='block'; deleteRecond('<?php echo $row['Id'] ?>','salad_table')"
                                    class="w3-red w3-button ">Delete</button>
                            </td>
                        </tr>
                        <?php
                    }

                    ?>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><button href="javascript:void(0)"
                                onclick="document.getElementById('newrecord').style.display='block'; newrecord('salad_table')"
                                class="w3-green w3-button ">Add New</i></button></td>
                    </table>
                </div>
                <!-- Curry Table -->

                <div class="w3-padding">
                    <h3>Curry</h3>

                    <table class="w3-table w3-table-all w3-hoverable w3-margin-top w3-centered w3-striped ">
                        <thead>
                            <tr class="w3-dark-gray">
                                <th> Id</th>
                                <th> Dish</th>
                                <th> Price</th>
                                <th> Type</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <?php
                    $query = "select *from curry_table";

                    $result = mysqli_query($conn, $query);

                    while ($row = mysqli_fetch_array($result)) {
                    ?>
                        <tr>
                            <td><?php echo $row['Id'] ?></td>
                            <td><?php echo $row['Dish'] ?></td>
                            <td><?php echo $row['Price'] ?></td>
                            <td><?php echo $row['Type'] ?></td>
                            <td><button href="javascript:void(0)"
                                    onclick="document.getElementById('userprofile').style.display='block'; changed('<?php echo $row['Dish']; ?>','<?php echo $row['Id'] ?>','Dish','<?php echo $row['Price'] ?>','curry_table')"
                                    class="                                  w3-blue w3-button ">Edit</button></td>
                            <td>
                                <button href=" javascript:void(0)"
                                    onclick="document.getElementById('delete_record').style.display='block'; deleteRecond('<?php echo $row['Id'] ?>','curry_table')"
                                    class="w3-red w3-button ">Delete</button>
                            </td>
                        </tr>
                        <?php
                    }

                    ?>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><button href="javascript:void(0)"
                                onclick="document.getElementById('newrecord').style.display='block'; newrecord('curry_table')"
                                class="w3-green w3-button ">Add New</i></button></td>
                    </table>
                </div>
                <!-- Sweet -->

                <div class="w3-padding">
                    <h3>Sweet</h3>
                    <table class="w3-table w3-table-all w3-hoverable w3-margin-top w3-centered w3-striped ">
                        <thead>
                            <tr class="w3-dark-gray">
                                <th> Id</th>
                                <th> Dish</th>
                                <th> Price</th>
                                <th> Type</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <?php
                    $query = "select *from sweet";

                    $result = mysqli_query($conn, $query);

                    while ($row = mysqli_fetch_array($result)) {
                    ?>
                        <tr>
                            <td><?php echo $row['Id'] ?></td>
                            <td><?php echo $row['Dish'] ?></td>
                            <td><?php echo $row['Price'] ?></td>
                            <td><?php echo $row['Type'] ?></td>
                            <td>
                                <button href="javascript:void(0)"
                                    onclick="document.getElementById('userprofile').style.display='block'; changed('<?php echo $row['Dish']; ?>','<?php echo $row['Id'] ?>','Dish','<?php echo $row['Price'] ?>','sweet')"
                                    class="w3-blue w3-button ">Edit</button>
                            </td>
                            <td>
                                <button href="javascript:void(0)"
                                    onclick="document.getElementById('delete_record').style.display='block'; deleteRecond('<?php echo $row['Id'] ?>','sweet')"
                                    class="w3-red w3-button ">Delete</button>
                            </td>
                        </tr>
                        <?php
                    }

                    ?>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><button href="javascript:void(0)"
                                onclick="document.getElementById('newrecord').style.display='block'; newrecord('sweet')"
                                class="w3-green w3-button ">Add New</i></button></td>
                    </table>
                </div>



            </div>

        </div>

        <!-- Edit -->

        <div id="userprofile" class="w3-modal">
            <div class="w3-modal-content w3-animate-zoom" style="padding: 32px">
                <div class="w3-container w3-white w3-center">
                    <i onclick="document.getElementById('userprofile').style.display='none'"
                        class="fa fa-remove w3-right w3-button w3-transparent w3-xxlarge"></i>
                    <br />
                    <div class="w3-quarter w3-white w3-container"></div>
                    <div class="w3-table w3-half w3-container w3-center w3-centered ">
                        <form action="change.php" method="POST">

                            <input id="table_name" type="text" hidden class="w3-input" name="table">

                            <input id="input_id" type="text" hidden class="w3-input" name="id">

                            <label id="city_lable" hidden for=""> </label>
                            <input id="city" hidden type="text" class="w3-input" name="city">


                            <label id="price_lable" hidden> </label>
                            <input id="price" hidden type="text" class="w3-input" name="price">

                            <button class="w3-button w3-margin-top w3-blue">change</button>
                        </form>

                    </div>
                    <div class="w3-padding-64 w3-margin-top w3-quarter w3-white w3-container">

                    </div>
                </div>
            </div>
        </div>

        <!-- New Record -->
        <div id="newrecord" class="w3-modal">
            <div class="w3-modal-content w3-animate-zoom" style="padding: 32px">
                <div class="w3-container w3-white w3-center">
                    <i onclick="document.getElementById('newrecord').style.display='none'"
                        class="fa fa-remove w3-right w3-button w3-transparent w3-xxlarge"></i>
                    <br />
                    <div class="w3-quarter w3-white w3-container"></div>
                    <div class="w3-table w3-half w3-container w3-center w3-centered ">
                        <form action="newrecord.php" method="POST">

                            <input id="new_table_name" hidden type="text" class="w3-input" name="table">

                            <label id="new_city_lable" hidden for=""> </label>
                            <input id="new_city" hidden type="text" class="w3-input" name="city">


                            <label id="new_price_lable" hidden> </label>
                            <input id="new_price" hidden type="text" class="w3-input" name="price">

                            <button class="w3-button w3-margin-top w3-blue">Add New</button>
                        </form>

                    </div>
                    <div class="w3-padding-64 w3-margin-top w3-quarter w3-white w3-container">

                    </div>
                </div>
            </div>
        </div>

        <!-- Delete -->

        <div id="delete_record" class="w3-modal">
            <div class="w3-modal-content w3-animate-zoom" style="padding: 32px">
                <div class="w3-container w3-white w3-center">
                    <i onclick="document.getElementById('delete_record').style.display='none'"
                        class="fa fa-remove w3-right w3-button w3-transparent w3-xxlarge"></i>
                    <br />
                    <div class="w3-quarter w3-white w3-container"></div>
                    <div class="w3-table w3-half w3-container w3-center w3-centered ">
                        <form action="delete.php" method="POST">

                            <h3>Do you want to delete the Record</h3>

                            <input id="delete_re" type="text" hidden class="w3-input" name="id">

                            <!-- <label id="city_lable" hidden for=""> </label> -->
                            <input id="delete_table_name" type="text" hidden class="w3-input" name="table">


                            <!-- <label id="price_lable" hidden> </label>
                            <input id="price" hidden type="text" class="w3-input" name="price"> -->

                            <button class="w3-button w3-margin-top w3-blue">Yes</button>
                            <i onclick="document.getElementById('delete_record').style.display='none'"
                                class="w3-button w3-margin-top w3-blue">No</i>
                        </form>

                    </div>
                    <div class="w3-padding-64 w3-margin-top w3-quarter w3-white w3-container">

                    </div>
                </div>
            </div>
        </div>

        <script>
        // Edit only City table

        function change(data, id, column) {
            let table_name = document.getElementById('table_name')
            table_name.value = column

            document.getElementById('input_id').value = id

            let city_lable = document.getElementById('city_lable')
            let city = document.getElementById('city')

            city_lable.innerText = column
            city_lable.removeAttribute("hidden")

            city.value = data
            city.removeAttribute("hidden")

            let price_lable = document.getElementById('price_lable')
            let price = document.getElementById('price')

            price_lable.setAttribute('hidden', 'true')
            price.setAttribute('hidden', 'true')


        }

        // Edit expact city table

        function changed(data, id, column, price_item, table) {
            let table_name = document.getElementById('table_name')
            table_name.value = table

            document.getElementById('input_id').value = id

            let city_lable = document.getElementById('city_lable')
            let city = document.getElementById('city')

            let price_lable = document.getElementById('price_lable')
            let price = document.getElementById('price')

            city_lable.innerText = column
            city_lable.removeAttribute('hidden')

            city.value = data
            city.removeAttribute('hidden')

            price_lable.innerText = "Price"
            price_lable.removeAttribute('hidden')

            price.value = price_item
            price.removeAttribute('hidden')

        }

        // New Record

        function newrecord(table) {

            if (table === 'City') {
                let table_name = document.getElementById('new_table_name')
                table_name.value = table
                // table_name.removeAttribute("hidden")

                let city_lable = document.getElementById('new_city_lable')
                let city = document.getElementById('new_city')

                city_lable.innerText = table
                city_lable.removeAttribute("hidden")

                // city.value = data
                city.removeAttribute("hidden")
                city.setAttribute('placeholder', 'City Name')

                let price_lable = document.getElementById('new_price_lable')
                let price = document.getElementById('new_price')

                price_lable.setAttribute('hidden', 'true')
                price.setAttribute('hidden', 'true')
            }
            if (table != 'City') {
                // console.log(table)

                let table_name = document.getElementById('new_table_name')
                table_name.value = table
                // table_name.removeAttribute('hidden')

                let city_lable = document.getElementById('new_city_lable')
                let city = document.getElementById('new_city')

                let price_lable = document.getElementById('new_price_lable')
                let price = document.getElementById('new_price')

                city_lable.innerText = table
                city_lable.removeAttribute('hidden')

                // city.value = data
                city.removeAttribute('hidden')
                city.setAttribute('placeholder', 'Enter Name')

                price_lable.innerText = "Price"
                price_lable.removeAttribute('hidden')


                // price.value = price_item
                price.removeAttribute('hidden')
                price.setAttribute('placeholder', 'Enter Price')

            }
        }

        // Delete

        function deleteRecond(id, table) {
            document.getElementById('delete_re').value = id
            let table_name = document.getElementById('delete_table_name')
            table_name.value = table
        }
        </script>

        </div>
    </body>

</html>
