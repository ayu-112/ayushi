 <!--10  Create an object person = { name: "Nirav", age: 22 } and display properties. -->

 <!DOCTYPE html>
<html>
<head>
   
</head>
<body>

    <h2>persons</h2>
    <p id="personInfo"></p>

    <script>

     let person = {
            name: "Nirav",
            age: 22
        };

        let output =   person.name + person.age;

 
        document.getElementById("personInfo").innerHTML = output;

    </script>

</body>
</html>





