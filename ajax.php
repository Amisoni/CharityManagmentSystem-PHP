<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ajax Demo</title>
    </head>
    <body>
        <form name="frmAjax" id="frmAjax">
            <table>
                <tr>
                    <td>Country Name</td>
                    <td><select name="sltCountry" id="sltCountry"></select></td>
                </tr>

                <tr>
                    <td>State Name</td>
                    <td>
                        <select name="sltState" id="sltState">
                            <option value = '0'>---Loading---</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>District Name</td>
                    <td>
                        <select name="sltDistrict" id="sltDistrict">
                            <option value = '0'>---Loading---</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>City Name</td>
                    <td>
                        <select name="sltCity" id="sltCity">
                            <option value = '0'>---Loading---</option>
                        </select>
                    </td>
                </tr>
            </table>

        </form>
    </body>
    <script src="js/jquery.js" type="text/javascript"></script>
    <script src="js/jquery-ui.js" type="text/javascript"></script>
    <script>
        $(document).ready(function () {
            $.ajax({
                async: false,
                datatype: 'json',
                method: 'POST',
                url: 'controller/DropDownController.php',
                data: {
                    page: 'sltCountry'
                },
                success: function (data) {
                    $("#sltCountry").html("");
                    $("#sltCountry").html(data);
                }
            });

            $("#sltCountry").change(function () {
                $.ajax({
                    async: false,
                    datatype: 'json',
                    method: 'POST',
                    url: 'controller/DropDownController.php',
                    data: {
                        id: $("#sltCountry").val(),
                        page: 'sltState'
                    },
                    success: function (data) {
                        $("#sltState").html("");
                        $("#sltState").html(data);
                    }
                });
            });

            $("#sltDistrict").change(function () {
                $.ajax({
                    async: false,
                    datatype: 'json',
                    method: 'POST',
                    url: 'controller/DropDownController.php',
                    data: {
                        id: $("#sltDistrict").val(),
                        page: 'sltState'
                    },
                    success: function (data) {
                        $("#sltState").html("");
                        $("#sltState").html(data);
                    }
                });
            });

            $("#sltState").change(function () {
                $.ajax({
                    async: false,
                    datatype: 'json',
                    method: 'POST',
                    url: 'controller/DropDownController.php',
                    data: {
                        id: $("#sltState").val(),
                        page: 'sltCity'
                    },
                    success: function (data) {
                        $("#sltCountry").html("");
                        $("#sltCountry").html(data);
                    }
                });
            });
        })
    </script>
</html>
