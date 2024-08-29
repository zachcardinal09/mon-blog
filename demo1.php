<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Liste des étudiants</h1>

    <?php
    // Déclaration de constantes et de variables scalaires
    define('SEARCH_LETTER', 'D');

    $search_name = 'Mike Tomlin'; 
    $students_count = 0;

    // Lire les noms d'étudiants à partir du fichier texte
    $students = file('students.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

    //Affichage des résultats
    echo "<ul>";
    foreach ($students as $student) {
        echo "<li>" . $student . "</li>";
    }
    echo "</ul>";


    // Compter les noms commençant par SEARCH_LETTER
    foreach ($students as $student) {
        if (stripos($student, SEARCH_LETTER) === 0) {
            $students_count++;
        }
    }
    echo "<p>Nombre d'étudiants dont le nom commence par '" . SEARCH_LETTER . "': " . $students_count . "</p>";

    // Vérifier si SEARCH_NAME est dans la liste
    $found = in_array($search_name, $students);

    if ($found) {
        echo "<p>L'étudiant(e) " . $search_name . "a été trouvé(e) dans la liste.</p>";
    } else {
        echo "<p>L'étudiant(e) " . $search_name . " n'est pas dans la liste.</p>";
    }
    ?>

</body>
</html>
