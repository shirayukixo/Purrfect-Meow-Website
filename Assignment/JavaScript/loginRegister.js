const rememberMeCheck = document.getElementById("rememberMe")
const usernameInput = document.getElementById("l_username")

if (localStorage.checkbox && localStorage.checkbox !== "") {
  rememberMeCheck.setAttribute("checked", "checked");
  usernameInput.value = localStorage.username;
} else {
  rememberMeCheck.removeAttribute("checked");
  usernameInput.value = "";
}

function yesRememberMe() {
    if (rememberMeCheck.checked && usernameInput.value !== "") {
        localStorage.username = usernameInput.value;
        localStorage.checkbox = rememberMeCheck.value;
    } else {
        localStorage.username = "";
        localStorage.checkbox = "";
    }
}