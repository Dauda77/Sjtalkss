<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion sécurisée</title>
    <style>
        .bodies {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f8f8;
        }
        
        .hed {
            background-color: #333;
            color: #fff;
            padding: 10px;
        }
        
        .hed ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
        }
        
        .hed ul li {
            margin-right: 20px;
        }
        
        .manny {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        
        .sign-in-htm {
            background-color: #fff;
            border-radius: 20px;
            max-width: 400px;
            padding: 40px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        
        .group {
            margin-bottom: 20px;
        }
        
        .label {
            display: block;
            font-size: 14px;
            color: #333;
            margin-bottom: 5px;
        }
        
        .inputy {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border-radius: 5px;
            border: 1px solid #ccc;
            transition: border-color 0.3s ease-in-out;
        }
        
        .inputy:focus {
            outline: none;
            border-color: #66afe9;
        }
        
        .invalid-feedback {
            color: #dc3545;
            font-size: 14px;
            margin-top: 5px;
        }
        
        .buttony {
            display: block;
            width: 100%;
            padding: 10px;
            font-size: 16px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out;
        }
        
        .buttony:hover {
            background-color: #45a049;
        }
        
        .hr {
            border: none;
            border-top: 1px solid #ccc;
            margin: 20px 0;
        }
        
        .foot-lnk {
            text-align: center;
            font-size: 14px;
        }
    </style>
</head>
<body class="bodies">
    <!-- <header class="hed">
        <ul>
        <li ><a href="sign-up.php">SIGN-UP</a></li>
            <li><a href="sign-in.php">SIGN-IN</a></li>
        </ul>
    </header> -->
    <main class="manny">
        <section>
            <form action="trait.php" method="post" class="sign-in-htm">
                <div class="group">
                    <label for="email" class="label">Email</label>
                    <input type="email" id="email" name="email" class="inputy <?php if(isset($emailMsgErreur) && !empty($emailMsgErreur)) echo 'is-invalid'; ?>" aria-describedby="emailFeedback">
                    <?php if(isset($emailMsgErreur)){ ?>
                    <div class="invalid-feedback" id="emailFeedback">
                        <?php echo $emailMsgErreur; ?>
                    </div>
                    <?php } ?>
                </div>
                <div class="group">
                    <label for="pass" class="label">Mot de Passe</label>
                    <input type="password" id="pass" name="pass" class="inputy <?php if(isset($passMsgErreur) && !empty($passMsgErreur)) echo 'is-invalid'; ?>" aria-describedby="passFeedback">
                    <?php if(isset($passMsgErreur)){ ?>
                    <div class="invalid-feedback" id="passFeedback">
                        <?php echo $passMsgErreur; ?>
                    </div>
                    <?php } ?>
                </div>
                <div class="group">
                    <input type="submit" class="buttony" value="Connexion" id="login">
                </div>
            </form>
            <div class="hr"></div>
            <div class="foot-lnk">
                <label for="tab-1"><a href="sign-up.php">Pas encore membre?</a>
            </div>
        </section>
    </main>
</body>
</html>
