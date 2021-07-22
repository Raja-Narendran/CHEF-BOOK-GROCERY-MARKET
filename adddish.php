<?php
/**
 * Created by PhpStorm.
 * User: ParCan
 * Date: 02-06-2020
 * Time: 12:52 PM
 */
?>
<html>
<head>
    <link type="text/css" rel="stylesheet" href="/plugins/dropify/dropify.css"/>
    <link type="text/css" rel="stylesheet" href="/plugins/materialize/css/materialize.min.css"/>
    <link type="text/css" rel="stylesheet" href="/fonts/materialize/material-icons.css"/>
</head>
<style>
body {
    background-image: url("images/veg2.jpg");
    width: 100%;
    height: 100%;
}
</style>
<body>
<h1>
    VEGETARIAN
</h1>
<form action="services/savedish.php" method="post">
<div class="container">
    <div class="row card-panel">
        <div class="input-field col s6">
            <input id="dishname" type="text" name="dishname" class="validate">
            <label for="dishname">recipe name</label>
        </div>
        <div class="input-field col s6">
            <input id="cooktime" name="cooktime" type="text" class="validate">
            <label for="cooktime">cooking time</label>
        </div>
        <div class="input-field col s12">
            <textarea id="ingredients" name="ingredients" class="materialize-textarea"></textarea>
            <label for="ingredients">tell about ingredients</label>
        </div>
        <div class="input-field col s12">
            <textarea id="directions" name="directions" class="materialize-textarea"></textarea>
            <label for="directions">tell about methods</label>
        </div>
        <div class="row">
            <div class="input-field col l12 m12 s12">
                <label for="inventoryFile"><p>Your so fresh input file — Default version</p></label>
                <input type="file" id="inventoryFile" class="dropify" />
            </div>
            <i class="material-icons">add</i>
        </div>
    </div>
    <button type="submit" id="button" class="waves-button-input" name="submit">submit</button>
</div>
</form>
<script type="text/javascript" src="./plugins/materialize/js/materialize.min.js"></script>
<script type="text/javascript" src="./plugins/dropify/dropify.js"></script>
</body>
</html>
