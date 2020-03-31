<html lang = "en">
<head>
    <title>Log-In</title>
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
    </style>
    </head>
    <body>

    <div class="container">
          <h1 >Log-In for your own style!</h1>
    <form action="login_action.php" method="POST">
        <div class="form-group ">
           <label for="username" class="size-color">Enter your UserName </label>
        <input type="text" name="username" class="form-control" placeholder="enter username" size="45"  required>
        </div>
         <div class="form-group">
           <label for="Password " class="size-color">Enter your Password </label>
        <input type="password" name="password" class="form-control" placeholder="enter password" size="450" required>
        </div>
        
        <div class="row">
            <div class="col-xs-4">
           <input type="submit" class="item1 item-btn btn btn-primary"  value="Log In">
                    </div> 
            <div class="col-xs-4">
             <a href="signUp.php" class="item1 item-btn btn btn-primary">Register</a>
            </div>

        </div>
        </form>

       </div>

    </body>
