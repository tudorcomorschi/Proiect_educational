<?php include('header.php'); ?>

<h1>Echipa Noastră de Profesori</h1>
<p>Profesori dedicați, cu experiență vastă în domeniul educației, cercetării și formării digitale.</p>

<style>
.card-profesor {
  width: 250px;
  background: #fff;
  border-radius: 10px;
  box-shadow: 0 2px 10px rgba(0,0,0,0.1);
  padding: 20px;
  text-align: center;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}
.card-profesor:hover {
  transform: translateY(-5px);
  box-shadow: 0 5px 15px rgba(0,0,0,0.2);
}
.card-profesor img {
  width: 120px;
  border-radius: 50%;
  margin-bottom: 10px;
}
.card-profesor h3 {
  margin-bottom: 5px;
}
.card-profesor p {
  font-size: 14px;
  margin: 4px 0;
}
.card-profesor a {
  display: inline-block;
  margin-top: 10px;
  color: #007aff;
  text-decoration: none;
  font-weight: bold;
}
.card-profesor a:hover {
  text-decoration: underline;
}
</style>

<div style="display: flex; flex-wrap: wrap; gap: 30px; margin-top: 30px; justify-content: center;">

  <div class="card-profesor">
    <img src="https://randomuser.me/api/portraits/men/32.jpg">
    <h3>Dr. Andrei Popescu</h3>
    <p>Informatică</p>
    <p>AI, Machine Learning</p>
    <p>✉️ andrei.popescu@uv.ro</p>
    <a href="popescu.php">Vezi profilul</a>
  </div>

  <div class="card-profesor">
    <img src="https://randomuser.me/api/portraits/women/44.jpg">
    <h3>Prof. Elena Marin</h3>
    <p>Psihologie</p>
    <p>Cognitivă, Educațională</p>
    <p>✉️ elena.marin@uv.ro</p>
    <a href="marin.php">Vezi profilul</a>
  </div>

  <div class="card-profesor">
    <img src="https://randomuser.me/api/portraits/men/65.jpg">
    <h3>Conf. Dr. Mihai Ionescu</h3>
    <p>Drept</p>
    <p>Drept internațional</p>
    <p>✉️ mihai.ionescu@uv.ro</p>
    <a href="ionescu.php">Vezi profilul</a>
  </div>

  <div class="card-profesor">
    <img src="https://randomuser.me/api/portraits/women/52.jpg">
    <h3>Lect. Univ. Ana Radu</h3>
    <p>Economie</p>
    <p>Finanțe, Business</p>
    <p>✉️ ana.radu@uv.ro</p>
    <a href="radu.php">Vezi profilul</a>
  </div>

  <div class="card-profesor">
    <img src="https://randomuser.me/api/portraits/men/45.jpg">
    <h3>Dr. Cristian Barbu</h3>
    <p>Management</p>
    <p>Leadership, Inovație</p>
    <p>✉️ cristian.barbu@uv.ro</p>
    <a href="#">Vezi profilul</a>
  </div>

  <div class="card-profesor">
    <img src="https://randomuser.me/api/portraits/women/60.jpg">
    <h3>Prof. Simona Dobre</h3>
    <p>Comunicare</p>
    <p>Media, Relații Publice</p>
    <p>✉️ simona.dobre@uv.ro</p>
    <a href="#">Vezi profilul</a>
  </div>

  <div class="card-profesor">
    <img src="https://randomuser.me/api/portraits/men/78.jpg">
    <h3>Dr. Vlad Mureșan</h3>
    <p>Matematică</p>
    <p>Statistică, Analiză</p>
    <p>✉️ vlad.muresan@uv.ro</p>
    <a href="#">Vezi profilul</a>
  </div>

  <div class="card-profesor">
    <img src="https://randomuser.me/api/portraits/women/33.jpg">
    <h3>Lect. Univ. Ioana Teodorescu</h3>
    <p>Sociologie</p>
    <p>Educație, Politici publice</p>
    <p>✉️ ioana.teodorescu@uv.ro</p>
    <a href="#">Vezi profilul</a>
  </div>

</div>

<?php include('footer.php'); ?>
