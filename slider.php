<?php include('header.php'); ?>

<style>
  .slider {
    max-width: 600px;
    margin: 50px auto;
    position: relative;
    text-align: center;
  }

  .slide {
    display: none;
    padding: 20px;
    background: #f7fafd;
    border-radius: 10px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
  }

  .slide blockquote {
    font-size: 20px;
    font-style: italic;
    margin-bottom: 20px;
    color: #333;
  }

  .slide .person {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 15px;
  }

  .slide .person img {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    object-fit: cover;
    border: 2px solid #007aff;
  }

  .slide .person p {
    margin: 0;
    font-weight: bold;
    color: #444;
  }

  .dots {
    text-align: center;
    margin-top: 20px;
  }

  .dot {
    height: 12px;
    width: 12px;
    margin: 0 5px;
    background-color: #ccc;
    border-radius: 50%;
    display: inline-block;
    transition: background-color 0.3s ease;
    cursor: pointer;
  }

  .dot.active {
    background-color: #007aff;
  }

  .nav-buttons {
    margin-top: 20px;
    display: flex;
    justify-content: center;
    gap: 15px;
  }

  .nav-buttons button {
    background-color: #007aff;
    color: white;
    border: none;
    padding: 8px 18px;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s, transform 0.2s;
  }

  .nav-buttons button:hover {
    background-color: #005ecb;
    transform: scale(1.05);
  }
</style>

<h1 style="text-align:center;">Testimoniale</h1>
<p style="text-align:center;">Părerile studenților noștri:</p>

<div class="slider">
  <!-- Slides -->
  <?php
    $testimoniale = [
      ["Ana", "Cea mai bună experiență educațională online!", "https://images.unsplash.com/photo-1607746882042-944635dfe10e?auto=format&fit=crop&w=100&q=80"],
      ["George", "Platforma este intuitivă și profesorii sunt excepționali.", "https://images.unsplash.com/photo-1598981457915-aea220950616?w=600&auto=format&fit=crop&q=60"],
      ["Laura", "Mi-am găsit rapid un job după absolvire!", "https://images.unsplash.com/photo-1589571894960-20bbe2828d0a?auto=format&fit=crop&w=100&q=80"],
      ["Andrei", "Suportul tehnic a fost mereu prompt și eficient!", "https://images.unsplash.com/photo-1544723795-3fb6469f5b39?auto=format&fit=crop&w=100&q=80"],
      ["Ioana", "Materialele de curs sunt clare și interactive.", "https://images.unsplash.com/photo-1531123897727-8f129e1688ce?auto=format&fit=crop&w=100&q=80"],
      ["Mihai", "Recomand această universitate tuturor celor care lucrează și vor să studieze.", "data:image/jpeg;base64,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"],
      ["Bianca", "Interfața platformei este foarte user-friendly.", "https://images.unsplash.com/photo-1595152772835-219674b2a8a6?auto=format&fit=crop&w=100&q=80"],
      ["Radu", "Comunitatea academică este extrem de primitoare.", "https://images.unsplash.com/photo-1517841905240-472988babdf9?auto=format&fit=crop&w=100&q=80"],
      ["Elena", "Accesul la resurse este rapid și complet.", "https://images.unsplash.com/photo-1502685104226-ee32379fefbe?auto=format&fit=crop&w=100&q=80"]
    ];

    foreach ($testimoniale as $i => $t) {
      echo '<div class="slide" style="display:'.($i==0?'block':'none').'">
              <blockquote>"'.$t[1].'"</blockquote>
              <div class="person">
                <img src="'.$t[2].'" alt="'.$t[0].'">
                <p>– '.$t[0].'</p>
              </div>
            </div>';
    }
  ?>

  <!-- Dots -->
  <div class="dots">
    <?php
      for ($i = 0; $i < count($testimoniale); $i++) {
        echo '<span class="dot '.($i==0?'active':'').'" onclick="setSlide('.$i.')"></span>';
      }
    ?>
  </div>

  <!-- Navigation buttons -->
  <div class="nav-buttons">
    <button onclick="prevSlide()">⟨ Înapoi</button>
    <button onclick="nextSlide()">Următor ⟩</button>
  </div>
</div>

<script>
  let index = 0;
  const slides = document.getElementsByClassName('slide');
  const dots = document.getElementsByClassName('dot');

  function showSlide(n) {
    for (let i = 0; i < slides.length; i++) {
      slides[i].style.display = 'none';
      dots[i].classList.remove('active');
    }
    slides[n].style.display = 'block';
    dots[n].classList.add('active');
  }

  function nextSlide() {
    index = (index + 1) % slides.length;
    showSlide(index);
  }

  function prevSlide() {
    index = (index - 1 + slides.length) % slides.length;
    showSlide(index);
  }

  function setSlide(n) {
    index = n;
    showSlide(index);
  }

  setInterval(nextSlide, 4000);
</script>

<?php include('footer.php'); ?>
