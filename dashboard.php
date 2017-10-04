<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        
        <link rel="stylesheet" href="dashboard.css">
        
        <title>Accounts360</title>
    </head>
    
    <body>
        
        <div class="conatiner">
    <p>Back</p>
        <div class="toggle-btn" onclick="toggle-sidebar()">
            <span></span>
            <span></span>
            <span></span>
        </div>
        
        <div id="sidebar">
            <ul>
                <li>Home</li>
                <li>About Us </li>
                <li>Contact</li>
            </ul>
        
        </div>
        </div>
        <script>
        function toogle-sidebar(){
            
            document.getElementById("sidebar").classList.toggle('active');
        }
        
        </script>
        
    </body>

</html>