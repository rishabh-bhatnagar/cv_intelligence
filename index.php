<head>
    <link rel="stylesheet" href="index.css">
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="index.js"></script
</head>
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
        <input type="button" name="next" class="next action-button" value="Next" id="name"/>
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