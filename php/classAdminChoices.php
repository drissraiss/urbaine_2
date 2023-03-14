<?php
class AdminChoices
{
    public static function notifications()
    {
?>
        <div class="notifications py-3 px-2 fs-4 table-responsive" style="position: relative;height: calc(100vh - 70px) !important ;">
            <div id="bar-notification" class="d-flex">
                <div class="input-group  w-auto">
                    <div class="input-group-text ">
                        <input type="checkbox" id="select-input" class="form-check-input">
                    </div>
                    <select class="w-auto fw-ligth" id="select-select" style="padding: 2px; font-family:sans-serif;">
                        <option value="all">Tous</option>
                        <option value="read">Vu</option>
                        <option value="unread">Non vu</option>
                    </select>
                </div>
                <i class="bi bi-trash3 ms-4" id="del-select"></i>
            </div>
            <div style="overflow-y: auto;">
                <table class="table table-hover" style="border-collapse: separate; border-spacing:0 20px">
                    <tbody>
                        <?php
                        for ($i = 0; $i <= 20; $i++) {
                        ?>
                            <tr class="tr-notification-unread tr-notification ">
                                <td><input type="checkbox" class="form-check-input form-check-notification"></td>
                                <td><span class="fw-bold">Avis de congé</span></td>
                                <td>Lorem ipsum dolor, sit amet consectetur ...</td>
                                <td>
                                    <span class="notification-short-del-read">
                                        <i class="bi bi-envelope-open-fill read-notification "></i>
                                        <i class="bi bi-trash3 trash-notifications"></i>
                                    </span>
                                    <span class="notification-date">
                                        Feb 3
                                    </span>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        <script>
            $(document).ready(function() {
                $(".form-check-notification").change(function() {
                    if ($(this).is(":checked")) {
                        $(this).parent().parent().addClass("select-notifications")
                    } else {
                        $(this).parent().parent().removeClass("select-notifications")
                    }

                })
                $(".trash-notifications").click(function() {
                    $(this).parent().parent().parent().fadeOut()
                })
                $("#select-input").click(() => {
                    if ($("#select-select").val() == "all") {
                        if ($("#select-input").is(":checked")) {
                            $(".form-check-notification").prop('checked', true)
                            $(".form-check-notification").parent().parent().addClass("select-notifications")
                        } else {
                            $(".form-check-notification").prop('checked', false)
                            $(".form-check-notification").parent().parent().removeClass("select-notifications")
                        }
                    } else if ($("#select-select").val() == "unread") {
                        if ($("#select-input").is(":checked")) {
                            $(".form-check-notification").each(function() {
                                if ($(this).hasClass('tr-notification-unread')) {
                                    $(this).prop('checked', true)
                                    $(this).parent().parent().addClass("select-notifications")
                                } else {
                                    $(this).prop('checked', false)
                                    $(this).parent().parent().addClass("select-notifications")
                                }
                            })
                        }
                    }
                })
                $("#del-select").click(() => {
                    $(".form-check-notification").each(function() {
                        if ($(this).is(':checked')) {
                            $(this).parent().parent().fadeOut()
                        }
                    })
                })
            })
        </script>
    <?php
    }

    public static function messages()
    {
        echo "
        <p>messages 1</p>
        <p>messages 2</p>
        <p>messages 3</p>
        <p>messages 4</p>
        ";
    }
    public static function profile()
    {
        echo "
        <p>profile 1</p>
        <p>profile 2</p>
        <p>profile 3</p>
        <p>profile 4</p>
        ";
    }
    public static function demandes()
    {
        echo "
        <p>demandes 1</p>
        <p>demandes 2</p>
        <p>demandes 3</p>
        <p>demandes 4</p>
        ";
    }
    public static function plaines()
    {
        echo "
        <p>plaines 1</p>
        <p>plaines 2</p>
        <p>plaines 3</p>
        <p>plaines 4</p>
        ";
    }
    public static function employes()
    {
    ?>
        <div>
            <!-- employes -->
            <div class="div-employes pt-3">
                <button class="btn btn-primary w-100" id="btn-add-employe">Ajouter un employé</button>
                <br>
                <br>
                <!-- s ajouter un employé -->
                <div class="pt-5" style="display:none" id="div-add-employe">
                    <article class="m-auto p-5 pt-2" id="article-add-employe">
                        <i class="bi bi-x-square-fill text-danger" id="btn-close-add-employe"></i>
                        <h4 class="card-title mt-3 text-center fw-bold">Ajouter un employé</h4>
                        <div>
                            <br>
                            <div>
                                <label for="prenom">Prénom: </label><br>
                                <input type="text" class="w-100" id="prenom">
                            </div>
                            <div>
                                <label for="vom">Nom: </label><br>
                                <input type="text" class="w-100" id="nom">
                            </div>
                            <div>
                                <label for="tel">Téléphone: </label><br>
                                <input type="tel" class="w-100" id="tel">
                            </div>
                            <div>
                                <label for="DOB">Date de naissance: </label><br>
                                <input type="date" class="w-100" id="DOB">
                            </div>
                            <div>
                                <label>Genre: </label><br>
                                <input type="radio" id="homme" name="genre"> <label class="fw-light" for="homme">Homme</label>
                                <input type="radio" id="femme" name="genre"> <label class="fw-light" for="femme">Femme</label>
                            </div>
                            <div>
                                <label for="Ville">Ville: </label><br>
                                <input type="text" class="w-100" id="Ville">
                            </div>
                            <div>
                                <label for="Adresse">Adresse: </label><br>
                                <input type="text" class="w-100" id="Adresse">
                            </div>
                            <hr>
                            <div>
                                <label for="email">Email: </label><br>
                                <input type="email" class="w-100" id="email">
                            </div>
                            <div>
                                <label for="password">Mote de pass: </label><br>
                                <input type="text" class="w-100" id="password">
                            </div>
                            <br>
                            <button class="btn btn-success w-100">Ajouter</button>
                        </div>
                </div>
            </div>
            <!-- e ajouter un employé -->
            <div id="div-info-employe" style="display:none">
                <div class="table-responsive bg-white p-2" style="position: relative;" id="div-content-info-emp">
                    <i class="bi bi-arrow-left-square-fill text-secondary" id="btn-close-info-employe"></i>
                    <div class="text-center my-4 ">
                        <img src="../assets/pexels-pixabay-220453.jpg" class="border border-3 border-dark" style="width:200px;" alt="">
                    </div>
                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                <th class="w-auto">ID : </th>
                                <td style="width: 85%;">1</td>
                            </tr>
                            <tr>
                                <th class="w-auto">Nom : </th>
                                <td style="width: 85%;">raiss</td>
                            </tr>
                            <tr>
                                <th class="w-auto">Prénom : </th>
                                <td style="width: 85%;">driss</td>
                            </tr>
                            <tr>
                                <th class="w-auto">Email : </th>
                                <td style="width: 85%;">driss@gmail.com</td>
                            </tr>
                            <tr>
                                <th class="w-auto">Téléphone : </th>
                                <td style="width: 85%;">0655189062</td>
                            </tr>
                            <tr>
                                <th class="w-auto">DOB : </th>
                                <td style="width: 85%;">25-11-2002</td>
                            </tr>
                            <tr>
                                <th class="w-auto">Genre : </th>
                                <td style="width: 85%;">Homme</td>
                            </tr>
                            <tr>
                                <th class="w-auto">Ville : </th>
                                <td style="width: 85%;">Guelmim</td>
                            </tr>
                            <tr>
                                <th class="w-auto">Adresse : </th>
                                <td style="width: 85%;">hay tayert aloulya</td>
                            </tr>
                            <tr>
                                <th class="w-auto">DOR : </th>
                                <td style="width: 85%;">12-05-2020</td>
                            </tr>
                            <tr>
                                <th class="w-auto">Status :</th>
                                <td style="width: 85%;">en ligne</td>
                            </tr>
                            <tr>
                                <th class="w-auto">Statut du compte :</th>
                                <td style="width: 85%;">
                                    <select class="form-select w-auto" name="" id="">
                                        <option value="">Normal</option>
                                        <option value="">Suspendu</option>
                                    </select>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
            <div style="width: 100%; height: 100%; background-color: #00000080;">
            </div>
            <div class="d-flex" role="search">
                <input class="form-control rounded-0" id="input-filtre" type="search" placeholder="ID, Nom, Prenom..." aria-label="Search">
                <button class="btn btn-search rounded-0 text-white fw-bold" id="btn-filtre" type="button">Filtre</button>
            </div>
            <br>
            <div class="table-responsive">
                <table class="table table-hover table-employes">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th>Email</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr user-id="1">
                            <td>1</td>
                            <td>Elkahya</td>
                            <td>Jamal</td>
                            <td>elkahya.jamal@gmail.com</td>
                            <td class="text-danger td-status">déconnecté</td>
                        </tr>
                        <tr user-id="2">
                            <td>2</td>
                            <td>Daoud</td>
                            <td>Yassin</td>
                            <td>daoud.yassin@gmail.com</td>
                            <td class="text-success td-status">en ligne</td>
                        </tr>
                        <tr user-id="3">
                            <td>3</td>
                            <td>Bairise</td>
                            <td>Lahbib</td>
                            <td>bairise.lahbib@gmail.com</td>
                            <td class="text-danger td-status">déconnecté</td>
                        </tr>
                        <tr user-id="4">
                            <td>4</td>
                            <td>saad</td>
                            <td>ahmed</td>
                            <td>saad.ahmed@gmail.com</td>
                            <td class="text-success td-status" class="">en ligne</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <script src="../scripts/employes.js"></script>

<?php
    }
    public static function parametres()
    {
        echo "
        <p>parametres 1</p>
        <p>parametres 2</p>
        <p>parametres 3</p>
        <p>parametres 4</p>
        ";
    }
}
