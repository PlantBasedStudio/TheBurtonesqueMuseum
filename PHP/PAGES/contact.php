<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include '../COMPONENTS/important_link.php' ?>
    <link rel="stylesheet" href="../../CSS/contact_style.css">
    <title>Contact</title>
</head>

<body>
    <?php include '../COMPONENTS/header.php' ?>

    <h1>CONTACT</h1>
    <form class="container">

        <input type="email" id="email" name="email" required placeholder="Votre adresse e-mail ...">

        <input type="text" id="object" name="object" pattern="[0-9]{2}" required placeholder="Objet de votre demande ...">

        <textarea id="message" name="message" rows="4" cols="35" required placeholder="Votre message ..."></textarea>
        <input type="submit" value="Envoyer" class="submit">
    </form>

    <?php include '../COMPONENTS/footer.php' ?>
</body>

</html>