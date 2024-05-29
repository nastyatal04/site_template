const form = document.getElementById("contact-form");

form.addEventListener("submit", (event) => {
  event.preventDefault();

  const nameInput = document.getElementById("name");
  const phoneInput = document.getElementById("phone");

  // Here you can add your form submission logic, e.g., AJAX request
  console.log("Name:", nameInput.value);
  console.log("Phone:", phoneInput.value);

  // Reset the form
  form.reset();
});
