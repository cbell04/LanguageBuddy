<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="jquery-3.6.0.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<title>Find your Language Buddy</title>
<style>
.form_item > label { display:inline-block; width:110px; vertical-align:top; }
.form_item > input { display: inline-block; }
</style>
</head>
<body>

<h1>Update your Languages!</h1>
    <form action="">
        <p class="form_item"><label>Name*:</label> <input type="text"  name='name' /></p>
        <p class="form_item"><label>Tufts Email*:</label> <input type="text" name='email' /></p>
        <input id="submitBtn" type = "submit" value = "Send" />
    </form>
    <?php
    $name = $_REQUEST["name"];
    $email = $_REQUEST["email"];
    //check if user exists in the database
    //establish connection info
        $server = "localhost";// your server
        $userid = "ub32w6yhglqy4"; // your user id
        $pw = "ilzubcxxbq2v"; // your pw
        $db= "db0io1fjdknxqw"; // your database
        
        // Create connection
        $conn = new mysqli($server, $userid, $pw);

        // Check connection
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }

        //select the database
        $conn->select_db($db);
        
        // Check if user's name and email exist in the database
        $sql = "SELECT * FROM users WHERE name = '$name' AND email = '$email'";
        $result = $conn->query($sql);

        //get results
        if ($result->num_rows == 0) 
        { 
            echo "Sorry we could not find you in our database. Please register <a href='./register.html'>here</a>.";
        }
        else if ($result->num_rows > 0) {
            echo "<form><p><label>Language You Speak:</label> </br>
            <select size='6' class='drop-down' name='spoken_lang'>
                <option> Afrikaans </option>
                <option> Albanian </option>
                <option> Amharic </option>
                <option>  Arabic </option>
                <option> Armenian </option>
                <option>Azerbaijani </option>
                <option>Basque </option>
                <option>Belarusian </option>
                <option>Bengali </option>
                <option>Bosnian </option>
                <option>Bulgarian </option>
                <option>Burmese </option>
                <option>Cantonese</option>
                 <option>Catalan </option>
                 <option>Cebuano </option>
                  <option>Chewa </option>
                  <option>Corsican </option>
                  <option>Croatian </option>
                  <option>Czech </option>
                    <option>Danish </option>
                    <option>Dutch </option>
                    <option>English </option>
                    <option>Esperanto </option>
                    <option>Estonian </option>
                    <option>Filipino (Tagalog) </option>
                    <option>Finnish </option>
                    <option>French </option>
                    <option>Galician </option>
                    <option>Georgian </option>
                    <option>German </option>
                    <option>Greek </option>
                    <option>Gujarati </option>
                    <option>Haitian Creole </option>
                    <option>Hausa </option>
                    <option>Hawaiian </option>
                    <option>Hebrew </option>
                    <option>Hindi </option>
                    <option>Hmong </option>
                    <option>Hungarian </option>
                    <option>Icelandic </option>
                    <option>Igbo</option> 
                    <option>Indonesian </option>
                    <option>Irish </option>
                    <option>Italian </option>
                    <option>Japanese </option>
                    <option>Javanese </option>
                    <option>Kannada </option>
                    <option>Kazakh </option>
                    <option>Khmer</option> 
                    <option>Kinyarwanda</option> 
                    <option>Korean </option>
                    <option>Kurdish (Kurmanji) </option>
                    <option>Kyrgyz </option>
                    <option>Lao </option>
                    <option>Latin</option> 
                    <option>Latvian</option> 
                    <option>Lithuanian </option>
                    <option>Luxembourgish</option> 
                    <option>Macedonian </option>
                    <option>Malagasy</option> 
                    <option>Malayalam </option>
                    <option>Maltese</option>
                    <option>Mandarin</option> 
                    <option>Maori </option>
                    <option>Marathi</option> 
                    <option>Mongolian</option> 
                    <option>Nepali </option>
                    <option>Norwegian (Bokmål) </option>
                    <option>Odia</option> 
                    <option>Pashto</option> 
                    <option>Persian </option>
                    <option>Polish</option> 
                    <option>Portuguese </option>
                    <option>Punjabi (Gurmukhi) </option>
                    <option>Romanian </option>
                    <option>Russian </option>
                    <option>Samoan </option>
                    <option>Scottish Gaelic </option>
                    <option>Serbian</option> 
                    <option>Shona</option> 
                    <option>Sindhi </option>
                    <option>Sinhala</option> 
                    <option>Slovak</option> 
                    <option>Slovenian</option> 
                    <option>Somali</option> 
                    <option>Sotho</option> 
                    <option>Spanish </option>
                    <option>Sundanese</option> 
                    <option>Swahili </option>
                        <option>Swedish</option> 
                        <option>Tajik</option> 
                        <option>Tamil </option>
                        <option>Tatar</option> 
                        <option>Telugu</option> 
                        <option>Thai</option> 
                        <option>Turkish </option>
                        <option>Turkmen</option> 
                        <option>Ukrainian </option>
                        <option>Urdu</option> 
                        <option>Uyghur</option> 
                        <option>Uzbek</option> 
                        <option>Vietnamese </option>
                        <option>Welsh</option> 
                        <option>West Frisian</option> 
                        <option>Xhosa</option> 
                        <option>Yiddish</option> 
                        <option>Yoruba</option> 
                        <option>Zulu</option> 
            </select> </p>
            <p><label>Language You Want to Learn:</label> </br>
            <select size='6' class='drop-down' name='new_lang'>
                <option> Afrikaans </option>
                <option> Albanian </option>
                <option> Amharic </option>
                <option>  Arabic </option>
                <option> Armenian </option>
                <option>Azerbaijani </option>
                <option>Basque </option>
                <option>Belarusian </option>
                <option>Bengali </option>
                <option>Bosnian </option>
                <option>Bulgarian </option>
                <option>Burmese </option>
                <option>Cantonese</option>
                 <option>Catalan </option>
                 <option>Cebuano </option>
                  <option>Chewa </option>
                  <option>Corsican </option>
                  <option>Croatian </option>
                  <option>Czech </option>
                    <option>Danish </option>
                    <option>Dutch </option>
                    <option>English </option>
                    <option>Esperanto </option>
                    <option>Estonian </option>
                    <option>Filipino (Tagalog) </option>
                    <option>Finnish </option>
                    <option>French </option>
                    <option>Galician </option>
                    <option>Georgian </option>
                    <option>German </option>
                    <option>Greek </option>
                    <option>Gujarati </option>
                    <option>Haitian Creole </option>
                    <option>Hausa </option>
                    <option>Hawaiian </option>
                    <option>Hebrew </option>
                    <option>Hindi </option>
                    <option>Hmong </option>
                    <option>Hungarian </option>
                    <option>Icelandic </option>
                    <option>Igbo</option> 
                    <option>Indonesian </option>
                    <option>Irish </option>
                    <option>Italian </option>
                    <option>Japanese </option>
                    <option>Javanese </option>
                    <option>Kannada </option>
                    <option>Kazakh </option>
                    <option>Khmer</option> 
                    <option>Kinyarwanda</option> 
                    <option>Korean </option>
                    <option>Kurdish (Kurmanji) </option>
                    <option>Kyrgyz </option>
                    <option>Lao </option>
                    <option>Latin</option> 
                    <option>Latvian</option> 
                    <option>Lithuanian </option>
                    <option>Luxembourgish</option> 
                    <option>Macedonian </option>
                    <option>Malagasy</option> 
                    <option>Malayalam </option>
                    <option>Maltese</option>
                    <option>Mandarin</option> 
                    <option>Maori </option>
                    <option>Marathi</option> 
                    <option>Mongolian</option> 
                    <option>Nepali </option>
                    <option>Norwegian (Bokmål) </option>
                    <option>Odia</option> 
                    <option>Pashto</option> 
                    <option>Persian </option>
                    <option>Polish</option> 
                    <option>Portuguese </option>
                    <option>Punjabi (Gurmukhi) </option>
                    <option>Romanian </option>
                    <option>Russian </option>
                    <option>Samoan </option>
                    <option>Scottish Gaelic </option>
                    <option>Serbian</option> 
                    <option>Shona</option> 
                    <option>Sindhi </option>
                    <option>Sinhala</option> 
                    <option>Slovak</option> 
                    <option>Slovenian</option> 
                    <option>Somali</option> 
                    <option>Sotho</option> 
                    <option>Spanish </option>
                    <option>Sundanese</option> 
                    <option>Swahili </option>
                        <option>Swedish</option> 
                        <option>Tajik</option> 
                        <option>Tamil </option>
                        <option>Tatar</option> 
                        <option>Telugu</option> 
                        <option>Thai</option> 
                        <option>Turkish </option>
                        <option>Turkmen</option> 
                        <option>Ukrainian </option>
                        <option>Urdu</option> 
                        <option>Uyghur</option> 
                        <option>Uzbek</option> 
                        <option>Vietnamese </option>
                        <option>Welsh</option> 
                        <option>West Frisian</option> 
                        <option>Xhosa</option> 
                        <option>Yiddish</option> 
                        <option>Yoruba</option> 
                        <option>Zulu</option> 
            </select> </p>";
            echo "<input id='submitBtn' type = 'submit' value = 'Update' /></form>";
        }
        $spoken_lang = $_REQUEST["spoken_lang"];
        $new_lang = $_REQUEST["new_lang"];
        echo $spoken_lang." and ".$new_lang;
        $sql2 = "UPDATE users SET new_lang = '$new_lang' AND SET spoken_lang = '$spoken_lang' WHERE name = '$name' AND email = '$email'";
        if ($conn->query($sql2) === TRUE) {
            echo "Record updated successfully";
        }
        
     ?>
</body>
</html>