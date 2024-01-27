<?php
// Function to sanitize and validate input data
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Initialize variables to store form data
$name = $icpassport = $studentId = $facultyCode = $programmeCode = $semester = $gender = $campus = $levelOfStudy = $modeOfStudy = $mailingaddress = $changeOfAddress = $postcode = $telno = $phoneno = $email = $previousDeferment = $reasons = $register = $year = $date = "";

// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', '1');

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Debugging: Dump the contents of $_POST
    var_dump($_POST);

    // Retrieve data from the form
    $name = test_input($_POST["name"]);
    $icpassport = test_input($_POST["icpassport"]);
    $studentId = test_input($_POST["studentId"]);
    $facultyCode = test_input($_POST["facultyCode"]);
    $programmeCode = test_input($_POST["programmeCode"]);
    $semester = test_input($_POST["semester"]);
    $gender = test_input($_POST["gender"]);
    $campus = test_input($_POST["campus"]);
    $levelOfStudy = test_input($_POST["levelOfStudy"]);
    $modeOfStudy = test_input($_POST["modeOfStudy"]);
    $mailingaddress = test_input($_POST["mailingaddress"]);
    $changeOfAddress = isset($_POST["changeOfAddress"]) ? "yes" : "no";
    $postcode = test_input($_POST["postcode"]);
    $telno = test_input($_POST["telno"]);
    $phoneno = test_input($_POST["phoneno"]);
    $email = test_input($_POST["email"]);
    $previousDeferment = test_input($_POST["previousDeferment"]);
    $reasons = test_input($_POST["reasons"]);
    $register = test_input($_POST["register"]);
    $year = test_input($_POST["year"]);
    $date = test_input($_POST["date"]);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DEFERMENT OF ACADEMIC SEMESTER</title>
    <link rel="stylesheet" href="style.css">
    <style>
        /* Add spacing between form fields */
        td {
            padding-bottom: 10px;
        }

        /* Add border to each list item */
        ol li {
            border-bottom: 1px solid #ddd;
            padding: 5px 0;
        }

        /* Adjust margin for the form to avoid overlap with the fixed footer */
        .academic-form {
            margin-bottom: 30px;
        }
    </style>
</head>

