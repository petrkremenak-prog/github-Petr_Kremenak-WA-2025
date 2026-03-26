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
                        <label for="rok_vydani">Rok Vydání <span>*</span> </label>
                        <input type="text" id="rok_vydani" name="Rok_vydani" placeholder="Rok výdeje" required>
                    </div>
                </div>
                <div>
                        <label for="cena">Cena<span></span> </label>
                        <input type="number" id="cena" name="Cena">
                </div>
                <div>
                        <label for="ISBN">ISBN <span>*</span> </label>
                        <input type="text" id="ISBN" name="isbn" required>
                </div>
                        <label for="Synopsis">Obsah Knihy </label>
                        <textarea name="synopsis" id="Synopsis" rows ="5" colons="5"></textarea>
                <div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Obrázky (můžete nahrát více)</label>
                        <label class="flex flex-col items-center justify-center w-full p-6 border-2 border-dashed border-gray-300 rounded-2xl cursor-pointer hover:border-indigo-500 hover:bg-indigo-50 transition">
                            <span class="text-gray-600 font-medium">Klikni pro výběr souborů</span>
                            <span class="text-sm text-gray-400 mt-1">JPG / PNG / WebP – více souborů najednou</span>
                            <input type="file" id="images" name="images[]" multiple accept="image/*" class="hidden">
                        </label>
                    </div>
                    <div>
                        <button type="submit">Přidat Knihu</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</body>
</html>