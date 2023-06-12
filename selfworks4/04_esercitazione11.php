<?php
/* 
    TODO:Esercizio 11 - EXTRA
    Modificare l'esercizio 2 in modo che i tre oggetti creati, non siano più delle singole variabili, ma elementi di un array $students.
    Stampare attraverso "echo":

        - la proprietà name del primo oggetto;
        - la proprietà name del secondo oggetto;
        - la proprietà email del secondo oggetto;
        - la proprietà age del terzo oggetto.    
*/

class Student
{
    // Proprietá(variabili)
    public $students = [];

    // Metodo per aggiungere studenti
    public function addStudents($name, $email, $age)
    {
        $this -> students["students"] = [
            "Name" => $name,
            "Email" => $email,
            "Age" => $age,
        ];
    }
}

$students1 = new Student;
$students2 = new Student;
$students3 = new Student;


$students1 -> addStudents('Vinicius', 'vinicius@example.com', 24);
$students2 -> addStudents('Massimiliano', 'massimiliano@example.com', 28);
$students3 -> addStudents('Francesco', 'francesco@example.com', 32);

echo $students1 -> students["students"]["Name"];
echo "\n";
echo $students2 -> students["students"]["Name"];
echo "\n";
echo $students2 -> students["students"]["Email"];
echo "\n";
echo $students3 -> students["students"]["Age"];