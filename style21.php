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
  align-items: center;
  justify-content: center;
  padding: 10px;
  background: linear-gradient(0.25turn, #3f87a6, #ebf8e1, #f69d3c);
  font-size: 14px;
}

a {
  text-decoration: none;
  color: white;
}

a:visited {
  text-decoration: none;
  color: white;
}

.container {
  display: grid;
  grid-template-columns: 1fr 3fr;
}

.history {
}


.mainTable {
  border-collapse: collapse;
  margin: 25px auto;
  font-size: 0.9em;
  min-width: 400px;
  border-radius: 10px;
  overflow: hidden;
}

.mainTable tbody {

}

.mainTable th {
  background-color: grey;
  color: white;
  font-weight: bold;
  height: 40px;
}

.mainTable td {
  padding: 8px 10px;
}

.mainTable tbody tr {
  border-bottom: 1px solid #dddddd;
}

.mainTable tbody tr:nth-of-type(even) {
  background-color: #f3f3f3;
}

.mainTable tbody tr.active-row {
  font-weight: bold;
  color: #009879;
}

.mainTable tbody tr:hover {
  background-color: lightblue;
  cursor: pointer;
}

h1 a {
  color: black;
}

h1 a:visited {
  color: black;
}

#terms {
  color: black;
}

#forms {
  padding: 10px;
}

.form {
  display: flex;
  max-width: 700px;
  width: 100%;
  background-color: #fff;
  padding: 30px;
  border-radius: 10px;
  align-items: center;
  justify-content: space-evenly;
  margin: 50px auto;
  box-shadow: 0 0 5px 5px rgba(0, 0, 0, 0.4);
  flex-direction: column;
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

table {
  width: 60%;
  background-color: #fff;
  padding: 25px 30px;
  align-items: center;
  margin: 50px auto;
  box-shadow: 0 0 5px 5px rgba(0, 0, 0, 0.4);
  text-align: center;
  border-radius: 10px;
}

.button-container {
  margin: 15px 0;
  display: flex;
}

.button-container input[type="submit"] {
  width: 100%;
  padding: 10px;
  font-size: 14px;
  color: #fff;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  background-color: rgba(128, 128, 128, 1);
  transition: 0.3s;
}

.button-container input[type="submit"]:hover {
  background-color: rgba(128, 128, 128, 0.6);
}

.buttons {
  width: 25%;
  padding: 10px;
  font-size: 14px;
  color: #fff;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  background-color: rgba(128, 128, 128, 1);
  transition: 0.3s;
}

.buttons:hover {
  background-color: rgba(128, 128, 128, 0.6);
}

.details {
  display: flex;
  justify-content: center;
  align-items: center;
}

#csvX, #csvAll {
  padding: 10px;
  font-size: 14px;
  color: #fff;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  background-color: rgba(128, 128, 128, 1);
  transition: 0.3s;
}

fieldset {
  max-width: 700px;
  width: 100%;
  background-color: #fff;
  padding: 10px;
  border-radius: 10px;
  align-items: center;
  justify-content: center;
  box-shadow: 0 0 5px 5px rgba(0, 0, 0, 0.4);
}

fieldset #csv {
  width: 195px;
  margin-right: 60px;
}

#button {
  display: flex;
}