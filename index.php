<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Potta+One&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Document</title>
    <style>
    body{
      /* background-color:skyblue; */
      background:url("https://images.pexels.com/photos/998641/pexels-photo-998641.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500");
    
    }
    #header{
      text-align:center;
      color:white;
      font-family: 'Potta One', cursive;
    }
    #main{
      color:white;
      font-size:25px;
      text-align :center;
   border:4px solid skyblue;
   padding-top:45px;
   margin:65px;
   margin-left:45px;
   font-family: 'Potta One', cursive;
    }
    #submit{
      font-size:23px;
      font-family: 'Potta One', cursive;
    }
    
    </style>
</head>
<body>
    <h1 id="header"> Details Of Student</h1>
    <div id="main">
    <form id="submitbtn" >
    <!-- <fieldset> -->
        <!-- <legend>Student Details</legend> -->
        <label>First name</label>
        <input type="text" name="sname"  id="sname" placeholder="student name"  >
        <label>Last name</label>
        <input type="text" name="lname" id="lname"><br><br>
        <label>Gender:  Male</label>
       <input type="radio" id="male" name="male">
       <label>Female</label>
       <input type="radio" id="female" name="male">
       <label>Date of Birth</label>
       <input type="date" name="date" id="date"><br> <br>
       <label>Contact no.</label>
       <input type="text" name="contact"  id="contact">
       <label>Email</label>
       <input type="text" name="email"  id="email"><br> <br>
       <label>Company</label>
       <input type="text" name="company" id="con"/>
       <label>address:</label>
       <input type="text" name="address" id="add"/><br><br>
       <label>B.TECH</label>
       <input type="checkbox" name="check"/>
       <label>BCA</label>
       <input type="checkbox" name="check1"/><br><br>
       <input type="button" id="submit" name="btn" value="submit">
       <input type="reset" value="Reset" id="submit"><br><br>

    </form>
    </div>

    <script>
        $(document).ready(function(){
     // agr click ko andhr lenge toh sare browser mai chl jata h
        $("#submit").on('click', function(e){
          //ajax mai button lete 
            e.preventDefault();//relode halt
            $.ajax({
                 type: "POST",
                 url: 'std.php',
                 data: $('#submitbtn').serialize(),
                  success: function(response){
                   // debugger;
                    var jsonData = JSON.parse(response);
                    console.log(jsonData);
                     }
                })
             })
            });
     
      
        </script>
</body>
</html>