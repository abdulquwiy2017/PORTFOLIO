
  document.getElementById("contactForm").addEventListener("submit", function (e) {
    e.preventDefault(); // Prevent the default form submission

    // Gather form data
    const formData = new FormData(this);

    // Send the data to the server
    fetch(this.action, {
      method: this.method,
      body: formData,
    })
      .then((response) => response.json())
      .then((data) => {
        if (data.success) {
          alert("Email sent successfully!");
          // Optionally, you can redirect the user to a thank-you page.
        } else {
          alert("Email could not be sent.");
        }
      })
      .catch((error) => {
        console.error("Error:", error);
      });
  });
