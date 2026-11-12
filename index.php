
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Application Form</title>

    <link rel="stylesheet" href="style.css">

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="script.js"></script>
</head>
<body>

<div class="container">
    <div class="header">
        <h1>Online Application Form</h1>
        <p>Please fill in the details below</p>
    </div>

    <form id="registrationForm" action="process.php" method="POST">

        <h2>Personal Information</h2>

        <div class="form-row">
            <div class="form-group">
                <label>Full Name *</label>
                <input type="text" name="fullname" required>
            </div>

            <div class="form-group">
                <label>Date of Birth *</label>
                <input type="date" name="dob" required>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group">
                <label>Gender *</label>
                <select name="gender" required>
                    <option value="">Select Gender</option>
                    <option>Male</option>
                    <option>Female</option>
                    <option>Other</option>
                </select>
            </div>

            <div class="form-group">
                <label>Email Address *</label>
                <input type="email" name="email" required>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group">
                <label>Mobile Number *</label>
                <input type="tel" name="mobile" maxlength="10"
                       pattern="[0-9]{10}" required>
            </div>

            <div class="form-group">
                <label>Nationality</label>
                <input type="text" name="nationality">
            </div>
        </div>

        <h2>Educational Information</h2>

        <div class="form-row">
            <div class="form-group">
                <label>Qualification *</label>
                <select name="qualification" required>
                    <option value="">Select Qualification</option>
                    <option>SSLC</option>
                    <option>PUC</option>
                    <option>Diploma</option>
                    <option>Undergraduate</option>
                    <option>Postgraduate</option>
                    <option>Other</option>
                </select>
            </div>

            <div class="form-group">
                <label>Course Applied For *</label>
                <input type="text" name="course" required>
            </div>
        </div>

        <h2>Address Information</h2>

        <div class="form-group">
            <label>Address *</label>
            <textarea name="address" rows="3" required></textarea>
        </div>

        <div class="form-row">
            <div class="form-group">
                <label>City *</label>
                <input type="text" name="city" required>
            </div>

            <div class="form-group">
                <label>State *</label>
                <input type="text" name="state" required>
            </div>
        </div>

        <div class="form-group">
            <label>PIN Code *</label>
            <input type="text" name="pincode"
                   pattern="[0-9]{6}" maxlength="6" required>
        </div>

        <div class="checkbox">
            <input type="checkbox" id="declaration" required>
            <label for="declaration">
                I hereby declare that the information provided is true.
            </label>
        </div>

        <button type="submit" class="submit-btn">
            Submit Application
        </button>

        <button type="reset" class="reset-btn">
            Reset
        </button>

    </form>
</div>

</body>
</html>
