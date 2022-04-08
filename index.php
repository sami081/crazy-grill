<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>contact</title>
</head>
<body>
  <form action="./contact.php" method="post">
  <div class="bloc-information">
          <div class="div-form">
            <label for="email">Votre email :</label>
            <input type="email" id="email" name="email" required />
          </div>
          <div class="div-form">
            <label for="lastname">Votre nom :</label>
            <input type="text" id="lastname" name="lastname" required/>
          </div>
          <div class="div-form">
            <label for="firstname">Votre prénom : </label>
            <input type="text" id="firstname" name="firstname" required />
          </div>
          </div>
          <div class="bloc-reservation">
          <div class="div-form">
            <label for="start">Date de réservation :</label>

            <input
              type="date"
              id="start"
              name="reservation"
              value="2022-03-01"
              
              required
            />
          </div>
          <div class="div-form">
            <label for="hour" >heure :
            <select name="hour" id="hour" required>
              <option value="hour-select" >
                <option value="11">11:00</option>
                <option value="12">12:00</option>
                <option value="13">13:00</option>
                <option value="14">14:00</option>
                <option value="18">18:00</option>
                <option value="19">19:00</option>
                <option value="20">20:00</option>
                <option value="21">21:00</option>
                <option value="22">22:00</option>
                
                

              </option></select>
             </label>

            
          </div>
          <div class="div-form">
            <label for="telNo">Votre téléphone :</label>
            <input id="telNo" name="telNo" type="tel"
            placeholder="01 23 45 67 89" required>
          </div>
          <div class="div-form">
            <label for="number">Nombre de personne :</label> 
            <input type="number" name="number" id="number" min="1" max="10" width="6em">
          </div>
          <div class="div-form">
            <label for="message">Votre message :</label>
            <textarea name="message"  id="message" class="bloc-text"></textarea>
          </div>
          </div>
          <button type="submit" class="send" name="valider">Envoyer</button>
  </form>
  
</body>
</html>