<!DOCTYPE html>

<html lang="en" >

<head>

    <link rel="stylesheet" href="index.css">

</head>



<body>



<!-- multistep form -->

<form id="msform">

    <!-- progressbar -->

    <ul id="progressbar">

        <li class="active">Demographic</li>

        <li>Education</li>

        <li>Projects</li>

        <li>Certification </li>
        <li>Skills</li>

        <li>Employment</li>



    </ul>

    <!-- fieldsets -->

    <fieldset>

        <h2 class="fs-title">Create your account</h2>

        <h3 class="fs-subtitle">This is step 1</h3>

        <input type="text" name="Name" placeholder="Name" />

        <input type="address" name="address" placeholder="Address" />

        <input type="text" name="Email" placeholder="Email" />

        <input type="text" name="Website" placeholder="Website" />

        <input type="button" name="next" class="next action-button" value="Next" />

    </fieldset>

    <fieldset>

        <input type="text" name="HSC" placeholder="HSC Education" />

        <input type="text" name="Marks" placeholder="Marks" />

        <input type="text" name="HSC" placeholder="Graduation" />

        <input type="text" name="Marks" placeholder="Marks" />

        <input type="text" name="HSC" placeholder="Post Graduation" />

        <input type="text" name="Marks" placeholder="Marks" />

        <input type="button" name="previous" class="previous action-button" value="Previous" />

        <input type="button" name="next" class="next action-button" value="Next" />

    </fieldset>

    <fieldset>

       <input type ="text" name = "Project" placeholder="Project name" />
       <input type = "textarea" name ="Description" placeholder="Description"/>
       <input type ="text" name = "Project" placeholder="Project name" />
       <input type = "textarea" name ="Description" placeholder="Description"/>
       <input type ="text" name = "Project" placeholder="Project name" />
       <input type = "textarea" name ="Description" placeholder="Description"/>
       <input type="button" name="previous" class="previous action-button" value="Previous" />

        <input type="button" name="next" class="next action-button" value="Next" />

    </fieldset>
<fieldset>
       <input type ="text" name = "Project" placeholder="Certificate Name" />
       <input type = "textarea" name ="Description" placeholder="Institution/ Organization"/>
       <input type ="text" name = "Project" placeholder="Certificate Name" />
       <input type = "textarea" name ="Description" placeholder="Institution/ Organization"/>
       <input type ="text" name = "Project" placeholder="Certificate Name" />
       <input type = "textarea" name ="Description" placeholder="Institution/ Organization"/>
       <input type="button" name="previous" class="previous action-button" value="Previous" />

        <input type="button" name="next" class="next action-button" value="Next" />

</fieldset>
<fieldset>

       <input type ="text" name = "Project" placeholder="Programming Skills" />
       <input type = "textarea" name ="Description" placeholder="Data Analytics Skills"/>
       <input type ="text" name = "Project" placeholder="Data Science Skills" />
       <input type = "textarea" name ="Description" placeholder="Other Skills"/>
       
       <input type="button" name="previous" class="previous action-button" value="Previous" />

        <input type="button" name="next" class="next action-button" value="Next" />

</fieldset>
<fieldset>
 
       <input type ="text" name = "Project" placeholder="Company Name" />
       <input type = "text" name ="Description" placeholder="Work Profile"/>
       <input type = "text" name ="Description" placeholder="Start and End Year"/>
       <input type ="text" name = "Project" placeholder="Company Name" />
       <input type = "text" name ="Description" placeholder="Work File"/>
       <input type = "text" name ="Description" placeholder="Start and End Year"/>
       <input type ="text" name = "Project" placeholder="Company Name" />
       <input type = "text" name ="Description" placeholder="Work File"/>
       <input type = "text" name ="Description" placeholder="Start and End Year"/>
       <input type="button" name="previous" class="previous action-button" value="Previous" />

        <input type="button" name="submit" class="submit action-button" value="Submit" />


</fieldset>
</form>

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>

<script  src="index.js"></script>

</body>

</html>
