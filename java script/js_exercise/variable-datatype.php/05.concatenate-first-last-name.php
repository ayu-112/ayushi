<!-- 5. Concatenate first name and last name and display full name. -->




 <!DOCTYPE html>
    <html>
        <body>
            <input type="text" id="firstname">
                 <input type="text" id="lastname">



            <button onclick= "showFullName()">Show full name</button>

            <p id="fullnameid"></p>
            <script>
                function showFullName(){

              
                    let Fullname = firstname + " " + lastname;
          var  firstname =  document.getElementById("firstname").value; 
        var   lastname =   document.getElementById("lastname").value;

        var   fullname = firstname + " " + lastname;

                        document.getElementById("fullnameid").innerText ="Fullname: " + fullname;
                }
            </script>

        </body>
    </html>

<!-- <!DOCTYPE html>
<html>
<head>
    <title>Full Name Concatenation</title>
</head>
<body>

    <h2>Enter Your Name</h2>
    
    <input type="text" id="firstName"><br><br>
 <input type="text" id="lastName"><br><br>

    <button onclick="showFullName()">Show Full Name</button>

    <p id="fullNameOutput"></p>

    <script>
        function showFullName() {
            // Get values from input fields
            var firstName = document.getElementById("firstName").value;
            var lastName = document.getElementById("lastName").value;

            // Concatenate with space
            var fullName = firstName + " " + lastName;

            // Display full name
            document.getElementById("fullNameOutput").innerText = "Full Name: " + fullName;
        }
    </script>

</body>
</html> -->

