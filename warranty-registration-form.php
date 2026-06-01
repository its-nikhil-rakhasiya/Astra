<?php
$pageTitle = "Warranty Registration";
$noBanner = true;
include 'include/header.php';
?>

<style>
    /* Premium Warranty Registration Form Custom Styles */
    .warranty-section {
        padding: 120px 0;
        background: #fafafa;
        position: relative;
        overflow: hidden;
    }

    .warranty-section::before {
        content: '';
        position: absolute;
        top: 0;
        right: 0;
        width: 400px;
        height: 400px;
        background: radial-gradient(circle, rgba(246, 175, 33, 0.05) 0%, rgba(255, 255, 255, 0) 70%);
        z-index: 0;
        pointer-events: none;
    }

    .warranty-section::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 500px;
        height: 500px;
        background: radial-gradient(circle, rgba(0, 0, 0, 0.02) 0%, rgba(255, 255, 255, 0) 70%);
        z-index: 0;
        pointer-events: none;
    }

    .warranty-form-container {
        background: #ffffff;
        border-radius: 20px;
        padding: 50px;
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.05);
        border: 1px solid rgba(0, 0, 0, 0.03);
        position: relative;
        z-index: 1;
        transition: all 0.4s ease;
    }

    .warranty-form-container:hover {
        box-shadow: 0 20px 50px rgba(246, 175, 33, 0.08);
    }

    .warranty-header {
        text-align: center;
        margin-bottom: 45px;
    }

    .warranty-header h3 {
        font-family: 'Poppins', sans-serif;
        font-weight: 700;
        font-size: 32px;
        color: #1a1a1a;
        margin-bottom: 12px;
    }

    .warranty-header p {
        font-family: 'Rubik', sans-serif;
        color: #666;
        font-size: 16px;
        max-width: 600px;
        margin: 0 auto;
        line-height: 1.6;
    }

    .form-group-title {
        font-family: 'Poppins', sans-serif;
        font-size: 18px;
        font-weight: 600;
        color: #1a1a1a;
        margin-bottom: 25px;
        padding-bottom: 10px;
        border-bottom: 2px solid rgba(246, 175, 33, 0.1);
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .form-group-title i {
        color: #f6af21;
    }

    .form-input-wrapper {
        position: relative;
        margin-bottom: 25px;
    }

    .form-input-wrapper label {
        font-family: 'Poppins', sans-serif;
        font-size: 13px;
        font-weight: 500;
        color: #666;
        margin-bottom: 8px;
        display: block;
        transition: color 0.3s ease;
    }

    .form-input-wrapper input,
    .form-input-wrapper select {
        width: 100%;
        padding: 14px 20px;
        font-family: 'Rubik', sans-serif;
        font-size: 15px;
        border: 1px solid rgba(0, 0, 0, 0.08);
        background: #fdfdfd;
        border-radius: 8px;
        outline: none;
        transition: all 0.3s ease;
        color: #333;
    }

    .form-input-wrapper input:focus,
    .form-input-wrapper select:focus {
        border-color: #f6af21;
        background: #ffffff;
        box-shadow: 0 5px 15px rgba(246, 175, 33, 0.05);
    }

    /* custom file upload */
    .file-upload-card {
        border: 2px dashed rgba(246, 175, 33, 0.2);
        background: rgba(246, 175, 33, 0.02);
        border-radius: 12px;
        padding: 30px 20px;
        text-align: center;
        cursor: pointer;
        transition: all 0.3s ease;
        margin-bottom: 25px;
        position: relative;
    }

    .file-upload-card:hover {
        background: rgba(246, 175, 33, 0.05);
        border-color: #f6af21;
    }

    .file-upload-card input[type="file"] {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        opacity: 0;
        cursor: pointer;
    }

    .file-upload-icon {
        font-size: 40px;
        color: #f6af21;
        margin-bottom: 12px;
        transition: transform 0.3s ease;
    }

    .file-upload-card:hover .file-upload-icon {
        transform: translateY(-5px);
    }

    .file-upload-text h4 {
        font-family: 'Poppins', sans-serif;
        font-size: 16px;
        font-weight: 600;
        color: #1a1a1a;
        margin-bottom: 6px;
    }

    .file-upload-text p {
        font-family: 'Rubik', sans-serif;
        font-size: 13px;
        color: #888;
        margin: 0;
    }

    .file-preview {
        display: none;
        margin-top: 15px;
        padding: 8px 15px;
        background: rgba(40, 167, 69, 0.1);
        border: 1px solid rgba(40, 167, 69, 0.2);
        border-radius: 6px;
        color: #28a745;
        font-family: 'Rubik', sans-serif;
        font-size: 13px;
        align-items: center;
        justify-content: space-between;
    }

    .file-preview span {
        font-weight: 500;
    }

    .file-preview i {
        cursor: pointer;
    }

    .verification-checkbox {
        display: flex;
        align-items: flex-start;
        gap: 12px;
        margin-top: 15px;
        margin-bottom: 35px;
        cursor: pointer;
    }

    .verification-checkbox input {
        margin-top: 4px;
        accent-color: #f6af21;
        width: 18px;
        height: 18px;
    }

    .verification-checkbox span {
        font-family: 'Rubik', sans-serif;
        font-size: 14px;
        color: #555;
        line-height: 1.5;
        user-select: none;
    }

    /* Submit Button styling */
    .submit-btn-wrapper {
        text-align: center;
    }

    .submit-btn-wrapper button {
        border: none;
        outline: none;
        cursor: pointer;
        padding: 16px 45px;
        font-size: 16px;
        font-family: 'Poppins', sans-serif;
        font-weight: 600;
    }

    /* Success State */
    .success-container {
        display: none;
        text-align: center;
        padding: 40px 20px;
    }

    .success-icon-wrap {
        width: 100px;
        height: 100px;
        background: rgba(246, 175, 33, 0.1);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 30px;
        animation: scaleIn 0.5s ease forwards;
    }

    .success-icon {
        font-size: 45px;
        color: #f6af21;
    }

    .success-container h2 {
        font-family: 'Poppins', sans-serif;
        font-weight: 700;
        font-size: 36px;
        color: #1a1a1a;
        margin-bottom: 15px;
    }

    .success-container p {
        font-family: 'Rubik', sans-serif;
        color: #555;
        font-size: 16px;
        max-width: 500px;
        margin: 0 auto 30px;
        line-height: 1.6;
    }

    .warranty-id-card {
        background: rgba(246, 175, 33, 0.05);
        border: 2px dashed rgba(246, 175, 33, 0.3);
        border-radius: 12px;
        padding: 20px 30px;
        display: inline-block;
        margin-bottom: 40px;
    }

    .warranty-id-card span {
        font-family: 'Rubik', sans-serif;
        font-size: 14px;
        color: #666;
        text-transform: uppercase;
        letter-spacing: 1px;
        display: block;
        margin-bottom: 5px;
    }

    .warranty-id-card h3 {
        font-family: 'Poppins', sans-serif;
        font-size: 32px;
        font-weight: 700;
        color: #f6af21;
        margin: 0;
        letter-spacing: 2px;
    }

    .success-action-btns {
        display: flex;
        justify-content: center;
        gap: 20px;
        flex-wrap: wrap;
    }

    .success-action-btns a,
    .success-action-btns button {
        padding: 15px 35px;
        border-radius: 8px;
        font-family: 'Poppins', sans-serif;
        font-weight: 600;
        font-size: 15px;
        transition: all 0.3s ease;
        text-decoration: none;
    }

    .btn-download-cert {
        background: #f6af21;
        color: #ffffff !important;
        box-shadow: 0 10px 20px rgba(246, 175, 33, 0.2);
    }

    .btn-download-cert:hover {
        background: #1a1a1a;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
    }

    .btn-register-new {
        background: #e5e5e5;
        color: #333333 !important;
        border: none;
        cursor: pointer;
    }

    .btn-register-new:hover {
        background: #d5d5d5;
    }

    @keyframes scaleIn {
        0% {
            transform: scale(0);
        }
        100% {
            transform: scale(1);
        }
    }

    /* Error Text styling */
    .validation-error {
        color: #dc3545;
        font-size: 12px;
        font-family: 'Rubik', sans-serif;
        margin-top: 5px;
        display: none;
    }
</style>

<!--Warranty Section Start-->
<section class="warranty-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10">
                <div class="warranty-form-container">
                    
                    <!-- Form State -->
                    <div id="warranty-form-wrap">
                        <div class="warranty-header">
                            <h3>Register Your Warranty</h3>
                            <p>Secure your Surface Shield premium investment. Register your installation details below to activate your 5-year natural finishing and self-healing warranty certificate.</p>
                        </div>
                        
                        <form id="warrantyRegistrationForm" method="POST" enctype="multipart/form-data">
                            
                            <!-- Section 1: Customer Details -->
                            <div class="form-group-title">
                                <i class="fas fa-user-shield"></i>
                                <span>Customer Information</span>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-input-wrapper">
                                        <label for="name">Full Name *</label>
                                        <input type="text" id="name" name="name" placeholder="Enter your full name" required>
                                        <span class="validation-error" id="name-error">Please enter your name.</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-input-wrapper">
                                        <label for="email">Email Address *</label>
                                        <input type="email" id="email" name="email" placeholder="example@domain.com" required>
                                        <span class="validation-error" id="email-error">Please enter a valid email.</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-input-wrapper">
                                        <label for="phone">Mobile Number *</label>
                                        <input type="tel" id="phone" name="phone" placeholder="e.g. 98765 43210" required>
                                        <span class="validation-error" id="phone-error">Please enter your phone number.</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-input-wrapper">
                                        <label for="city">City / Region *</label>
                                        <select id="city" name="city" required>
                                            <option value="Hyderabad">Hyderabad</option>
                                            <option value="Bengaluru">Bengaluru</option>
                                            <option value="Chennai">Chennai</option>
                                            <option value="Other">Other</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Section 2: Installation Details -->
                            <div class="form-group-title" style="margin-top: 20px;">
                                <i class="fas fa-layer-group"></i>
                                <span>Installation & Invoice Details</span>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-input-wrapper">
                                        <label for="invoice_no">Invoice / Billing Number *</label>
                                        <input type="text" id="invoice_no" name="invoice_no" placeholder="e.g. SS-INV-4829" required>
                                        <span class="validation-error" id="invoice_no-error">Invoice number is required.</span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-input-wrapper">
                                        <label for="installation_date">Installation Date *</label>
                                        <input type="date" id="installation_date" name="installation_date" required>
                                        <span class="validation-error" id="date-error">Installation date is required.</span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-input-wrapper">
                                        <label for="service_type">Service Category *</label>
                                        <select id="service_type" name="service_type" required>
                                            <option value="Dining Table Protection">Dining Table Protection</option>
                                            <option value="Kitchen Marble Shield">Kitchen Marble Shield</option>
                                            <option value="Center Glass Tables">Center Glass Tables</option>
                                            <option value="Marble Console Table">Marble Console Table</option>
                                            <option value="Fabric Nano Coating">Fabric Nano Coating</option>
                                            <option value="Exterior Marble Wall Protection">Exterior Marble Wall Protection</option>
                                            <option value="Fridge Protection">Fridge Protection</option>
                                            <option value="Door SS Strip Wrap">Door SS Strip Wrap</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Section 3: Document Upload -->
                            <div class="form-group-title" style="margin-top: 20px;">
                                <i class="fas fa-file-invoice"></i>
                                <span>Upload Invoice Copy</span>
                            </div>
                            
                            <div class="file-upload-card">
                                <input type="file" id="invoice_file" name="invoice_file" accept=".pdf, .png, .jpg, .jpeg, .webp, .avif">
                                <div class="file-upload-icon">
                                    <i class="fal fa-cloud-upload"></i>
                                </div>
                                <div class="file-upload-text">
                                    <h4>Drag & drop or click to upload invoice copy</h4>
                                    <p>Accepted formats: PDF, PNG, JPG, WEBP, AVIF (Max 5MB)</p>
                                </div>
                                <div class="file-preview" id="upload-preview">
                                    <span>Selected file: <strong id="file-name"></strong></span>
                                    <i class="far fa-times" id="remove-file"></i>
                                </div>
                            </div>
                            
                            <label class="verification-checkbox">
                                <input type="checkbox" id="verify_check" required>
                                <span>I verify that the installation date, invoice number, and service information provided match my invoice copy and that all services were carried out by Surface Shield specialists.</span>
                            </label>
                            
                            <div class="submit-btn-wrapper">
                                <button type="submit" class="thm-btn" id="submitFormBtn">
                                    Activate Warranty Now
                                    <i class="fal fa-long-arrow-right"></i>
                                    <span class="hover-btn hover-bx"></span>
                                    <span class="hover-btn hover-bx2"></span>
                                    <span class="hover-btn hover-bx3"></span>
                                    <span class="hover-btn hover-bx4"></span>
                                </button>
                            </div>
                        </form>
                    </div>
                    
                    <!-- Success State -->
                    <div id="warranty-success-wrap" class="success-container">
                        <div class="success-icon-wrap">
                            <div class="success-icon">
                                <i class="fas fa-check-circle"></i>
                            </div>
                        </div>
                        <h2>Warranty Activated!</h2>
                        <p>Thank you. Your Surface Shield warranty registration has been completed successfully and registered in our database. Your 5-year coverage period is now active.</p>
                        
                        <div class="warranty-id-card">
                            <span>Your Custom Warranty ID</span>
                            <h3 id="display-warranty-id">SS-WAR-XXXXX</h3>
                        </div>
                        
                        <div class="success-action-btns">
                            <a href="download-e-warranty" id="cert-link-btn" class="btn-download-cert">
                                <i class="fal fa-file-certificate"></i> View & Print E-Warranty
                            </a>
                            <button type="button" class="btn-register-new" id="btnRegisterAnother">
                                Register Another Surface
                            </button>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>
<!--Warranty Section End-->

<!-- jQuery & AJAX handler script -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const fileInput = document.getElementById("invoice_file");
        const fileCard = document.querySelector(".file-upload-card");
        const preview = document.getElementById("upload-preview");
        const fileNameSpan = document.getElementById("file-name");
        const removeFileBtn = document.getElementById("remove-file");
        
        // Datepicker default: set to today's date
        const today = new Date().toISOString().split('T')[0];
        document.getElementById('installation_date').value = today;

        // Custom File Upload Preview
        fileInput.addEventListener("change", function() {
            if (fileInput.files.length > 0) {
                const file = fileInput.files[0];
                fileNameSpan.textContent = file.name;
                preview.style.display = "flex";
            }
        });

        removeFileBtn.addEventListener("click", function(e) {
            e.stopPropagation(); // prevent card trigger
            fileInput.value = "";
            preview.style.display = "none";
            fileNameSpan.textContent = "";
        });

        // Form Submit via AJAX
        const form = document.getElementById("warrantyRegistrationForm");
        const formWrap = document.getElementById("warranty-form-wrap");
        const successWrap = document.getElementById("warranty-success-wrap");
        const displayId = document.getElementById("display-warranty-id");
        const certLink = document.getElementById("cert-link-btn");
        const submitBtn = document.getElementById("submitFormBtn");

        form.addEventListener("submit", function(e) {
            e.preventDefault();

            // Simple client-side validation
            let hasError = false;
            document.querySelectorAll(".validation-error").forEach(el => el.style.display = "none");

            if (document.getElementById("name").value.trim() === "") {
                document.getElementById("name-error").style.display = "block";
                hasError = true;
            }
            if (document.getElementById("email").value.trim() === "") {
                document.getElementById("email-error").style.display = "block";
                hasError = true;
            }
            if (document.getElementById("phone").value.trim() === "") {
                document.getElementById("phone-error").style.display = "block";
                hasError = true;
            }
            if (document.getElementById("invoice_no").value.trim() === "") {
                document.getElementById("invoice_no-error").style.display = "block";
                hasError = true;
            }

            if (hasError) return;

            // Generate a client-side Warranty ID
            const random = Math.random().toString(36).substring(2, 7).toUpperCase();
            const warranty_id = 'SS-WAR-' + random;
            
            // Prepare record details
            const name = document.getElementById("name").value.trim();
            const email = document.getElementById("email").value.trim();
            const phone = document.getElementById("phone").value.trim();
            const city = document.getElementById("city").value;
            const invoice_no = document.getElementById("invoice_no").value.trim();
            const installation_date = document.getElementById("installation_date").value;
            const service_type = document.getElementById("service_type").value;
            
            // Calculate expiry date: exactly 5 years
            const installDateObj = new Date(installation_date);
            installDateObj.setFullYear(installDateObj.getFullYear() + 5);
            const expiry_date = installDateObj.toISOString().split('T')[0];
            
            const record = {
                warranty_id: warranty_id,
                name: name,
                email: email,
                phone: phone,
                city: city,
                invoice_no: invoice_no,
                installation_date: installation_date,
                expiry_date: expiry_date,
                service_type: service_type
            };
            
            // Save to localStorage so E-Warranty download page can retrieve it locally!
            let warranties = JSON.parse(localStorage.getItem('warranties') || '[]');
            warranties.push(record);
            localStorage.setItem('warranties', JSON.stringify(warranties));

            // Alert successful registration and reload the page
            alert("Registration Successful!");
            window.location.reload();
        });

        // Reset and Register another
        document.getElementById("btnRegisterAnother").addEventListener("click", function() {
            form.reset();
            fileInput.value = "";
            preview.style.display = "none";
            fileNameSpan.textContent = "";
            document.getElementById('installation_date').value = today;
            
            successWrap.style.display = "none";
            formWrap.style.display = "block";
        });
    });
</script>

<?php include 'include/footer.php'; ?>
