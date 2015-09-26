<!doctype html>

<!-- Created by: Matt Slomski and Dr. Mehruz Kamal Spring 2015 Semester -->

<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Brockport Multitasking</title>
  <link rel="stylesheet" href="css/styles.css?v=1.0">

  <style>
    body {
      background-color: #023727;
    }
    ul {
      background-color: #023727;
      list-style-type: none;
      margin: 0;
      padding: 0;
      overflow: hidden;
    }
    li {
      float: left;
    }
    a:link, a:visited {
      display: block;
      width: 130px;
      height: 30px;
      font-weight: bold;
      color: #FFFFFF;
      background-color: #000;
      text-align: center;
      padding: 4px;
      text-decoration: none;
      text-transform: uppercase;
      border-radius: 40px;
      font-size: 12px;
      border:3px solid white;
    }
    a:hover, a:active {
      background-color: #333333;
    }
    h3 {
      color: blue;
    }
    h5 {
      color: white;
    }
    p {
      color:black;
    }
  </style>

  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
</head>

<body>
  <nav>
    <ul>
      <li><a href="index.html">Home</a></li>
      <li><a href="factors.html">Multitasking Factors</a></li>
    </ul>
  </nav>

  <hr/>
  <hr/>

  <div align="center">

    <div style="background:#f1f1f1; border-bottom:1px solid #7ebbe4">

      <h1><u>Here is a list of independent and dependent factors you have selected:</u></h1>

      <h3>-Independent Factors</h3>

      <?php

      // Get Form data values
      $Age = $_POST["Age"];
      $Motivation = $_POST["Motivation"];
      $Similarity = $_POST["Similarity"];
      $External = $_POST["External"];
      $Practice = $_POST["Practice"];
      $Social = $_POST["Social"];
      $Time = $_POST["Time"];
      $Availability = $_POST["Availability"];
      $Number = $_POST["Number"];
      $Difficulty = $_POST["Difficulty"];
      $Unstructured_Structured = $_POST["Unstructured_Structured"];
      $Metacognition = $_POST["Metacognition"];
      $Mental_Factors = $_POST["Mental_Factors"];
      $Types_Software = $_POST["Types_Software"];
      $Pre_Cursors = $_POST["Pre_Cursors"];

      // Combine selected independent factors into a list based on the value of the checkbox/dropdown option.
      $independent_factors = "";

      if($Age != ""){
        // Append the value of the factor to the string for output.
        $independent_factors = $independent_factors . $Age . "<br />";
      }

      if($Motivation != ""){
        // Append the value of the factor to the string for output.
        $independent_factors = $independent_factors . $Motivation . "<br />";
      }

      if($Similarity != ""){
        // Append the value of the factor to the string for output.
        $independent_factors = $independent_factors . $Similarity . "<br />";
      }

      if($External != ""){
        // Append the value of the factor to the string for output.
        $independent_factors = $independent_factors . $External . "<br />";
      }

      if($Practice != ""){
        // Append the value of the factor to the string for output.
        $independent_factors = $independent_factors . $Practice . "<br />";
      }

      if($Social != ""){
        // Append the value of the factor to the string for output.
        $independent_factors = $independent_factors . $Social . "<br />";
      }

      if($Time != ""){
        // Append the value of the factor to the string for output.
        $independent_factors = $independent_factors . $Time . "<br />";
      }

      if($Availability != ""){
        // Append the value of the factor to the string for output.
        $independent_factors = $independent_factors . $Availability . "<br />";
      }

      if($Number != ""){
        // Append the value of the factor to the string for output.
        $independent_factors = $independent_factors . $Number . "<br />";
      }

      if($Difficulty != ""){
        // Append the value of the factor to the string for output.
        $independent_factors = $independent_factors . $Difficulty . "<br />";
      }

      if($Unstructured_Structured != ""){
        // Append the value of the factor to the string for output.
        $independent_factors = $independent_factors . $Unstructured_Structured . "<br />";
      }

      if($Metacognition != ""){
        // Append the value of the factor to the string for output.
        $independent_factors = $independent_factors . $Metacognition . "<br />";
      }

      if($Mental_Factors != ""){
        // Append the value of the factor to the string for output.
        $independent_factors = $independent_factors . $Mental_Factors . "<br />";
      }

      if($Types_Software != ""){
        // Append the value of the factor to the string for output.
        $independent_factors = $independent_factors . $Types_Software . "<br />";
      }

      if($Pre_Cursors != ""){
        // Append the value of the factor to the string for output.
        $independent_factors = $independent_factors . $Pre_Cursors;
      }

      // Print list of independent factors that were chosen by the user.
      echo $independent_factors;

      ?>

      <h3> -Dependent Factors </h3>

      <?php

      // Get Form data values
      $Performance = $_POST["Performance"];
      $Processing = $_POST["Processing"];
      $Teaching = $_POST["Teaching"];
      $Learning = $_POST["Learning"];
      $Attention = $_POST["Attention"];
      $Relationships = $_POST["Relationships"];
      $Productivity = $_POST["Productivity"];
      $Satisfaction = $_POST["Satisfaction"];
      $Health = $_POST["Health"];
      $Importance = $_POST["Importance"];
      $Distract = $_POST["Distract"];

      // Combine selected dependent factors into a list based on the value of the checkbox/dropdown option.
      $dependent_factors = "";

      if($Performance != ""){
        // Append the value of the factor to the string for output.
        $dependent_factors = $dependent_factors . $Performance . "<br />";
      }

      if($Processing != ""){
        // Append the value of the factor to the string for output.
        $dependent_factors = $dependent_factors . $Processing . "<br />";
      }

      if($Teaching != ""){
        // Append the value of the factor to the string for output.
        $dependent_factors = $dependent_factors . $Teaching . "<br />";
      }

      if($Learning != ""){
        // Append the value of the factor to the string for output.
        $dependent_factors = $dependent_factors . $Learning . "<br />";
      }

      if($Attention != ""){
        // Append the value of the factor to the string for output.
        $dependent_factors = $dependent_factors . $Attention . "<br />";
      }

      if($Relationships != ""){
        // Append the value of the factor to the string for output.
        $dependent_factors = $dependent_factors . $Relationships . "<br />";
      }

      if($Productivity != ""){
        // Append the value of the factor to the string for output.
        $dependent_factors = $dependent_factors . $Productivity . "<br />";
      }

      if($Satisfaction != ""){
        // Append the value of the factor to the string for output.
        $dependent_factors = $dependent_factors . $Satisfaction . "<br />";
      }

      if($Health != ""){
        // Append the value of the factor to the string for output.
        $dependent_factors = $dependent_factors . $Health . "<br />";
      }

      if($Importance != ""){
        // Append the value of the factor to the string for output.
        $dependent_factors = $dependent_factors . $Importance . "<br />";
      }

      if($Distract != ""){
        // Append the value of the factor to the string for output.
        $dependent_factors = $dependent_factors . $Distract;
      }

      // Print list of dependent factors that were chosen by the user.
      echo $dependent_factors;

      ?>

    </div>

    <div style="height:250px; background:#7ebbe4; border-top:1px solid #b0d3ea">

      <form name="resultform" action="script.php" method="post">
        Add notes about the multitasking here: <br /> <textarea name="notes" rows="10" cols="40"></textarea>
        <br />
        <input type="hidden" name="Age" value="<?php echo $Age; ?>">
        <input type="hidden" name="Motivation" value="<?php echo $Motivation; ?>">
        <input type="hidden" name="Similarity" value="<?php echo $Similarity; ?>">
        <input type="hidden" name="External" value="<?php echo $External; ?>">
        <input type="hidden" name="Practice" value="<?php echo $Practice; ?>">
        <input type="hidden" name="Social" value="<?php echo $Social; ?>">
        <input type="hidden" name="Time" value="<?php echo $Time; ?>">
        <input type="hidden" name="Availability" value="<?php echo $Availability; ?>">
        <input type="hidden" name="Number" value="<?php echo $Number; ?>">
        <input type="hidden" name="Difficulty" value="<?php echo $Difficulty; ?>">
        <input type="hidden" name="Unstructured_Structured" value="<?php echo $Unstructured_Structured; ?>">
        <input type="hidden" name="Metacognition" value="<?php echo $Metacognition; ?>">
        <input type="hidden" name="Mental_Factors" value="<?php echo $Mental_Factors; ?>">
        <input type="hidden" name="Types_Software" value="<?php echo $Types_Software; ?>">
        <input type="hidden" name="Pre_Cursors" value="<?php echo $Pre_Cursors; ?>">
        <input type="hidden" name="Performance" value="<?php echo $Performance; ?>">
        <input type="hidden" name="Processing" value="<?php echo $Processing; ?>">
        <input type="hidden" name="Teaching" value="<?php echo $Teaching; ?>">
        <input type="hidden" name="Learning" value="<?php echo $Learning; ?>">
        <input type="hidden" name="Attention" value="<?php echo $Attention; ?>">
        <input type="hidden" name="Relationships" value="<?php echo $Relationships; ?>">
        <input type="hidden" name="Productivity" value="<?php echo $Productivity; ?>">
        <input type="hidden" name="Satisfaction" value="<?php echo $Satisfaction; ?>">
        <input type="hidden" name="Health" value="<?php echo $Health; ?>">
        <input type="hidden" name="Importance" value="<?php echo $Importance; ?>">
        <input type="hidden" name="Distract" value="<?php echo $Distract; ?>">
        <br />
        <input type="submit" value="Submit">
        <input type="button" name="Un_CheckAll" value="Clear" onClick="UnCheckAll(document.myform.uncheck_all)">
      </form>
    </div>
  </div>

  <hr/>
  <hr/>

  <footer background-color: #009900;>
    <h5>Created by Matthew Slomski and Dr. Mehruz Kamal</h5>

    <script language="Javascript">
    var str = "Last updated: " + document.lastModified +"";
    var result =str.fontcolor("white");
    document.write(result);
    </script>
  </footer>
</body>

</html>
