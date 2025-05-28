<?php include('header.php'); ?>

<style>
  .tabs-nav {
    text-align: center;
    margin: 30px 0;
  }
  .tabs-nav button {
    background-color: #007aff;
    color: white;
    border: none;
    padding: 10px 20px;
    margin: 0 10px;
    font-size: 16px;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
  }
  .tabs-nav button:hover {
    background-color: #005ecb;
  }
  .tabs-nav button.active {
    background-color: #003f8c;
    box-shadow: 0 0 0 3px rgba(0,122,255,0.3);
  }
  .tab-content {
    display: none;
  }
  .tab-content.active {
    display: block;
    animation: fadein 0.4s ease;
  }
  @keyframes fadein {
    from { opacity: 0; }
    to { opacity: 1; }
  }
</style>

<div class="tabs-nav">
  <button onclick="showTab(1)">1</button>
  <button onclick="showTab(2)">2</button>
  <button onclick="showTab(3)">3</button>
</div>

<!-- TAB 1 - DESPRE -->
<style>
  .image-hover-effect {
    transition: transform 0.4s ease, box-shadow 0.4s ease;
  }

  .image-hover-effect:hover {
    transform: scale(1.05);
    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.2);
  }

  .animated-button {
    padding: 10px 20px;
    background-color: #007aff;
    color: white;
    border-radius: 5px;
    text-decoration: none;
    transition: all 0.3s ease;
    display: inline-block;
    border: none;
    cursor: pointer;
  }

  .animated-button:hover {
    background-color: #005ecb;
    transform: translateY(-3px);
    box-shadow: 0 6px 15px rgba(0, 122, 255, 0.3);
  }
</style>

