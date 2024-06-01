<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
<div id="landingForm">
    <div class="titulo2">CONTACTO</div>
    <div><label>Name:</label><input type="text" id="name"/></div>
    <div><label>Phone:</label><input type="text" id="phone"/></div>
    <div><label>Cellphone:</label><input type="text" id="cellphone"/></div>
    <div><label>Email:</label><input type="text" id="email"/></div>
    <div><label>Message:</label><textarea id="message"></textarea></div>
    <input type="button" onclick="sendForm()" value="SEND">
</div>

<script>
function validateEmail(email) {
    var filter = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return filter.test(email);
}

function sendForm() {
    var name = $("#name").val();
    var email = $("#email").val();
    var phone = $("#phone").val();
    var cellphone = $("#cellphone").val();
    var message = $("#message").val();

    if (validateEmail(email)) {
        var data = {
            'name': name,
            'email': email,
            'phone': phone,
            'cellphone': cellphone,
            'message': message
        };

        $.ajax({
            url: "./sendContact.php",
            type: "POST",
            data: data,
            success: function(response) {
                $("#landingForm").html("<span>Success</span>");
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
            }
        });
    } else {
        console.error("Invalid email format");
    }
}
</script>
</body>
</html>


