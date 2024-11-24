function fun(){
    user_name = document.getElementById("name").value;
    age = document.getElementById("age").value;
    dob = document.getElementById("dob").value;
    email = document.getElementById("email").value;
    mob = document.getElementById("mob").value;
    cname = document.getElementById("cname").value;
    ccode = document.getElementById("ccode").value;
    ccredit = document.getElementById("ccredit").value;

    document.getElementById("show").innerHTML =
        "Name: " + user_name + "<br>" +
        "Age: " + age + "<br>" +
        "Date of Birth: " + dob + "<br>" +
        "Email: " + email + "<br>" +
        "Mobile: " + mob + "<br>" +
        "Course Name: " + cname + "<br>" +
        "Course Code: " + ccode + "<br>" +
        "Course Credit: " + ccredit;


}
