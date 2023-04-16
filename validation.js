function showSignInModal() {
    // Code for showing sign in modal
  }
  
  function validateForm() {
    // Client-side validation
    var name = document.getElementById("name").value;
    var telephone = document.getElementById("telephone").value;
    var email = document.getElementById("email").value;
    var message = document.getElementById("message").value;
  
    if (name.trim() === "" || telephone.trim() === "" || email.trim() === "" || message.trim() === "") {
      alert("All fields are required");
      return false;
    }
  
    if (!validateEmail(email)) {
      alert("Please enter a valid email address");
      return false;
    }
  
    return true;
  }
  
  function validateEmail(email) {
    // Email validation
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
  }
  