<html>
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

        <style>
            body{
                background-color: #F2EDD7;
                font-family:'Times New Roman', Times, serif;
            }
            .img-size{
                height: 20px;
                width: 20px;
            }
            .dark-color{
                color: #755139;
            }
            .light-color{
                color: #F2EDD7;
            }
            .border-radius{
                border-radius: 40px;
            }
            .accordion-button:not(.collapsed){
                background-color: #F2EDD7;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="row mt-4 border-radius pb-4 pt-4" style="background-color: #755139;">
                <div class="col-sm-3 ps-4" style="border-right: 1px solid #F2EDD7;">
                    <div class="h3 light-color mb-3">Contact</div>
                    <div class="light-color mb-3">
                        <img src="brown icons/address.jpg" class="img-size"> Address:
                        <div class="ms-5">   
                            Grace Café <br>
                            Shop No. 3, Harmony Plaza, <br>
                            Willow Park Road, Dharampeth, <br>
                            Nagpur - 4400XX, <br>
                            Maharashtra
                        </div>
                    </div>
                    <div class="light-color mb-3">
                        <img src="brown icons/contact_icon.jpg" class="img-size" style="height: 18px; width: 18px;"> Contact: +91-9643812846
                    </div>
                    <div class="light-color mb-3">
                        <img src="brown icons/email_icon.jpg" class="img-size"> Email: gracecafe@gmail.com
                    </div>
                </div>
                <div class="col-sm-9 ps-4">
                    <div class="h3 light-color">Help</div>
                    <div class="accordion" id="faqAccordion">
                        <div class="accordion-item">
                            <div class="accordion-header">
                                <button class="accordion-button dark-color" data-bs-toggle="collapse" data-bs-target="#que1">
                                    What are your opening hours?
                                </button>
                            </div>
                            <div id="que1" class="accordion-collapse collapse" data-bs-parent="faqAccordion">
                                <div class="accordion-body dark-color">
                                    We're open daily from 9:00 AM to 10:00 PM.
                                </div>
                            </div> 
                        </div>

                        <div class="accordion-item">
                            <div class="accordion-header">
                                <button class="accordion-button dark-color" data-bs-toggle="collapse" data-bs-target="#que2">
                                    Do you offer takeaway and delivery?
                                </button>
                            </div>
                            <div id="que2" class="accordion-collapse collapse" data-bs-parent="faqAccordion">
                                <div class="accordion-body">
                                    Yes, we provide takeaway and selected delivery services.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <div class="accordion-header">
                                <button class="accordion-button dark-color" data-bs-toggle="collapse" data-bs-target="#que3">
                                    Do you have Wi-Fi available?
                                </button>
                            </div>
                            <div id="que3" class="accordion-collapse collapse" data-bs-parent="faqAccordion">
                                <div class="accordion-body">
                                    Yes, free Wi-Fi is available for all customers.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <div class="accordion-header">
                                <button class="accordion-button dark-color" data-bs-toggle="collapse" data-bs-target="#que4">
                                    What type of coffee beans do you use?
                                </button>
                            </div>
                            <div id="que4" class="accordion-collapse collapse" data-bs-parent="faqAccordion">
                                <div class="accordion-body">
                                    We use freshly roasted, premium Arabica beans.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <div class="accordion-header">
                                <button class="accordion-button dark-color" data-bs-toggle="collapse" data-bs-target="#que5">
                                    Is seating available for groups?
                                </button>
                            </div>
                            <div id="que5" class="accordion-collapse collapse" data-bs-parent="faqAccordion">
                                <div class="accordion-body">
                                    Yes, we have comfortable seating for small groups.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <div class="accordion-header">
                                <button class="accordion-button dark-color" data-bs-toggle="collapse" data-bs-target="#que6">
                                    Can I work or study at the café?
                                </button>
                            </div>
                            <div id="que6" class="accordion-collapse collapse" data-bs-parent="faqAccordion">
                                <div class="accordion-body">
                                    Absolutely—our space is work-friendly and quiet.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <div class="accordion-header">
                                <button class="accordion-button dark-color" data-bs-toggle="collapse" data-bs-target="#que7">
                                    Do you accept digital payments?
                                </button>
                            </div>
                            <div id="que7" class="accordion-collapse collapse" data-bs-parent="faqAccordion">
                                <div class="accordion-body">
                                    Yes, we accept UPI, cards, and cash.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>