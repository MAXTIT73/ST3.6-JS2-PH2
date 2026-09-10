<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ST3.css">
    <script defer src="ST3.js"></script>
    <title>Document</title>
    <?php
    
    ?> 
</head>
<body>
    <header class="top_alfa">
        <section class="top_beta_left">
            <section class="top_charlie_left">
                <img src="f1.png">
            </section>
            <section class="top_charlie_right">
                <p>Ekspresowe<br>przeprowadzki</p>
            </section>
        </section>
        <section class="top_beta_right">
            <section class="top_charlie_top">
                <p>kwerenda_1</p>
                <p>kwerenda_2</p>
            </section>
            <section class="top_charlie_down">
                <p>kwerenda_3</p>
                <p>kwerenda_4</p>
            </section>
        </section>
    </header>
    <main class="center_alfa">
        <section class="center_beta_left">
            <section class="center_charlie_left_top">
                <p>Zaplanowane przewozy</p>
            </section>
            <section class="center_charlie_left_center">
                <form>
                    <table id="xd">
                        <tr>
                            <th class="S02"><p>Zlecenie</p></th>
                            <th class="S03"><p>Data</p></th>
                            <th class="S04"><p>Akcja</p></th>
                        </tr>

                        <?PHP
                            $conn = mysqli_connect("localhost", "root", "", "st3php");
                            $query = "SELECT * FROM zlecenia"
                            $result = mysqli_query($conn, $query);
                            while($row = mysqli_fetch_assoc($result)){
                                $id = $row['id'];
                                $zlecenie = $row['zlecenie'];
                                $data = $row['data'];

                                if (isset($_POST['klpz'])) {
                                    $dn1 = $_POST['Zlecenie'];
                                    $dn2 = $_POST['Data'];
                                    $zpt = $bz->prepare("INSERT INTO st3php (Zlecenie, Data) VAI")
                                }

                                $zapytanie->bind_param("ss", $dane1, $dane2);

                                if ($zapytanie->execute()) {
                                    echo "<p style='color: green;'>Sukces!zostały dodane do bazy.</p>";
                                else {
                                    echo "<p style='color: red;'>Coś poszło nie tak: " . $baza->error . "</p>";
                                }
                                $zapytanie->close();
                            }
                            ?>


                            <form method="POST" action="">
                               
                                <label>Pierwsze pole:</label>
                                <input type="text" name="pole_pierwsze" required><br><br>

                           
                                <label>Drugie pole:</label>
                                <input type="text" name="pole_drugie" required><br><br>

                           
                                <button type="submit" name="kliknieto_przycisk">Dodaj do bazy</button>
                            </form>

                                

                                echo "
                                <tr>
                                    <td>$zlecenie</td>
                                    <td>$data</td>
                                    <td>
                                        <form action='usun.php' method='POST'>
                                            <input type='hidden' value=$id name='id'/>
                                            <button>USUN<button>
                                        </form>
                                    </td>
                                </tr>
                                ";
                            
                        <?php
                        $conn = mysqli_connect('localhost', 'root', '', 'przerzut');
                        $id = $_POST['id'];
                        $query = 'DELETE FROM zlecenia WHERE id = $id';
                        mysqli_query($conn, $query);
                        header('Location: index.php');
                        ?>

                        <tr>
                            <th><p>Przewoz mebli z ulicy Nawrot 13 na ulice Dluga 8</p></th>
                            <th><p>2019-11-06</p></th>
                            <th><p>USUN</p></th>
                        </tr>
                        <tr>
                            <th><p>Odbior listow firmowych</p></th>
                            <th><p>2019-11-18</p></th>
                            <th><p>USUN</p></th>
                        </tr>
                        <tr>
                            <th><p>Wywoz grozu z ulicy Rumunskiej 2</p></th>
                            <th><p>2019-11-20</p></th>
                            <th><p>USUN</p></th>
                        </tr>
                        <tr>
                            <th><p>Odbior towarow niesortowanych</p></th>
                            <th><p>2019-11-22</p></th>
                            <th><p>USUN</p></th>
                        </tr>
                        <tr>
                            <th><p>Przewoz mebli z ulicy Dlugiej 7 na Krotka 13</p></th>
                            <th><p>2019-11-23</p></th>
                            <th><p>USUN</p></th>
                        </tr>
                        <tr>
                            <th><p>Spotkanie firmowe</p></th>
                            <th><p>2019-11-26</p></th>
                            <th><p>USUN</p></th>
                        </tr>
                    </table>
                </form>
            </section>
            <section class="center_charlie_left_down">
                <table class="TM1">
                    <tr>
                        <td class="S06"><p>Tytul zlecenia</p></td>
                        <td class="S01"><p>Data</p></td>

                        <td rowspan="2" class="S05">
                            <button id="btn_dodaj">DODAJ</button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="text">
                        </td>
                        <td>
                            <input type="date">
                        </td>
                    </tr>
                </table>
            </section>
            <footer class="down_charlie"><p>Strone wykonal: Maksym Kosanovsky</p></footer>
        </section>
        <section class="center_beta_right">
            <section class="center_charlie_right">
                <section class="center_delta_right_top">
                    <p>Nasza specjalizacja</p>
                    <ul>
                        <li>Przeprowadzki</li>
                        <li>Przewoz mebli</li>
                        <li>Wywoz gruzu</li>
                        <li>Przesylki gabarytowe</li>
                        <li>Wynajem pojazdow</li>
                        <li>Zakup towarow</li>
                    </ul>
                </section>
                <section class="center_delta_right_center">
                    <img src="f2.png">
                </section>
                <section class="center_delta_right_down">
                    <section class="K1"></section>
                    <section class="K2"></section>
                    <section class="K3"></section>
                    <section class="K4"></section>
                </section>
            </section>
        </section>
    </main>
</body>
</html>