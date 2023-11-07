<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<style type="text/css">
	/* styles.css */
.gallery {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
    gap: 10px;
}

.image {
    overflow: hidden;
}

.image img {
    width: 100%;
    height: auto;
}
h1{
	color: orange;
}


	</style>
</head>
<body>


	<center><h1> BIENVENUE DANS L'UNIVERS DES MAILLOTS</h1></center>
	<br>
	<h2> CONTACT: <a href="tel:+2250788970206">0788970206 </a></h2>
<div class="gallery">
        <div class="image">
            <img src="maillot a publier\1.jpg" alt="1">
        </div>
        <div class="image">
            <img src="maillot a publier\2.jpg" alt="2">
        </div>
        <div class="image">
            <img src="maillot a publier\3.jpg" alt="3">
        </div>
        <div class="image">
            <img src="maillot a publier\4.jpg" alt="4">
        </div>
        <div class="image">
            <img src="maillot a publier\5.jpg" alt="5">
        </div>
        <div class="image">
            <img src="maillot a publier\6.jpg" alt="6">
        </div>

        <!-- Ajoutez plus d'images ici -->
    </div>
    <br><br>

    <div class="gallery">
        <div class="image">
            <img src="maillot a publier\7.jpg" alt="7">
        </div>
        <div class="image">
            <img src="maillot a publier\8.jpg" alt="8">
        </div>
        <div class="image">
            <img src="maillot a publier\9.jpg" alt="9">
        </div>
        <div class="image">
            <img src="maillot a publier\10.jpg" alt="10">
        </div>
        <div class="image">
            <img src="maillot a publier\11.jpg" alt="11">
        </div>
        <div class="image">
            <img src="maillot a publier\12.jpg" alt="12">
        </div>
        
        <!-- Ajoutez plus d'images ici -->
    </div>

    <br><br>

 <div class="gallery">
        <div class="image">
            <img src="maillot a publier\13.jpg" alt="13">
        </div>
        <div class="image">
            <img src="maillot a publier\14.jpg" alt="14">
        </div>
        <div class="image">
            <img src="maillot a publier\15.jpg" alt="15">
        </div>
        <div class="image">
            <img src="maillot a publier\16.jpg" alt="16">
        </div>
        <div class="image">
            <img src="maillot a publier\17.jpg" alt="17">
        </div>
        <div class="image">
            <img src="maillot a publier\18.jpg" alt="18">
        </div>    


	 <script src="script.js">
// script.js
document.addEventListener('DOMContentLoaded', function() {
    const images = document.querySelectorAll('.image');

    images.forEach(function(image) {
        image.addEventListener('click', function() {
            // Créez un élément modal pour afficher l'image en grand
            const modal = document.createElement('div');
            modal.classList.add('modal');
            const imageModal = document.createElement('img');
            imageModal.src = image.querySelector('img').src;
            modal.appendChild(imageModal);

            // Ajoutez le modal à la page
            document.body.appendChild(modal);

            // Fermez le modal en cliquant dessus
            modal.addEventListener('click', function() {
                document.body.removeChild(modal);
            });
        });
    });
});
Ce script JavaScript permet aux utilisateurs de cliquer sur une image pour l'agrandir dans un modal. Le modal se ferme lorsque l'utilisateur clique dessus.

Personnalisez le HTML, le CSS et le JavaScript en fonction de vos besoins spécifiques pour créer la galerie de photos souhaitée. Vous pouvez également ajouter des fonctionnalités avancées, telles que le défilement des images, la pagination, le filtrage par catégorie, etc.







   </script>










<?php
 if (isset($_FILES['images'])) {
  $files = $_FILES['images'];

  foreach ($files['tmp_name'] as $key => $tmpName) {
    $fileName = $files['name'][$key];
    $fileTmpName = $tmpName;
    $fileDestination = 'uploads/' . $fileName; // Le répertoire de destination

    move_uploaded_file($fileTmpName, $fileDestination);
  }
}
?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>