<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <div>
            <h2>přidat novou knihu</h2>
            <p>Vyplňte knihu a uložte do databáze.</p>
        </div>
        <div>
            <form action="">
                <div>
                    <div>
                        <label for="title">Název Knihy <span>*</span></label>
                        <input type="text" id="title" name="Title" required>
                    </div>
                </div>
                <div>
                    <div>
                        <label for="autor">Autor Knihy <span>*</span> </label>
                        <input type="text" id="autor" name="Autor" required>
                    </div>
                </div>
                <div>
                    <div>
                        <label for="synopsis">Obsah <span>*</span> </label>
                        <input type="text" id="synopsis" name="Synopsis">
                    </div>
                </div>
                <div>
                    <div>
                        <label for="rok_vydani">Rok Vydání <span>*</span> </label>
                        <input type="text" id="rok_vydani" name="Rok_vydani" required>
                    </div>
                </div>
                <div>
                    <div>
                        <button type="submit">Přidat Knihu</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</body>
</html>