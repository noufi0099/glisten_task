<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h1>Shipping</h1>
    <form id="orderform">
        <label for="orderdate">Order Date:</label>
        <input type="date" id="orderdate" name="orderdate" required><br><br>
        <label for="ordertime">Order Time:</label>
        <input type="time" id="ordertime" name="ordertime" required><br><br>
        <input type="submit" value="calculate">
    </form>
    <label id="result"></label>

    <script>
        $(document).ready(function(){
            $("#orderform").on("submit",function(e) {
                e.preventDefault();
                var orderdate=$("#orderdate").val();
                var ordertime=$("#ordertime").val();
                $.post("shipping.php",{
                    orderdate:orderdate,
                    ordertime:ordertime
                },function(data) {
                    $("#result").text(data);
                });
            });
        });
    </script>
</body>
</html>
