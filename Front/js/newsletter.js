const newsletter = document.getElementById("newsletter");
const email = document.getElementById("email");
const message = document.getElementById("message");

newsletter.addEventListener("submit", async (event) => {
  event.preventDefault();

  const response = await fetch("http://127.0.0.1:3000/newsletter", {
    method: "POST",
    headers: {
      "Content-Type": "application/json",
    },
    body: JSON.stringify({
      email: email.value,
    }),
  });

  if (response.status !== 201) {
    alert("Failed to register");
    return;
  } else {
    message.innerHTML = "<p> Vous êtes inscrits aux newsletters ! </p>";
  }

  const result = await response.json();
});
