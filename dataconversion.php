<?php include('./header.php'); ?>

<div class="container">
    <div class="row">
        <section class="table-container">
            <table class="mathematics">
                <tr>
                    <td><p>Function</p></td>
                    <td><p>Description</p></td>
                    <td><p>From the version..</p></td>
                </tr>
                <tr>
                    <td><p>ToChar(n)</p></td>
                    <td><p>Converts a character code n to a character <br>
                    ex: ToChar(65) à “A”</p></td>
                    <td><p>1.5</p></td>
                </tr>
                <tr>
                    <td><p>ToCode(c)</p></td>
                    <td><p>Converts a c character to a character code (integer) <br>
                    e.g. ToCode(“A”) at 65</p></td>
                    <td><p>1.8</p></td>
                </tr>
                <tr>
                    <td><p>ToFixed(r, i)</p></td>
                    <td><p>Converts a real number r to a string with decimal places <br>
                    ex: ToFixed(123.456, 1) à “123.4”</p></td>
                    <td><p>1.8</p></td>
                </tr>
                <tr>
                    <td><p>ToInteger(s)</p></td>
                    <td><p>Converts a string with numeric characters to an integer <br>
                    e.g. ToInteger(“123”) to 123</p></td>
                    <td><p>&nbsp;</p></td>
                </tr>
                <tr>
                    <td><p>ToReal(s)</p></td>
                    <td><p>Converts a string with numeric characters to a real <br>
                    ex: ToReal(“123.5”) to 123.5</p></td>
                    <td><p>&nbsp;</p></td>
                </tr>
                <tr>
                    <td><p>ToString(n)</p></td>
                    <td><p>Converts a number to a string e.g.: <br>
                    ToString(123.5) to “123.5”</p></td>
                    <td><p>&nbsp;</p></td>
                </tr>
            </table>
        </section>
    </div>
</div>

<?php include('./footer.php'); ?>