<?php
/**
 * Created by PhpStorm.
 * User: ParCan
 * Date: 22-05-2020
 * Time: 08:21 PM
 */
session_start();
require_once ("constants.php");
if(!isset($_SESSION['user_id'])) {
    header("Location: ".SRC_URL."login.php");
}
?>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link type="text/css" rel="stylesheet" href="./plugins/materialize/css/materialize.css"/>
    <link type="text/css" rel="stylesheet" href="./fonts/materialize/material-icons.css"/>
    <link type="text/css" rel="stylesheet" href="./css/home.css"/>
</head>
<body>
<div>
    <div class="cointainer floating-login">
        <button class="loginbutton">
            <a href="login.php">LOGIN</a></button>
        <button class="registerbutton">
            <a href="register.php">REGISTER</a></button>
        <a class="btn-floating btn-large waves-effect waves-light red modal-trigger" data-target="modal1"><i class="material-icons">+</i></a>
    </div>
    <a href="veg.php">
        <div class="bg-image img1">
            <div class="imgtext">
                veg
            </div>
        </div>
    </a>
    <a href="nonveg.php">
        <div class="bg-image img2">
            <div class="imgtext">
                non-veg
            </div>
        </div>
    </a>
    <a href="soup.php">
        <div class="bg-image img3">
            <div class="imgtext">
                soup
            </div>
        </div>
    </a>
    <a href="snacks.php">
        <div class="bg-image img4">
            <div class="imgtext">
                snacks
            </div>
        </div>
    </a>
    <a href="cake.php">
        <div class="bg-image img5">
            <div class="imgtext">
                cake
            </div>
        </div>
    </a>
    <a href="juice.php">
        <div class="bg-image img6">
            <div class="imgtext">
                juice
            </div>
        </div>
    </a>
    <a href="fruits.php">
        <div class="bg-image img7">
            <div class="imgtext">
                Fruit Salad
            </div>
        </div>
    </a>
    <div class="bg-text">COOK BOOK</div>
    <!-- Modal Structure -->
    <div id="modal1" class="modal">
        <div class="modal-content">
            <h4>ADD DISH</h4>
            <p>Fill up your details in this text area..</p>
            <div class="container">
                <div class="row">
                    <div class="input-field col s12 m6 l6">
                        <select id="category" >
                            <option value="" disabled selected>select your categories</option>
                            <option value="veg">Veg</option>
                            <option value="non_veg">Non Veg</option>
                            <option value="soup">Soup</option>
                            <option value="snacks">Snacks</option>
                            <option value="cake">Cake</option>
                            <option value="juice">Juice</option>
                            <option value="fruit_salad">Fruit salad</option>
                        </select>
                        <label for="category">Category</label>
                    </div>
                    <div class="input-field col s12 m6 l6">
                        <label for="cooktime">Cooking time(mins)</label>
                        <input class="inputText" id="cooktime" type="number" name="cooktime">
                    </div>
                </div>
                <div class="input-field col s12 m3">
                    <label for="dishname">Dish Name</label>
                    <input class="inputText" id="dishname" type="text" name="dishname">
                </div>
                <div class="input-field col s12 m3">
                    <label for="ingredients">Ingredients</label>
                    <textarea id="ingredients" class="materialize-textarea" data-length="120"></textarea>
                </div>
                <div class="input-field col s12 m3">
                    <label for="directions">Process</label>
                    <textarea id="directions" class="materialize-textarea" data-length="120"></textarea>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <a href="#!" id="addDishSubmit" class="waves-effect waves-green btn-flat">Submit</a>
        </div>
    </div>
</div>
<script src="./plugins/jquery/jquery.min.js"></script>
<script src="./plugins/materialize/js/materialize.js"></script>
<script src="./js/addDish.js"></script>
</body>
</html>
