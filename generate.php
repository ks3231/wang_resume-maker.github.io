<?php

// Include autoloader 
require_once 'dompdf/autoload.inc.php'; 
 
// Reference the Dompdf namespace 
use Dompdf\Dompdf; 
 
// Instantiate and use the dompdf class 
$dompdf = new Dompdf();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $mail = $_POST["email"];
    $contact = $_POST["phone"];
    $skill1 = $_POST["skill1"];
    $skill2 = $_POST["skill2"];
    $skill3 = $_POST["skill3"];
    $lan1 = $_POST["lan1"];
    $lan2 = $_POST["lan2"];
    $lan3 = $_POST["lan3"];
    $sum = $_POST["sum"];
    $year1 = $_POST["year1"];
    $edu = $_POST["edu"];
    $year2 = $_POST["year2"];
    $edu1 = $_POST["edu1"];
    $year3 = $_POST["year3"];
    $edu2 = $_POST["edu2"];
    $from1 = $_POST["from1"];
    $from2 = $_POST["from2"];
    $from3 = $_POST["from3"];
    $to1 = $_POST["to1"];
    $to2 = $_POST["to2"];
    $to3 = $_POST["to3"];
    $exp1 = $_POST["exp1"];
    $exp2 = $_POST["exp2"];
    $exp3 = $_POST["exp3"];
    $project1 = $_POST["project1"];
    $project2 = $_POST["project2"];
    $project3 = $_POST["project3"];
    // Collect other user data here

    // Load the HTML template
    $template = file_get_contents("templates/resume_template.html");

    // Replace placeholders with user data
    $template = str_replace("{{name}}", $name, $template);
    $template = str_replace("{{email}}",  $mail, $template);
    $template = str_replace("{{phone}}", $contact, $template);
    $template = str_replace("{{skill1}}", $skill1, $template);
    $template = str_replace("{{skill2}}", $skill2, $template);
    $template = str_replace("{{skill3}}", $skill3, $template);
    $template = str_replace("{{lan1}}", $lan1, $template);
    $template = str_replace("{{lan2}}", $lan2, $template);
    $template = str_replace("{{lan3}}", $lan3, $template);
    $template = str_replace("{{sum}}", $sum, $template);
    $template = str_replace("{{edu}}", $edu, $template);
    $template = str_replace("{{edu1}}", $edu1, $template);
    $template = str_replace("{{edu2}}", $edu2, $template);
    $template = str_replace("{{year1}}", $year1, $template);
    $template = str_replace("{{year2}}", $year2, $template);
    $template = str_replace("{{year3}}", $year3, $template);
    $template = str_replace("{{from1}}", $from1, $template);
    $template = str_replace("{{from2}}", $from2, $template);
    $template = str_replace("{{from1}}", $from3, $template);    // Replace other placeholders with user data
    $template = str_replace("{{to1}}", $to1, $template);    // Replace other placeholders with user data
    $template = str_replace("{{to2}}", $to2, $template);    // Replace other placeholders with user data
    $template = str_replace("{{to3}}", $to3, $template);    // Replace other placeholders with user data
    $template = str_replace("{{exp1}}", $exp1, $template);    // Replace other placeholders with user data
    $template = str_replace("{{exp2}}", $exp2, $template);    // Replace other placeholders with user data
    $template = str_replace("{{exp3}}", $exp3, $template);    // Replace other placeholders with user data
    $template = str_replace("{{project1}}", $project1, $template);    // Replace other placeholders with user data
    $template = str_replace("{{project2}}", $project2, $template);    // Replace other placeholders with user data
    $template = str_replace("{{project3}}", $project3, $template);    // Replace other placeholders with user data
    // Generate a unique filename for the resume
    $filename = "$name"."_resume". ".pdf";


    $html = file_get_contents("$filename"); 
    $dompdf->loadHtml($html); 
     
    // (Optional) Setup the paper size and orientation 
    $dompdf->setPaper('A3', 'portrait'); 
     
    // Render the HTML as PDF 
    $dompdf->render(); 
     
    // Output the generated PDF  
    $dompdf->stream(" $filename", array("Attachment" => 0));
    
        // Save the generated resume as an HTML file
        file_put_contents($filename, $template);


    // Provide a link to download the generated resume
    echo "Resume generated successfully! <a href='$filename'  download >Download Resume</a>";




}

?>
