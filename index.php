<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link   href="assets/js/main.js" >
    <link rel="stylesheet" type="text/css" href="assets/css/screen.css">


    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>


<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

</head>
<body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


<!-- formulaire de carte de visite -->

<div class="allcontent">
    <div class="paragraphe"><p> Bibliothèque </p></div>
  <div class="container content" >
    <form>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputEmail4">Email</label>
          <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
        </div>
        <div class="form-group col-md-6">
          <label for="inputPassword4">Téléphone</label>
          <input type="phone" class="form-control" id="inputPhone" placeholder="Téléphone">
        </div>
      </div>
      <div class="form-group">
        <label for="inputAddress">Nom</label>
        <input type="text" class="form-control" id="inputName" placeholder=" Solo ">
      </div>
      <div class="form-group">
        <label for="inputAddress2">Prénom</label>
        <input type="text" class="form-control" id="" placeholder=" Jacques">
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputCity">Adresse</label>
          <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
        </div>
        
      </div>
      
      </div>
      <button type="submit" class="btn btn-primary">Enregistrer</button>
    </form>
  </div>
</div>



<!-- menu lateral -->

<div class="nav-side-menu">
    <div class="brand">Gestionnaire de cartes de visites</div>
    <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
  
        <div class="menu-list">
  
            <ul id="menu-content" class="menu-content collapse out">
                <li>
                  <a href="#">
                  <i class="fa fa-dashboard fa-lg"></i> Dashboard
                  </a>
                </li>
        

                <li data-toggle="collapse" data-target="#service" class="collapsed">
                  <a href="#"><i class="fa fa-globe fa-lg"></i> Menu </a>
                </li>  
                <ul class="sub-menu collapse" id="service">
                  <li>Ajouter une carte</li>
                  <li>Modifier une carte</li>
                  <li>Partager les cartes</li>
                </ul>


                <li data-toggle="collapse" data-target="#new" class="collapsed">
                  <a href="#"><i class="fa fa-car fa-lg"></i> Paramètres </a>
                </li>
                <ul class="sub-menu collapse" id="new">
                  <li>Changer le mot de passe</li>
                  <li>Ajouter un utilisateur</li>
                </ul>


                 <li>
                  <a href="#">
                  <i class="fa fa-user fa-lg"></i> Profile
                  </a>
                  </li>

                 <li>
                  <a href="#">
                  <i class="fa fa-users fa-lg"></i> Deconexion
                  </a>
                </li>
            </ul>
     </div>
</div>



</div>
</body>
</html>