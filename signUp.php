<html lang = "en">
<head>
    <title>Sign-Up</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,intial-scale=1">
    <link rel="stylesheet" href="styles.css">
    <style>
        .size-color{
            color: blue;
            font-size: 25px;
        }
       .textbox {

             height: 25px !important;

             width: 2200px !important;

             font-size: 14px !important;

                }
        .margin{
            margin-top: 50px;
            margin-left:inherit;
            margin-right: 70px;
            margin-bottom: inherit;
            background-color:darkgrey;
        }
    </style>
    </head>
    <body>

    <div class="container well margin">
          <h1 >Find Your Style Registration!</h1>
    <form action= "signup_action.php" method = "POST">
        <div class="form-group ">
           <label for="UserName" class="size-color">Enter your User Name</label>
        <input type="text" name="username" class="form-control" placeholder="please enter user name"   required>
        </div>
         <div class="form-group">
           <label for="Password" class="size-color">Enter your Password</label>
        <input type="text" name="password" class="form-control" placeholder="please enter password"  required>
        </div>
                
      <p>Select your Style:</p>
     
         <select name = "style">
            <option value = "Designer">Designer</option>
            <option value = "Simple">Simple</option>
            <option value = "Professional">Professional</option>
            <option value = "Baggy">Baggy</option>
            <option value = "Athletic">Athletic</option>
            <option value = "Street Style">Street Style</option>
         </select>
      <p>Select your Personality:</p>
     
         <select name = "personality">
            <option value = "Outgoing">Outgoing</option>
            <option value = "Shy">Shy</option>
            <option value = "Confident">Confident</option>
            <option value = "Loud">Loud</option>
         </select>
 
	
       
        
        <div class="row">
            <div class="col-xs-4"><a href="logIn.php">
            <input type="submit" value = "Register" class="btn btn-block btn-success "></a>
                    </div>
            <div class="col-xs-4"><a href="lisu.php">
            <button class="btn btn-block btn-primary">Cancel</button></a>
            </div>
 


        </div>
 </form>
 </div>
 
    </body>
