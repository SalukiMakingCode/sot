<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Connexion</title>
    <?php
    include '../ui-kit/head.php';
    ?>
</head>

<body>
<?php
include '../ui-kit/menu.php';
if (!empty($_GET['inscription'])) {
    $inscription=1;
}
else $inscription=0;
?>
<div class="connexion">
    <div class="container-fluid text-center mx-auto">

        <div class="btn-group">
            <button class="btn btn-link btn-signup <?php if ($inscription==0) echo "active"; ?>">Connexion</button>
            <button class="btn btn-link btn-register <?php if ($inscription==1) echo "active"; ?>">S'inscrire</button>
        </div>

        <div class="d-flex justify-content-center">

            <div class="svg-decoration col-lg-1 col-xl-3">
                <img src="../img/woman-with-laptop.svg" alt="Une femme sur son pc" />
            </div>

            <div class="signup col-12 col-md-12 col-lg-9 col-xl-6 <?php if ($inscription==1) echo "hidden"; else echo "active"; ?>">
                <br/>
                <h1>Connexion à votre compte</h1>
                <p>Développez des compétences pour aujourd'hui, demain et l'avenir. Une éducation pour préparer votre
                    carrière.
                </p>

                <form>
                    <div class="form-group input-group-lg">
                        <input type="email" class="form-control rounded" id="email" placeholder="Adresse mail">
                    </div>
                    <div class="form-group input-group-lg password">
                        <input type="password" class="form-control rounded" id="password" placeholder="Mot de passe">
                        <img src="https://img.icons8.com/material-outlined/24/000000/visible.png"
                             alt="Oeil pour voir le mot de passe" />
                    </div>
                    <div class="form-group form-check d-flex justify-content-between">
                        <div class="checkbox-remember">
                            <input type="checkbox" class="check-remember" id="check-remember">
                            <label class="form-check-label" for="check-remember">Se souvenir de moi</label>
                        </div>
                        <button class="btn btn-link">Mot de passe oublié ?</button>
                    </div>

                    <button type="submit" class="btn col-md-12 btn-lg">Se connecter</button>
                </form>

                <div class="new-register d-flex justify-content-center">
                    <p>Vous n'avez pas de compte ?</p>
                    <button class="btn btn-link" onclick="location.href='connexion.php?inscription=go';">S'inscrire <i class="fas fa-chevron-right"></i></button>
                </div>

                <!--          <div class="buttons-socials">-->
                <!--            <div class="row d-flex align-items-center">-->
                <!--              <div class="col-4 col-md-5"></div>-->
                <!--              <div class="col-2 col-md-2">ou</div>-->
                <!--              <div class="col-4 col-md-5"></div>-->
                <!--            </div>-->
                <!---->
                <!--            <div class="group-btn">-->
                <!--              <button class="btn col-md-12 btn-primary rounded-pill"> <i class="fab fa-linkedin"></i> Continuer avec-->
                <!--                Linkedin</button>-->
                <!--              <button class="btn col-md-12 btn-light rounded-pill"> <i class="fab fa-google"></i> Continuer avec-->
                <!--                Gmail</button>-->
                <!--              <button class="btn col-md-12 btn-facebook rounded-pill"> <i class="fab fa-facebook"></i> Continuer avec-->
                <!--                Facebook</button>-->
                <!--            </div>-->
                <!---->
                <!--          </div>-->

            </div>

            <div class="register col-12 col-md-12 col-lg-9 col-xl-6  <?php if ($inscription==0) echo "hidden"; else echo "active"; ?>">
                <br/>
                <h1>Création de votre compte</h1>
                <p>Développez des compétences pour aujourd'hui, demain et l'avenir. Une éducation pour préparer votre
                    carrière.
                </p>

                <form>
                    <div class="form-group input-group-lg d-flex flex-row justify-content-between">
                        <input type="text" class="form-control rounded" id="name" aria-describedby="name" placeholder="Nom">
                        <input type="text" class="form-control rounded" id="firstname" aria-describedby="firstname"
                               placeholder="Prénom">
                    </div>
                    <div class="form-group input-group-lg">
                        <input type="email" class="form-control rounded" id="mail" aria-describedby="Adresse mail"
                               placeholder="Adresse mail">
                    </div>
                    <div class="form-group input-group-lg password">
                        <input type="password" class="form-control rounded" id="exampleInputPassword1" placeholder="Mot de passe">
                        <img src="https://img.icons8.com/material-outlined/24/000000/visible.png"
                             alt="Oeil pour voir le mot de passe" />
                    </div>

                    <div class="birthday">
                        <p>Votre anniversaire</p>
                        <div class="form-group d-flex flex-row input-group-lg">

                            <select class="form-control" id="day">
                                <option>Jour</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                                <option value="23">23</option>
                                <option value="24">24</option>
                                <option value="25">25</option>
                                <option value="26">26</option>
                                <option value="27">27</option>
                                <option value="28">28</option>
                                <option value="29">29</option>
                                <option value="30">30</option>
                                <option value="31">31</option>
                            </select>

                            <select class="form-control" id="month">
                                <option>Mois</option>
                                <option value="January">January</option>
                                <option value="Febuary">Febuary</option>
                                <option value="March">March</option>
                                <option value="April">April</option>
                                <option value="May">May</option>
                                <option value="June">June</option>
                                <option value="July">July</option>
                                <option value="August">August</option>
                                <option value="September">September</option>
                                <option value="October">October</option>
                                <option value="November">November</option>
                                <option value="December">December</option>
                            </select>

                            <select class="form-control" id="year">
                                <option>Année</option>
                                <option value="2020">2020</option>
                                <option value="2019">2019</option>
                                <option value="2018">2018</option>
                                <option value="2017">2017</option>
                                <option value="2016">2016</option>
                                <option value="2015">2015</option>
                                <option value="2014">2014</option>
                                <option value="2013">2013</option>
                                <option value="2012">2012</option>
                                <option value="2011">2011</option>
                                <option value="2010">2010</option>
                                <option value="2009">2009</option>
                                <option value="2008">2008</option>
                                <option value="2007">2007</option>
                                <option value="2006">2006</option>
                                <option value="2005">2005</option>
                                <option value="2004">2004</option>
                                <option value="2003">2003</option>
                                <option value="2002">2002</option>
                                <option value="2001">2001</option>
                                <option value="2000">2000</option>
                                <option value="1999">1999</option>
                                <option value="1998">1998</option>
                                <option value="1997">1997</option>
                                <option value="1996">1996</option>
                                <option value="1995">1995</option>
                                <option value="1994">1994</option>
                                <option value="1993">1993</option>
                                <option value="1992">1992</option>
                                <option value="1991">1991</option>
                                <option value="1990">1990</option>
                                <option value="1989">1989</option>
                                <option value="1988">1988</option>
                                <option value="1987">1987</option>
                                <option value="1986">1986</option>
                                <option value="1985">1985</option>
                                <option value="1984">1984</option>
                                <option value="1983">1983</option>
                                <option value="1982">1982</option>
                                <option value="1981">1981</option>
                                <option value="1980">1980</option>
                                <option value="1979">1979</option>
                                <option value="1978">1978</option>
                                <option value="1977">1977</option>
                                <option value="1976">1976</option>
                                <option value="1975">1975</option>
                                <option value="1974">1974</option>
                                <option value="1973">1973</option>
                                <option value="1972">1972</option>
                                <option value="1971">1971</option>
                                <option value="1970">1970</option>
                                <option value="1969">1969</option>
                                <option value="1968">1968</option>
                                <option value="1967">1967</option>
                                <option value="1966">1966</option>
                                <option value="1965">1965</option>
                                <option value="1964">1964</option>
                                <option value="1963">1963</option>
                                <option value="1962">1962</option>
                                <option value="1961">1961</option>
                                <option value="1960">1960</option>
                                <option value="1959">1959</option>
                                <option value="1958">1958</option>
                                <option value="1957">1957</option>
                                <option value="1956">1956</option>
                                <option value="1955">1955</option>
                                <option value="1954">1954</option>
                                <option value="1953">1953</option>
                                <option value="1952">1952</option>
                                <option value="1951">1951</option>
                                <option value="1950">1950</option>
                                <option value="1949">1949</option>
                                <option value="1948">1948</option>
                                <option value="1947">1947</option>
                                <option value="1946">1946</option>
                                <option value="1945">1945</option>
                                <option value="1944">1944</option>
                                <option value="1943">1943</option>
                                <option value="1942">1942</option>
                                <option value="1941">1941</option>
                                <option value="1940">1940</option>
                            </select>

                        </div>

                    </div>

                    <button type="submit" class="btn col-md-12 btn-lg">S'inscrire</button>
                </form>

                <div class="new-register d-flex justify-content-center">
                    <p>Vous avez déjà un compte ?</p>
                    <button class="btn btn-link" onclick="location.href='connexion.php';">Se connecter <i class="fas fa-chevron-right"></i></button>
                </div>

                <!--          <div class="buttons-socials">-->
                <!--            <div class="row d-flex align-items-center">-->
                <!--              <div class="col-4 col-md-5"></div>-->
                <!--              <div class="col-2 col-md-2">ou</div>-->
                <!--              <div class="col-4 col-md-5"></div>-->
                <!--            </div>-->
                <!---->
                <!--            <div class="group-btn">-->
                <!--              <button class="btn col-md-12 btn-primary d-flex justify-content-around rounded-pill"> <i-->
                <!--                  class="fab fa-linkedin"></i> Continuer avec-->
                <!--                Linkedin</button>-->
                <!--              <button class="btn col-md-12 btn-light rounded-pill"> <i class="fab fa-google"></i> Continuer avec-->
                <!--                Gmail</button>-->
                <!--              <button class="btn col-md-12 btn-facebook rounded-pill"> <i class="fab fa-facebook"></i> Continuer avec-->
                <!--                Facebook</button>-->
                <!--            </div>-->
                <!--          </div>-->
            </div>

            <div class="svg-decoration col-lg-0 col-xl-3">
                <img src="../img/man-reads-paper.svg" alt="Un homme qui lit" />
            </div>

        </div>
    </div>
</div>

<?php
include '../ui-kit/footer.php';
?>

<script src="../js/swipe.js"></script>
</body>

</html>