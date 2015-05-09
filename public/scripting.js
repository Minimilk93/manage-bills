/**
 * Created by Shelby on 09/05/2015.
 */

function DivideFunction() {
    var x = document.getElementById("bill_amount").value;
    var y = document.getElementById("bill_divide").value;

    var z = x/y;
    var amount = document.getElementById("bill_shared");
    amount.value = "£" + z;
}