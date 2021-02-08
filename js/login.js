const formLogin = document.querySelector("#form-login");
formLogin.addEventListener("submit", function (e) {
  e.preventDefault();
  let email = document.querySelector("#inputEmail");
  console.log(email);
  let password = document.querySelector("#inputPassword");
  let alert = document.querySelector("#alert");
  if (email.value == "") {
    alert.classList.remove("d-none");
    alert.innerHTML = "Email tidak boleh kosong";
    email.focus();
  } else if (password.value == "") {
    alert.classList.remove("d-none");
    alert.innerHTML = "Password tidak boleh kosong";
    password.focus();
  } else {
    alert.classList.add("d-none");
    e.currentTarget.submit();
  }
});
