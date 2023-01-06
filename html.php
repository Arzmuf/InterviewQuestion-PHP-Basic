<html>

<head>
  <title>Submit Form Using AJAX PHP and javascript</title>
  <Style>
    h3 {
      color: #0096c7;
      margin-bottom: 5px;
      margin-left: 10px;
      margin-top: 20px;
    }

    div {
      background-color: azure;
      border-radius: 5px;
      padding: 20px
    }

    div.solid {
      border: solid;
      border-width: 1px;
      c olor: black;
      width: 400px;
      height: 200px;
    }

    input[type=text],
    select {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }

    input[type=submit] {
      width: 100%;
      background-color: #4CAF50;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    input[type=submit]:hover {
      background-color: #45a049;
    }
  </Style>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="verify_ajax.js">
  </script>
</head>

<body>
  <h3>
    Internship at MyWave
  </h3>

  <div class="solid">
      <label style="margin-left: 3px" for="uname">User Name:</label>
      <input type="text" id="uname" name="username" placeholder="Enter user name...">

      <input type="submit" name="Submit" id="submit">
    <p style="margin-left: 3px;" id="validate">Key in username and click submit</p>

  </div>

</body>

</html>