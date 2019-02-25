<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Comtool</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>
  <link rel='stylesheet prefetch' href='https://s3-us-west-2.amazonaws.com/s.cdpn.io/123941/rwd.table.min.css'>

  <link rel="stylesheet" href="css/style.css">

  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

  <script type="text/javascript" src="src/tri.js">

  </script>

</head>

<body>
  <h2>Comtool</h2>



  <!-- Button to open the modal login form -->
 <button onclick="document.getElementById('id01').style.display='block'">Add</button>

 <!-- The Modal -->
 <div id="id01" class="modal">
   <span onclick="document.getElementById('id01').style.display='none'"
 class="close" title="Close Modal">&times;</span>

   <!-- Modal Content -->
   <form  action="/add.php" method="post" class="modal-content animate">

     <div class="container">
       <label for="genre">Civilité</label>
       <select name="genre">
         <option value="M.">M.</option>
         <option value="Mme.">Mme.</option>
       </select>

       <label for="prenom"><b>Prénom</b></label>
       <input type="text"  name="prenom" required>

       <label for="nom"><b>Nom</b></label>
       <input type="text" name="nom" required>
     </div>

     <div class="container">
       <label for="email"><b>Email</label>
       <input type="text" name="email" required>

       <label for="societe">Societe</label>
       <input type="text" name="societe" required>

       <label for="web">Site web</label>
       <input type="text" name="web" required>

       <label for="tel1">Téléphone 1</label>
       <input type="text" name="tel1" required>

       <label for="tel2">Téléphone 2</label>
       <input type="text" name="tel2">

       <label for="langue">Langue</label>
       <select name="langue">
         <option value="FR">FR</option>
         <option value="EN">EN</option>
         <option value="IT">IT</option>
         <option value="DE">DE</option>
         <option value="SP">SP</option>
         <option value="NL">NL</option>
       </select>

       <label for="code_postal">Code Postal</label>
       <input type="text" name="code_postal" required>

       <label for="ville">Ville</label>
       <input type="text" name="ville" required>

       <label for="pays">Pays</label>
       <input type="text" name="pays" required>

       <label for="effectif">Effectif</label>
       <select name="effectif">
         <option value="1-10">1-10</option>
         <option value="11-50">11-50</option>
         <option value="51-200">51-200</option>
         <option value=">200">>200</option>
         <option value="NC">NC</option>
        </select>

      <label for="role">Role</label>
      <select name="role">
        <option value="Prescripteur">Prescripteur</option>
        <option value="Decideur">Decideur</option>
        <option value="Prescripteur/Decideur">Prescripteur/Decideur</option>
      </select>

      <label for="service">Service</label>
      <select name="service">
        <option value="Achats">Achats</option>
        <option value="BE">BE</option>
        <option value="Direction">Direction</option>
        <option value="Administratif">Administratif</option>
      </select>

      <label for="fonction">Fonction</label>
      <select name="fonction">
        <option value="Responsable">Responsable</option>
        <option value="Directeur">Directeur</option>
        <option value="Employé">Employé</option>
      </select>

      <label for="cible">Cible</label>
      <select name="cible">
        <option value="Bureau d étude">Bureau d'étude</option>
        <option value="Fabricant de produit">Fabricant de produit</option>
        <option value="Enseignement et recherche">Enseignement et recherche</option>
        <option value="Concurrent">Concurrent</option>
      </select>

      <label for="priorite">Priorité</label>
      <select name="priorite">
        <option value="Ne travaillera jamais avec nous">Ne travaillera jamais avec nous</option>
        <option value="intéressé mais compliqué">intéressé mais compliqué</option>
        <option value="intéressé et long terme ?">intéressé et long terme ?</option>
        <option value="intéressé et court terme < 3 mois">intéressé et court terme < 3 mois</option>
        <option value="commande immédiate">Commande immédiate < 1 mois</option>
      </select>

     </div>


     <div class="container" style="background-color:#f1f1f1">

     </div>
     <input type="submit" value="Envoyer" name="envoyer">
   </form>
 </div>





      <div class="w3-container" data-pattern="priority-columns">
        <table class="avectri"  class="w3-table-all" >
          <thead>

            <tr>
              <th>Identité</th>
              <th>Email</th>
              <th data-tri="1" class="selection" data-type="num">Télephone 1</th>
              <th>Langue</th>
              <th>Organisation</th>
              <th>Service</th>
              <th>Niveau</th>
              <th>Décideur</th>
              <th>Priorité</th>
              <th>Type de cible</th>
            </tr>
          </thead>

            <tbody id="data">

            </tbody>
        </table>

          <script>
            var ajax = new XMLHttpRequest();
            var method = "GET";
            var url = "data.php";
            var asynchronous = true;

            ajax.open(method, url, asynchronous);
            ajax.send();

            ajax.onreadystatechange = function()
              {
                if (this.readyState == 4 && this.status == 200)
                  {

                    var data = JSON.parse(this.responseText);
                    console.log(data);

                    var html = "";
                    for(var a = 0; a < data.length; a++)
                    {
                      var Identite = data[a].Genre + " " + data[a].Nom + " " +data[a].Prenom;
                      var email = data[a].Email;
                      var Tel1 = data[a].Tel1;
                      var langue = data[a].Langue;
                      var Organisation = data[a].Societe;
                      var Service = data[a].Service;
                      var fonction = data[a].Fonction;
                      var role = data[a].Role;
                      var priorite = data[a].Priorité;
                      var cible = data[a].Cible;

                      html += "<tr>";
                        html+= "<td>" + Identite + "</td>";
                        html+= "<td>" + email + "</td>";
                        html+= "<td>" + Tel1 + "</td>";
                        html+= "<td>" + langue + "</td>";
                        html+= "<td>" + Organisation + "</td>";
                        html+= "<td>" + Service + "</td>";
                        html+= "<td>" + fonction + "</td>";
                        html+= "<td>" + role + "</td>";
                        html+= "<td>" + priorite + "</td>";
                        html+= "<td>" + cible + "</td>";

                      html += "</tr>";
                    }

                    document.getElementById("data").innerHTML = html;
                  }
              }
          </script>





      </div><!--end of .table-responsive-->

</html>
