<body class="page">
    <h1> Futóverseny jelentkezési lap </h1>
    <div>
        <form action="index.php?page=bejelentkezes" method="post">
            <div class="container">
            <div class="eloszt">
                <h2>Adatok</h2>
                <label for="name">Név:</label><br>
                <input type="text" name="name"><br>
                <label for="email">Email:</label><br>
                <input type="email" name="email"><br>
                <label for="name">Stületési idő:</label><br>
                <input type="date" name="date"><br>
                <label for="nem">Nem:</label><br>
                <input type="checkbox" name="ferfi" value="Férfi">
                <label for="vehicle1"> Férfi</label><br>
                <input type="checkbox" name="no" value="Nő">
                <label for="vehicle1"> Nő</label><br>
                <input type="submit" value="Küldés">
            </div>
            <div class="eloszt">
                <h2>Fontos</h2>
                <p></p>
                <p>Forrás:<a href="https://www.spurifutobolt.hu/">https://www.spurifutobolt.hu/</a></p>
            </div>
            <div class="eloszt">

            </div>
            </div>
        </form>
    </div>
</body>