<body>

    <header class="header" style="text-align: right;">
        <h2>DEFERMENT OF ACADEMIC SEMESTER</h2>
    </header>

    <nav>
        <ul>
            <li><a href="http://127.0.0.1:5500/profile/index.html">My Profile</a></li>
            <li><a href="http://localhost/AssignmentICT600/form/form.php">Form</a></li>
        </ul>
    </nav>

    <div>
        <p>Instruction to students :</p>
        <ol>
            <li>Student can apply for a deferment of academic semester (TG) due to unforeseen circumstances other than
                health-related reasons.</li>
            <li>Applications can be made for a maximum of two (2) times for Master and four (4) times for PhD throughout
                the duration.</li>
            <li>Processing fee of RM50.00 will be imposed by Bahagian Pengurusan Kewangan Pelajar (BPKP) to the successful
                application.</li>
            <li>A completed application form must be submitted to the respective College / Faculty / Academic Centre /
                UiTM Branch Campus.</li>
        </ol>
    </div>

    <header>
        <h3>Section I (To be filled by student in CAPITAL LETTERS)</h3>
    </header>

    <!-- Combined form for Section I and Section II -->
    <form action="submission.php" method="post" class="academic-form">
        <p><span class="error">* required field</span></p>
        <table>
            <!-- Section I fields -->
            <tr>
                <td>
                    <label for="name">Name :</label>
                    <input type="text" id="name" name="name" pattern="[A-Za-z\-\'\s]+" title="Please enter a valid name with capital letters" required>
                    <span class="error">* </span>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="icpassport">I.C No/Passport No. :</label>
                    <input type="text" id="icpassport" name="icpassport" pattern="[0-9]+" title="Please enter a valid IC No/Passport No. with numbers only" required>
                    <span class="error">* </span>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="studentId">Student ID No. :</label>
                    <input type="text" id="studentId" name="studentId" pattern="[0-9]+" title="Please enter a valid Student ID with numeric characters only" required>
                    <span class="error">* </span>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="facultyCode">Faculty Code :</label>
                    <select id="facultyCode" name="facultyCode" required>
                        <option value="AC12">AC12 - Faculty of Accountancy</option>
                        <option value="AP22">AP22 - College of Built Environment</option>
                        <option value="AS20">AS20 - Faculty of Applied Sciences</option>
                        <option value="AT23">AT23 - Faculty of Plantation and Agrotechnology</option>
                        <option value="BM24">BM24 - Faculty of Business and Management</option>
                        <option value="CS24">CS24 - College of Computing, Informatics and Mathematics </option>
                        <option value="SR22">SR22 - Faculty of Sports Science and Recreation</option>
                    </select>
                </td>
            </tr>
            <td>
    <label for="programmeCode">Programme Code :</label>
    <select id="programmeCode" name="programmeCode" required>
    <span class="error">* </span>
        <option value="AC120">AP120 - Diploma in Accounting Information System</option>
        <option value="AP120">AP22 - Diploma in Geomatic Science</option>
        <option value="AP220">AP220 - Bachelor of Surveying Science and Geomatics (Hons)</option>
        <option value="As113">AS113 - Diploma in Polymer Technology</option>
        <option value="AS120">AS120 - Diploma in Science</option>
        <option value="AS201">AS201 -Bachelor of Science (Hons) Biology </option>
        <option value="AS202">AS202 - Bachelor of Science (Hons) Chemistry</option>
        <option value="AS203">AS203 - Bachelor of Science (Hons) Physics</option>
        <option value="AS222">AS222 - Bachelor of Science (Hons) Chemistry with Management</option>
        <option value="AS243">AS243 - Bachelor of Science (Hons) Polymer Technology</option>
        <option value="AS245">AS245 - Bachelor of Science (Hons) Applied Chemistry</option>
        <option value="AS254">AS254 - Bachelor of Science (Hons) Marine Technology</option>
        <option value="AT110">AT110 - Diploma in Planting Industry Management</option>
        <option value="AT232">AT232 - Bachelor of Science Agrotechnology (Hons) Horticulture Technology</option>
        <option value="BM240">BM240/BA240 - Bachelor of Business Administration (Hons) Marketing</option>
        <option value="BM242">BM242/BA242 - Bachelor of Business Administration (Hons) Finance</option>
        <option value="BM243">BM243/BA243 - Bachelor of Business Administration (Hons) Human Resource Management</option>    
        <option value="CS143">CS143 - Diploma in Mathematical Sciences</option>
        <option value="CS110">CS110 - Diploma in Computer Science</option>
        <option value="CS240">CS240 - Bachelor of Information Technology (Hons.)</option>
        <option value="CS248">CS248 -Bachelor of Science (Hons.) Management Mathematics</option>
        <option value="CS251">CS251 - Bachelor of Computer Science (Hons.) Netcentric Computing</option>
        <option value="SR111">SR111 - Diploma in Sports and Recreational Management</option>
        <option value="SR113">SR113 - Diploma in Sport Studies</option>
        <option value="SR241">SR241 - Bachelor of Sports Management (Hons)</option>
        <option value="SR243">SR243 - Bachelor of Sports Science (Hons)</option>
        <option value="SR245">SR245 - Bachelor of Health and Fitness (Hons)</option>
                     
        </select>
    </td>
    <tr>
    <td>
        <label for="semester">Semester :</label>
        <select id="semester" name="semester" required>
        <span class="error">* </span>
            <option value="SEMESTER_1">1</option>
            <option value="SEMESTER_2">2</option>
            <option value="SEMESTER_3">3</option>
            <option value="SEMESTER_4">4</option>
            <option value="SEMESTER_5">5</option>
            <option value="SEMESTER_6">6</option>
            <option value="SEMESTER_7">7</option>
            <option value="SEMESTER_8">8</option>
        </select>
    </td>
</tr>
<tr>
    <td>
        <label>Gender :</label>
        <input type="radio" id="male" name="gender" value="male" required>
        <span class="error">* </span>
        <label for="male">Male</label>

        <input type="radio" id="female" name="gender" value="female" required>
        <span class="error">* </span>
        <label for="female">Female</label>
    </td>
</tr>

<tr>
    <td>
        <label for="campus">Campus :</label>
        <select id="campus" name="campus" required>
        <span class="error">* </span>
            <option value="Puncak Alam Campus">Puncak Alam Campus</option>
            <option value="Puncak Perdana Campus">Puncak Perdana Campus</option>
            <option value="Dengkil Campus">Dengkil Campus</option>
            <option value="Sungai Buloh Campus">Sungai Buloh Campus</option>
            <option value="Selayang Campus">Selayang Campus</option>
            <option value="Shah Alam Campus">Shah Alam Campus</option>
            <option value="Samarahan Campus">Samarahan Campus</option>
            <option value="Kota Kinabalu Campus">Kota Kinabalu Campus</option>
            <option value="Tawau Campus">Tawau Campus</option>
            <option value="Segamat Campus">Segamat Campus</option>
            <option value="Pasir Gudang Campus">Pasir Gudang Campus</option>
            <option value="Merbok Campus">Merbok Campus</option>
            <option value="Kota Bharu Campus">Kota Bharu Campus</option>
            <option value="Machang Campus">Machang Campus</option>
            <option value="Alor Gajah Campus">Alor Gajah Campus</option>
            <option value="Bandaraya Melaka Campus">Bandaraya Melaka Campus</option>
            <option value="Jasin Campus">Jasin Campus</option>
            <option value="Seremban Campus">Seremban Campus</option>
            <option value="Rembau Campus">Rembau Campus</option>
            <option value="Jengka Campus">Jengka Campus</option>
            <option value="Raub Campus">Raub Campus</option>
            <option value="Bertam Campus">Bertam Campus</option>
            <option value="Tapah Campus">Tapah Campus</option>
            <option value="Seri Iskandar Campus">Seri Iskandar Campus</option>
            <option value="Arau Campus">Arau Campus</option>
            <option value="Dungun Campus">Dungun Campus</option>
        </select>
    </td>
