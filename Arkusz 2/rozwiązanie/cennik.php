<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8" />
        <title>Wynajem pokoi</title>
        <link rel="stylesheet" href="styl2.css" />
    </head>

    <body>
        <header>
            <h1>Pensjonat pod dobrym humorem</h1>
        </header>

        <main>
            <section class="left">
                <a href="index.html">GŁÓWNA</a>
                <img src="1.jpg" alt="pokoje" />
            </section>

            <section class="middle">
                <a href="cennik.php">CENNIK</a>
                <table>
                    <?php
                    // Dane do połączenia z bazą danych
                    $host = 'localhost';
                    $user = 'root';
                    $pw = '';
                    $db = 'wynajem';

                    // Połączenie z bazą danych
                    $conn = mysqli_connect($host, $user, $pw, $db);

                    // Tworzenie zapytania
                    $query = "SELECT * FROM pokoje"; // Kwerenda 1
                    $result = mysqli_query($conn, $query);

                    // Listowanie wyników zapytania pętlą foreach
                    foreach ($result as $row) {
                        echo "<tr>";
                        echo "<td>" . $row['id'] . "</td>";
                        echo "<td>" . $row['nazwa'] . "</td>";
                        echo "<td>" . $row['cena'] . "</td>";
                        echo "</tr>";
                    };
                    
                    // Zamykanie połączenia z bazą danych
                    mysqli_close($conn);
                    ?>
                </table>
            </section>

            <section class="right">
                <a href="kalkulator.html">KALKULATOR</a>
                <img src="3.jpg" alt="pokoje" />
            </section>
        </main>

        <footer>
            <p>Stronę opracował: NR_ZDAJĄCEGO</p>
        </footer>
    </body>

</html>