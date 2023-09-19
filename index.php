<!DOCTYPE html>
<html>
<head>
    <title>Resume Maker by Wang</title>
  
</head>
    <style>

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }
  

  body {
    font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    background-color: #ead9d9;
  }
  

  .container {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
    background-color: #e2d7fa;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  }
  

  h1 {
    text-align: center;
    color: #333;
    font-size: 32px;
    margin-bottom: 20px;
    font-family:cursive ;
  }
  

  .form {
    padding: 20px;
  }
  

  label {
    font-weight: bold;
    font-size: large;
  }
  
  input[type="text"],
  input[type="number"],
  input[type="month"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
  }
  

  input[type="submit"] {
      background-color: #00737b;
    color: #f2a012;
    font-weight: bold;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;

  }
  
  input[type="submit"]:hover {
  
    background-color: #7e7667;
    color: #fff;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
    font-weight: bold

  }
  

  .form label[for="projects"] {
   font-weight: bold;
    color: #333;
  }
  

  input[name^="project"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 5px; /* Distribute the inputs evenly */
    margin-right: 1%;
  }

  .form::after {
    content: "";
    display: table;
    clear: both;
  }
  
    </style>


<body>
<div class="container">
    <div>
    <h1>Resume Maker</h1>
    </div>
    <div class="form">
    <form action="generate.php" method="POST">
        <label for="name">Name:-</label>
        <input type="text" name="name"  required><br><br>
        <label for="email">Email:-</label>
        <input type="text" name="email" required><br><br>
        <label for="number">Enter your number:-</label>
        <input type="number" name="phone" required><br><br>
        <label for="skill">Enter your skills:-</label>
        <input type="text" name="skill1" required><br><br>
        <input type="text" name="skill2" ><br><br>
        <input type="text" name="skill3" ><br><br>
      
       
        <label for="language">languages:-</label>
        <input type="text" name="lan1" required><br><br>
       
        <input type="text" name="lan2" ><br><br>
       
        <input type="text" name="lan3" ><br><br>
        <label for="about">about yourself:-</label>
        <input type="text" name="sum" required><br><br>

        
        <label for="qualification">Qualification:-</label>
        <input type="month" name="year1" >
        <input type="text" name="edu" required><br><br>
        <input type="month" name="year2" >
        <input type="text" name="edu1" ><br><br>
        <input type="month" name="year3" >
        <input type="text" name="edu2" ><br><br>

        <label for="projects">Work Experience:-</label>  <br>
        <label for="name">From:</label>  
        <input type="month" name="from1" >
        <label for="exp">To:</label>  
        <input type="month" name="to1" >
        <input type="text" name="exp1"><br>
        
        <label for="name">From:</label>  
        <input type="month" name="from2" >
        <label for="exp">To:</label>  
        <input type="month" name="to2" >
        <input type="text" name="exp2"><br>
        
        <label for="name">From:</label>  
        <input type="month" name="from3" >
        <label for="exp">To:</label>  
        <input type="month" name="to3" >
        <input type="text" name="exp3"><br>
        
        <label for="projects">Projects (if any):-</label>  
        <input type="text" name="project1">
        <input type="text" name="project2">
        <input type="text" name="project3"><br>

        <!-- Add more fields for contact info, education, work experience, etc. -->

        <input type="submit" value="Generate Resume">
    </form>
    </div>
</div>
</body>
</html>
