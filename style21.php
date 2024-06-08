<?php
/*** set the content type header ***/
/*** Without this header, it wont work ***/
header("Content-type: text/css");


$font_family = 'Arial, Helvetica, sans-serif';
$font_size = '0.7em';
$border = '1px solid';
?>

* {
  font-family: "Times New Roman", Times, serif;
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

body {
  display: flex;
  height: 100vh;
  align-items: center;
  justify-content: center;
  padding: 10px;
  background: linear-gradient(0.25turn, #3f87a6, #ebf8e1, #f69d3c);
  font-size: 14px;
}

.form {
  display: flex;
  max-width: 700px;
  width: 100%;
  background-color: #fff;
  padding: 25px 30px;
  border-radius: 10px;
  align-items: center;
  justify-content: center;
  margin: 50px auto;
  box-shadow: 0 0 5px 5px rgba(0, 0, 0, 0.4);
}

input {
  margin: 3px;
}

textarea {
  margin: 3px;
}

h1 {
  color: black;
  text-align: center;
  font-size: 36px;
}

form {
  text-align: center;
}

a:visited {
  text-decoration: none;
}

a:link {
  text-decoration: none;
}

p {
  overflow: auto;
}

table, th, td {
  border: solid 1px gray;
  padding: 1px;
  margin: 2px;
}

table {
  width: 100%;
  background-color: #fff;
  padding: 25px 30px;
  border-radius: 10px;
  align-items: center;
  margin: 50px auto;
  box-shadow: 0 0 5px 5px rgba(0, 0, 0, 0.4);
  text-align: center;
}