<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Form-User</title>

    <link href="<?php echo base_url('assets/vendor/fontawesome-free/css/all.min.css');?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('assets/css/sb-admin-2.min.css'); ?>" rel="stylesheet" type="text/css">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Inscription</h1>

                            </div>
                            <?php if (!empty($error)) { ?>
                                <div class="error-message" style="color: red;"><?php echo $error; ?></div>
                            <?php } ?>

                            <form class="user" action="<?php echo base_url('UserController/sign_up');?>" method="post">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="exampleFirstName"
                                            placeholder=" Nom" name="firstname"required>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" id="exampleLastName"
                                            placeholder="Prenom" name="name"required>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="label label-default">Date de naissance</label>
                                    <input type="date" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Date de naissance" name="birthday" required>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Adresse email" name="mail" required>
                                </div>
                                <div class="form-group">
                                    <select id="exampleInputEmail" class="" name="id_gender"> Genre
                                        <?php for ($i = 0; $i < count($gender); $i++) { ?>
                                            <option value="<?php echo $gender[$i]->get_id_gender(); ?>"><?php echo $gender[$i]->get_name(); ?></option>
                                        <?php } ?>
                                    </select>
                                    <select id="exampleInputEmail" class="" name="state"> Status
                                            <option value="1"> Simple Utilisateur</option>
                                            <option value="2"> Admin</option>
                                    </select>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user"
                                            id="exampleInputPassword" placeholder="Mot de passe" name="password1" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user"
                                            id="exampleRepeatPassword" placeholder="Confirmation mot de passe" name="password2" required>
                                    </div>
                                </div>
                                <!-- < href="login.html" class="btn btn-primary btn-user btn-block">
                                    S'inscrire
                                </a> -->
                                <input type="submit" value="S'inscrire" class="btn btn-primary btn-user btn-block">
                            </form>
                                <hr>
                            <div class="text-center">
                                <a class="small" href="<?php echo base_url('UserController/index')?>">Vous avez deja un compte?Login!</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js');?>"></script>
    <script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js');?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url('assets/vendor/jquery-easing/jquery.easing.min.js');?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url('assets/js/sb-admin-2.min.js');?>"></script>

</body>

</html>