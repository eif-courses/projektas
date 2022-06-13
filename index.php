<!DOCTYPE HTML>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">


    <style>
        .error {
            color: #FF0000;
        }
    </style>
</head>
<body>

<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   

    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
        // check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }


if (empty($_POST["website"])){}

    if (empty($_POST["website"])) {
        $website = "";
    } else {
        $website = test_input($_POST["website"]);
        // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
        if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $website)) {
            $websiteErr = "Invalid URL";
        }
    }

    if (empty($_POST["comment"])) {
        $comment = "";
    } else {
        $comment = test_input($_POST["comment"]);
    }

    if (empty($_POST["gender"])) {
        $genderErr = "Gender is required";
    } else {
        $gender = test_input($_POST["gender"]);
    }
    submit_form();
}

function test_input($data): string
{
    $data = trim($data);
    $data = stripslashes($data);
    return htmlspecialchars($data);
}

?>


<div class="mx-0 mt-5 mx-sm-auto" style="max-width: 700px">
    <div class="card">
        <div class="card-header" style="background: -moz-linear-gradient(323deg, rgba(78,177,91,1) 0%, rgba(0,194,243,1) 50%, rgba(43,57,144,1) 100%);
background: -webkit-linear-gradient(323deg, rgba(78,177,91,1) 0%, rgba(0,194,243,1) 50%, rgba(43,57,144,1) 100%);
background: -o-linear-gradient(323deg, rgba(78,177,91,1) 0%, rgba(0,194,243,1) 50%, rgba(43,57,144,1) 100%);
background: -ms-linear-gradient(323deg, rgba(78,177,91,1) 0%, rgba(0,194,243,1) 50%, rgba(43,57,144,1) 100%);
background: linear-gradient(127deg, rgba(78,177,91,1) 0%, rgba(0,194,243,1) 50%, rgba(43,57,144,1) 100%);
">
            <h4 class="card-title text-white text-center mt-4"
                id="exampleModalLabel"><?php echo htmlspecialchars($_GET['title']) . ' apklausa, ' . date("Y") . ' m.' ?></h4>
        </div>

        <div class="modal-body mt-2">
            <div class="text-center">
                <?php echo 'Dėkojame, kad dalyvavote šiuose mokymuose ir kviečiame pasidalinti nuomone apie renginio kokybę bei įžvalgomis dėl gautos informacijos pritaikymo.' ?>
            </div>

            <hr/>
            <form class="px-4 mt-2" method="post"
                  action="<?php echo 'index.php?title=' . $_GET['title'] . '&email=' . $_GET['email']; ?>">

                <!-- Card -->
                <div class="mx-0 mx-sm-auto">
                    <div>
                        <p>
                            <strong style="color:#157dc1">Įvertinkite mokymo medžiagos aiškumą</strong>
                        </p>
                    </div>

                    <div class="mb-3">
                        <div class="d-inline mx-3">
                            Blogai
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadio1" id="inlineRadio1"
                                   value="1"/>
                            <label class="form-check-label" for="inlineRadio1">1</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadio1" id="inlineRadio2"
                                   value="2"/>
                            <label class="form-check-label" for="inlineRadio2">2</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadio1" id="inlineRadio3"
                                   value="3"/>
                            <label class="form-check-label" for="inlineRadio3">3</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadio1" id="inlineRadio4"
                                   value="4"/>
                            <label class="form-check-label" for="inlineRadio4">4</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadio1" id="inlineRadio5"
                                   value="5"/>
                            <label class="form-check-label" for="inlineRadio5">5</label>
                        </div>

                        <div class="d-inline me-4">
                            Labai gerai
                        </div>
                    </div>

                </div>


                <!-- Card -->
                <div class="mx-0 mx-sm-auto">
                    <div>
                        <p>
                            <strong style="color:#157dc1">Įvertinkite lektoriaus (-ės) žinių ir patirties
                                perteikimą</strong>
                        </p>
                    </div>

                    <div class="mb-3">
                        <div class="d-inline mx-3">
                            Blogai
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadio2" id="inlineRadio11"
                                   value="1"/>
                            <label class="form-check-label" for="inlineRadio11">1</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadio2" id="inlineRadio22"
                                   value="2"/>
                            <label class="form-check-label" for="inlineRadio22">2</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadio2" id="inlineRadio33"
                                   value="3"/>
                            <label class="form-check-label" for="inlineRadio33">3</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadio2" id="inlineRadio44"
                                   value="4"/>
                            <label class="form-check-label" for="inlineRadio44">4</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadio2" id="inlineRadio55"
                                   value="5"/>
                            <label class="form-check-label" for="inlineRadio55">5</label>
                        </div>

                        <div class="d-inline me-4">
                            Labai gerai
                        </div>
                    </div>

                </div>


                <!-- Card -->
                <div class="mx-0 mx-sm-auto">
                    <div>
                        <p>
                            <strong style="color:#157dc1">Įvertinkite pranešimo(-ų) turinį</strong>
                        </p>
                    </div>

                    <div class="mb-3">
                        <div class="d-inline mx-3">
                            Blogai
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadio3" id="inlineRadio111"
                                   value="1"/>
                            <label class="form-check-label" for="inlineRadio111">1</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadio3" id="inlineRadio222"
                                   value="2"/>
                            <label class="form-check-label" for="inlineRadio222">2</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadio3" id="inlineRadio333"
                                   value="3"/>
                            <label class="form-check-label" for="inlineRadio333">3</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadio3" id="inlineRadio444"
                                   value="4"/>
                            <label class="form-check-label" for="inlineRadio444">4</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadio3" id="inlineRadio555"
                                   value="5"/>
                            <label class="form-check-label" for="inlineRadio55">5</label>
                        </div>

                        <div class="d-inline me-4">
                            Labai gerai
                        </div>
                    </div>

                </div>


                <p class="fw-bold" style="color:#157dc1">Ar įgytas žinias galėsite pritaikyti praktikoje?</p>
                <div class="form-check mb-2 mx-3">
                    <input class="form-check-input" type="radio" name="radioExample1" id="radioExample1111"
                           value="Taip"/>
                    <label class="form-check-label" for="radioExample1111">
                        Taip
                    </label>
                </div>
                <div class="form-check mb-2 mx-3">
                    <input class="form-check-input" type="radio" name="radioExample1" id="radioExample2333"
                           value="Iš dalies"/>
                    <label class="form-check-label" for="radioExample2333">
                        Iš dalies
                    </label>
                </div>
                <div class="form-check mb-2 mx-3">
                    <input class="form-check-input" type="radio" name="radioExample1" id="radioExample3441" value="Ne"/>
                    <label class="form-check-label" for="radioExample3441">
                        Ne
                    </label>
                </div>


                <p class="fw-bold" style="color:#157dc1">Ar dalyvautumėte papildomuose mokymuose šia tema?</p>
                <div class="form-check mb-2 mx-3">
                    <input class="form-check-input" type="radio" name="radioExample2" id="radioExample11" value="Taip"/>
                    <label class="form-check-label" for="radioExample11">
                        Taip
                    </label>
                </div>
                <div class="form-check mb-2 mx-3">
                    <input class="form-check-input" type="radio" name="radioExample2" id="radioExample22"
                           value="Nežinau"/>
                    <label class="form-check-label" for="radioExample22">
                        Nežinau
                    </label>
                </div>
                <div class="form-check mb-2 mx-3">
                    <input class="form-check-input" type="radio" name="radioExample2" id="radioExample33" value="Ne"/>
                    <label class="form-check-label" for="radioExample33">
                        Ne
                    </label>
                </div>


                <!-- Card -->
                <div class="mx-0 mx-sm-auto">
                    <div>
                        <p>
                            <strong style="color:#157dc1">Ar renginys pateisino Jūsų lūkesčius?</strong>
                        </p>
                    </div>

                    <div class="mb-3">
                        <div class="d-inline mx-3">
                            visiškai nepateisino
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadio4" id="inlineRadio1111"
                                   value="1"/>
                            <label class="form-check-label" for="inlineRadio1111">1</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadio4" id="inlineRadio2222"
                                   value="2"/>
                            <label class="form-check-label" for="inlineRadio2222">2</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadio4" id="inlineRadio3333"
                                   value="3"/>
                            <label class="form-check-label" for="inlineRadio3333">3</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadio4" id="inlineRadio4444"
                                   value="4"/>
                            <label class="form-check-label" for="inlineRadio4444">4</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadio4" id="inlineRadio5555"
                                   value="5"/>
                            <label class="form-check-label" for="inlineRadio5555">5</label>
                        </div>

                        <div class="d-inline me-4">
                            labai pateisino
                        </div>
                    </div>

                </div>


                <p><strong style="color:#157dc1">Ką, Jūsų nuomone, būtų galima padaryti geriau, rengiant kitą renginį?
                        Pasiūlymai organizatoriams, lektoriui.</strong></p>

                <!-- Message input -->
                <div class="form-outline mb-4">
                    <textarea class="form-control" id="form4Example3" name="questionFirst" rows="4"></textarea>
                </div>


                <p><strong style="color:#157dc1">Kokiomis temomis mokymai, seminarai Jums yra aktualūs ir norėtumėte
                        juose dalyvauti ateityje? </strong></p>

                <!-- Message input -->
                <div class="form-outline mb-4">
                    <textarea class="form-control" name="questionSecond" id="form4Example33" rows="4"></textarea>
                </div>

                <div class="card-footer text-end">
                    <input type="submit" name="submit" value="Pateikti atsakymus">
                </div>

            </form>
        </div>

    </div>