</tr>


<tr>
    <td>
        <label>Level of Study :</label>
        <input type="radio" id="master" name="levelOfStudy" value="Master" required>
        <span class="error">* </span>
        <label for="master">Master</label>

        <input type="radio" id="phd" name="levelOfStudy" value="PhD" required>
        <span class="error">* </span>
        <label for="phd">PhD</label>
    </td>
</tr>

<tr>
    <td>
        <label>Mode of Study :</label>
        <input type="radio" id="fullTime" name="modeOfStudy" value="Full Time" required>
        <span class="error">* </span>
        <label for="fullTime">Full Time</label>

        <input type="radio" id="partTime" name="modeOfStudy" value="Part Time" required>
        <span class="error">* </span>
        <label for="partTime">Part Time</label>

        <input type="radio" id="flp" name="modeOfStudy" value="FLP" required>
        <span class="error">* </span>
        <label for="flp">FLP</label>
    </td>
</tr>


<tr>
        <td style="display: flex; align-items: center;">
            <label for="mailingaddress">Mailing Address*:</label>
            <textarea id="mailingaddress" name="mailingaddress" rows="5" cols="50" style="margin-left: 10px;" required pattern="[A-Za-z0-9\s]+" title="Please enter a valid mailing address with alphanumeric characters"></textarea>
        </td>
    </tr>

    <tr>
        <td>
            <input type="checkbox" id="changeOfAddress" name="changeOfAddress" value="yes" required>
            <label for="changeOfAddress">*Please tick (✓) for change of address</label>
        </td>
    </tr>

    <tr>
        <td>
            <label for="postcode">Postcode :</label>
            <input type="text" id="postcode" name="postcode" pattern="\d+" title="Please enter a valid postcode with numbers only" required>
            <span class="error">* </span>
        </td>
    </tr>

    <tr>
        <td>
            <label for="telno">Tel No. :</label>
            <input type="text" id="telno" name="telno" pattern="\d+" title="Please enter a valid telephone number with numbers only" required>
        <span class="error">* </span>
        </td>
    </tr>

    <tr>
        <td>
            <label for="phoneno">Mobile Phone No. :</label>
            <input type="text" id="phoneno" name="phoneno" pattern="\d+" title="Please enter a valid mobile phone number with numbers only" required>
            <span class="error">* </span>
        </td>
    </tr>

    <tr>
        <td>
            <label for="email">E-mail :</label>
            <input type="email" id="email" name="email" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}" title="Please enter a valid email address" required>            
        <span class="error">* </span>
        </td>
    </tr>
           

            <!-- Section II fields -->
            <tr>
                <td>
                    <label for="previousDeferment">Number of previous Deferment of Academic Semester (TG) (if any) :</label>
                    <input type="text" id="previousDeferment" name="previousDeferment" pattern="[0-9]+" title="Please enter a valid number" required>
                    <span class="error">* </span>
                    <label for="previousDeferment">Time</label>
                </td>
            </tr>

            <tr>
                <td style="display: flex; align-items: center;">
                    <label for="reasons">Reasons for Application of Deferment (TG) (please attach supporting documents) :</label>
                    <textarea id="reasons" name="reasons" rows="5" cols="50" style="margin-left: 10px;"
                        pattern="^[A-Za-z0-9\s.,!?()-]+$" title="Please enter valid reasons" required></textarea>
                </td>
            </tr>

            <tr>
                <td>
                    <label for="register">I will re-register for semester :</label>
                    <select id="register" name="register" required>
                        <option value="MARCH">MARCH</option>
                        <option value="SEPTEMBER">SEPTEMBER</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td>
                    <label for="year">Year :</label>
                    <input type="text" id="year" name="year" placeholder="YYYY" pattern="\d{4}" title="Enter a valid 4-digit year" required>
                    <span class="error">* </span>
                </td>
            </tr>

            <tr>
                <td>
                    <label for="date">Date : </label>
                    <input type="date" id="date" name="date" placeholder="dd/mm/yyyy" required>
                    <span class="error">* </span>
                </td>
            </tr>

            <!-- Continue adding your form fields for Section II -->

            <tr>
                <td colspan="0.6" style="text-align: left;">
                    <input type="submit" value="Submit">
                </td>
            </tr>
        </table>
    </form>

    <footer>
        &copy; 2023 Nurul Hidayah. All rights reserved.
    </footer>
</body>

</html>
