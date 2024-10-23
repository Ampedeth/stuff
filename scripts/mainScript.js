// Shop script part

// Alerts

  // Модальне вікно About Us
  document.getElementById("about-us-btn").addEventListener("click", function () {
    document.getElementById("about-us-modal").style.display = "flex";
  });

  // Закриття модальних вікон
  document.getElementById("close-about").addEventListener("click", function () {
      document.getElementById("about-us-modal").style.display = "none";
  });

  // Закриття модальних вікон при кліку на затемнення
  window.addEventListener("click", function (event) {
      if (event.target.classList.contains("modal")) {
          event.target.style.display = "none";
      }
  });



// Login script part

let loginForm = document.querySelector(".my-form");

loginForm.addEventListener("submit", (e) => {
  e.preventDefault();
  let email = document.getElementById("email");
  let password = document.getElementById("password");

  console.log("Email:", email.value);
  console.log("Password:", password.value);
});



