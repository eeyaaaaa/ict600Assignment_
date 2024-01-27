<?php
// Check if the form data has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve and display the data
    echo "<h2>Submitted Form Data</h2>";

    echo "<h3>Section I</h3>";
    echo "Name: " . htmlspecialchars($_POST["name"]) . "<br>";
    echo "IC No/Passport No.: " . htmlspecialchars($_POST["icpassport"]) . "<br>";
    echo "Student ID No.: " . htmlspecialchars($_POST["studentId"]) . "<br>";
    echo "Faculty Code: " . htmlspecialchars($_POST["facultyCode"]) . "<br>";
    echo "Programme Code: " . htmlspecialchars($_POST["programmeCode"]) . "<br>";
    echo "Semester: " . htmlspecialchars($_POST["semester"]) . "<br>";
    echo "Gender: " . htmlspecialchars($_POST["gender"]) . "<br>";
    echo "Campus: " . htmlspecialchars($_POST["campus"]) . "<br>";
    echo "Level of Study: " . htmlspecialchars($_POST["levelOfStudy"]) . "<br>";
    echo "Mode of Study: " . htmlspecialchars($_POST["modeOfStudy"]) . "<br>";
    echo "Mailing Address: " . htmlspecialchars($_POST["mailingaddress"]) . "<br>";
    echo "Change of Address: " . (isset($_POST["changeOfAddress"]) ? "Yes" : "No") . "<br>";
    echo "Postcode: " . htmlspecialchars($_POST["postcode"]) . "<br>";
    echo "Tel No.: " . htmlspecialchars($_POST["telno"]) . "<br>";
    echo "Mobile Phone No.: " . htmlspecialchars($_POST["phoneno"]) . "<br>";
    echo "E-mail: " . htmlspecialchars($_POST["email"]) . "<br>";

    echo "<h3>Section II</h3>";
    echo "Number of previous Deferment: " . htmlspecialchars($_POST["previousDeferment"]) . " Time(s)<br>";
    echo "Reasons for Application of Deferment: " . htmlspecialchars($_POST["reasons"]) . "<br>";
    echo "Re-register for semester: " . htmlspecialchars($_POST["register"]) . " " . htmlspecialchars($_POST["year"]) . "<br>";
    echo "Date: " . htmlspecialchars($_POST["date"]) . "<br>";

    // Add more code to display additional fields from Section II if needed
} else {
    // If the form data has not been submitted, redirect to the form page
    header("Location: form.php");
    exit();
}
?>
