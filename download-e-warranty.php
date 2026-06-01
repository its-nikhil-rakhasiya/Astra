<?php
$pageTitle = "Download E-Warranty";
$noBanner = true;
include 'include/header.php';

// Check if search query is pre-filled from success redirection
$prefilledQuery = isset($_GET['query']) ? htmlspecialchars($_GET['query']) : '';
?>

<!-- Import Luxury Fonts for the Certificate -->
<link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@500;700;800&family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&display=swap" rel="stylesheet">

<style>
    /* Premium E-Warranty Interface Styles */
    .download-section {
        padding: 120px 0;
        background: #fafafa;
        position: relative;
        min-height: 80vh;
    }

    .search-card-container {
        background: #ffffff;
        border-radius: 16px;
        padding: 40px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.04);
        border: 1px solid rgba(0, 0, 0, 0.03);
        margin-bottom: 50px;
        transition: all 0.3s ease;
    }

    .search-card-container:hover {
        box-shadow: 0 15px 35px rgba(246, 175, 33, 0.06);
    }

    .search-title-wrap {
        text-align: center;
        margin-bottom: 30px;
    }

    .search-title-wrap h3 {
        font-family: 'Poppins', sans-serif;
        font-weight: 700;
        font-size: 28px;
        color: #1a1a1a;
        margin-bottom: 10px;
    }

    .search-title-wrap p {
        font-family: 'Rubik', sans-serif;
        color: #666;
        font-size: 15px;
    }

    .search-input-group {
        display: flex;
        gap: 15px;
        max-width: 650px;
        margin: 0 auto;
    }

    .search-input-wrapper {
        flex-grow: 1;
        position: relative;
    }

    .search-input-wrapper input {
        width: 100%;
        padding: 16px 20px 16px 50px;
        font-family: 'Rubik', sans-serif;
        font-size: 16px;
        border: 1.5px solid rgba(0, 0, 0, 0.08);
        border-radius: 8px;
        outline: none;
        background: #fafafa;
        transition: all 0.3s ease;
    }

    .search-input-wrapper input:focus {
        border-color: #f6af21;
        background: #ffffff;
        box-shadow: 0 5px 15px rgba(246, 175, 33, 0.05);
    }

    .search-input-wrapper i {
        position: absolute;
        top: 50%;
        left: 20px;
        transform: translateY(-50%);
        color: #f6af21;
        font-size: 18px;
    }

    .search-btn {
        padding: 0 35px;
        font-family: 'Poppins', sans-serif;
        font-weight: 600;
        font-size: 15px;
        border: none;
        cursor: pointer;
    }

    .demo-lookup-trigger {
        text-align: center;
        margin-top: 25px;
        font-family: 'Rubik', sans-serif;
        font-size: 14px;
        color: #666;
    }

    .demo-lookup-trigger button {
        background: none;
        border: none;
        color: #f6af21;
        font-weight: 600;
        cursor: pointer;
        padding: 0;
        margin-left: 5px;
        border-bottom: 1px dashed #f6af21;
        transition: all 0.3s ease;
    }

    .demo-lookup-trigger button:hover {
        color: #1a1a1a;
        border-color: #1a1a1a;
    }

    /* GORGEOUS PREMIUM CERTIFICATE CARD DESIGN */
    .certificate-outer-wrapper {
        display: none;
        margin: 0 auto;
        max-width: 900px;
        perspective: 1000px;
    }

    .certificate-card {
        background: #ffffff;
        box-shadow: 0 25px 60px rgba(0, 0, 0, 0.08);
        border-radius: 8px;
        padding: 60px;
        position: relative;
        overflow: hidden;
        border: 1px solid rgba(0, 0, 0, 0.04);
        background-image: radial-gradient(circle at 50% 50%, rgba(246, 175, 33, 0.02) 0%, rgba(255, 255, 255, 0) 80%);
        transition: transform 0.5s ease;
    }

    /* Double border with ornamental frame */
    .certificate-border-outer {
        border: 4px double #d4af37;
        padding: 8px;
        height: 100%;
        position: relative;
    }

    .certificate-border-inner {
        border: 1px solid rgba(212, 175, 55, 0.4);
        padding: 30px 40px;
        height: 100%;
        position: relative;
        text-align: center;
    }

    /* Corner Gold Flourishes */
    .corner-flourish {
        position: absolute;
        width: 35px;
        height: 35px;
        border: 2px solid #d4af37;
        z-index: 2;
    }

    .top-left {
        top: -2px;
        left: -2px;
        border-right: none;
        border-bottom: none;
    }

    .top-right {
        top: -2px;
        right: -2px;
        border-left: none;
        border-bottom: none;
    }

    .bottom-left {
        bottom: -2px;
        left: -2px;
        border-right: none;
        border-top: none;
    }

    .bottom-right {
        bottom: -2px;
        right: -2px;
        border-left: none;
        border-top: none;
    }

    /* Certificate Content */
    .cert-badge {
        font-family: 'Cinzel', serif;
        font-size: 13px;
        font-weight: 700;
        color: #d4af37;
        letter-spacing: 5px;
        text-transform: uppercase;
        margin-bottom: 25px;
        display: block;
    }

    .cert-logo {
        margin-bottom: 30px;
    }

    .cert-logo img {
        height: 45px;
        filter: grayscale(1) brightness(0.2);
    }

    .cert-title {
        font-family: 'Cinzel', serif;
        font-weight: 700;
        font-size: 38px;
        color: #111;
        letter-spacing: 2px;
        margin-bottom: 15px;
        text-transform: uppercase;
    }

    .cert-subtitle {
        font-family: 'Playfair Display', serif;
        font-style: italic;
        font-size: 18px;
        color: #555;
        margin-bottom: 35px;
    }

    .cert-name-label {
        font-family: 'Rubik', sans-serif;
        font-size: 12px;
        color: #888;
        text-transform: uppercase;
        letter-spacing: 2px;
        margin-bottom: 8px;
    }

    .cert-name {
        font-family: 'Cinzel', serif;
        font-weight: 700;
        font-size: 32px;
        color: #1a1a1a;
        margin-bottom: 12px;
        border-bottom: 1px solid rgba(212, 175, 55, 0.3);
        display: inline-block;
        padding: 0 40px 10px;
    }

    .cert-text {
        font-family: 'Playfair Display', serif;
        font-size: 16px;
        line-height: 1.8;
        color: #444;
        max-width: 680px;
        margin: 0 auto 40px;
    }

    /* Details Grid */
    .cert-details-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 30px;
        margin-bottom: 50px;
        border-top: 1px solid rgba(0, 0, 0, 0.05);
        border-bottom: 1px solid rgba(0, 0, 0, 0.05);
        padding: 25px 0;
    }

    .cert-detail-item {
        text-align: center;
    }

    .cert-detail-item label {
        font-family: 'Rubik', sans-serif;
        font-size: 11px;
        color: #888;
        text-transform: uppercase;
        letter-spacing: 1.5px;
        display: block;
        margin-bottom: 6px;
    }

    .cert-detail-item span {
        font-family: 'Poppins', sans-serif;
        font-weight: 600;
        font-size: 15px;
        color: #111;
    }

    /* Watermark background */
    .cert-watermark {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 320px;
        height: 320px;
        opacity: 0.025;
        z-index: 0;
        pointer-events: none;
    }

    /* Bottom Stamp & Signatures section */
    .cert-footer-row {
        display: flex;
        justify-content: space-between;
        align-items: flex-end;
        padding: 0 20px;
        margin-top: 20px;
    }

    .cert-signature {
        text-align: center;
        width: 180px;
    }

    .signature-line {
        border-top: 1px solid rgba(0, 0, 0, 0.15);
        margin-top: 10px;
        padding-top: 6px;
    }

    .signature-line span {
        font-family: 'Rubik', sans-serif;
        font-size: 11px;
        color: #777;
        text-transform: uppercase;
        letter-spacing: 1px;
        display: block;
    }

    .signature-line strong {
        font-family: 'Poppins', sans-serif;
        font-weight: 600;
        font-size: 12px;
        color: #222;
        display: block;
    }

    .md-sign-img {
        height: 45px;
        margin-bottom: -5px;
        opacity: 0.95;
    }

    .cert-stamp-box {
        position: relative;
        width: 100px;
        height: 100px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .cert-gold-stamp {
        width: 90px;
        height: 90px;
        background: radial-gradient(circle, #fcd873 0%, #d4af37 100%);
        border-radius: 50%;
        border: 2px dashed #ffffff;
        box-shadow: 0 4px 10px rgba(212, 175, 55, 0.3), inset 0 0 10px rgba(0, 0, 0, 0.1);
        display: flex;
        align-items: center;
        justify-content: center;
        animation: rotateStamp 20s linear infinite;
        position: absolute;
    }

    .stamp-text {
        font-family: 'Cinzel', serif;
        font-size: 7px;
        color: #7d6100;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        text-align: center;
    }

    .stamp-center {
        width: 50px;
        height: 50px;
        background: #ffffff;
        border-radius: 50%;
        z-index: 1;
        display: flex;
        align-items: center;
        justify-content: center;
        border: 1px solid #d4af37;
        box-shadow: inset 0 0 5px rgba(212, 175, 55, 0.2);
    }

    .stamp-center i {
        color: #d4af37;
        font-size: 20px;
    }

    /* Actions row on screen */
    .cert-actions-row {
        text-align: center;
        margin-top: 40px;
        display: flex;
        justify-content: center;
        gap: 20px;
    }

    .btn-cert-action {
        padding: 15px 35px;
        border-radius: 8px;
        font-family: 'Poppins', sans-serif;
        font-weight: 600;
        font-size: 15px;
        transition: all 0.3s ease;
        text-decoration: none;
        cursor: pointer;
        display: inline-flex;
        align-items: center;
        gap: 8px;
    }

    .btn-print-pdf {
        background: #f6af21;
        color: #ffffff !important;
        border: none;
        box-shadow: 0 10px 20px rgba(246, 175, 33, 0.2);
    }

    .btn-print-pdf:hover {
        background: #1a1a1a;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
    }

    .btn-search-again {
        background: #e5e5e5;
        color: #333333 !important;
        border: none;
    }

    .btn-search-again:hover {
        background: #d5d5d5;
    }

    @keyframes rotateStamp {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }

    /* Certificate alert message */
    .lookup-error-msg {
        background: rgba(220, 53, 69, 0.08);
        border: 1px solid rgba(220, 53, 69, 0.2);
        color: #dc3545;
        border-radius: 8px;
        padding: 12px 20px;
        max-width: 650px;
        margin: 20px auto 0;
        text-align: center;
        font-family: 'Rubik', sans-serif;
        font-size: 14px;
        display: none;
    }

    /* PRINT LAYOUT ADJUSTMENTS - Hide headers, footers & backgrounds to print ONLY the certificate */
    @media print {
        body, html {
            background: #ffffff !important;
            margin: 0 !important;
            padding: 0 !important;
            height: 100%;
        }
        
        .main-header,
        .site-footer-three,
        .search-card-container,
        .cert-actions-row,
        .chat-icon,
        .chat-popup,
        .scroll-to-target,
        .custom-cursor__cursor,
        .custom-cursor__cursor-two,
        .loader {
            display: none !important;
        }

        .download-section {
            padding: 0 !important;
            background: #ffffff !important;
        }

        .certificate-outer-wrapper {
            display: block !important;
            max-width: 100% !important;
            margin: 0 !important;
            padding: 0 !important;
            box-shadow: none !important;
        }

        .certificate-card {
            border: none !important;
            box-shadow: none !important;
            padding: 20px !important;
            background: #ffffff !important;
            page-break-inside: avoid;
        }

        .certificate-border-outer {
            border: 4px double #111111 !important;
        }

        .certificate-border-inner {
            border: 1px solid rgba(0, 0, 0, 0.3) !important;
            padding: 40px !important;
        }

        .cert-gold-stamp {
            border: 2px dashed rgba(0, 0, 0, 0.3) !important;
            background: radial-gradient(circle, #fcd873 0%, #d4af37 100%) !important;
            -webkit-print-color-adjust: exact;
            print-color-adjust: exact;
        }
    }
</style>

<!--Download Section Start-->
<section class="download-section">
    <div class="container">
        
        <!-- Search Card -->
        <div class="search-card-container">
            <div class="search-title-wrap">
                <h3>Download Your E-Warranty</h3>
                <p>Enter your 11-digit Warranty ID, registered Email Address, or Mobile Number below to access your Surface Shield E-Warranty Certificate.</p>
            </div>
            
            <form id="warrantyLookupForm" method="GET">
                <div class="search-input-group">
                    <div class="search-input-wrapper">
                        <i class="fal fa-search"></i>
                        <input type="text" id="search_query" name="query" placeholder="Enter Warranty ID, Phone, or Email" value="<?php echo $prefilledQuery; ?>" required>
                    </div>
                    <button type="submit" class="thm-btn search-btn" id="searchBtn">
                        Search Warranty
                        <i class="fal fa-long-arrow-right"></i>
                        <span class="hover-btn hover-bx"></span>
                        <span class="hover-btn hover-bx2"></span>
                        <span class="hover-btn hover-bx3"></span>
                        <span class="hover-btn hover-bx4"></span>
                    </button>
                </div>
            </form>
            
            <div class="lookup-error-msg" id="errorMessage">
                No active warranty record found matching that search.
            </div>
            
            <div class="demo-lookup-trigger">
                <span>Want to see how it looks?</span>
                <button type="button" id="btnLoadDemo">View Demo Certificate</button>
            </div>
        </div>

        <!-- Certificate Card (Renders dynamically) -->
        <div class="certificate-outer-wrapper" id="certWrapper">
            <div class="certificate-card">
                <div class="certificate-border-outer">
                    <div class="certificate-border-inner">
                        
                        <!-- Flourished Corners -->
                        <div class="corner-flourish top-left"></div>
                        <div class="corner-flourish top-right"></div>
                        <div class="corner-flourish bottom-left"></div>
                        <div class="corner-flourish bottom-right"></div>
                        
                        <!-- Watermark -->
                        <img class="cert-watermark" src="assets/images/resources/logo-1.avif" alt="">
                        
                        <!-- Content -->
                        <span class="cert-badge">Certificate of Authenticity</span>
                        
                        <div class="cert-logo">
                            <img src="assets/images/resources/logo-1.avif" alt="ASTRA">
                        </div>
                        
                        <h2 class="cert-title">E-Warranty Certificate</h2>
                        <p class="cert-subtitle">This certificate guarantees premium surface protection</p>
                        
                        <div class="cert-name-label">This document is proudly awarded to</div>
                        <h3 class="cert-name" id="cert-name">Naresh Kumar</h3>
                        
                        <p class="cert-text">
                            Astra officially certifies that the premium Surface Shield Protective TPU Film has been expertly applied to the designated interior surface. The installation is fully covered under our manufacturer-backed **5-Year self-healing & optical clarity guarantee** securing protection against spills, heat, micro-scratches, and oxidation.
                        </p>
                        
                        <!-- Details Grid -->
                        <div class="cert-details-grid">
                            <div class="cert-detail-item">
                                <label>Surface Shield Service</label>
                                <span id="cert-service">Dining Table Protection</span>
                            </div>
                            <div class="cert-detail-item">
                                <label>Date of Installation</label>
                                <span id="cert-date">June 1, 2026</span>
                            </div>
                            <div class="cert-detail-item">
                                <label>Warranty Expiry</label>
                                <span id="cert-expiry">June 1, 2031</span>
                            </div>
                            <div class="cert-detail-item" style="border-top: 1px dashed rgba(0,0,0,0.05); padding-top: 15px;">
                                <label>Invoice Number</label>
                                <span id="cert-invoice">SS-INV-1002</span>
                            </div>
                            <div class="cert-detail-item" style="border-top: 1px dashed rgba(0,0,0,0.05); padding-top: 15px;">
                                <label>Unique Warranty ID</label>
                                <span id="cert-id" style="color: #d4af37; font-weight: 700;">SS-WAR-A8B9C</span>
                            </div>
                            <div class="cert-detail-item" style="border-top: 1px dashed rgba(0,0,0,0.05); padding-top: 15px;">
                                <label>Installation City</label>
                                <span id="cert-city">Bengaluru</span>
                            </div>
                        </div>
                        
                        <!-- Footer Signature and Stamp -->
                        <div class="cert-footer-row">
                            <div class="cert-signature">
                                <img src="assets/images/resources/about-two-author-sign.avif" alt="Signature" class="md-sign-img" style="display: block; margin: 0 auto 5px;">
                                <div class="signature-line">
                                    <strong>Naresh Kumar</strong>
                                    <span>Managing Director</span>
                                </div>
                            </div>
                            
                            <div class="cert-stamp-box">
                                <div class="cert-gold-stamp">
                                    <span class="stamp-text">ASTRA SURFACE SHIELD GUARANTEE</span>
                                </div>
                                <div class="stamp-center">
                                    <i class="fas fa-shield-check"></i>
                                </div>
                            </div>
                            
                            <div class="cert-signature">
                                <div style="height: 45px; display: flex; align-items: center; justify-content: center; font-family: 'Playfair Display', serif; font-style: italic; color: #d4af37; font-weight: bold; font-size: 16px;">
                                    Verified
                                </div>
                                <div class="signature-line">
                                    <strong>Surface Shield</strong>
                                    <span>Official Seal</span>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            
            <!-- Action Buttons on Screen -->
            <div class="cert-actions-row">
                <button type="button" class="btn-cert-action btn-print-pdf" id="btnPrintCert">
                    <i class="fal fa-print"></i> Print E-Warranty
                </button>
                <button type="button" class="btn-cert-action btn-search-again" id="btnSearchAgain">
                    <i class="fal fa-search-plus"></i> Search Again
                </button>
            </div>
            
        </div>

    </div>
</section>
<!--Download Section End-->

<!-- jQuery & AJAX Lookup Handlers -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const lookupForm = document.getElementById("warrantyLookupForm");
        const searchInput = document.getElementById("search_query");
        const searchBtn = document.getElementById("searchBtn");
        const errorMsg = document.getElementById("errorMessage");
        
        const certWrapper = document.getElementById("certWrapper");
        const certCard = document.querySelector(".certificate-card");
        
        // Fields in certificate
        const certName = document.getElementById("cert-name");
        const certService = document.getElementById("cert-service");
        const certDate = document.getElementById("cert-date");
        const certExpiry = document.getElementById("cert-expiry");
        const certInvoice = document.getElementById("cert-invoice");
        const certId = document.getElementById("cert-id");
        const certCity = document.getElementById("cert-city");

        // Format dates nicely
        function formatDate(dateString) {
            const options = { year: 'numeric', month: 'long', day: 'numeric' };
            const date = new Date(dateString);
            return date.toLocaleDateString('en-US', options);
        }

        // LocalStorage handler for lookups
        function performLookup(queryValue) {
            errorMsg.style.display = "none";
            
            searchBtn.disabled = true;
            searchBtn.innerHTML = "Looking up... <i class='fas fa-spinner fa-spin'></i>";

            // Simulating a premium fast search lookup delay
            setTimeout(() => {
                searchBtn.disabled = false;
                searchBtn.innerHTML = `Search Warranty <i class='fal fa-long-arrow-right'></i>`;
                
                const cleanQuery = queryValue.trim().toLowerCase();
                let warranties = JSON.parse(localStorage.getItem('warranties') || '[]');
                
                // Predefined fallback demo details so demo keywords work seamlessly
                const demoRecord = {
                    warranty_id: "SS-WAR-DEMO5",
                    name: "Vikram Aditya Sharma",
                    service_type: "Kitchen Marble Shield",
                    installation_date: "2026-05-15",
                    expiry_date: "2031-05-15",
                    invoice_no: "SS-INV-9904",
                    city: "Hyderabad"
                };
                
                let found = warranties.find(w => 
                    w.warranty_id.toLowerCase() === cleanQuery || 
                    (w.email && w.email.toLowerCase() === cleanQuery) || 
                    (w.phone && w.phone.replace(/[^0-9]/g, '') === cleanQuery.replace(/[^0-9]/g, '')) ||
                    w.phone === cleanQuery
                );
                
                // Fallback check for demo keywords
                if (!found && (cleanQuery === "ss-war-demo" || cleanQuery === "ss-war-demo5" || cleanQuery === "demo" || cleanQuery === "vikram")) {
                    found = demoRecord;
                }
                
                if (found) {
                    // Populate certificate fields
                    certName.textContent = found.name;
                    certService.textContent = found.service_type;
                    certDate.textContent = formatDate(found.installation_date);
                    certExpiry.textContent = formatDate(found.expiry_date);
                    certInvoice.textContent = found.invoice_no;
                    certId.textContent = found.warranty_id;
                    certCity.textContent = found.city || "Bengaluru";

                    // Hide lookup form wrapper on lookup success or slide cert in
                    document.querySelector(".search-card-container").style.display = "none";
                    certWrapper.style.display = "block";
                    
                    // Smooth transition/entrance
                    window.scrollTo({
                        top: certWrapper.offsetTop - 120,
                        behavior: "smooth"
                    });
                } else {
                    errorMsg.textContent = "No active warranty record found for: " + queryValue;
                    errorMsg.style.display = "block";
                    certWrapper.style.display = "none";
                }
            }, 600);
        }

        // Handle Form Submission
        lookupForm.addEventListener("submit", function(e) {
            e.preventDefault();
            const queryVal = searchInput.value.trim();
            if (queryVal !== "") {
                performLookup(queryVal);
            }
        });

        // Trigger on DOM load if query pre-filled
        if (searchInput.value.trim() !== "") {
            performLookup(searchInput.value.trim());
        }

        // Search again button
        document.getElementById("btnSearchAgain").addEventListener("click", function() {
            document.querySelector(".search-card-container").style.display = "block";
            certWrapper.style.display = "none";
            searchInput.value = "";
            searchInput.focus();
        });

        // Print button triggers window.print()
        document.getElementById("btnPrintCert").addEventListener("click", function() {
            window.print();
        });

        // Load Demo Certificate
        document.getElementById("btnLoadDemo").addEventListener("click", function() {
            // Populate standard premium demo details
            certName.textContent = "Vikram Aditya Sharma";
            certService.textContent = "Kitchen Marble Shield";
            certDate.textContent = formatDate("2026-05-15");
            certExpiry.textContent = formatDate("2031-05-15");
            certInvoice.textContent = "SS-INV-9904";
            certId.textContent = "SS-WAR-DEMO5";
            certCity.textContent = "Hyderabad";

            // Hide lookup card, show cert
            document.querySelector(".search-card-container").style.display = "none";
            certWrapper.style.display = "block";
            
            window.scrollTo({
                top: certWrapper.offsetTop - 120,
                behavior: "smooth"
            });
        });
    });
</script>

<?php include 'include/footer.php'; ?>