<div class="tab-content" id="tab-1">
  <section style="padding: 40px 20px; background: #ffffff;">
    <h1 style="text-align:center;">Despre Universitatea Virtuală</h1>
    <p style="max-width:800px; margin:auto; text-align:center;">
      Universitatea Virtuală este o instituție de învățământ superior modernă, care oferă educație online de calitate, flexibilă și accesibilă oricui. Ne concentrăm pe inovație, incluziune și excelență academică.
    </p>

    <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 30px; margin-top: 40px;">
      <img class="image-hover-effect" src="https://images.unsplash.com/photo-1590012314607-cda9d9b699ae?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Nnx8dW5pdmVyc2l0eXxlbnwwfHwwfHx8MA%3D%3D" style="width:300px; height:200px; border-radius:10px; object-fit:cover;">
      <img class="image-hover-effect" src="https://images.unsplash.com/photo-1564910443496-5fd2d76b47fa?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mjh8fHVuaXZlcnNpdHl8ZW58MHx8MHx8fDA%3D" style="width:300px; height:200px; border-radius:10px; object-fit:cover;">
      <img class="image-hover-effect" src="https://images.unsplash.com/photo-1523580846011-d3a5bc25702b?auto=format&fit=crop&w=800&q=80" style="width:300px; height:200px; border-radius:10px; object-fit:cover;">
    </div>

    <div style="max-width:900px; margin: 50px auto;">
      <h3>Misiunea noastră</h3>
      <p>
        Să oferim o educație superioară accesibilă, inovatoare și adaptată cerințelor actuale ale pieței muncii, prin metode digitale, interactive și personalizate.
      </p>

      <h3>Viziunea noastră</h3>
      <p>
        Să devenim prima alegere în România și în regiune pentru învățământul superior online, oferind un mediu academic deschis, incluziv și orientat spre viitor.
      </p>

      <h3>Campus virtual & platforme</h3>
      <p>
        Toate cursurile, materialele video, seminarele și examenele sunt disponibile online, printr-o platformă modernă de tip LMS. Studenții pot învăța în ritmul propriu, dar beneficiază și de asistență directă din partea cadrelor didactice.
      </p>

      <h3>Parteneriate strategice</h3>
      <p>
        Colaborăm cu universități internaționale, companii din domeniul tehnologiei, psihologiei, dreptului și economiei, pentru a integra practica profesională în procesul de învățare.
      </p>
    </div>

    <div style="margin-top: 40px; display: flex; flex-wrap: wrap; gap: 30px; justify-content: center;">
      <img class="image-hover-effect" src="https://images.unsplash.com/photo-1551434678-e076c223a692?auto=format&fit=crop&w=800&q=80" style="width:300px; height:200px; border-radius:10px; object-fit:cover;">
      <img class="image-hover-effect" src="https://images.unsplash.com/photo-1543269865-cbf427effbad?auto=format&fit=crop&w=800&q=80" style="width:300px; height:200px; border-radius:10px; object-fit:cover;">
      <img class="image-hover-effect" src="https://plus.unsplash.com/premium_photo-1664372145865-c7526455ea94?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mzd8fHVuaXZlcnNpdHl8ZW58MHx8MHx8fDA%3D" style="width:300px; height:200px; border-radius:10px; object-fit:cover;">
    </div>

    <div style="padding: 50px 20px; background: #f0f8ff;">
      <h3 style="text-align:center;">Galerie Universitate</h3>

      <div style="display: flex; justify-content: center; align-items: center; gap: 20px; margin-top: 30px;">
        <button onclick="prevImage(); stopAuto();" class="animated-button">⟨ Prev</button>

        <img id="slider-image" 
             class="image-hover-effect"
             src="https://images.unsplash.com/photo-1571260899304-425eee4c7efc?auto=format&fit=crop&w=800&q=80" 
             style="width:600px; height:350px; object-fit:cover; border-radius:10px; box-shadow:0 0 15px rgba(0,0,0,0.2); transition:0.5s;">

        <button onclick="nextImage(); stopAuto();" class="animated-button">Next ⟩</button>
      </div>
    </div>

    <script>
      const sliderImages = [
        "https://images.unsplash.com/photo-1522202176988-66273c2fd55f?w=600&auto=format&fit=crop&q=60",
        "https://plus.unsplash.com/premium_photo-1691844987988-15611f4fba45?w=600&auto=format&fit=crop&q=60",
        "https://plus.unsplash.com/premium_photo-1681248156422-c01a2c803588?w=600&auto=format&fit=crop&q=60",
        "https://images.unsplash.com/photo-1532649538693-f3a2ec1bf8bd?w=600&auto=format&fit=crop&q=60",
        "https://images.unsplash.com/photo-1627556704283-452301a45fd0?w=600&auto=format&fit=crop&q=60",
        "https://images.unsplash.com/photo-1593672572837-d1bb82b59370?w=600&auto=format&fit=crop&q=60",
        "https://images.unsplash.com/photo-1535982330050-f1c2fb79ff78?w=600&auto=format&fit=crop&q=60",
        "https://images.unsplash.com/photo-1604872441539-ef1db9b25f92?w=600&auto=format&fit=crop&q=60"
      ];

      let current = 0;
      const slider = document.getElementById('slider-image');
      let interval = setInterval(nextImage, 4000);
      let userInteracted = false;

      function showImage(index) {
        slider.src = sliderImages[index];
      }

      function nextImage() {
        current = (current + 1) % sliderImages.length;
        showImage(current);
      }

      function prevImage() {
        current = (current - 1 + sliderImages.length) % sliderImages.length;
        showImage(current);
      }

      function stopAuto() {
        if (!userInteracted) {
          clearInterval(interval);
          userInteracted = true;
        }
      }
    </script>

    <div style="padding: 50px 20px; background: #f9f9f9;">
      <h3 style="text-align:center;">Contactează-ne direct</h3>
      <form style="max-width:600px; margin:30px auto;" action="#" method="post">
        <label>Nume complet:</label>
        <input type="text" name="nume" required style="width:100%; padding:10px; margin-bottom:15px; border-radius:5px; border:1px solid #ccc;">

        <label>Email:</label>
        <input type="email" name="email" required style="width:100%; padding:10px; margin-bottom:15px; border-radius:5px; border:1px solid #ccc;">

        <label>Mesaj:</label>
        <textarea name="mesaj" rows="5" required style="width:100%; padding:10px; border-radius:5px; border:1px solid #ccc;"></textarea>

        <button type="submit" class="animated-button" style="margin-top:15px;">Trimite mesajul</button>
      </form>
    </div>
  </section>
</div>



<!-- TAB 2 - INFO PUBLIC -->
<style>
  .image-hover-effect {
    transition: transform 0.4s ease, box-shadow 0.4s ease;
  }

  .image-hover-effect:hover {
    transform: scale(1.05);
    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.2);
  }

  .animated-button {
    padding: 10px 20px;
    background-color: #007aff;
    color: white;
    border-radius: 5px;
    text-decoration: none;
    transition: all 0.3s ease;
    display: inline-block;
  }

  .animated-button:hover {
    background-color: #005ecb;
    transform: translateY(-3px);
    box-shadow: 0 6px 15px rgba(0, 122, 255, 0.3);
  }
</style>

