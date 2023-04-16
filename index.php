
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Sautis Web Development Studio</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="css/styles.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
  <!-- Navigation Bar -->
  <!-- Navigation bar code here -->

  <div class="container mx-auto mt-8">
    <h1 class="text-3xl font-bold text-center mb-6">Welcome to Sautis Web Development Studio</h1>
    <p class="text-gray-600 text-center">We build amazing websites and web applications!</p>
    <div class="flex justify-center mt-12">
      <button
        class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
        onclick="showSignInModal()">Sign In</button>
    </div>
  </div>

  <!-- Sign In Modal -->
  <!-- Sign in modal code here -->

  <!-- Contact Form Section -->
  <div class="container mx-auto mt-16">
    <h2 class="text-2xl font-bold mb-6 text-center">Contact Us</h2>
    <p class="text-gray-600 text-center mb-12">Feel free to reach out to us with any questions or inquiries</p>
    <form id="contactForm" method="post" action="processContactForm.php" class="mx-auto max-w-md">
      <div class="mb-4">
        <label for="name" class="block text-gray-800 font-bold mb-2">Name</label>
        <input type="text" id="name" name="name"
          class="w-full px-4 py-2 rounded-md focus:outline-none focus:shadow-outline" placeholder="Your Name"
          required>
      </div>
      <div class="mb-4">
        <label for="telephone" class="block text-gray-800 font-bold mb-2">Telephone</label>
        <input type="tel" id="telephone" name="telephone"
          class="w-full px-4 py-2 rounded-md focus:outline-none focus:shadow-outline" placeholder="Your Telephone"
          required>
      </div>
      <div class="mb-4">
        <label for="email" class="block text-gray-800 font-bold mb-2">Email</label>
        <input type="email" id="email" name="email"
          class="w-full px-4 py-2 rounded-md focus:outline-none focus:shadow-outline" placeholder="Your Email"
          required>
      </div>
      <div class="mb-4">
        <label for="message" class="block text-gray-800 font-bold mb-2">Message</label>
        <textarea id="message" name="message"
          class="w-full px-4 py-2 rounded-md focus:outline-none focus:shadow-outline" rows="5"
          placeholder="Your Message" required></textarea>
      </div>
      <div class="flex justify-center">
        <button
          class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
          type="submit
