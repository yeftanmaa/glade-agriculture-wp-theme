<?php
    /* Template Name: Services */
    get_header();
?>

    <main>
        <div class="services-custom-container container">
            <div class="columns">
                <div class="column is-two-thirds">
                    <h1 class="has-text-black has-text-weight-medium mb-4" style="font-size: 70px; line-height: 6rem;">Services to Support Cultivation Activities</h1>
                    
                    <p class="is-size-5 mb-5">We present innovative solutions to increasethe efficiency of agricultural businesses with services that support the development of farmers' cultivation technology.</p>

                    <div class="buttons-group is-flex is-gap-2">
                        <button class="custom-services-btn button is-size-5 is-rounded">Join Now</button>
                        <button class="custom-services-btn-secondary button btn-primary is-size-5 is-rounded">Contact Us</button>
                    </div>
                </div>

                <div class="column">
                    <div class="img-services-container">
                        <img src="http://localhost/wp_localhost/wp-content/uploads/2025/01/tractor-machine-from-top-1-768x576.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>

        <div class="partner-container container">
            <div class="columns is-vcentered">
                <div class="column is-two-thirds">
                    <h1 class="title-partner has-text-black mb-4">Why Should You Partner?</h1>
                </div>

                <div class="column">
                    <p class="subtext-partner mt-5 is-size-6">Gain a deeper understanding of the features offered by partner services according to your job role, so we can provide assistance tailored to your needs.</p>
                </div>
            </div>

            <div class="columns is-multiline mb-6">
                <div class="column is-6-desktop is-full-mobile">
                    <div class="custom-partner-box box is-shadowless is-radiusless">
                        <h1 class="is-size-3 has-text-black">Monitor Cultivation</h1>
                        <p class="is-size-5">Helps you digitally monitor the cultivation process according to SOP (Standard Operating Procedure) to easily maintain standard quality of production results.</p>
                    </div>
                </div>

                <div class="column is-6-desktop is-full-mobile">
                    <div class="custom-partner-box box is-shadowless is-radiusless">
                        <h1 class="is-size-3 has-text-black">Stock Supply Guarantee</h1>
                        <p class="is-size-5">Ensure that the availability of guaranteed supply stocks has been prepared to provide optimal support for your offtakers, farmers, breeders, fish farmers and cultivators.</p>
                    </div>
                </div>

                <div class="column is-6-desktop is-full-mobile">
                    <div class="custom-partner-box box is-shadowless is-radiusless">
                        <h1 class="is-size-3 has-text-black">Capital Assistance</h1>
                        <p class="is-size-5">We provide support in your capital process by compiling and recording detailed Financial Reports. By ensuring the accuracy and accuracy of your financial data.</p>
                    </div>
                </div>

                <div class="column is-6-desktop is-full-mobile">
                    <div class="custom-partner-box box is-shadowless is-radiusless">
                        <h1 class="is-size-3 has-text-black">Field Assistant</h1>
                        <p class="is-size-5">We will deploy field assistans in each region or region, who are equipped to support offtakers in carrying out various operational tasks and direct activities in the field.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="products-container container">
            <div class="columns is-vcentered is-gap-3">
                <div class="column is-two-thirds">
                    <span class="tag is-warning is-light is-size-5 px-4" style="background-color: #F4FCD3; border-radius: 50px;">Our Services</span>
                    <h1 class="title-products has-text-black mt-3 mb-4">Various Products Available at Glade Partner Services</h1>
                </div>

                <div class="column">
                    <p class="subtext-products mt-5 is-size-6">Learn more about the products available in the Agree Partner service for farmers, fishermen, livestock breeders and fish farmers.</p>
                </div>
            </div>

            <div class="columns">
                <div class="column">
                    <div>
                        <div class="img-partner-container">
                            <img src="http://localhost/wp_localhost/wp-content/uploads/2025/01/tractor-machine-from-top-1-768x576.jpg" alt="">
                        </div>

                        <h1 class="has-text-black mb-2">Company Dashboard</h1>

                        <p>Data visualization that provides key information about business performance to facilitate decision making and strategic planning.</p>

                        <div class="partner-custom-btn button is-outlined has-text-black px-5 py-3 mt-3">
                            Learn More
                            <span class="icon is-small is-left ml-2">
                                <i class="fas fa-arrow-right"></i>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="column">
                    <div>
                        <div class="img-partner-container">
                            <img src="http://localhost/wp_localhost/wp-content/uploads/2025/01/tractor-machine-from-top-1-768x576.jpg" alt="">
                        </div>

                        <h1 class="has-text-black mb-2">Agree Field Assistant</h1>
                        
                        <p>We provide an applicationthat Field Assistants can use to support cultivators and agribusiness companies in carrying out cultivation</p>

                        <div class="partner-custom-btn button is-outlined has-text-black px-5 py-3 mt-3">
                            Learn More
                            <span class="icon is-small is-left ml-2">
                                <i class="fas fa-arrow-right"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="register-partner-container container">
            <div class="columns is-vcentered is-gap-3 my-0">
                <div class="column is-two-thirds">
                    <h1 class="title-register-partner has-text-black mt-3 mb-4">How to Register for Agree Partner Services</h1>
                </div>

                <div class="column">
                    <p class="mt-5 is-size-6">Improve your agricultural business by signing up for a partnership with us.</p>
                </div>
            </div>

            <div class="columns my-0">
                <div class="column register-partner-column">
                    <h1 class="link-register-partner is-size-5" onclick="showDetails('agribusiness')" id="link-agribusiness">// Agribusiness Company</h1>

                    <h1 class="link-register-partner is-size-5" onclick="showDetails('cultivation')" id="link-cultivation">// Cultivation Actors</h1>
                    
                    <h1 class="link-register-partner is-size-5" onclick="showDetails('fieldassistant')"id="link-fieldassistant">// Field Assistant</h1>
                </div>

                <div class="register-partner-column column is-three-quarters">
                    <div class="agribusiness-company-detail" id="agribusiness">
                        <div class="block-register-partner-point p-5">
                            <div class="is-flex is-gap-2">
                                <h1 class="mt-0 mb-4 has-text-black">01</h1>
                                <div>
                                    <h1 class="mt-0 mb-4 has-text-black">Prepare Company Information</h1>
                                    <p class="is-size-5">Prepare company information documents such as Company Establishment Deed, KTP and NPWP.</p>
                                </div>
                            </div>
                        </div>
    
                        <div class="block-register-partner-point p-5">
                            <div class="is-flex is-gap-2">
                                <h1 class="mt-0 has-text-black">02</h1>
                                <div>
                                    <h1 class="mt-0 mb-4 has-text-black">Contact Us via WhatsApp</h1>
                                    <p class="is-size-5">Reach out to us through WhatsApp to inquire about our services, share your prepared documents, and get a personalized consultation.</p>
                                </div>
                            </div>
                        </div>
    
                        <div class="block-register-partner-point p-5">
                            <div class="is-flex is-gap-2">
                                <h1 class="mt-0 has-text-black">03</h1>
                                <div>
                                    <h1 class="mt-0 mb-4 has-text-black">Access Company Dashboard</h1>
                                    <p class="is-size-5">Once registered, log in to your company dashboard to manage cultivation processes, monitor performance, and view analytics.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cultivation-actors-detail" id="cultivation">
                        <div class="block-register-partner-point p-5">
                            <div class="is-flex is-gap-2">
                                <h1 class="mt-0 mb-4 has-text-black">01</h1>
                                <div>
                                    <h1 class="mt-0 mb-4 has-text-black">Register as an Actor</h1>
                                    <p class="is-size-5">Submit your personal identification (e.g., KTP or Passport) and a brief profile of your experience in cultivation.</p>
                                </div>
                            </div>
                        </div>
    
                        <div class="block-register-partner-point p-5">
                            <div class="is-flex is-gap-2">
                                <h1 class="mt-0 mb-4 has-text-black">02</h1>
                                <div>
                                    <h1 class=" mt-0 mb-4 has-text-black">Complete Training or Orientation</h1>
                                    <p class="is-size-5">Participate in an online or offline training session to understand standard cultivation practices and tools.</p>
                                </div>
                            </div>
                        </div>
    
                        <div class="block-register-partner-point p-5">
                            <div class="is-flex is-gap-2">
                                <h1 class="mt-0 mb-4 has-text-black">03</h1>
                                <div>
                                    <h1 class="mt-0 mb-4 has-text-black">Start Assignments</h1>
                                    <p class="is-size-5">Begin working on cultivation tasks based on your assigned role and area, while regularly updating progress through the mobile app or dashboard.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="field-assistant-detail" id="fieldassistant">
                        <div class="block-register-partner-point p-5">
                            <div class="is-flex is-gap-2">
                                <h1 class="mt-0 mb-4 has-text-black">01</h1>
                                <div>
                                    <h1 class="mt-0 mb-4 has-text-black">Apply for the Position</h1>
                                    <p class="is-size-5">Submit your application through our website, along with a resume and any relevant certifications in agriculture or field management.</p>
                                </div> 
                            </div>
                        </div>
    
                        <div class="block-register-partner-point p-5">
                            <div class="is-flex is-gap-2">
                                <h1 class="mt-0 mb-4 has-text-black">02</h1>
                                <div>
                                    <h1 class="mt-0 mb-4 has-text-black">Attend Onboarding Sessions</h1>
                                    <p class="is-size-5">Join onboarding sessions to familiarize yourself with the company's workflow, tools, and reporting systems.</p>
                                </div>
                            </div>
                        </div>
    
                        <div class="block-register-partner-point p-5">
                            <div class="is-flex is-gap-2">
                                <h1 class="mt-0 mb-4 has-text-black">03</h1>
                                <div>
                                    <h1 class="mt-0 mb-4 has-text-black">Track and Report Field Activities</h1>
                                    <p class="is-size-5">Use the mobile app to track assigned field activities, monitor cultivation progress, and report data directly to the company dashboard.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

<?php
    get_footer();
?>