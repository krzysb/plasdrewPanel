<div class="newUser">
    <h1 class="newUser__item">Nowy użytkownik</h1>
    <form class="newUser__item" id="addUser" name="registration" action="?action=add-user" method="post">
        <input type="text" name="username" placeholder="Username" required />
        <input type="email" name="email" placeholder="Email" required />
        <input type="password" name="password" placeholder="Password" required />
        <select name="role" id="">
            <option value="admin">admin</option>
            <option value="operator">operator</option>
            <option value="szef">szef</option>
        </select>
        <input type="submit" name="submit" value="Dodaj" class="bg" /> </form>
</div>