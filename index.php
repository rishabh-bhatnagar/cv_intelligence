<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="index.css">
    <script type="text/javascript" src="index.js"></script>
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
        <input type="text" name="HSC" placeholder="Education" />
        <input type="text" name="Marks" placeholder="Marks" />
        <input type="text" name="HSC" placeholder="Education" />
        <input type="text" name="Marks" placeholder="Marks" />
        <input type="text" name="HSC" placeholder="Education" />
        <input type="text" name="Marks" placeholder="Marks" />
        <input type="button" name="previous" class="previous action-button" value="Previous" />
        <input type="button" name="next" class="next action-button" value="Next" />
    </fieldset>
    <fieldset>

    </fieldset>
</form>
</body>
</html>
