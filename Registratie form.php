<html>
<form action="register.php" method="post">
        <h1>Game Sign-up</h1>
        <div>
            <label for="username">Username:</label>
            <input type="text" name="username" id="username">
        </div>
        <p>
        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email">
        </div>
        <p>
        <div>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password">
        </div>
    <p> 
        <div>
            <label for="agree">
                <input type="checkbox" name="agree" id="agree" value="yes"/> I agree
                with the
                <a href="#" title="term of services">term of services</a>
            </label>
        </div>
        <p>
        <button type="submit">Register</button>
        <footer>Already a member? <a href="Index.php">Login here</a></footer>
    </form>

    </html>