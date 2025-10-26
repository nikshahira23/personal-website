function submitForm() {
  const name = document.getElementById("name").value.trim();
  const email = document.getElementById("email").value.trim();
  const phone = document.getElementById("phone").value.trim();
  const org = document.getElementById("org").value.trim();
  const industry = document.getElementById("industry").value;
  const project = document.getElementById("project").checked;
  const network = document.getElementById("network").checked;
  const emailMethod = document.getElementById("emailMethod").checked;
  const phoneMethod = document.getElementById("phoneMethod").checked;
  const comments = document.getElementById("comments").value.trim();

  if (!name || !email || !phone || !org || !industry) {
    alert("Please fill in all required fields.");
    return;
  }
  if (!project && !network) {
    alert("Please select at least one area of interest.");
    return;
  }
  if (!emailMethod && !phoneMethod) {
    alert("Please select a preferred contact method.");
    return;
  }

  let interestArea = [];
  if (project) interestArea.push("Project Collaboration");
  if (network) interestArea.push("Networking / Mentorship");

  let contactMethod = emailMethod ? "Email" : "Phone";

  const result = `
    <h2>Message Sent Successfully!</h2>
    <p><b>Name:</b> ${name}</p>
    <p><b>Email:</b> ${email}</p>
    <p><b>Phone Number:</b> ${phone}</p>
    <p><b>Organisation:</b> ${org}</p>
    <p><b>Industry Field:</b> ${industry}</p>
    <p><b>Interest Area:</b> ${interestArea.join(", ")}</p>
    <p><b>Preferred Contact Method:</b> ${contactMethod}</p>
    <p><b>Comments:</b> ${comments}</p>
  `;

  document.getElementById("result").innerHTML = result;

  alert("✅ Your message has been submitted successfully!");

  document.getElementById("contactForm").reset();
}
