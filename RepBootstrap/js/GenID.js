var complete_name = "Farid Ivan Arriaga Tejeda";
complete_name = complete_name.toUpperCase();
var splitted_name = complete_name.split(" ");
var initials = "";
var i;
for (i = 0; i < splitted_name.length; i++) {
	initials += splitted_name[i].slice(0,1);
}

var complete_prof = "Ingeniero de software";
complete_prof = complete_prof.toUpperCase();
var splitted_prof = complete_prof.split(" ");
var prof_initials = "";
var i;
for (i = 0; i < splitted_prof.length; i++) {
	prof_initials += splitted_prof[i].slice(0,1);
}

var complete_email = "ivan_farid@homail.com";
complete_email = complete_email.toUpperCase();
var splitted_email = complete_email.split("@");
complete_email = splitted_email[0];
email_initials = complete_email.replace(/[^a-z0-9\s]/gi, '');

console.log("\nSu ID es: " + initials+prof_initials+email_initials+Date.now());

