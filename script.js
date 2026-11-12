
$(document).ready(function() {

    $("#registrationForm").on("submit", function(event) {

        let mobile = $("input[name='mobile']").val();
        let pincode = $("input[name='pincode']").val();

        if (!/^[0-9]{10}$/.test(mobile)) {
            alert("Please enter a valid 10-digit mobile number.");
            event.preventDefault();
            return;
        }

        if (!/^[0-9]{6}$/.test(pincode)) {
            alert("Please enter a valid 6-digit PIN code.");
            event.preventDefault();
            return;
        }

        if (!$("#declaration").is(":checked")) {
            alert("Please accept the declaration.");
            event.preventDefault();
            return;
        }

        return true;
    });

});
