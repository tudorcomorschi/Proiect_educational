<?php include('header.php'); ?>

<style>
  .galerie-container {
    padding: 40px 20px;
    background: #f9f9f9;
    text-align: center;
  }

  .galerie-container h1 {
    margin-bottom: 10px;
  }

  .galerie-container p {
    margin-bottom: 30px;
    color: #555;
    font-size: 18px;
  }

  .galerie-grid {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 20px;
  }

  .galerie-grid img {
    width: 300px;
    height: 200px;
    object-fit: cover;
    border-radius: 10px;
    transition: transform 0.4s ease, box-shadow 0.4s ease;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
  }

  .galerie-grid img:hover {
    transform: scale(1.05);
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
  }
</style>

<div class="galerie-container">
  <h1>Galerie Foto</h1>
  <p>Viața universitară în imagini:</p>

  <div class="galerie-grid">
    <img src="https://images.unsplash.com/photo-1603575448366-a45129cb1dd0?auto=format&fit=crop&w=800&q=80" alt="Campus">
    <img src="https://images.unsplash.com/photo-1531219432768-9f540ce91ef6?auto=format&fit=crop&w=800&q=80" alt="Bibliotecă">
    <img src="https://images.unsplash.com/photo-1596495577886-d920f1fb7238?auto=format&fit=crop&w=800&q=80" alt="Laborator IT">
    <img src="https://images.unsplash.com/photo-1544717305-2782549b5136?auto=format&fit=crop&w=800&q=80" alt="Studenți în curs">
    <img src="https://images.unsplash.com/photo-1590012314607-cda9d9b699ae?auto=format&fit=crop&w=800&q=80" alt="Sesiune studiu">
    <img src="https://images.unsplash.com/photo-1529070538774-1843cb3265df?auto=format&fit=crop&w=800&q=80" alt="Eveniment universitar">
    <img src="https://images.unsplash.com/photo-1531240065882-3dba7f9dbb06?auto=format&fit=crop&w=800&q=80" alt="Lucru în echipă">
    <img src="https://images.unsplash.com/photo-1588072432836-e10032774350?auto=format&fit=crop&w=800&q=80" alt="Prezentare proiect">
    <img src="https://images.unsplash.com/photo-1555529669-e69f98a28d3e?auto=format&fit=crop&w=800&q=80" alt="Cafenea universitară">
    <img src="https://images.unsplash.com/photo-1550583724-b2694b85b150?auto=format&fit=crop&w=800&q=80" alt="Sala de lectură">
    <img src="https://images.unsplash.com/photo-1504384308090-c894fdcc538d?auto=format&fit=crop&w=800&q=80" alt="Curs online">
    <img src="https://images.unsplash.com/photo-1579126014971-7c61e56cf0f2?auto=format&fit=crop&w=800&q=80" alt="Echipamente moderne">
  </div>
</div>

<?php include('footer.php'); ?>
