function validateForm() {
    var firstName = document.getElementById("fname").value;
    var lastName = document.getElementById("lname").value;
    var username = document.getElementById("usrn").value;
    var password = document.getElementById("pwd").value;
    var confirmPassword = document.getElementById("cpwd").value;
    var mobile = document.getElementById("mob").value;
    var email = document.getElementById("email").value;
    var gender = document.querySelector('input[name="gender"]:checked');
    
    if (firstName == "") {
        alert("First Name must be filled out");
        return false;
    }
    if (lastName == "") {
        alert("Last Name must be filled out");
        return false;
    }
    if (username == "") {
        alert("Username must be filled out");
        return false;
    }
    if (password == "") {
        alert("Password must be filled out");
        return false;
    }
    if (confirmPassword == "") {
        alert("Please confirm your password");
        return false;
    }
    if (password != confirmPassword) {
        alert("Passwords do not match");
        return false;
    }
    if (gender == null) {
        alert("Gender must be selected");
        return false;
    }
    if (mobile == "") {
        alert("Mobile Number must be filled out");
        return false;
    }
    if (email == "") {
        alert("Email must be filled out");
        return false;
    }
    return true;
}
