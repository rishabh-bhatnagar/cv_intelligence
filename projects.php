<html>
<body>
<table id="project_container">
    <tr>
        <td>
            <div style="height: 23; width: 23;  display: flex;">
                <svg class="remove-icon" viewBox="0 0 12 12" id="a">
                    <circle cx="6" cy="6" r="5"></circle>
                    <line x1="4" x2="8" y1="4" y2="8" style="stroke:#ffffff;"></line>
                    <line x1="8" x2="4" y1="4" y2="8" style="stroke:#ffffff;"></line>
                </svg>
            </div>
            <div>
                <table>
                    <tr>
                        <td>Name</td>
                        <td>Description</td>
                    </tr>
                    <tr>
                        <td valign="top"><input type="text"></td>
                        <td><textarea type="text" height="" style="resize: none;" rows="7" cols="45"></textarea></td>
                    </tr>
                </table>
            </div>
        </td>
    </tr>
</table>

<input type="button" value="Add Project" id="add_project">
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>
<script>
    $('svg').on('click', '', function () {
        //ToDo: This statement does nor run on dynamically added elements.
        $(this).closest('tr').remove();
    });

    $('#add_project').click(function () {
        $('#project_container').append("" +
            "<tr>\n" +
            "        <td>\n" +
            "            <div style=\"height: 23; width: 23;  display: flex;\">\n" +
            "                <svg class=\"remove-icon\" viewBox=\"0 0 12 12\" id=\"a\">\n" +
            "                    <circle cx=\"6\" cy=\"6\" r=\"5\"></circle>\n" +
            "                    <line x1=\"4\" x2=\"8\" y1=\"4\" y2=\"8\" style=\"stroke:#ffffff;\"></line>\n" +
            "                    <line x1=\"8\" x2=\"4\" y1=\"4\" y2=\"8\" style=\"stroke:#ffffff;\"></line>\n" +
            "                </svg>\n" +
            "            </div>\n" +
            "            <div>\n" +
            "                <table>\n" +
            "                    <tr>\n" +
            "                        <td>Name</td>\n" +
            "                        <td>Description</td>\n" +
            "                    </tr>\n" +
            "                    <tr>\n" +
            "                        <td valign=\"top\"><input type=\"text\"></td>\n" +
            "                        <td><textarea type=\"text\" height=\"\" style=\"resize: none;\" rows=\"7\" cols=\"45\"></textarea></td>\n" +
            "                    </tr>\n" +
            "                </table>\n" +
            "            </div>\n" +
            "        </td>\n" +
            "    </tr>");
    });
</script>

</body>
</html>