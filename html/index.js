function signin() {
	// body...
	var regno = document.forms["signin"]["username"].value;
	var pass = document.forms["signin"]["password"].value;

	if (regno == '169105179') {
		location.replace("student.html");
	}
	else if (regno == "Faculty" || regno == "faculty") {
		location.replace("faculty.html");
	}
	else if (regno == 'warden' || regno == 'Warden') {
		location.replace("warden.html");
	}
}