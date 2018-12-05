<?php
/**
 * Created by PhpStorm.
 * User: RishabhBhatnagar
 * Date: 5/12/18
 * Time: 10:15 PM
 */

?>
<html>
    <head>
        <title>cv</title>
        <script>

            // To-do : this function is incomplete.
            function bind_radio_listener(name){
                // name is name of common radio group.
                var radios = document.getElementsByName(name);
                for(radio in radios) {
                    if(radios[radio] == "[object HTMLInputElement]") // not working.
                    {
                        radios[radio].onclick = function() {
                            alert('clicked');
                        }
                    }
                }
            }
            bind_radio_listener('which_page');

        </script>
    </head>

    <body>

        <div id="top_header">
            <!--This is a top header which defines which html registration form should be selected.-->
            <input type="radio" name="which_page" id="demographic">
            <label for="demographic">Demographic</label>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

            <input type="radio" name="which_page" id="education">
            <label for="education">Education</label>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

            <input type="radio" name="which_page" id="projects">
            <label for="projects">Projects</label>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

            <input type="radio" name="which_page" id="certification">
            <label for="certification">Certification</label>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

            <input type="radio" name="which_page" id="skill">
            <label for="skill">Skills</label>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

            <input type="radio" name="which_page" id="employment">
            <label for="employment">employment</label>
        </div>

        <iframe id="main_container" src="#">
            <!--
                Body of the dynamically loaded pages will be loaded here.
            -->
        </iframe>
    </body>
</html>
