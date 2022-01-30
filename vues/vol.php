<!-- Ici sera la page ou on affichera le formulaire pour insérer des vols dans la bdd -->
<h1 class="font-regular-blue">Formulaire / Vols</h1>

<!-- Tout votre code doit être dans la div FrontBlock -->
<!-- Pour chaque page crée vous un css et ajouter à la suite dans index.php -->
<div class="FrontBlock">
    <!-- Coder en dessous -->

    <!-- L'icon -->
    <div class="IconCenter">
        <i class="fas fa-plane-departure"></i>
    </div>

    <!-- Le formulaure -->
    <div class="Formulaire">
        <form action="#" method="POST">
            <div class="parent">
                <div>
                    <label for="Numvol" class="font-regular-blue-16">Numéro de vol</label>
                    <input type="text" name="numvol" placeholder="Numéro de vol">
                </div>
                <div>
                    <label for="durvol" class="font-regular-blue-16">Durée du vol (en minutes)</label>
                    <input type="text" name="durvol" placeholder="Durée de vol">
                </div>
            </div>
            <div class="parent">
                <div>
                    <label for="datevol" class="font-regular-blue-16">Date du vol</label>
                    <input type="text" name="datevol" placeholder="Date en val (jj/mm/aa)">
                </div>
                <div>
                    <label for="matriculeavion" class="font-regular-blue-16">Matricule de l'avion</label>
                    <input type="text" name="matriculeaviob" placeholder="Matricule de l'avion">
                </div>
            </div>
            <div class="parent">
                <div>
                    <label for="aerodepart" class="font-regular-blue-16">Aéroport de départ</label>
                    <input type="text" name="aerodepart" placeholder="Aéroport de départ">
                </div>
                <div>
                    <label for="aeroarrive" class="font-regular-blue-16">Aéroport d'arrivé</label>
                    <input type="text" name="aeroarrive" placeholder="Aéroport d'arrivé">
                </div>
            </div>
            <div class="parent">
                <div>
                    <label for="pilone" class="font-regular-blue-16">Pilote n°1</label>
                    <input type="text" name="pilone" placeholder="Nom du pilote n°1">
                </div>
                <div>
                    <label for="piltwo" class="font-regular-blue-16">Pilote n°2</label>
                    <input type="text" name="piltwo" placeholder="Nom du pilote n°1">
                </div>
            </div>
            <div class="btn-group">
                <input type="reset" name="btn-sub" value="Effacer">
                <input type="submit" name="btn-sub" value="Soumettre" class="btn-danger">
            </div>
        </form>
    </div>
</div>