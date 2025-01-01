<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <style>
        body{

        }
        .M{





            margin-left: -250px;
            font-size: 50px;

            text-transform: uppercase;
            background-image: linear-gradient(
                    -225deg,
                    lightcoral 8%,
                    black 29%,
                    coral 100%,
                    black 70%
            );
            background-size: auto auto;
            background-clip: border-box;
            background-size: 200% auto;
            color: #fff;
            background-clip: text;
            text-fill-color: transparent;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: textclip 1s linear infinite;
            display: inline-block;
            font-size: 25px;
        }

        @keyframes textclip {
            to {
                background-position: 200% center;
            }
        }
        .p{

            width:700px ;
            height: 270px;
            margin-top: 100px;
            background-color: white;
        }
        .div1{
            margin-top: 5px;
        }
        .div2{
            margin-top: 10px;
        }
        .div3{
            margin-top: 10px;
        }
        .div4{
            margin-top: 10px;
        }
        .n{
            margin-left: -190px;
            font-size: 25px;
        }
        .v1{
            margin-left: 70px;
        }
        .v2{
            margin-left: 80px;
        }
        .v3{
            margin-left: 50px;
        }
        .v4{
            margin-left: 85px;
        }
        .v5{
            margin-left: 5px;
        }
        label{
            color: coral;
        }
        .n1{
            margin-left: -190px;
            font-size: 25px;
        }
        .c{
            margin-top: 20px;
            margin-left: -180px;
        }
        .n4{
            margin-left: -108px;
        }
        .n3{
            margin-left: -200px;
            font-size: 25px;
        }
        .x1{
            width: 80px;
            height: 35px;
            border: coral;
            background-color: coral;
            color: white;
        }

        .n6{
            margin-left: -200px;
            font-size: 25px;
        }

        .x{
            width: 80px;
            height: 35px;
            border: coral;
            background-color: coral;
            color: white;
        }

    </style>




</head>
<body>

<center><div class="p">
        <form  action="insertpackage.php" method="post">
            <h2 class="M">Manage Package</h2>

            <div class="div1">
                <label class="n"> <b>Name</b> </label>
                <input type="text" name="name" class="v1"required >

            </div>
            <div class="div2">
                <label class="n1"><b> Type</b> </label>
                <input type="text" name="type" class="v2"  required>
            </div>
            <div class="div2">
                <label class="n6"> <b>Location</b> </label>
                <input type="text" name="location" class="v3" >
            </div>
            <div class="div3">
                <label class="n3"> <b>Price </b></label>
                <input type="number" name="price" class="v4" required>
            </div>

            <div class="c">
                <input type="submit" value="Greate" name="add"  class="x1">
                <button class="x" onclick="window.location.href='packagetable'"> Packages</button>
            </div>
        </form>
    </div></center>
<script>

</script>
</body>

</html>
