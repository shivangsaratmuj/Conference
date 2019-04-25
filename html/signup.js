function passcnf() {
	// body...
	var pass = document.forms["signup"]["pass"].value;
	var cnfpass = document.forms["signup"]["cnfpass"].value;

	if (pass != cnfpass) {
		alert("Passwords do not match");
	}
}