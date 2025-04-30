<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <form action="traitement.php" method="post">
        <div class="mb-3">
        <label for="nom" class="form-label">Votre nom :</label>
        <input type="text" class="form-control" id="nom" placeholder="nom" name="nom">
        </div>

        <select class="form-select" aria-label="Default select example" name="pays">
            <option selected value="fr">France</option>
            <option value="be">Belgique</option>
        </select>

        <div class="mb-3">
            <label for="message" class="form-label">Votre message :</label>
            <textarea class="form-control" id="message" placeholder="message" name="message"></textarea>
        </div>
        
        <div class="col-12">
            <button class="btn btn-primary" type="submit">Envoyer</button>
        </div>
    </form>
</body>
</html>