<div class="tab-content" id="tab-2">
  <section style="padding: 50px 20px; background: #f7fafd;">
    <h2 style="text-align:center;">Informații de interes public</h2>
    <p style="text-align:center; max-width:800px; margin:auto;">
      Universitatea Virtuală pune accent pe transparență, accesibilitate și comunicare constantă cu studenții și publicul larg. Toate documentele administrative, financiare și educaționale sunt publice și actualizate periodic, pentru a reflecta corect activitatea universității.
    </p>

    <div style="display:flex; flex-wrap:wrap; justify-content:center; gap:30px; margin-top:30px;">
      <img class="image-hover-effect" src="https://images.unsplash.com/photo-1573164713988-8665fc963095?auto=format&fit=crop&w=800&q=80" style="width:300px; height:200px; border-radius:8px; object-fit:cover;">
      <img class="image-hover-effect" src="https://plus.unsplash.com/premium_photo-1683167306200-07261e75e569?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjAxfHx1bml2ZXJzaXR5fGVufDB8fDB8fHww" style="width:300px; height:200px; border-radius:8px; object-fit:cover;">
      <img class="image-hover-effect" src="https://images.unsplash.com/photo-1524995997946-a1c2e315a42f?auto=format&fit=crop&w=800&q=80" style="width:300px; height:200px; border-radius:8px; object-fit:cover;">
    </div>

    <ul style="max-width:800px; margin:30px auto; line-height:1.8; font-size: 16px;">
      <li><strong>Planuri de învățământ</strong> – disponibile pentru toate ciclurile de studii, actualizate anual, conform legislației în vigoare.</li>
      <li><strong>Taxe de studii</strong> – afișate clar pe site, cu opțiuni de plată în rate și reduceri pentru cazuri speciale.</li>
      <li><strong>Burse și sprijin financiar</strong> – burse de merit, sociale, pentru activități extracurriculare sau performanțe academice.</li>
      <li><strong>Regulamente interne</strong> – regulamentul studentului, codul etic, politica de evaluare, publicate în format PDF.</li>
      <li><strong>Rapoarte anuale</strong> – indicatori de performanță, grad de promovabilitate, inserția profesională a absolvenților.</li>
      <li><strong>Colaborări și parteneriate</strong> – cu universități internaționale, ONG-uri, companii private și instituții publice.</li>
      <li><strong>Statutul instituției</strong> – documente de acreditare, decizii ale Senatului, informații despre conducere și structura administrativă.</li>
    </ul>

    <div style="max-width: 800px; margin: 50px auto;">
      <h3 style="text-align:center;">Acces rapid la documente</h3>
      <p style="text-align:center;">Toate documentele sunt disponibile în secțiunea <strong>Transparență instituțională</strong> și pot fi descărcate direct:</p>
      <div style="display:flex; justify-content:center; gap:20px; margin-top:20px;">
        <a href="#" class="animated-button">Descarcă planurile</a>
        <a href="#" class="animated-button">Regulamente PDF</a>
        <a href="#" class="animated-button">Rapoarte anuale</a>
      </div>
    </div>
  </section>
</div>



<!-- TAB 3 - CARIERE -->
<div class="tab-content" id="tab-3">
  <section style="padding: 50px 20px; background: #ffffff;">
    <h2 style="text-align:center;">Oportunități de carieră după absolvire</h2>
    <p style="text-align:center; max-width:800px; margin:auto;">
      Absolvenții Universității Virtuale sunt pregătiți să facă față provocărilor pieței muncii și beneficiază de sprijin pentru integrare profesională încă din anii de studiu. Parteneriatele cu firme și instituții facilitează accesul rapid la cariere de succes.
    </p>

    <div style="display:flex; flex-wrap:wrap; justify-content:center; gap:30px; margin-top:30px;">
      <div style="background:#f5f5f5; padding:20px; border-radius:10px; max-width:300px; text-align:center;">
        <h4>IT & Software</h4>
        <p>Programator, dezvoltator web, analist de date, specialist AI</p>
      </div>
      <div style="background:#f5f5f5; padding:20px; border-radius:10px; max-width:300px; text-align:center;">
        <h4>Drept & Administrație</h4>
        <p>Jurist, consilier juridic, funcționar public</p>
      </div>
      <div style="background:#f5f5f5; padding:20px; border-radius:10px; max-width:300px; text-align:center;">
        <h4>Psihologie</h4>
        <p>Psiholog educațional, consilier, terapeut, HR specialist</p>
      </div>
      <div style="background:#f5f5f5; padding:20px; border-radius:10px; max-width:300px; text-align:center;">
        <h4>Management & Economie</h4>
        <p>Manager proiecte, antreprenor, economist, consultant afaceri</p>
      </div>
    </div>
  </section>
</div>

<div class="tabs-nav">
  <button onclick="showTab(1)">1</button>
  <button onclick="showTab(2)">2</button>
  <button onclick="showTab(3)">3</button>
</div>

<script>
  function showTab(tabNumber) {
    const tabs = document.querySelectorAll('.tab-content');
    const buttons = document.querySelectorAll('.tabs-nav button');
    tabs.forEach(tab => tab.classList.remove('active'));
    buttons.forEach(btn => btn.classList.remove('active'));

    document.getElementById('tab-' + tabNumber).classList.add('active');

    // Activează doar butoanele din grupul curent (sus sau jos)
    document.querySelectorAll('.tabs-nav').forEach(nav => {
      const navButtons = nav.querySelectorAll('button');
      navButtons.forEach(btn => btn.classList.remove('active'));
      navButtons[tabNumber - 1].classList.add('active');
    });
    window.scrollTo({ top: 0, behavior: 'smooth' });
  }

  document.addEventListener('DOMContentLoaded', () => showTab(1));
</script>

<?php include('footer.php'); ?>