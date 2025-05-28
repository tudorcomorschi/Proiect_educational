<?php include('header.php'); ?>

<style>
  body {
    font-family: 'Segoe UI', sans-serif;
    background: #f9fafd;
    color: #333;
  }

  h1, h3, h4 {
    color: #003f8c;
  }

  .contact-wrapper {
    display: flex;
    flex-wrap: wrap;
    gap: 40px;
    justify-content: center;
    margin-top: 40px;
    padding: 20px;
  }

  .contact-info, .contact-form {
    flex: 1 1 320px;
    padding: 30px;
    border-radius: 12px;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }

  .contact-info {
    background: linear-gradient(135deg, #eaf3ff, #f0f8ff);
    box-shadow: 0 6px 18px rgba(0, 122, 255, 0.1);
  }

  .contact-info:hover, .contact-form:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 25px rgba(0, 122, 255, 0.2);
  }

  .contact-form {
    background: #fff;
    box-shadow: 0 6px 18px rgba(0, 0, 0, 0.05);
  }

  .contact-form input, .contact-form textarea {
    width: 100%;
    padding: 12px;
    margin-bottom: 18px;
    border-radius: 8px;
    border: 1px solid #ccc;
    transition: all 0.3s ease;
  }

  .contact-form input:focus, .contact-form textarea:focus {
    border-color: #007aff;
    box-shadow: 0 0 0 3px rgba(0, 122, 255, 0.1);
    outline: none;
  }

  .contact-form button {
    padding: 12px 24px;
    background: #007aff;
    color: white;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    font-size: 16px;
    transition: all 0.3s ease;
  }

  .contact-form button:hover {
    background: #005ecb;
    transform: scale(1.05);
  }

  .social-links, .extra-contact {
    margin-top: 25px;
  }

  .social-btn {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    text-decoration: none;
    background: #e7f1ff;
    padding: 10px 16px;
    border-radius: 10px;
    margin: 6px 10px 6px 0;
    transition: all 0.3s ease;
    font-weight: 500;
    color: #003f8c;
  }

  .social-btn img {
    width: 22px;
    height: 22px;
    transition: transform 0.3s ease;
  }

  .social-btn:hover {
    background: #007aff;
    color: white;
    transform: translateY(-3px);
  }

  .social-btn:hover img {
    transform: rotate(10deg);
  }

  .success-message {
    margin-top: 30px;
    max-width: 600px;
    margin-left: auto;
    margin-right: auto;
    background: #d4edda;
    padding: 15px;
    border-radius: 12px;
    color: #155724;
    text-align: center;
    animation: fadeIn 0.6s ease-in-out;
  }

  @keyframes fadeIn {
    from { opacity: 0; transform: translateY(10px); }
    to { opacity: 1; transform: translateY(0); }
  }
</style>

<h1 style="text-align:center;">Contactează-ne</h1>
<p style="text-align:center;">Ai întrebări? Scrie-ne și îți vom răspunde cât mai curând.</p>

<div class="contact-wrapper">
  <div class="contact-info">
    <h3>Informații de contact</h3>
    <p><strong>Adresă:</strong> Str. Educației nr. 1, București</p>
    <p><strong>Telefon:</strong> +40 312 123 456</p>
    <p><strong>Email:</strong> contact@universitatevirtuala.ro</p>
    <p><strong>Program:</strong> Luni - Vineri, 09:00 - 17:00</p>

    <div class="social-links">
      <h4>Rețele sociale:</h4>
      <a href="#" class="social-btn"><img src="https://cdn-icons-png.flaticon.com/512/733/733547.png"> Facebook</a>
      <a href="#" class="social-btn"><img src="https://cdn-icons-png.flaticon.com/512/2111/2111463.png"> Instagram</a>
      <a href="#" class="social-btn"><img src="https://cdn-icons-png.flaticon.com/512/145/145807.png"> LinkedIn</a>
    </div>

    <div class="extra-contact">
      <h4>Alte metode:</h4>
      <a href="https://wa.me/40712345678" class="social-btn"><img src="https://cdn-icons-png.flaticon.com/512/733/733585.png"> WhatsApp</a>
      <a href="#" class="social-btn"><img src="https://cdn-icons-png.flaticon.com/512/726/726623.png"> Live Chat</a>
      <a href="mailto:secretariat@universitatevirtuala.ro" class="social-btn"><img src="https://cdn-icons-png.flaticon.com/512/732/732200.png"> Secretariat</a>
      <a href="tel:+40312123457" class="social-btn"><img src="https://cdn-icons-png.flaticon.com/512/597/597177.png"> Recepție</a>
    </div>
  </div>

  <form method="post" action="contact.php" class="contact-form">
    <label for="nume"><strong>Nume:</strong></label>
    <input type="text" id="nume" name="nume" required>

    <label for="email"><strong>Email:</strong></label>
    <input type="email" id="email" name="email" required>

    <label for="mesaj"><strong>Mesaj:</strong></label>
    <textarea id="mesaj" name="mesaj" rows="5" required></textarea>

    <button type="submit">Trimite</button>
  </form>
</div>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<div class='success-message'>Mesaj trimis cu succes! Îți vom răspunde în cel mai scurt timp.</div>";
}
?>

<?php include('footer.php'); ?>
