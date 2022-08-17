function validate(pForm) {
  let isValid = "";

  if (pForm.username.value === "") {
    document.getElementById("unameErr").innerHTML =
      "Please fill up the username.";
    isValid = "Not Valid";
  }
  if (pForm.email.value === "") {
    document.getElementById("emailErr").innerHTML =
      "Please fill up the email email";
    isValid = "Not Valid";
  }
  if (pForm.password.value === "") {
    document.getElementById("passwordErr").innerHTML =
      "Please fill up the password";
    isValid = "Not Valid";
  }
  if (pForm.fname.value === "") {
    document.getElementById("fnameErr").innerHTML =
      "Please fill up the fname";
    isValid = "Not Valid";
  }

  if (pForm.gender.value === "") {
    document.getElementById("genderErr").innerHTML =
      "Please fill up the gender";
    isValid = "Not Valid";
  }
  if (pForm.mobileno.value === "") {
    document.getElementById("mobilenoErr").innerHTML =
      "Please fill up the mobileno";
    isValid = "Not Valid";
  }

  if (pForm.dob.value === "") {
    document.getElementById("dobErr").innerHTML =
      "Please fill up the dob";
    isValid = "Not Valid";
  }
  if (pForm.address.value === "") {
    document.getElementById("addressErr").innerHTML =
      "Please fill up the address";
    isValid = "Not Valid";
  }

  if (isValid === "") {
    return true;
  } else {
    return false;
  }
}