</div>


</body>
</html>


<?php


function submit_form()
{
    // kvstore API url
    $url = 'https://vikolt.webhook.office.com/webhookb2/b03f0d9e-3864-4e2f-9f5b-0fbb1e97fcb5@43864a51-470c-4314-a939-57bf31cb1138/IncomingWebhook/48c6ceb1801e4d3d8ec077f464ffbe21/f026e88b-c88a-4f75-bd6a-3f71159de89b';

// Collection object
    /*$data = array(
        "name" => "John",
        "email" => "john@test.com"
    );*/


//$result = $_GET['data'];

// Initializes a new cURL session
    $curl = curl_init($url);

// Set the CURLOPT_RETURNTRANSFER option to true
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

// Set the CURLOPT_POST option to true for POST request
    curl_setopt($curl, CURLOPT_POST, true);


    $radioQuestion1 = "";
    if (!empty($_POST['inlineRadio1'])) {
        $radioQuestion1 = $_POST['inlineRadio1'];
    }

    $radioQuestion2 = "";
    if (!empty($_POST['inlineRadio2'])) {
        $radioQuestion2 = $_POST['inlineRadio2'];
    }

    $radioQuestion3 = "";
    if (!empty($_POST['inlineRadio3'])) {
        $radioQuestion3 = $_POST['inlineRadio3'];
    }

    $radioQuestion4 = "";
    if (!empty($_POST['inlineRadio4'])) {
        $radioQuestion4 = $_POST['inlineRadio4'];
    }


    $radioExample1 = "";
    if (!empty($_POST['radioExample1'])) {
        $radioExample1 = $_POST['radioExample1'];
    }

    $radioExample2 = "";
    if (!empty($_POST['radioExample2'])) {
        $radioExample2 = $_POST['radioExample2'];
    }


// Set the request data as JSON using json_encode function
    curl_setopt($curl, CURLOPT_POSTFIELDS, '{
    "type":"message",
    "attachments":[
       {
          "contentType":"application/vnd.microsoft.card.adaptive",
          "contentUrl":null,
          "content":{
             "$schema":"http://adaptivecards.io/schemas/adaptive-card.json",
             "type":"AdaptiveCard",
             "version":"1.2",
             "body":[
             {"type": "TextBlock",
                 
    "text":"' . $_GET['title'] . ',' . $_GET['email'] . ',' . $radioQuestion1 . ',' . $radioQuestion2 . ',' . $radioQuestion3 . ',' . $radioExample1 . ',' . $radioExample2 . ',' . $radioQuestion4 . ',' . $_POST['questionFirst'] . ',' . $_POST['questionSecond'] . '"
                 }
             ]
          }
       }
    ]
 }
');

// Set custom headers for RapidAPI Auth and Content-Type header
    curl_setopt($curl, CURLOPT_HTTPHEADER, [
        'Content-Type: application/json'
    ]);

// Execute cURL request with all previous settings
    $response = curl_exec($curl);

// Close cURL session
    curl_close($curl);

    echo $response . PHP_EOL;
}
