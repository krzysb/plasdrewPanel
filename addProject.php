<div class="newProject new" id="newProject">
    <h1 class="newProject__item">Dodaj projekt</h1>
    <form class="newProject__item" id="addProject" name="addNewProject" action="?action=add-project" method="post">
        <input type="text" name="customerName" placeholder="Klient" required />
        <select name="product" id="productSelect">
            <option value="Winietka">Winietka</option>
            <option value="Podstawka pod obrączki">Podstawka pod obrączki</option>
            <option value="Pudełko pod obrączki">Pudełko pod obrączki</option>
            <option value="Księga gości">Księga gości</option>
            <option value="Numerek na stół 18 cm">Numerek na stół 18 cm</option>
            <option value="Numerek na stół 35 cm">Numerek na stół 35 cm</option>
            <option value="Numerek ćwiartka">Numerek ćwiartka</option>
            <option value="Zawieszka na alkohol">Zawieszka na alkohol</option>
            <option value="Prezent dla gości">Prezent dla gości</option>
            <option value="Inne">Inne</option>
        </select>
        <select name="material" id="materialSelect">
            <option value="Sklejka" data-category="1">Sklejka</option>
            <option value="Plaster" data-category="2">Plaster</option>
        </select>
        <select name="size" id="sizeSelect">
            <option value="Sklejka 3 mm" data-category="1">Sklejka 3 mm</option>
            <option value="Sklejka 5 mm" data-category="1">Sklejka 5 mm</option>
            <option value="Plaster 7-8 cm" data-category="2">Plaster 7-8 cm</option>
            <option value="Plaster 8-9 cm" data-category="2">Plaster 8-9 cm</option>
            <option value="Plaster 16-19 cm, GK" data-category="2">Plaster 16-19 cm, GK</option>
            <option value="Plaster 28-33 cm" data-category="2">Plaster 28-33 cm</option>
            <option value="Plaster 38-42 cm" data-category="2">Plaster 38-42 cm</option>
            <option value="Inne" data-category="1">Inne</option>
            <option value="Inne" data-category="2">Inne</option>
        </select>
        <input type="text" name="quantity" placeholder="Ilość" required />
        <textarea name="comments" cols="30" rows="5" placeholder="Wpisz uwagę"></textarea>
        <input type="submit" name="submit" value="Dodaj" class="bg" id="newProject__submit" /> </form>
</div>
<div class="project-add-form__close"><a href="">x</a> </div>