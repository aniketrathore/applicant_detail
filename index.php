<html>
    <head>
        <meta charset="UTF-8">
        <title>Applicant Details</title>
        <link rel="stylesheet" type="text/css" href="Classes/bootstrap/css/bootstrap.min.css">
        <script type="text/javascript" src="Classes/bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="Classes/jquery-3.2.1.min.js"></script>
        
    </head>
    <body style="background-image: url(1.jpg)">
        <div style="font-family: monospace">
            <center><h1>Applicant Details</h1></center>
        </div>
        <div class="col-lg-8 col-lg-offset-2" style="font-family: calibri;">
            <div class="panel panel-primary" style="background-image: url(2.jpg)">
                <div class="panel-body">
                    <form method="post" action="submit_details.php" enctype="multipart/form-data">
                        <div class="form-inline">
                            <label class="col-sm-2">Enter Name:</label>
                            <input type="text" class="form-control" name="name">
                        </div><br>
                        <div class="form-inline">
                            <label class="col-sm-2">Qualification: </label>
                            <input type="text" class="form-control" name="qualification">
                        </div><br>
                        <div class="form-inline">
                            <label class="col-sm-2">Date Of Birth:</label>
                            <input type="text" class="form-control" name="dob" placeholder="DD/MM/YYYY">
                        </div><br>
                        <div class="form-inline">
                            <label class="col-sm-2">Address:</label>
                            <input type="text" class="form-control" name="address">
                        </div><br>
                        <div class="form-inline">
                            <label class="col-sm-2">Contact No:</label>
                            <input type="text" class="form-control" name="contact_no">
                        </div><br>
                        <div class="form-inline">
                            <label class="col-sm-2">Email ID:</label>
                            <input type="text" class="form-control" name="email">
                        </div><br>
                        <div class="form-inline">
                            <label class="col-sm-2">LinkedIn Profile:</label>
                            <input type="text" class="form-control" name="linkedin_add">
                        </div><br>
                        <div class="form-inline">
                            <label class="col-sm-2">Portfolio Address: </label>
                            <input type="text" class="form-control" name="profile_add">
                        </div><br>
                        <div>
                            <label class="col-sm-2">Upload Resume: </label>
                            <input type="file" name="resume">
                        </div><br>
                        <button class="btn btn-block" style="width: 308px">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
