<div class="newProject" id="newProject">
    <h1 class="newProject__item">Dodaj projekt</h1>
    <form class="newProject__item" id="addProject" name="addNewProject" action="?action=add-project" method="post">
        <input type="text" name="customerName" placeholder="Klient" required />
        <select name="product" id="productSelect">
            <option value="winietka">winietka</option>
            <option value="zawieszka na wodkę">zawieszka na wodkę</option>
            <option value="numerek 35 cm">Numerek 35 cm</option>
        </select>
        <input type="text" name="quantity" placeholder="Ilość" required />
        <select name="material">
            <option value="sklejka">sklejka</option>
            <option value="plaster">plaster</option>
        </select>
        <select name="size">
            <option value="nie dotyczy">nie dotyczy</option>
            <option value="plaster 16-19 cm GK">plaster 16-19 cm GK</option>
            <option value="plaster 28-33 cm">plaster 28-33 cmK</option>
        </select>
        <textarea name="comments" cols="30" rows="5" placeholder="Wpisz uwagę"></textarea>
        <input type="submit" name="submit" value="Dodaj" class="bg" id="newProject__submit" /> </form>
</div>
<div class="project-add-form__close"><a href="">x</a> </div>