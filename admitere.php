<?php include('header.php'); ?>

<style>
  body {
    font-family: 'Segoe UI', sans-serif;
    background: #f8f9fc;
    color: #333;
    line-height: 1.7;
  }

  section {
    padding: 40px 20px;
    max-width: 1000px;
    margin: 40px auto;
    background: #fff;
    border-radius: 12px;
    box-shadow: 0 8px 24px rgba(0,0,0,0.06);
    animation: fadeIn 0.6s ease-in-out;
  }

  h2 {
    color: #003f8c;
    text-align: center;
    margin-bottom: 25px;
  }

  ul, ol {
    padding-left: 20px;
  }

  li {
    margin-bottom: 10px;
  }

  table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
  }

  th, td {
    border: 1px solid #ddd;
    padding: 12px;
    text-align: left;
  }

  th {
    background: #007aff;
    color: white;
  }

  .info-block {
    margin-bottom: 20px;
  }

  .cta-button {
    display: inline-block;
    background: #007aff;
    color: white;
    padding: 10px 20px;
    border-radius: 8px;
    text-decoration: none;
    transition: background 0.3s ease;
  }

  .cta-button:hover {
    background: #005ecb;
  }

  .image-banner {
    width: 100%;
    height: 250px;
    object-fit: cover;
    border-radius: 12px;
    margin-bottom: 25px;
  }

  .faq {
    margin-top: 30px;
  }

  .faq h3 {
    margin-top: 20px;
    color: #007aff;
  }

  @keyframes fadeIn {
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
  }
</style>

<section>
  <img src="https://images.unsplash.com/photo-1588072432836-e10032774350?auto=format&fit=crop&w=1200&q=80" class="image-banner" alt="Admitere Universitate">
  <h2>Informații generale despre Admitere</h2>
  <p class="info-block">Universitatea Virtuală oferă un proces de admitere complet online, rapid și transparent. Candidații pot aplica direct prin platforma dedicată, urmând pașii indicați și încărcând documentele necesare.</p>
  <p class="info-block"><strong>Perioade admitere:</strong><br>
    • Admitere vară: <strong>1 iulie – 30 iulie</strong><br>
    • Admitere toamnă: <strong>1 septembrie – 25 septembrie</strong>
  </p>
</section>

<section>
  <h2>Programe de studii și profesori</h2>
  <table>
    <tr>
      <th>Program de studii</th>
      <th>Profesori</th>
    </tr>
    <tr>
      <td>Informatica</td>
      <td>Prof. Dr. Andrei Popescu, Conf. Dr. Irina Dinu</td>
    </tr>
    <tr>
      <td>Psihologie</td>
      <td>Lect. Dr. Maria Ionescu, Prof. Dr. Sorin Matei</td>
    </tr>
    <tr>
      <td>Administrație Publică</td>
      <td>Prof. Dr. Mihai Georgescu, Conf. Dr. Ana Bucur</td>
    </tr>
    <tr>
      <td>Management</td>
      <td>Lect. Dr. Elena Bălan, Conf. Dr. Vlad Stănescu</td>
    </tr>
  </table>
</section>

<section>
  <h2>Documente necesare pentru înscriere</h2>
  <ul>
    <li>Cerere de înscriere completată online</li>
    <li>Diploma de bacalaureat/licență (după caz)</li>
    <li>Copie carte de identitate</li>
    <li>Fotografie tip buletin</li>
    <li>Dovada achitării taxei de înscriere</li>
  </ul>
</section>

<section>
  <h2>Rezultate Admitere</h2>
  <p>Rezultatele vor fi afișate online pe pagina oficială a universității în funcție de sesiune:</p>
  <ul>
    <li>Rezultate vară: <strong>1 august</strong></li>
    <li>Rezultate toamnă: <strong>28 septembrie</strong></li>
  </ul>
  <p style="text-align:center;">
    <a href="#" class="cta-button">Vezi Rezultatele Admitere</a>
  </p>
</section>

<section>
  <h2>Întrebări frecvente</h2>
  <div class="faq">
    <h3>Pot aplica dacă nu am toate documentele în original?</h3>
    <p>Da, este permisă înscrierea provizorie cu copii scanate. Documentele originale trebuie aduse până la începutul anului universitar.</p>

    <h3>Există locuri bugetate?</h3>
    <p>Da. Se oferă un număr limitat de locuri fără taxă pentru cei mai buni candidați, în funcție de media obținută.</p>

    <h3>Se oferă consiliere pentru alegerea programului?</h3>
    <p>Desigur. Poți contacta un consilier academic prin formularul de contact sau prin chat-ul live.</p>
  </div>
</section>

<?php include('footer.php'); ?>
