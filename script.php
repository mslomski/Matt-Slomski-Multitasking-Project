<?php

// Created by: Matt Slomski and Dr. Mehruz Kamal Spring 2015 Semester


// Get Form data values
// Independent factors
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

// Dependent factors
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

// Multitasking notes
$Notes = $_POST["notes"];

//*********************
//IMPORTANT NOTE: Make sure you have full permissions to write to a file in the directory.
//*********************
echo "Your Multitasking data has been sent to: " . date("Y-m-d_h-i-sa") . ".xml";
$name = date("Y-m-d_h-i-sa");

// Make new file based on the date the form was submitted.
$output = "-----Selected Independent Factors----- \r\n" .
  "<Age>" . $Age . "</Age>\r\n
  <Motivaton>" . $Motivation . "</Motivation>\r\n
  <Similarity>" . $Similarity . "</Similarity>\r\n
  <External>" . $External . "</External>\r\n
  <Practice>" . $Practice . "</Practice>\r\n
  <Social>"   . $Social . "</Social>\r\n
  <Time>" . $Time . "</Time>\r\n
  <Availability>" . $Availability . "</Availability>\r\n
  <Number>" . $Number . "</Number>\r\n
  <Difficulty>" . $Difficulty . "</Difficulty>\r\n
  <Unstructured_Structured>" . $Unstructured_Structured . "</Unstructured_Structured>\r\n
  <Metacognition>" . $Metacognition . "</Metacognition>\r\n
  <Mental_Factors>" . $Mental_Factors . "</Mental_Factors>\r\n
  <Types_Software>" . $Types_Software . "</Types_Software>\r\n
  <Pre_Cursors>" . $Pre_Cursors . "</Pre_Cursors>\r\n\r\n
  -----Selected Dependent Factors-----\r\n
  <Performance>" . $Performance . "</Performance>\r\n
  <Processing>" . $Processing . "</Processing>\r\n
  <Teaching>" . $Teaching . "</Teaching>\r\n
  <Learning>" . $Learning . "</Learning>\r\n
  <Attention>" .  $Attention . "</Attention>\r\n
  <Relationships>" . $Relationships . "</Relationships>\r\n
  <Productivity>" . $Productivity . "</Productivity>\r\n
  <Satisfaction>" . $Satisfaction . "</Satisfaction>\r\n
  <Health>" . $Health . "</Health>\r\n
  <Importance>" . $Importance . "</Importance>\r\n
  <Distract>" . $Distract . "</Distract>\r\n\r\n
  -----Multitasking Notes-----\r\n
  <Notes>" . $Notes . "</Notes>";
  
$file = date("Y-m-d_h-i-sa") . ".xml";
file_put_contents($file, $output);

// Sends a copy of the output file to Dr.Kamal's Multitasking folder.
copy($file, "/home/matt/$file");
?>
