<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ></script>
        <script src="https://cdn.ckeditor.com/ckeditor5/18.0.0/classic/ckeditor.js"></script>
        <script src="../../scripts/scripts.js" type="text/javascript"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link href="../../css/style.css" rel="stylesheet" type="text/css"/>
        <link href="../../css/admin.css" rel="stylesheet" type="text/css"/>
        
    </head>
    
    <body>
        <nav class="navbar navbar-expand-lg navbar-light fixed-top">
            <div class="container">
                <div class="col-md-3" id="logo">
                    <a class="navbar-brand js-scroll-trigger" style="margin-left: 15%;" href="#"><img src="../../images/logo.png" alt="logo"/></a>
                </div>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <svg class="bi bi-person-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"/>
                                </svg>  
                                User
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                              <a class="dropdown-item" href="#">Dashboard</a>
                              <a class="dropdown-item" href="#">Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="row" style="padding-top: 80px;">
            <div class="col-md-2" >
                <nav class="nav nav-pills flex-column">
                    <a class="nav-link " href="../post/indexPost.php">Manage Post</a>
                    <a class="nav-link" href="../users/indexUsers.php">Manage Users</a>
                    <a class="nav-link" href="../difficulty/indexLevel.php">Manage Difficulty Levels</a>
                    <a class="nav-link active" href="indexBodyPart.php">Manage Body Part</a>
                </nav>
            </div>
            <div class="col-md-9" >
                <a href="createBodyPart.php" class="btn btn-info" id="adminBtn">Add Body Part</a>
                <a href="indexBodyPart.php" class="btn btn-info" id="adminBtn">Manage Body Part</a>
              <div class="container"> 
                    <div class="row h-25 d-inline-block"></div>
                        <form>
                            <div class="form-group">
                                <label for="BodyPartName">Body Part Name</label>
                                <input type="text" class="form-control" id="BodyPartName" name="BodyPartName" placeholder="Legs">
                            </div>
                        </form>
                        <button type="button" class="btn btn-info">Add Body Part</button>
                </div>
            </div>  
        </div>     
    </body>
</html>

